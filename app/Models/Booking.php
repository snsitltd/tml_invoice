<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'tbl_booking1';

    public function loads(){
        return $this->hasMany(BookingLoad::class,'BookingID','BookingID');
    }
}
