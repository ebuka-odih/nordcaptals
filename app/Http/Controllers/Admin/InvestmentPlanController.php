<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\InvestmentPlan;
use Illuminate\Http\Request;

class InvestmentPlanController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $invest_plans = InvestmentPlan::all();
        return view('admin.investment_plans', compact('invest_plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add_invest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $this->getData($request);
        InvestmentPlan::create($data);
        return redirect()->route('investment-plans.index')
            ->with('success_message', 'Investment Plan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InvestmentPlan  $investmentPlan
     * @return \Illuminate\Http\Response
     */
    public function show(InvestmentPlan $investmentPlan)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $investplan = InvestmentPlan::findOrFail($id);
        return view('admin.edit-investplan', compact('investplan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $investplan = InvestmentPlan::findOrfail($id);
        $request->validate([
            'name' => 'nullable',
            'daily_interest' => 'required',
            'term_days' => 'required',
            'min_deposit' => 'required',
            'max_deposit' => 'required',
            'deposit_return' => 'required',
        ]);

        $investplan->update($request->all());
        return redirect()->route('investment-plans.index')
            ->with('success', 'Investment Plan Updated successfully');
    }


    public function destroy($id)
    {
        $investplan = InvestmentPlan::findOrFail($id);
        $investplan->delete();
        return redirect()->back()
            ->with('success_destroy', 'Investment Plan deleted successfully');
    }

    protected function getData(Request $request){
        $rules = [
            'name' => 'required',
            'daily_interest' => 'required',
            'term_days' => 'required',
            'min_deposit' => 'required',
            'max_deposit' => 'required',
            'deposit_return' => 'required',
        ];
        return $request->validate($rules);
    }
}
