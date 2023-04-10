<?php

namespace OpenVTT\Infrastructure\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * User model
 *
 * @property-read int $id
 * @property string $uuid
 * @property string $username
 * @property string $email
 * @property Carbon|null $emailVerifiedAt
 * @property string $password
 * @property string $rememberToken
 * @property string $name
 * @property Carbon $createdAt
 * @property Carbon $updatedAt
 * @property Carbon $deletedAt
 */
class User extends Model
{
    /**
     * Retrieve characters of the user.
     *
     * @return HasMany characters of the user
     */
    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }
}
