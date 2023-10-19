<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    public $fillable= [
        'users_id',
        'title',
        'body',
        'categories_id'
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class, "categories_id");
    }
}
