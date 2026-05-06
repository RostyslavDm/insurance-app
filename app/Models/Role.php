<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name', 'is_active', 'active_from', 'active_until'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_roles')
                    ->withPivot('assigned_at', 'revoked_at')
                    ->withTimestamps();
    }
}