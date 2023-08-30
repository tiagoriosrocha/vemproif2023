<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use \App\Models\User;

class Estande extends Model
{
    use HasFactory;
    protected $table = "estandes";

    public function visitantes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'estande_user', 'estande_id', 'user_id')->withTimestamps();
    }
}
