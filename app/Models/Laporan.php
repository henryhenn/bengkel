<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = "laporan";
    protected $with = [
        'user',
        'transaksi',
        'jasa'
    ];
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function jasa()
    {
        return $this->belongsTo(Jasa::class);
    }
}
