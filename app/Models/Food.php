<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    // class name and table name may be different
    protected $table = 'foods';
    protected $primaryKey = 'id';
    protected $timetamps = true; //public
    // protected $dateFormat = 'h:m:s';
}
