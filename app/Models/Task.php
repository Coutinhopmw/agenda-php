<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\category;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'is_done',
        'description',
        'due_date',
        'user_id',
        'category_id'
    ];

    public function user(){
        return $this->belongsTo( User::class);
    }

    public function Category(){
        return $this->belongsTo(Category::class);
    }

}
