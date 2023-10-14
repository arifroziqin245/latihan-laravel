<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // Yang boleh diisi
    // protected $fillable = ['title', 'excerpt', 'body'];
    
    // yang tidak boleh diisi
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];


    public function scopeFilter($query , array $filters)
    {
        // 'When' method itu akan dijalankan ketika first argumen bernilai true. kita ambil colectionnya trus kita jalanin
        //  null coalising operator '??' untuk meringkas ternary / isset
        
        // dari >>>    $query->when(isset($filters['search']) ? $filters['search'] : false)
        
        $query->when($filters['search'] ?? false, function ($query, $search){
            return $query->where('body', 'like', '%' .  $search . '%')
                         ->orWhere('title', 'like', '%' .  $search . '%');
        });

//  filter pencarian di dalam category coolback
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function($query) use($category){
                $query->where('slug', $category);
            });
        });

        

//  filter pencarian di dalam author dgn ero function
        $query->when($filters['author'] ?? false, fn ($query, $author)=>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );

    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

