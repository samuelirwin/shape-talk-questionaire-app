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

                    <h2>SHAPE TALK QUESTIONAIRE</h2>
                    <p>This is a questionnaire that will help you in identifying your communication style.  The results will enable you to understand your preferred Shape style and how to communicate with people who have a different Shape preference to you. If you can learn to spot the differences and change your approach to suit another person’s preferences, then you are more likely to communicate more effectively across all four Shape styles.</p>
                    <p>There is no correct way to answer the questionnaire, all of the Shape preferences are equally important.</p>

                    <h3>INSTRUCTIONS</h3>
                    <p><strong>Complete the following two pages by selecting <u>one word on each line</u> that most describes you.</strong></p>
                    <p><strong>You must select only one word.</strong></p>


                    <p>Make sure that you understand all of the words. <strong>Complete Part A and Part B</strong>. Please complete the questionnaire honestly, there are no right or wrong answers, only your preference. Don’t take too much time over each question, look at the words and go for the answer that you think describes you the most.</p>
                    <p>Enjoy discovering your preferred shape! </p>
                    <a href="{{ route('page.evaluation-page-a') }}" class="btn btn-primary">Start SHAPE TALK QUESTIONAIRE</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
