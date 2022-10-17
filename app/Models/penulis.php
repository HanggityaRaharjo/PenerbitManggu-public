<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penulis extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'penuliss';
    protected $fillable = [
    	'photo','nama','deskripsi'
    ];
    protected $hidden = [];
      public function users()
    {
    	return $this->belongsTo(user::class,'user_id','id');
    }
}
