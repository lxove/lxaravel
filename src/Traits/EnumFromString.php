<?php

namespace lxove\lxaravel\Traits;

use ValueError;

trait EnumFromString {
    /**
     * Returns an enum value if the string exactly matches an existing case for that Enum. Case sensitive.
     *
     * For non-backed Enums.
     */
    public static function from(string $str) {
        try {
            return collect(self::cases())
                ->firstOrFail(fn (self $case) => $case->name == $str);
        } catch (\Throwable $th) {
            throw new ValueError("Invalid enum value: $str");
        }
    }
}
