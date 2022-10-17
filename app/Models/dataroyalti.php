<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataroyalti extends Model
{
    use HasFactory;
     protected $primaryKey = 'id';
     protected $table = 'dataroyaltis';
     protected $fillable = [
    	'kode','judul','penulis','jenis','harga','stok','nilairoyalti','hutangroyalti','terjual','pengurangan','penambahan','saldoroyalti',
        'pphpenulis','adminbank','saldonet',
    ];
     protected $hidden = [];
    
     public function PengajuanRoyalti(){
        return $this->hasMany(PengajuanRoyalti::class);
     }
}
