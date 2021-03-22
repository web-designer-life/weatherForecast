<?php

namespace App\Http\Controllers;

use App\Models\Forecast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForecastController extends Controller
{
    /**
     * @return Collection
     */
    public function index()
    {
        $data = DB::table('forecasts')->paginate(10);
        return view('forecasts', ['data'=>$data]);
    }
}
