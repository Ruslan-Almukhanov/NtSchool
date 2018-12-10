<?php
namespace NtSchool\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}