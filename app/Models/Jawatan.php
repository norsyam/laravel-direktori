<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jawatan extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $connection = 'mysql';
    protected $table = 'jawatan';
    protected $primaryKey = 'id';
}
