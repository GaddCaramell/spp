<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    use HasFactory;
     // Set Tabel
     protected $table = "table_kelas";
    
     // Set Primary Key
     protected $primaryKey = "id_kelas";
     
     // Set Auto Increment
     public $incrementing = "false";
 
     // Set DataType primary key
    //  protected $keyType = 'string';
 
     // Setting kolom yang dapat diisi dengan massal
 
     protected $guarded=[];

     public function siswa(): HasMany
     {
        return $this->hasMany(Siswa::class,'id_siswa','id_siswa');
     }


}
