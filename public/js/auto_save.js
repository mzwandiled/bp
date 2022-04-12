$(document).ready(function(){
    var timer;
    var timeout = 3000; // timeout
   $('#business_name,#business_owner,#business_address,#business_contact,#business_concept,#financial_features,#financial_requirements,#current_business_position,#major_achievements,#general_overview,#type_of_legal_entity,#mission_statement,#significant_assets,#ownership,#company_strength,#industry_type,#opportunities,#industry,#market,#business_focus,#business_success,#business_unique,#customer_value,#value_proposition,#revenue_source,#major_costs,#business_profitability,#business_investment,#criticial_success,#founders_list,#manager_description,#investment_requirement,#organisation_chart,#product_service,#target_market,#customers_perception,#operating_cyle,#neccesary_skills,#outsource,#cash_receipts,#pricing_strategy,#sales_distribution,#promotion_strategy').keyup(function(){
       // if on focus  clear the time
       if(timer)
       {
           clearTimeout(timer);
       }

       timer = setTimeout(saveData,timeout);
   });

   $('#type_of_legal_entity,#industry_type').change(function(){

       if(timer)
       {
           clearTimeout(timer);
       }
       timer = setTimeout(saveData,timeout);
   });

   $('#next').click(function () {
       //saveData()
   })
});

function saveData() {

    var business_name = $('#business_name').val();
    var business_owner = $('#business_owner').val();
    var business_address = $('#business_address').val();
    var business_contact = $('#business_contact').val();
    var business_concept = $('#business_concept').val();
    var financial_features = $('#financial_features').val();
    var financial_requirements = $('#financial_requirements').val();
    var current_business_position = $('#current_business_position').val();
    var major_achievements = $('#major_achievements').val();
    var general_overview = $('#general_overview').val();
    var type_of_legal_entity = $('#type_of_legal_entity').val();
    var significant_assets = $('#significant_assets').val();
    var mission_statement = $('#mission_statement').val();
    var ownership = $('#ownership').val();
    var company_strength = $('#company_strength').val();
    var industry_type = $('#industry_type').val();
    var opportunities = $('#opportunities').val();
    var industry = $('#industry').val();
    var market = $('#market').val();
    var business_focus = $('#business_focus').val();
    var business_success = $('#business_success').val();
    var business_unique = $('#business_unique').val();
    var customer_value = $('#customer_value').val();
    var value_proposition = $('#value_proposition').val();
    var revenue_source = $('#revenue_source').val();
    var major_costs = $('#major_costs').val();
    var business_profitability = $('#business_profitability').val();
    var business_investment = $('#business_investment').val();
    var criticial_success = $('#criticial_success').val();
    var founders_list = $('#founders_list').val();
    var manager_description = $('#manager_description').val();
    var investment_requirement = $('#investment_requirement').val();
    var organisation_chart = $('#organisation_chart').val();
    var product_service = $('#product_service').val();
    var target_market = $('#target_market').val();
    var customers_perception = $('#customers_perception').val();
    var operating_cyle = $('#operating_cyle').val();
    var neccesary_skills = $('#neccesary_skills').val();
    var outsource = $('#outsource').val();
    var cash_receipts = $('#cash_receipts').val();
    var pricing_strategy = $('#pricing_strategy').val();
    var sales_distribution = $('#sales_distribution').val();
    var promotion_strategy = $('#promotion_strategy').val();

    if(business_name != '')
    {
        var token = $('meta[name="csrf-token"]').attr('content');
        //console.log(token);
        $.ajax({
           url: "/businessplan",
            type: 'post',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                business_name:business_name,
                business_owner:business_owner,
                business_address:business_address,
                business_contact:business_contact,
                business_concept:business_concept,
                financial_features:financial_features,
                financial_requirements:financial_requirements,
                current_business_position: current_business_position,
                major_achievements:major_achievements,
                general_overview:general_overview,
                type_of_legal_entity:type_of_legal_entity,
                significant_assets:significant_assets,
                mission_statement:mission_statement,
                ownership:ownership,
                company_strength:company_strength,
                industry_type:industry_type,
                opportunities:opportunities,
                industry:industry,
                market:market,
                business_focus:business_focus,
                business_success:business_success,
                business_unique:business_unique,
                customer_value:customer_value,
                value_proposition:value_proposition,
                revenue_source:revenue_source,
                major_costs:major_costs,
                business_profitability:business_profitability,
                business_investment:business_investment,
                criticial_success:criticial_success,
                founders_list:founders_list,
                manager_description:manager_description,
                investment_requirement:investment_requirement,
                organisation_chart:organisation_chart,
                product_service:product_service,
                target_market:target_market,
                customers_perception:customers_perception,
                operating_cyle:operating_cyle,
                neccesary_skills:neccesary_skills,
                outsource:outsource,
                cash_receipts:cash_receipts,
                pricing_strategy:pricing_strategy,
                sales_distribution:sales_distribution,
                promotion_strategy:promotion_strategy

            },
            success: function (data) {
               $('#autoSave').append(data.business_name);
            }
        });

    }

}

