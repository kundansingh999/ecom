<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_ip extends Model
{
    protected $fillable = ['ip_address'];
    protected $table = 'user_ip';
}
