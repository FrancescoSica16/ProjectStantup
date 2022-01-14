<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['bill_number','bill_attr_name','bill_attr_value'];
    protected $guarded = [];
}
