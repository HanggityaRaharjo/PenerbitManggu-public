<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'beritas';
    protected $fillable = [
    	'photo','judul','slug','deskripsi','user_id'
    ];
    protected $hidden = [];
    public function Users()
    {
    	return $this->belongsTo(User::class,'user_id','id');
    }
}
