<?php

namespace App\Http\Controllers;

use App\Models\StepOne;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;


class StepOneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $step = StepOne::find(1);

       // dd(step);
        return view('stepone.stepone',compact('step'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $step = StepOne::find(1);
        return view('stepone.stepone',compact('step'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = 1;
        //dd($id);
        //insert data
/*        $step = new StepOne;

        $step->business_name = $request->business_name;
        $step->business_owner = $request->business_owner;
        $step->business_address = $request->business_address;
        $step->business_contact = $request->business_contact;
        $step->business_logo = $request->business_logo;
        $step->business_concept = $request->business_concept;
        $step->financial_features = $request->financial_features;
        $step->financial_requirements = $request->financial_requirements;
        $step->current_business_position = $request->current_business_position;
        $step->major_achievements = $request->major_achievements;
        $step->general_overview = $request->general_overview;
        $step->type_of_legal_entity = $request->type_of_legal_entity;
        $step->significant_assets = $request->significant_assets;
        $step->mission_statement = $request->mission_statement;
        $step->ownership = $request->ownership;
        $step->company_strength = $request->company_strength;
        $step->industry_type = $request->industry_type;
        $step->opportunities = $request->opportunities;
        $step->industry = $request->industry;
        $step->market = $request->market;
        $step->business_focus = $request->business_focus;
        $step->business_success = $request->business_success;
        $step->business_unique = $request->business_unique;
        $step->customer_value = $request->customer_value;
        $step->value_proposition = $request->value_proposition;
        $step->revenue_source = $request->revenue_source;
        $step->major_costs = $request->major_costs;
        $step->business_profitability = $request->business_profitability;
        $step->business_investment = $request->business_investment;
        $step->criticial_success = $request->criticial_success;
        $step->founders_list = $request->founders_list;
        $step->manager_description = $request->manager_description;
        $step->investment_requirement = $request->investment_requirement;
        $step->organisation_chart = $request->organisation_chart;
        $step->product_service = $request->product_service;
        $step->target_market = $request->target_market;
        $step->customers_perception = $request->customers_perception;
        $step->operating_cyle = $request->operating_cyle;
        $step->neccesary_skills = $request->neccesary_skills;
        $step->outsource = $request->outsource;
        $step->cash_receipts = $request->cash_receipts;
        $step->pricing_strategy = $request->pricing_strategy;
        $step->sales_distribution = $request->sales_distribution;
        $step->promotion_strategy = $request->promotion_strategy;*/


         $data = array(
        'business_name' => $request->business_name,
        'business_owner' => $request->business_owner,
        'business_address' => $request->business_address,
        'business_contact' => $request->business_contact,
//        'business_logo' => $request->business_logo,
        'business_concept' => $request->business_concept,
        'financial_features' => $request->financial_features,
        'financial_requirements' => $request->financial_requirements,
        'current_business_position' => $request->current_business_position,
        'major_achievements' => $request->major_achievements,
        'general_overview' => $request->general_overview,
        'type_of_legal_entity' => $request->type_of_legal_entity,
        'significant_assets' => $request->significant_assets,
        'mission_statement' => $request->mission_statement,
        'ownership' => $request->ownership,
        'company_strength' => $request->company_strength,
        'industry_type' => $request->industry_type,
        'opportunities' => $request->opportunities,
        'industry' => $request->industry,
        'market' => $request->market,
        'business_focus' => $request->business_focus,
        'business_success' => $request->business_success,
        'business_unique' => $request->business_unique,
        'customer_value' => $request->customer_value,
        'value_proposition' => $request->value_proposition,
        'revenue_source' => $request->revenue_source,
        'major_costs' => $request->major_costs,
        'business_profitability' => $request->business_profitability,
        'business_investment' => $request->business_investment,
        'criticial_success' => $request->criticial_success,
        'founders_list' => $request->founders_list,
        'manager_description' => $request->manager_description,
        'investment_requirement' => $request->investment_requirement,
        'organisation_chart' => $request->organisation_chart,
        'product_service' => $request->product_service,
        'target_market' => $request->target_market,
        'customers_perception' => $request->customers_perception,
        'operating_cyle' => $request->operating_cyle,
        'neccesary_skills' => $request->neccesary_skills,
        'outsource' => $request->outsource,
        'cash_receipts' => $request->cash_receipts,
        'pricing_strategy' => $request->pricing_strategy,
        'sales_distribution' => $request->sales_distribution,
        'promotion_strategy' => $request->promotion_strategy,
         'user_id' => auth()->id(),
         );

        if ($image = $request->file('business_logo')) {
            $destinationPath = public_path().'/assets/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['business_logo'] = "$profileImage";
        }


        $result = DB::table('step_ones')->updateOrInsert(['id'=>$id],$data);
        // dd($result);

        //return  $result;

        return redirect()->route('business_plan_preview');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\StepOne $stepOne
     * @return \Illuminate\Http\Response
     */
    public function show(StepOne $stepOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\StepOne $stepOne
     * @return \Illuminate\Http\Response
     */
    public function edit(StepOne $stepOne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\StepOne $stepOne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StepOne $stepOne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\StepOne $stepOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(StepOne $stepOne)
    {
        //
    }

    public function d()
    {
        $plans = auth()->user()->stepones();

        return view('test');
    }


    // function to dsiplay business plan preview
     public function Business_plan_preview()
     {
         $data = auth()->user()->stepones[0];
         return view('stepone.Business_plan_preview',compact('data'));
     }

    public function business_plan_view()
    {
       // $steps = StepOne::find(1);

        $data = auth()->user()->stepones[0];

        //return $data[0]->business_name;
        $pdf = PDF::loadView('stepone.business_plan_preview',[
            'data' => $data
        ]);

        return $pdf->download('sample.pdf');
    }

   public function business_plan_view1()
    {
        $data = auth()->user()->stepones[0];
        return $data[0];
        return view('stepone.business_plan_view' ,compact('data'));
    }

    // Generate PDF
    public function createPDF() {
        // retreive all records from db

        $data = auth()->user()->stepones[0];

        //return $data[0]->business_name;
        $pdf = PDF::loadView('stepone.business_plan_preview',[
            'data' => $data
        ]);

        return $pdf->download('sample.pdf');
    }
}
