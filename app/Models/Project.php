<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function goal()
    {
        return $this->belongsToMany(Goal::class);
    }

    public function education()
    {
        return $this->belongsToMany(Education::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

}
