<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dokter extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "dokter";

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable fields
    protected $fillable = [
        'nama',
        'kode_dokter',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
