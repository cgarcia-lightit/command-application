<?php

namespace CommandApp\Cinema\Commands\Shared\Model;

abstract class Printable
{

    public function __toString(): string
    {
        return json_encode($this->toArray(), JSON_PRETTY_PRINT);
    }

    abstract function toArray(): array;
}
