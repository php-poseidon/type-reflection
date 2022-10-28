<?php

declare(strict_types=1);

namespace Poseidon\TypeReflection;

use Poseidon\Type\MixedT;
use Poseidon\Type\Type;

/**
 * @psalm-immutable
 */
final class TemplateReflection
{
    public function __construct(
        public readonly string $name,
        public readonly Type $constraint = new MixedT(),
        public readonly Variance $variance = Variance::INVARIANT,
    ) {
    }
}
