<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'description',
        'expiration_date',
    ];

    protected $attributes = [
        'isActive' => true,
        'state' => 'unstarted'
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function logs()
    {
        return $this->hasMany(Log::class,'task_id');
    }
    public function getGetExcerptDescriptionAttribute()
    {
        return substr($this->description,0,20);     
    }

}
