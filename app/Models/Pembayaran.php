<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pembayaran extends Model
{
    use HasFactory;
     // Set Tabel
     protected $table = "table_pembayaran";
    
     // Set Primary Key
     protected $primaryKey = "id_pembayaran";
     
     // Set Auto Increment
     public $incrementing = "false";
 
     // Set DataType primary key
    //  protected $keyType = 'string';
 
     // Setting kolom yang dapat diisi dengan massal
 
     protected $guarded=[];

     public function Petugas(): BelongsTo
     {
        return $this->belongsTo(Petugas::class,'id_petugas','id_petugas');
     }

     public function Spp(): BelongsTo
     {
        return $this->belongsTo(Spp::class,'id_spp','id_spp');
     }

     public function Siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class,'nisn','nisn');
    }
}
