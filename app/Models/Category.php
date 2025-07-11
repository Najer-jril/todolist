<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use hasFactory;
    protected $fillable = [
        'category_name',
        'user_id',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
