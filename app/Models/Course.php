<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function material()
    {
        return $this->hasMany(Material::class);
    }

    public function shortDesc()
    {
        return Str::words(strip_tags($this->description), 10);
    }
}
