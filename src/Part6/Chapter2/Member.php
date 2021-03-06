<?php

declare(strict_types=1);

namespace App\Part6\Chapter2;

class Member
{
    public function __construct(
        public readonly int $level,
        public readonly int $agility,
        public readonly int $magicAttack,
        public readonly int $vitality,
    ) {
    }
}
