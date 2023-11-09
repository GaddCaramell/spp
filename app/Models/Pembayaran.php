<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
