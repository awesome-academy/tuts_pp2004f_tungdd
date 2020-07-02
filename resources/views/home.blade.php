@extends('layout.master')
@section('title','Homepage')
@section('content')
    <div class="row banner">

        <div class="col-md-12">

            <h1 class="text-center mt-5 editContent">
                Learning Laravel 6
            </h1>

            <h3 class="text-center mt-2 editContent">Building Practical Applications</h3>

            <div class="text-center">
                <img src="https://learninglaravel.net/img/LearningLaravel5_cover7.png" width="302" height="391" alt="">
            </div>

        </div>

    </div>

    <script>
        $(document).ready(function () {
// This command is used to initialize some elements and make them work properly
            $.material.init();
        });
    </script>
@endsection
