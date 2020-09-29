<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Theme extends Model
{
    protected $fillable = [
        'title',
        'image',
        'apply',

    ];

    public function admin(): BelongsTo
    {
        return $this->belongsTo('App\Admin');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    public function answer(): hasMany
    {
        return $this->hasMany('App\Answer');
    }


}

