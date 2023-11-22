<?php

declare(strict_types=1);

namespace SharedEvents\Users;

interface EventInterface
{
    public static function getAlias(): string;
}