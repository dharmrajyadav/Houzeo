<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    protected $table = 'userdetails';
    protected $fillable = ['Street_Address','City','State','Zip','Property_Type'];
}
