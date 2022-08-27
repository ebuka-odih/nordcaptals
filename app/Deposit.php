<?php

namespace App;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Deposit extends Model
{
    protected $guarded = [];
    protected $appends = ['end_date', 'total_earned', 'earning', 'trans'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function investment_plan()
    {
        return $this->belongsTo(InvestmentPlan::class, 'investment_plans_id');
    }
    public function getEndDateAttribute()
    {
        $date = Carbon::parse($this->approved_date);
        return $date->addDays($this->investment_plan->term_days - 1);
//        return $date + $this->investment_plan->term_days;
    }

    public function getEarningAttribute()
    {
        $expected_percent = $this->investment_plan->daily_interest  * $this->amount;
        $profit_percent =  number_format((float)$expected_percent / 100, 2, '.', '');

        $days = 0;

        $d_approved = Carbon::parse($this->approved_date);
        $d_ended = Carbon::parse($this->end_date);

        $current_date = Carbon::now();

        if($d_approved->diffInDays($current_date) < $this->investment_plan->term_days){
            $days = $d_approved->diffInDays($current_date);
        }else {
            $days =  $this->investment_plan->term_days;
        }

        $earned = 0;
        for ($i = 0; $i <= $days; $i++){
            $earned += $profit_percent;
        }
        return $earned;
    }

    public function getTotalEarnedAttribute(){
      return  $this->earning + $this->amount;

    }

    public function TotalEarned()
    {
        $total_profit = $this->earning;
        return $total_profit;
    }

    public function status()
    {
        if ($this->status == "pending"){
            return "<span class='badge badge-danger text text-uppercase'>Pending</span>";
        }elseif ($this->status == 'approved'){
            return "<span class='badge badge-success text text-uppercase'>Successful</span>";
        }else{
            return "<span class='badge badge-warning text text-uppercase'>Canceled</span>";
        }
    }

    public function getTransAttribute()
    {
        $trans_id = (string) Str::uuid();

        if (strlen($trans_id) >= 15) {
            return substr($trans_id, 0, 10). "#" . substr($trans_id, -5);
        }
        else {
            return "#".$trans_id;
        }
//        return "#".$trans_id;
    }

    public function total_earned(){
        return  $this->earning + $this->amount;

    }

    public function expected_profit()
    {
        $expected_profit = $this->investment_plan->total_return() * $this->amount;
        $profit =  number_format((float)$expected_profit / 100, 2, '.', '');
        return $profit;
    }

    public function ending_date()
    {
        $date = Carbon::parse($this->approved_date);
        return $date->addDays($this->investment_plan->term_days - 1);
//        return $date + $this->investment_plan->term_days;
    }


}
