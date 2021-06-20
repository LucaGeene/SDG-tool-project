<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function goal() {

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
