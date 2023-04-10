<?php

namespace OpenVTT\Infrastructure\Models;

use Carbon\Carbon;

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

}
