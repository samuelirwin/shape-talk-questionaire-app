<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;

use App\Question;
use App\Choice;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }

    public function adminHome()
    {
        // $values = Sheets::spreadsheet('1XNMF4pBEz_slP2-EnMqFhrZ_VyUyoysHM0NiRRndZK4')->sheet('DataSheet')->all();

        $rows = Sheets::spreadsheet('1XNMF4pBEz_slP2-EnMqFhrZ_VyUyoysHM0NiRRndZK4')->sheet('DataSheet')->get();
        $header = $rows->pull(0);
        $values = Sheets::collection($header, $rows);

        return view('admin.home')->with('values', $values);
    }
}
