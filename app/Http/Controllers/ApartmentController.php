<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function listApartment(){
        $apartment = Apartment::all();
        return view("home", [
            "apartments" => $apartment
        ]);
    }
}
