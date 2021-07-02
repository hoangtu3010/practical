<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $table = "apartments";

    protected $fillable = [
        "name",
        "address",
        "price",
        "general_information",
        "detailed_information",
        "status",
        "image"
    ];

    public function getImage(){
        if ($this->image){
            return asset("upload/".$this->image);
        }
        return asset("upload/default.png");
    }
}
