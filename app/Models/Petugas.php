<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
