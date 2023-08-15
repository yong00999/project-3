<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=['name','productID','description','quantity','price','image','categoryID','downloadLink','status'];

    public function category(){

        return $this->belongsTo('App\Models\category');
    }

}