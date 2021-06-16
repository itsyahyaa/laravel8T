<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps=false;

    // function to change first letter of name to capital
//     public function getAddressAttribute($value)
//     {
//         return $value. ', INDIA';
//     }

    public function setNameAttribute($value)
    {
        $this->attributes["name"]="Mr ".$value;
    }

    public function setAddressAttribute($value)
    {
        $this->attributes["address"]=$value." ,INDIA";
    }

 }
