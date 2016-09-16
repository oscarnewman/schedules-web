<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;

use App\Day;
use App\Schedule;
use App\Period;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SchedulesController extends Controller
{
    public function index(Request $request) {
        $day = Day::where('date', date('Y-m-d'))->first();

        if($day == NULL) {
            return $this->response->noContent();
        }

        return $this->response->item($day->schedule);
    }
}
