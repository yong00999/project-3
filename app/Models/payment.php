<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $filltable=["amount","creditCard","paymentStatus"];

    public function payment(){
        return $this->belongTo("App\models\myOrder");
    }
}
