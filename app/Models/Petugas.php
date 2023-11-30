<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Petugas extends Model
{
    use HasFactory;
     // Set Tabel
     protected $table = "table_petugas";
    
     // Set Primary Key
     protected $primaryKey = "id_petugas";
     
     // Set Auto Increment
     public $incrementing = "false";
 
     // Set DataType primary key
    //  protected $keyType = 'string';
 
     // Setting kolom yang dapat diisi dengan massal
 
     protected $guarded=[];

     public function Pembayaran(): HasMany
     {
        return $this->hasMany(Petugas::class,'id_pembayaran','id_pembayaran');
     }

}
