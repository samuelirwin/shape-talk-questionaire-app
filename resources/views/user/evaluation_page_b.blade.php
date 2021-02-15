@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Self-Evaluation Part B') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Complete Part B by selecting <u><strong>one word on each line</strong></u> that <strong>most</strong> describes you.</p>
                    <p>You must <u><strong>select only one word</strong></u>.  √</p>

                    <form action="{{ route('post.evaluation-part-b') }}" method="post">
                    @csrf
                        <table class="table table-borderless">
                            <tr>
                                <td>
                                    <table class="table">
                                        @foreach($datas['first_column'] as $data)
                                        <tr>
                                        <th>{{$loop->iteration}}.</th>
                                            <td scope="col">
                                                <input name="answers[]" type="checkbox" class="form-check-input" id="option-{{$data->choice_id}}" value="{{ $data->choice_id }}">
                                                <label class="form-check-label" for="option-{{ $data->choice_id }}">{{ $data->choice_option }}</label>
                                            </td>                                                                
                                        </tr>
                                        @endforeach
                                    </table>
                                </td>
                                <td>
                                    <table class="table">
                                        @foreach($datas['second_column'] as $data)
                                        <tr>
                                            <td>
                                                <input name="answers[]" type="checkbox" class="form-check-input" id="option-{{$data->choice_id}}" value="{{ $data->choice_id }}">
                                                <label class="form-check-label" for="option-{{ $data->choice_id }}">{{ $data->choice_option }}</label>
                                            </td>                                                                
                                        </tr>
                                        @endforeach
                                    </table>
                                </td>
                                <td>
                                    <table class="table">
                                        @foreach($datas['third_column'] as $data)
                                        <tr>
                                            <td>
                                                <input name="answers[]" type="checkbox" class="form-check-input" id="option-{{$data->choice_id}}" value="{{ $data->choice_id }}">
                                                <label class="form-check-label" for="option-{{ $data->choice_id }}">{{ $data->choice_option }}</label>
                                            </td>                                                                
                                        </tr>
                                        @endforeach
                                    </table>
                                </td>
                                <td>
                                    <table class="table">
                                        @foreach($datas['fourth_column'] as $data)
                                        <tr>
                                            <td>
                                                <input name="answers[]" type="checkbox" class="form-check-input" id="option-{{$data->choice_id}}" value="{{ $data->choice_id }}">
                                                <label class="form-check-label" for="option-{{ $data->choice_id }}">{{ $data->choice_option }}</label>
                                            </td>                                                                
                                        </tr>
                                        @endforeach
                                    </table>
                                </td>  
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-danger" onclick="clicked(event)">Get results</button>
                    <form>                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    function clicked(e)
    {
        if(!confirm('HIGH ALERT! Make sure you have selected an answer on each line. Once you click OK submitted, your answers cannot be modified!')) {
            e.preventDefault();
        }
    }
</script>
@endsection