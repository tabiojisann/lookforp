<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Answer extends Model
{
    protected $fillable = [
        'text',
        'theme_id',
        'user_id',
    ];

    

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    public function theme(): BelongsTo
    {
        return $this->belongsTo('App\Theme');
    }
}
