<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
    public function survey(){
        return view("survey.survey");
    }

    public function submit(Request $request){
        try {
            DB::table("survey")->insert([
                "name"=>$request->get("name"),
                "email"=>$request->get("email"),
                "tel"=>$request->get("tel"),
                "comment"=>$request->get("comment")
            ]);
        }catch (\Exception $e){
            abort(404);
        }
        return "Success";
    }
}
