<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'content' => 'required|string|max:20',
    );

}
