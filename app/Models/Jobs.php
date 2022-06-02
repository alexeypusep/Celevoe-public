<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    public function organizations()
    {
        return $this->belongsTo(Organizacii::class, 'id_org', 'id_org');
    }

    public function directs()
    {
        return $this->belongsTo(Direct::class, 'id_direct', 'id_direct');
    }
}
