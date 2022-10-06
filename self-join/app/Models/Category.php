<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
    ];

    public function parent(){
        return $this->belongsTo(\App\Models\Category::class,'category_id');
    }

    public function children(){
        return $this->hasMany(\App\Models\Category::class,'category_id');
    }

    public function childrenRecursive(){
        while ($this->children) {
            return $this->children()->with('childrenRecursive');
        }
        // return $this->children()->with('childrenRecursive');
    }
}
