<?php

namespace App\Http\Controllers;

use App\InvestmentPlan;
use App\Withdraw;
use Illuminate\Http\Request;

class AbstractController extends Controller
{
    public function homepage()
    {
        $invest_plans = InvestmentPlan::all();
        $withdrawal = Withdraw::all()->random(1);
//        $withdrawal = Withdraw::shuffle()->get();
        return view('pages.index', compact('invest_plans', 'withdrawal'));
    }

    public function terms()
    {
        return view('front.terms');
    }




}
