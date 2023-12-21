<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table='books';
    protected  $primaryKey='book_id';
    protected $fallible =['name','pageCount','point','author_id','type_id'];
}
