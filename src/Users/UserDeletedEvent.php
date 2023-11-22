<?php

declare(strict_types=1);

namespace SharedEvents\Users;

final readonly class UserDeletedEvent implements EventInterface
{
    public function __construct(public string $userId, public ?string $reason)
    {
    }

    public static function getAlias(): string
    {
        return 'users.user_deleted';
    }
}