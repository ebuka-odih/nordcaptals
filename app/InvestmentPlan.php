<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class InvestmentPlan extends Model
{
    //
    use Sluggable;
    use SluggableScopeHelpers;
    protected $guarded = [];
//    protected $appends = 'total_return';
//
//
//    public function total_return()
//    {
//        return $this->daily_interest * $this->term_days;
//    }


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }

    public function total_return()
    {

        return $this->daily_interest * $this->term_days;
    }
}


