<?php

namespace lxove\lxaravel\Traits;

trait EnumNames {
    public static function names(): array {
        return self::casesToStringArray(self::cases());
    }

    public static function casesToStringArray(array $cases): array {
        return collect($cases)
            ->map(fn (self $case) => $case->name)
            ->toArray();
    }
    public static function casesToIntArray(array $cases): array {
        return collect($cases)
            ->map(fn (self $case) => $case->value)
            ->toArray();
    }
}
