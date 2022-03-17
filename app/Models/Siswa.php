<?php

namespace App\Models;

use App\Models\Kela;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    public function Kela()
    {
        // return $this->belongsTo('App\Models\Kelas');
              return $this->belongsTo('App\Models\Kela');
    }
}
