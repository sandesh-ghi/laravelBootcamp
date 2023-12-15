<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrows extends Model
{
    use HasFactory;
    protected $table ='borrows';
    protected $fillable =['name','pageCount','point','author_id','type_id','student_id','book_id','taken_date','brought_date'];
}
