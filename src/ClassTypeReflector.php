<?php

declare(strict_types=1);

namespace Poseidon\TypeReflection;

interface ClassTypeReflector
{
    /**
     * @param class-string $class
     */
    public function reflectClassTypes(string $class): ClassTypeReflection;
}
