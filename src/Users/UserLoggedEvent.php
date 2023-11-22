<?php

declare(strict_types=1);

namespace SharedEvents\Users;

final readonly class UserLoggedEvent implements EventInterface
{
    public function __construct(public string $userId)
    {
    }

    public static function getAlias(): string
    {
        return 'users.user_logged';
    }
}