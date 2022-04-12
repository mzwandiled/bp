@extends('layouts.main')

@section('content')
    <div id="form_container">
        <div class="row no-gutters">
            <div class="col-lg-4">
                <div id="left_form">
{{--                    <figure><img src="{{asset('assets/img/logo.png')}}" alt="" width="100" height="100"></figure>--}}
                    <h2>{{!empty($step->business_name)? $step->business_name: ''}}<span>Business Plan Tool</span></h2>
                    <p>Write a business plan online.</p>
                    <p id="autoSave"></p>
                    <!-- <a href="" class="btn_1 rounded yellow purchase" target="_parent" id="auto_save">Learn More </a>  -->
                    <a href="#wizard_container" class="btn_1 rounded mobile_btn yellow">Start Now!</a>
                    <!--<a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i class="pe-7s-info"></i></a>-->
                </div>
            </div>
            <div class="col-lg-8">
                <div id="wizard_container">
                    <div id="top-wizard">
                    <div id="progressbar"></div>
                    <span id="location"></span>
                    </div>
                    <!-- /top-wizard -->
                    <form id="wrapped" method="post" action="{{route('businessplan.store')}}" enctype="multipart/form-data">
                        @csrf
                        <input id="website" name="website" type="text" value="">
                        <!-- Leave for security protection, read docs for details -->
                        <div id="middle-wizard">
                        <!--step 1-->
                    <div class="step">
                    <h3 class="main_question"><i ></i>Online Business Plan Tool</h3>
                    <div class="form-group add_top_30">
                        <label for="business_name" class="form-label">Business Name </label>
                    <input name="business_name" id="business_name"  class="form-control"  type="text" value="{{!empty($step->business_name)? $step->business_name: ''}}" placeholder="Please enter  business name " >
                    </div>
                    <div class="form-group">
                        <label for="business_owner" class="form-label">Business Owner </label>
                    <input name="business_owner" id="business_owner"   type="text"class="form-control" value="{{!empty($step->business_owner)? $step->business_owner: ''}}" placeholder=" Please enter the name of the business owner" >

                    </div>
                    <div class="form-group">
                        <label for="business_address" class="form-label">Business Address</label>
                    <textarea name="business_address" id="business_address" cols="66" rows="6"  class="form-control address" placeholder="Enter Business Address" >
                    {{!empty($step->business_address)? $step->business_address: ''}}
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="business_contact" class="form-label">Business Contact</label>
                    <input name="business_contact" id="business_contact"  type="tel"  class="form-control" value="{{!empty($step->business_contact)? $step->business_contact: ''}}" placeholder=" Please enter the contact number  of the business owner" >
                    </div>
                    <div class="form-group">
                    <label for="business_logo" class="form-label">Please upload your logo here </label>
                    <input class="form-control" type="file" id="business_logo" name="business_logo"/>
                    </div>
                    <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                    </div>
                    </div>
                    <!-- /row-->
                    </div>
                    <!--step 1.1-->
                    <div class="step">
                    <h3 class="main_question"><i ></i>Executive Summary (0/1)</h3>
                    <div class="form-group add_top_30">
                        <label for="business_concept" class="form-label">Business Concept</label>
                    <textarea name="business_concept" id="business_concept" cols="66" rows="6"  placeholder=" Business Concept" >
                    {{!empty($step->business_concept)? $step->business_concept: ''}}
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="financial_features" class="form-label">Financial Features</label>
                    <textarea name="financial_features" id="financial_features" cols="66" rows="6"   placeholder=" Financial Features" >
                    {{!empty($step->financial_features)? $step->financial_features: ''}}
                    </textarea>

                    </div>
                    <div class="form-group">
                        <label for="financial_requirements" class="form-label">Financial Requirements</label>
                    <textarea name="financial_requirements" id="financial_requirements" cols="66" rows="6"    placeholder=" Financial Requirements" >
                        {{!empty($step->financial_requirements)? $step->financial_requirements: ''}}
                    </textarea>
                    </div>

                    <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                    </div>
                    </div>
                    <!-- /row-->
                    </div>
                    <!--step 2 -->
                    <div class="step">
                    <h3 class="main_question"><i></i>Executive Summary (1/1)</h3>
                    <div class="form-group">
                        <label for="current_business_position" class="form-label">Current Business Position</label>
                    <textarea name="current_business_position" id="current_business_position" cols="66" rows="9" placeholder=" Current Business Position" >
                       {{!empty($step->current_business_position)? $step->current_business_position: ''}}
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="major_achievements" class="form-label">Major Achievements</label>
                    <textarea name="major_achievements" id="major_achievements" cols="66" rows="9" placeholder=" Major Achievements" >
                        {{!empty($step->major_achievements)? $step->major_achievements: 'Major Achievements'}}
                    </textarea>
                    </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                    <div class="form-group radio_input">

                    </div>
                    </div>
                    </div>
                    <!-- /row-->
                    </div>
                    <!-- /step-->

                    <!--step 3 -->
                    <div class="step">
                    <h3 class="main_question"><i></i>General Company Description (0/1)</h3>

                    <div class="form-group add_top_30">
                        <label for="general_overview">General overview of the company</label>
                    <textarea name="general_overview" id="general_overview" cols="66" rows=6 placeholder="General overview of the company " >
                         {{!empty($step->general_overview)? $step->general_overview: ''}}
                    </textarea>
                    </div>
                    <div class="form-group">
                    <label for="type_of_legal_entity">Type of legal Entity</label>
                    <select name="type_of_legal_entity" id="type_of_legal_entity" class="form-control ">
                    <option value="Sole Proprietorship">Sole Proprietorship</option>
                    <option value="Partnership">Partnership</option>
                    <option value="Pty Ltd - Proprietary limited company">Pty Ltd - Proprietary limited company</option>
                    </select>

                    </div>
                    <div class="form-group ">
                    <label for="significant_assets">Significant Assets</label>
                    <textarea name="significant_assets" id="significant_assets" cols="66" rows="6" placeholder="Significant Assets " >
                        {{!empty($step->significant_assets)? $step->significant_assets: ''}}
                    </textarea>
                    </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                    </div>
                    </div>
                    <!-- /row-->
                    </div>
                    <!-- /step-->

                    <!--step 4 -->
                    <div class="step">
                    <h3 class="main_question"><i></i>General Company Description (1/1)</h3>
                    <div class="form-group ">
                        <label for="mission_statement">Mission Statement</label>
                    <textarea name="mission_statement" id="mission_statement" cols="66" rows="4" placeholder="Mission Statement" >
                         {{!empty($step->mission_statement)? $step->mission_statement: ''}}
                    </textarea>
                    </div>

                    <div class="form-group ">
                        <label for="ownership">Ownership</label>
                    <textarea name="ownership" id="ownership" cols="66" rows="4" placeholder="ownership " >
                        {{!empty($step->ownership)? $step->ownership: ''}}
                    </textarea>
                    </div>
                    <div class="form-group ">
                        <label for="company_strength">Company Strengths and Core Competencies</label>
                    <textarea name="company_strength" id="company_strength" cols="66" rows="4" placeholder="Company Strengths and core competencies" >
                          {{!empty($step->company_strength)? $step->company_strength: ''}}
                    </textarea>
                    </div>
                    <div class="form-group">
                    <label for="industry_type">Industry Type</label>
                    <select name="industry_type" id="industry_type" class="form-control">
                    <option value="Business Services">Business Services </option>
                    <option value="Construction ">Construction </option>
                    <option value="Electricity, Gas & Water">Electricity, Gas & Water </option>
                    <option value="Engineering">Engineering </option>
                    <option value="Financial Services">Financial Services </option>
                    <option value="Insurance">Insurance </option>
                    <option value="IT & Telecommunications">IT & Telecommunications </option>
                    <option value="Media & Advertising">Media & Advertising  </option>
                    <option value="Medical & Health Services">Medical & Health Services   </option>
                    <option value="Mining">Mining/option>
                    <option value="Oil & Gas Services">Oil & Gas Services</option>
                    <option value="Personal Services">Personal Services</option>
                    <option value="Property Services & Real Estate">Property Services & Real Estate</option>
                    <option value="Property Services & Real Estate">Property Services & Real Estate</option>
                    <option value="Transport & Logistics ">Transport & Logistics </option>
                    <option value="Waste Management">Waste Management</option>
                    </select>

                    </div>

                    <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                    </div>
                    </div>
                    <!-- /row-->
                    </div>
                    <!-- /step-->

                    <!--step 5 -->
                    <div class="step">
                    <h3 class="main_question"><i></i>The Opportunity,Industry & Market</h3>
                    <div class="form-group ">
                    <textarea name="opportunities" id="opportunities" cols="66" rows="4" placeholder="Describe the opportunites">
                        {{!empty($step->opportunities)? $step->opportunities: ''}}
                    </textarea>
                    </div>

                    <div class="form-group ">
                    <textarea name="industry" id="industry" cols="66" rows="4" placeholder="Describe the industry" >
                         {{!empty($step->industry)? $step->industry: ''}}
                    </textarea>
                    </div>
                    <div class="form-group ">
                    <textarea name="market" id="market" cols="66" rows="4" placeholder="Describe the market " >
                        {{!empty($step->market)? $step->market: ''}}
                    </textarea>
                    </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                    </div>
                    </div>
                    <!-- /row-->
                    </div>
                    <!-- /step-->
                    <!--step 6 -->
                    <div class="step">
                    <h3 class="main_question"><i></i>What is your Strategy (0/1)?</h3>
                    <div class="form-group ">
                    <textarea name="business_focus" id="business_focus" cols="66" rows="4" placeholder="What is the focus of the business: broad mass market or a specific niche?" >
                      {{!empty($step->business_focus)? $step->business_focus: ''}}
                    </textarea>
                    </div>

                    <div class="form-group ">
                    <textarea name="business_success" id="business_success" cols="66" rows="4" placeholder="How will the business succeed in the market?" >
                        {{!empty($step->business_success)? $step->business_success: ''}}
                    </textarea>
                    </div>
                    <div class="form-group ">
                    <textarea name="business_unique" id="business_unique" cols="66" rows="4" placeholder="What is unique about the business?  " >
                         {{!empty($step->business_unique)? $step->business_unique: ''}}
                    </textarea>
                    </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                    </div>
                    </div>
                    <!-- /row-->
                    </div>
                    <!-- /step-->
                    <!--step 7 (1/1) -->
                    <div class="step">
                    <h3 class="main_question"><i></i>What is your Strategy (1/1)?</h3>
                    <div class="form-group ">
                    <label for="name">What is the value of the customers ? </label>
                    <input type="text" name="customer_value" id="customer_value"  value="{{!empty($step->customer_value)? $step->customer_value: ''}}" class="form-control required" >
                    </div>

                    <div class="form-group ">
                    <textarea name="value_proposition" id="value_proposition" cols="66" rows="8" placeholder="Describe the value proposition for the customer?" >
                        {{!empty($step->value_proposition)? $step->value_proposition: ''}}
                    </textarea>
                    </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                    </div>
                    </div>
                    <!-- /row-->
                    </div>
                    <!-- /step-->
                    <!--step 8 (0/1) -->
                    <div class="step">
                    <h3 class="main_question"><i></i>Describe Your Business Model ?</h3>
                    <div class="form-group ">
                    <label for="name">What is the source of revenue ? </label>
                    <input type="text" name="revenue_source" id="revenue_source" value="{{!empty($step->revenue_source)? $step->revenue_source: ''}}" class="form-control required"  >
                    </div>

                    <div class="form-group ">
                    <textarea name="major_costs" id="major_costs" cols="66" rows="3" class="form-control" placeholder="What are the major costs involved in generating the revenue ?" >
                          {{!empty($step->major_costs)? $step->major_costs: ''}}
                    </textarea>
                    </div>
                    <div class="form-group ">
                    <textarea name="business_profitability" id="business_profitability" cols="66" class="form-control" rows="3" placeholder=" The profitability of the business (revenue less costs)" >
                         {{!empty($step->business_profitability)? $step->business_profitability: ''}}
                    </textarea>
                    </div>
                    <div class="form-group ">
                    <textarea name="business_investment" id="business_investment" cols="66" class="form-control"  rows="3" placeholder="The investment required to get the business up and running (to get to scale)" >
                         {{!empty($step->business_investment)? $step->business_investment: ''}}
                    </textarea>
                    </div>
                    <div class="form-group ">
                    <textarea name="criticial_success" id="criticial_success" cols="66" class="form-control" rows="3" placeholder="The critical success factors and assumptions for making the profit model work" >
                       {{!empty($step->criticial_success)? $step->criticial_success: ''}}
                    </textarea>
                    </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                    </div>
                    </div>
                    <!-- /row-->
                    </div>
                    <!-- /step-->

                    <!--step 9 (0/1) -->
                    <div class="step">
                    <h3 class="main_question"><i></i>Team Management  and Organisation</h3>
                    <div class="form-group ">
                    <textarea name="founders_list" id="founders_list" cols="66" rows="3" class="form-control" placeholder="list the founders including their qualifications and experience" >
                         {{!empty($step->founders_list)? $step->founders_list: ''}}
                    </textarea>
                    </div>
                    <div class="form-group ">
                    <textarea name="manager_description" id="manager_description" cols="66" class="form-control" rows="3" placeholder=" Description of who will manage the business on a day-to-day basis." >
                         {{!empty($step->manager_description)? $step->manager_description: ''}}
                    </textarea>
                    </div>
                    <div class="form-group ">
                    <textarea name="investment_requirement" id="investment_requirement" cols="66" class="form-control"  rows="3" placeholder="The investment required to get the business up and running (to get to scale)" >
                        {{!empty($step->investment_requirement)? $step->investment_requirement: ''}}
                    </textarea>
                    </div>
                    <div class="form-group ">
                    <textarea name="organisation_chart" id="organisation_chart" cols="66" class="form-control" rows="3" placeholder=" 	An organisational chart if you have more than 10 employees, showing the management hierarchy and responsibility for key functions" >
                         {{!empty($step->organisation_chart)? $step->organisation_chart: ''}}
                    </textarea>
                    </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                    </div>
                    </div>
                    <!-- /row-->
                    </div>
                    <!-- /step-->


                    <!--step 10 (0/1) -->
                    <div class="step">
                    <h3 class="main_question"><i></i>Marketing Plan</h3>
                    <div class="form-group ">
                    <textarea name="product_service" id="product_service" cols="66" rows="3" class="form-control" placeholder=" The product (or service) and why it is valuable to customers" >
                         {{!empty($step->product_service)? $step->product_service: ''}}
                    </textarea>
                    </div>
                    <div class="form-group ">
                    <textarea name="target_market" id="target_market" cols="66" class="form-control" rows="3" placeholder="The focused and detailed description of the target market" >
                         {{!empty($step->target_market)? $step->target_market: ''}}
                    </textarea>
                    </div>
                    <div class="form-group ">
                    <textarea name="customers_perception" id="customers_perception" cols="66" class="form-control"  rows="3" placeholder="The positioning of the product or service – how it should be perceived by customers" >
                         {{!empty($step->customers_perception)? $step->customers_perception: ''}}
                    </textarea>
                    </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                    </div>
                    </div>
                    <!-- /row-->
                    </div>
                    <!-- /step-->

                    <!--step 11 (1/1) -->
                    <div class="step">
                    <h3 class="main_question"><i></i>Operational Plan</h3>
                    <div class="form-group ">
                    <textarea name="operating_cyle" id="operating_cyle" cols="66" rows="3" class="form-control" placeholder=" 	A description of the operating cycle that describes what the organisation will do to deliver its service or create and sell its product" >
                        {{!empty($step->operating_cyle)? $step->operating_cyle: ''}}
                    </textarea>
                    </div>
                    <div class="form-group ">
                    <textarea name="neccesary_skills" id="neccesary_skills" cols="66" class="form-control" rows="3" placeholder="A description of where all the necessary skills and materials will be sourced" >
                            {{!empty($step->neccesary_skills)? $step->neccesary_skills: ''}}
                    </textarea>
                    </div>
                    <div class="form-group ">
                    <textarea name="outsource" id="outsource" cols="66" class="form-control"  rows="3" placeholder="What will be outsourced, what relationships are in place and how those relationships will be managed">
                        {{!empty($step->outsource)? $step->outsource: ''}}
                    </textarea>
                    </div>
                    <div class="form-group ">
                    <textarea name="cash_receipts" id="cash_receipts" cols="66" class="form-control"  rows="3" placeholder="The cash receipts and cash payment cycle of the business" >
                        {{!empty($step->cash_receipts)? $step->cash_receipts: ''}}
                    </textarea>
                    </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                    </div>
                    </div>
                    <!-- /row-->
                    </div>
                    <!-- /step-->

                    <!--step 11  -->
                    <div class="step">
                    <h3 class="main_question"><i></i>Financial  Plan</h3>
                    <div class="form-group ">
                    <label for="financial_statement" class="form-label">Please upload your financial statements  for processing...</label>
                    <input class="form-control" type="file" id="financial_statement"/>
                    </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                    </div>
                    </div>
                    <!-- /row-->
                    </div>
                    <!-- /step-->
                    <!end -->
                    <div class="submit step" id="end">
                    <div class="summary">
                    <div class="wrapper">
                    <h3>Thank your for your time to create your business plan with us<br><span id="name_field"></span>!</h3>
                    <p>Please accept our terms  and conditions to download your business plan <strong id="email_field"></strong> or abort the process if you dont agree with our terms and conditions</p>
                    </div>
                    <div class="text-center">
                    <div class="form-group terms">
                    <label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a> before Submit
                    <input type="checkbox" name="terms" value="Yes" class="required">
                    <span class="checkmark"></span>
                    </label>
                    </div>
                    </div>
                    </div>
                    </div>
                    <!-- /step last-->

                    </div>
                    <!-- /middle-wizard -->
                    <div id="bottom-wizard">
                    <button type="button" name="backward" class="backward">Prev</button>
                    <button type="button" name="forward" class="forward" id="next">Next</button>
                    <button type="submit" name="process" class="submit">Submit</button>
                    </div>
                    <!-- /bottom-wizard -->
                    </form>
                </div>
                <!-- /Wizard container -->
            </div>
        </div><!-- /Row -->
    </div><!-- /Form_container -->
@endsection
