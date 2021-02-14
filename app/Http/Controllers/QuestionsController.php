<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;

use App\Choice;
use App\User;
use App\Question;
use App\Score;
use App\Result;

use App\Evaluation;
use App\Group;

use DB;

class QuestionsController extends Controller
{
    public function evaluationPageA()
    {        
        $first_column = DB::table('evaluations')        
                ->join('groups', 'groups.id', '=', 'evaluations.group_id')
                ->join('choices', 'choices.id', '=', 'evaluations.choice_id')
                ->select('groups.id as group_id', 'choices.id as choice_id', 'choices.option as choice_option')
                ->where(['evaluations.meta' => 1, 'group_id' => 1])
                ->get();

        $second_column = DB::table('evaluations')        
                ->join('groups', 'groups.id', '=', 'evaluations.group_id')
                ->join('choices', 'choices.id', '=', 'evaluations.choice_id')
                ->select('groups.id as group_id', 'choices.id as choice_id', 'choices.option as choice_option')
                ->where(['evaluations.meta' => 2, 'group_id' => 1])
                ->get();

        $third_column = DB::table('evaluations')        
                ->join('groups', 'groups.id', '=', 'evaluations.group_id')
                ->join('choices', 'choices.id', '=', 'evaluations.choice_id')
                ->select('groups.id as group_id', 'choices.id as choice_id', 'choices.option as choice_option')
                ->where(['evaluations.meta' => 3, 'group_id' => 1])
                ->get();

        $fourth_column = DB::table('evaluations')        
                ->join('groups', 'groups.id', '=', 'evaluations.group_id')
                ->join('choices', 'choices.id', '=', 'evaluations.choice_id')
                ->select('groups.id as group_id', 'choices.id as choice_id', 'choices.option as choice_option')
                ->where(['evaluations.meta' => 4, 'group_id' => 1])
                ->get();

        $datas = [
            'first_column' => $first_column,
            'second_column' => $second_column,
            'third_column' => $third_column,
            'fourth_column' => $fourth_column
        ];

        return view('user.evaluation_page_a')->with(['datas' => $datas]);
    }

    public function evaluationPageB()
    {
        $first_column = DB::table('evaluations')        
                ->join('groups', 'groups.id', '=', 'evaluations.group_id')
                ->join('choices', 'choices.id', '=', 'evaluations.choice_id')
                ->select('groups.id as group_id', 'choices.id as choice_id', 'choices.option as choice_option')
                ->where(['evaluations.meta' => 1, 'group_id' => 2])
                ->get();

        $second_column = DB::table('evaluations')        
                ->join('groups', 'groups.id', '=', 'evaluations.group_id')
                ->join('choices', 'choices.id', '=', 'evaluations.choice_id')
                ->select('groups.id as group_id', 'choices.id as choice_id', 'choices.option as choice_option')
                ->where(['evaluations.meta' => 2, 'group_id' => 2])
                ->get();

        $third_column = DB::table('evaluations')        
                ->join('groups', 'groups.id', '=', 'evaluations.group_id')
                ->join('choices', 'choices.id', '=', 'evaluations.choice_id')
                ->select('groups.id as group_id', 'choices.id as choice_id', 'choices.option as choice_option')
                ->where(['evaluations.meta' => 3, 'group_id' => 2])
                ->get();

        $fourth_column = DB::table('evaluations')        
                ->join('groups', 'groups.id', '=', 'evaluations.group_id')
                ->join('choices', 'choices.id', '=', 'evaluations.choice_id')
                ->select('groups.id as group_id', 'choices.id as choice_id', 'choices.option as choice_option')
                ->where(['evaluations.meta' => 4, 'group_id' => 2])
                ->get();

        $datas = [
            'first_column' => $first_column,
            'second_column' => $second_column,
            'third_column' => $third_column,
            'fourth_column' => $fourth_column
        ];

        return view('user.evaluation_page_b')->with(['datas' => $datas]);
    }

    public function storeSelfEvalPartAData(Request $request)
    {
        if (Result::where(['user_id' => auth()->user()->id, 'is_completed' => 1])->first() === NULL)
        {
            foreach ($request->answers as $response)
            {
                $score = new Score();            
                $score->user_id = auth()->user()->id;
                $score->choice_id = $response;
                $score->total = 1;
                $score->save();
            }

            return redirect()->route('page.evaluation-page-b');
        }        

        return redirect()->route('home')->with('status', 'You have completed the questionaires.');
    }

    public function storeSelfEvalPartBData(Request $request)
    {

        if (Result::where(['user_id' => auth()->user()->id, 'is_completed' => 1])->first() === NULL)
        {
            foreach ($request->answers as $response)
            {            
                $score = new Score();            
                $score->user_id = auth()->user()->id;
                $score->choice_id = $response;
                $score->total = 1;
                $score->save();
            }

            return redirect()->route('user.results');
        }

        return redirect()->route('home')->with('status', 'You have completed the questionaires.');
    }

