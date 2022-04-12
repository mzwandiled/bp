<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bp.css')}}">
    <title>Business Plan Tool</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="container text-center sea-first_section">
            <a href="{{route('downloadpdf')}}" class="btn btn-outline-info mt-5">download  business plan </a>
            <h1 class="text-center my-5">Business Plan</h1>
            <h3>Business Name :  {{$data->business_name}} </h3>
            <h3>Name Of Business Owner :  {{$data->business_owner}} </h3>
            <h3>Business Address :  {{$data->business_address}} </h3>
            <h3>Contact Numbers :  {{$data->business_contact}} </h3>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <h2 class="">1.Executive Summary</h2>
            <h3 class="">Business Concept</h3>
            <p>{{$data->business_concept}}</p>
            <hr>
            <h3 class="">Financial Features</h3>
            <p>{{$data->financial_features}}</p>
            <hr>
            <h3 class="">Financial Requirements</h3>
            <p>{{$data->financial_requirements}}</p>
            <hr>
            <h3 class="">Current Business Position</h3>
            <p>{{$data->current_business_position}}</p>
            <hr>
            <h3 class="">Major Achievements </h3>
            <p>{{$data->major_achievements}}</p>
        </div>

{{--        General Company Description--}}
        <div class="container">
            <h2 class="">1. General Company Description</h2>
            <h3 class="">Name of the Company</h3>
            <p>{{$data->business_name}}</p>

            <hr>
            <h3 class="">Type of legal  entity</h3>
            <p>{{$data->type_of_legal_entity}}</p>
            <hr>
            <h3 class="">Type of Ownership</h3>
            <p>{{$data->ownership}}</p>

            <hr>
            <h3 class="">Significant Assets</h3>
            <p>{{$data->significant_assets}}</p>

            <hr>
            <h3 class="">Mission Statement</h3>
            <p>{{$data->major_achievements}}</p>

            <hr>
            <h3 class="">Goals  and  Objectives </h3>
            <p>{{$data->general_overview}}</p>

            <hr>
            <h3 class=""> Company strengths and core competencies</h3>
            <p>{{$data->company_strength}}</p>



        </div>
{{--        //General Company Description--}}





    </div>

</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
