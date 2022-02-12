<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;


    // protected $fillable = [
    //     'user_id',
    //     'firstname',
    //     'middle',
    //     'lastname',
    //     'city',
    //     'address',
    //     'housenumber',
    //     'postalcode',
    //     'phonenumber',
    //     'dateofbirth',
    // ];

    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
