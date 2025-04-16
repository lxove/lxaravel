<?php

namespace lxove\lxaravel\Traits;

trait BetterEnum {

  use EnumFromString, EnumNames;

  public function serialize(): string | null {
    return $this->name;
  }
  
  public function unserialize(string $str) {
    return $this::fromString($str);
  }

  public function jsonSerialize(): mixed {
    return $this->serialize();
  }
}