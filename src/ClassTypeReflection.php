<?php

declare(strict_types=1);

namespace Poseidon\TypeReflection;

use Poseidon\Type\Type;

/**
 * @psalm-immutable
 */
final class ClassTypeReflection
{
    /**
     * @param array<string, Type>                   $propertyTypes
     * @param array<string, FunctionTypeReflection> $methods
     * @param ?list<TemplateReflection>             $templates
     */
    public function __construct(
        public readonly array $propertyTypes = [],
        public readonly array $methods = [],
        public readonly ?array $templates = null,
    ) {
    }
}
