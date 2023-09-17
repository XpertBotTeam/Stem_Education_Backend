<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
   
    protected $fillable = ['name','biography','photo','youtube_link'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
