<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonitoringPond extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pond(){
        return $this->belongsTo(Pond::class);
    }
}
