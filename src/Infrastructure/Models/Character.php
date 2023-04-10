<?php

namespace OpenVTT\Infrastructure\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Character model
 *
 * @property-read int $id
 * @property string $uuid
 * @property string $name
 * @property Carbon $createdAt
 * @property Carbon $updatedAt
 */
class Character extends Model
{
    /**
     * Retrieve the belonging User
     *
     * @return BelongsTo owner of the character
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
