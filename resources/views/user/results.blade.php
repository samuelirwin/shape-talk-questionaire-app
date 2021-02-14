@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1> Congratulations!</h1>
                    <p>You've completed the SHAPE TALK QUESTIONAIRE. Check your score below.</p>

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th style="text-align:center" scope="col"><img src="{{asset('/images/triangle.png')}}" alt=""> Triangle</th>
                                <th style="text-align:center" scope="col"><img src="{{asset('/images/squiggle.png')}}" alt=""> Squiggle</th>
                                <th style="text-align:center" scope="col"><img src="{{asset('/images/box.png')}}" alt=""> Box</th>
                                <th style="text-align:center" scope="col"><img src="{{asset('/images/circle.png')}}" alt=""> Circle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Part A</th>
                                <td style="text-align:center">{{$user_result['part_a']['triangle']}}</td>
                                <td style="text-align:center">{{$user_result['part_a']['squiggle']}}</td>
                                <td style="text-align:center">{{$user_result['part_a']['box']}}</td>                                
                                <td style="text-align:center">{{$user_result['part_a']['circle']}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Part B</th>
                                <td style="text-align:center">{{$user_result['part_b']['triangle']}}</td>
                                <td style="text-align:center">{{$user_result['part_b']['squiggle']}}</td>
                                <td style="text-align:center">{{$user_result['part_b']['box']}}</td>
                                <td style="text-align:center">{{$user_result['part_b']['circle']}}</td>
                            </tr>
                            <tr>
                                <td scope="row">Total Score</td>
                                <td style="text-align:center"><strong>{{$user_result['total_part_a_and_b']['triangle']}}</strong></td>
                                <td style="text-align:center"><strong>{{$user_result['total_part_a_and_b']['squiggle']}}</strong></td>
                                <td style="text-align:center"><strong>{{$user_result['total_part_a_and_b']['box']}}</strong></td>
                                <td style="text-align:center"><strong>{{$user_result['total_part_a_and_b']['circle']}}</strong></td>
                            </tr>
                        </tbody>
                    </table>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