    public function userResults()  
    {
        $user_choice_ids = DB::table('scores')->where('user_id', auth()->user()->id)->pluck('choice_id');

        // PART A
        $user_pa_triangle_result = DB::table('scores')
                                    ->join('scorings', 'scorings.choice_id', '=', 'scores.choice_id')
                                    ->whereIn('scorings.choice_id', $user_choice_ids)
                                    ->where('scorings.question_id', '=', 1)
                                    ->where('scorings.group_id', '=', 3)
                                    ->where('user_id', '=', auth()->user()->id)
                                    ->sum('scores.total');

        $user_pa_squiggle_result = DB::table('scores')
                                    ->join('scorings', 'scorings.choice_id', '=', 'scores.choice_id')
                                    ->whereIn('scorings.choice_id', $user_choice_ids)
                                    ->where('scorings.question_id', '=', 2)
                                    ->where('scorings.group_id', '=', 3)
                                    ->where('user_id', '=', auth()->user()->id)
                                    ->sum('scores.total');

        $user_pa_box_result = DB::table('scores')
                                    ->join('scorings', 'scorings.choice_id', '=', 'scores.choice_id')
                                    ->whereIn('scorings.choice_id', $user_choice_ids)
                                    ->where('scorings.question_id', '=', 3)
                                    ->where('scorings.group_id', '=', 3)
                                    ->where('user_id', '=', auth()->user()->id)
                                    ->sum('scores.total');

        $user_pa_circle_result = DB::table('scores')
                                    ->join('scorings', 'scorings.choice_id', '=', 'scores.choice_id')
                                    ->whereIn('scorings.choice_id', $user_choice_ids)
                                    ->where('scorings.question_id', '=', 4)
                                    ->where('scorings.group_id', '=', 3)
                                    ->where('user_id', '=', auth()->user()->id)
                                    ->sum('scores.total');

        // PART B
        $user_pb_triangle_result = DB::table('scores')
                                    ->join('scorings', 'scorings.choice_id', '=', 'scores.choice_id')
                                    ->whereIn('scorings.choice_id', $user_choice_ids)
                                    ->where('scorings.question_id', '=', 1)
                                    ->where('scorings.group_id', '=', 4)
                                    ->where('user_id', '=', auth()->user()->id)
                                    ->sum('scores.total');

        $user_pb_squiggle_result = DB::table('scores')
                                    ->join('scorings', 'scorings.choice_id', '=', 'scores.choice_id')
                                    ->whereIn('scorings.choice_id', $user_choice_ids)
                                    ->where('scorings.question_id', '=', 2)
                                    ->where('scorings.group_id', '=', 4)
                                    ->where('user_id', '=', auth()->user()->id)
                                    ->sum('scores.total');

        $user_pb_box_result = DB::table('scores')
                                    ->join('scorings', 'scorings.choice_id', '=', 'scores.choice_id')
                                    ->whereIn('scorings.choice_id', $user_choice_ids)
                                    ->where('scorings.question_id', '=', 3)
                                    ->where('scorings.group_id', '=', 4)
                                    ->where('user_id', '=', auth()->user()->id)
                                    ->sum('scores.total');

        $user_pb_circle_result = DB::table('scores')
                                    ->join('scorings', 'scorings.choice_id', '=', 'scores.choice_id')
                                    ->whereIn('scorings.choice_id', $user_choice_ids)
                                    ->where('scorings.question_id', '=', 4)
                                    ->where('scorings.group_id', '=', 4)
                                    ->where('user_id', '=', auth()->user()->id)
                                    ->sum('scores.total');

        $user_result = [
            'part_a' => [
                'triangle' => $user_pa_triangle_result,
                'squiggle' => $user_pa_squiggle_result,
                'box' => $user_pa_box_result,
                'circle' => $user_pa_circle_result,
            ],
            'part_b' => [
                'triangle' => $user_pb_triangle_result,
                'squiggle' => $user_pb_squiggle_result,
                'box' => $user_pb_box_result,
                'circle' => $user_pb_circle_result,
            ],
            'total_part_a_and_b' => [
                'triangle' => $user_pa_triangle_result + $user_pb_triangle_result,
                'squiggle' => $user_pa_squiggle_result + $user_pb_squiggle_result,
                'box' => $user_pa_box_result + $user_pb_box_result,
                'circle' =>  $user_pa_circle_result +  $user_pb_circle_result,
            ]
        ];

        if (Result::where('user_id', auth()->user()->id)->first() === null) 
        {
            // save into results table
            $result = new Result;
            $result->user_id = auth()->user()->id;
            $result->triangle_total_score = $user_result['total_part_a_and_b']['triangle'];        
            $result->box_total_score = $user_result['total_part_a_and_b']['squiggle'];   
            $result->squiggle_total_score = $user_result['total_part_a_and_b']['box'];
            $result->circle_total_score = $user_result['total_part_a_and_b']['circle'];
            $result->is_completed = 1; // true
            $result->save();

            $user_scores_to_sheets = 
            [
                [
                    auth()->user()->name, 
                    $result->triangle_total_score,                
                    $result->squiggle_total_score,
                    $result->box_total_score,
                    $result->circle_total_score
                ]
            ];

            // Save into Google Sheets
            Sheets::spreadsheet(config('sheets.post_spreadsheet_id'))
                  ->sheet(config('sheets.post_sheet_id'))
                  ->append($user_scores_to_sheets);
        }
                
        return view('user.results')->with('user_result', $user_result);    }
}
