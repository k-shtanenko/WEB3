<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Museum extends Model
{
    use SoftDeletes;

    protected $table = 'museums';

    protected $fillable = [
        'name',
        'description',
        'address',
        'link',
        'price',
        'image',
        'created_at',
        'updated_at',
        'deleated_at',
    ];

    public function getCreatedAtAttribute($value)
    {
        return date('Y-m-d H:i:s', strtotime($value));
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('Y-m-d H:i:s', strtotime($value));
    }
}