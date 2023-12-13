<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $table='libraries';

    use HasFactory;
    protected $fillable = ['stu_id','book','due_date','status'];
}
