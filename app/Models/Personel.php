<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personel extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Searchable;
    protected $connection = 'mysql';
    protected $table = 'personel';
    protected $primaryKey = 'id';

    public function toSearchableArray()
    {
        return [
            'nama' => '',
            'no_kp' => '',
        ];
    }
}
