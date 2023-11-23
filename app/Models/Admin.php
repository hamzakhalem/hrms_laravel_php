<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $fillable = ['name', 'email', 'username', 'password', 'added_by', 'updated_by', 'active', 'date', 'com_code', 'created_at', 'updated_at'];
}
