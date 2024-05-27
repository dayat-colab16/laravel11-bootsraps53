<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran_model extends Model
{
    protected $fillable = ['id_pelajaran', 'nama_pelajaran'];
    protected $table = 'pelajaran';
}
