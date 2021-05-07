<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlansController extends Controller
{
    public function getPlans(){
        $plans = Plan::all();
        return response()->json(['plans' => $plans]);
    }
}
