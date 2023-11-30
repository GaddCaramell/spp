<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Spp extends Model
{
    use HasFactory;

     // Set Tabel
     protected $table = "table_spp";
    
     // Set Primary Key
     protected $primaryKey = "id_spp";
     
     // Set Auto Increment
     public $incrementing = "false";
 
     // Set DataType primary key
    //  protected $keyType = 'string';
 
     // Setting kolom yang dapat diisi dengan massal
 
     protected $guarded=[];

     public function Siswa(): HasMany
     {
        return $this->hasMany(Siswa::class,'id_spp', 'id_spp');
     }
     public function Pembayaran(): HasMany
     {
      return $this->hasMany(Pembayaran::class,'id_pembayaran','id_pembayaran');
     }
}
