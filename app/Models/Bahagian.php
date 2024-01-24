<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bahagian extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $connection = 'mysql';
    protected $table = 'bahagian';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_bahagian'
    ];
}
