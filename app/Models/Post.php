<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where(fn($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('content', 'like', '%' . $search . '%')
                    ->orWhereHas('author', fn ($query) =>
                    $query->where('name', 'like', '%' . $search . '%')
            )
        ));

        $query->when($filters['author'] ?? false, fn($query, $author) =>
        $query->whereHas('author', fn ($query) =>
            $query->where('username', $author)
        )
    );

    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}