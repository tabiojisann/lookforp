<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use cebe\markdown\Markdown as Markdown;

class Article extends Model
{

    protected $fillable = [
        'title',
        'text',
        'position',
        'style',
        'image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
      
    

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    public function keeps(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'keeps')->withTimestamps();    
    }

    public function isKeep(?User $user): bool
    {
        return $user
        ? (bool)$this->keeps->where('id', $user->id)->count()
        : false;
    }

    public function getCountKeepsAttribute(): int
    {
        return $this->keeps->count();
    }

    public function parse()
    {
        $parser = new Markdown();
        
        return $parser->parse($this->text);
    }

    public function getMarkBodyAttribute() {
        return $this->parse();
    }

}

