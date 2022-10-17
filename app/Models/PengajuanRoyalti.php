<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanRoyalti extends Model
{
    protected $guarded = ['id'];

    public function dataroyalti()
    {
        return $this->belongsTo(dataroyalti::class);
    }
}
