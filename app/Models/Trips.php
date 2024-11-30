<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    protected $fillable = [
       'Trip_Name',
       'Trip_Date',
       'Number_of_seats',
       'price',
       'Description',
       'Destination_Image'
    ];
    protected $table = '_trips';
}
