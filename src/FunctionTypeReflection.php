<?php

declare(strict_types=1);

namespace Poseidon\TypeReflection;

use Poseidon\Type\Type;

/**
 * @psalm-immutable
 */
final class FunctionTypeReflection
{
    /**
     * @param array<string, Type>       $parameterTypes
     * @param ?list<TemplateReflection> $templates
     */
    public function __construct(
        public readonly array $parameterTypes = [],
        public readonly ?Type $returnType = null,
        public readonly ?array $templates = null,
    ) {
    }
}
