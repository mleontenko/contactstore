<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $filable = ['name', 'email', 'phone'];
}
