<?php

declare(strict_types=1);

namespace Poseidon\TypeReflection;

interface FunctionTypeReflector
{
    /**
     * @param callable-string $function
     */
    public function reflectFunctionTypes(string $function): FunctionTypeReflection;
}
