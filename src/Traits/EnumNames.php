<?php

namespace lxove\lxaravel\Traits;

trait EnumNames {
    public static function names(): array {
        return collect(self::cases())->map(
            fn (self $case) => $case->name
        )->toArray();
    }
}
