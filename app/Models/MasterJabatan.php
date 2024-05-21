<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterJabatan extends Model
{
    use HasFactory;
    protected $table = "master_jabatan";
    protected $fillable = ["id", "nama", "tingkat", "jenis"];
}
