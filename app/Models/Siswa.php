<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Siswa extends Model
{
    use HasFactory;

     // Set Tabel
     protected $table = "table_siswa";
    
     // Set Primary Key
     protected $primaryKey = "nisn";
     
     // Set Auto Increment
     public $incrementing = "false";
 
     // Set DataType primary key
     protected $keyType = 'string';
 
     // Setting kolom yang dapat diisi dengan massal
 
     protected $guarded=[];

    public function Pembayaran(): HasMany
    {
        return $this->hasMany(Pembayaran::class,'id_pembayaran','id_pembayaran');
    }

    public function Kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class ,'id_kelas','id_kelas');
    } 
    public function Spp(): BelongsTo
    {
        return $this->belongsTo(Spp::class, 'id_spp');
    }
}
