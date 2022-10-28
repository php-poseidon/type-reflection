<?php

declare(strict_types=1);

namespace Poseidon\TypeReflection;

use Poseidon\Type\Scope\ClassS;
use Poseidon\Type\Scope\FunctionS;
use Poseidon\Type\Scope\MethodS;
use Poseidon\Type\Type;

interface FromStringTypeReflector
{
    public function reflectTypeFromString(string $type, null|FunctionS|ClassS|MethodS $scope = null): ?Type;
}
