<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable =[
        'level_kamar_id',
        'nomor_kamar',
        'status',

    ];

    public function levelkamar()
    {
        return $this->belongsTo(LevelKamar::class);
    }
    public function reservasikamar()
    {
        return $this->hasmany(ReservasiKamar::class);
    }
}
