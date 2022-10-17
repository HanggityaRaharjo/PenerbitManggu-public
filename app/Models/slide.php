<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slide extends Model
{
    use HasFactory;
    protected $table = 'slides';
    protected $fillable = [
    	'photo'
    ];
     protected $hidden = [];
      public function users()
    {
    	return $this->belongsTo(user::class,'user_id','id');
    }
}
