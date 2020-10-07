<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Answer extends Model
{
    protected $fillable = [
        'text',
        'star',
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

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'likes')->withTimestamps();
    }
    
    public function isLikedBy(?User $user): bool
    {
        return $user
        ? (bool)$this->likes->where('id', $user->id)->count()
        : false;
    }

    public function getCountLikesAttribute(): int
    {
        return $this->likes->count();
    }
}
