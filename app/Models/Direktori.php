<?php

namespace App\Models;

use App\Models\Jawatan;
use App\Models\Bahagian;
use App\Models\Personel;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Direktori extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Searchable;
    protected $connection = 'mysql';
    protected $table = 'direktori';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_personel',
        'id_bahagian',
        'id_jawatan'
    ];

    public function personel()
    {
        return $this->belongsTo(Personel::class, 'id_personel', 'id');
    }

    public function bahagian()
    {
        return $this->belongsTo(Bahagian::class, 'id_bahagian', 'id');
    }

    public function jawatan()
    {
        return $this->belongsTo(Jawatan::class, 'id_jawatan', 'id');
    }

    public function toSearchableArray()
    {
        return [
            'personel.nama' => '',
            'personel.no_kp' => '',
        ];
    }

    // protected function makeAllSearchableUsing(Builder $query): Builder
    // {
    //     return $query->with('personel');
    // }

}

