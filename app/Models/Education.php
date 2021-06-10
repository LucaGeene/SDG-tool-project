<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function path()
    {
        return route('opleidingen.show', $this);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
