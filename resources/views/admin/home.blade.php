@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th style="text-align:center" scope="col">Triangle Score</th>
                                <th style="text-align:center" scope="col">Squiggle Score</th>
                                <th style="text-align:center" scope="col">Box Score</th>
                                <th style="text-align:center" scope="col">Circle Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach($values as $value)
                                <th scope="row">{{$loop->iteration}}.</th>
                                <td>{{ data_get($value, 'name') }}</td>
                                <td style="text-align:center">{{ data_get($value, 'triangle_score') }}</td>
                                <td style="text-align:center">{{ data_get($value, 'squiggle_score') }}</td>
                                <td style="text-align:center">{{ data_get($value, 'box_score') }}</td>
                                <td style="text-align:center">{{ data_get($value, 'circle_score') }}</td>
                            @endforeach
                            </tr>                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
