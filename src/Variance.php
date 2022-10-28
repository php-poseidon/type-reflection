<?php

declare(strict_types=1);

namespace Poseidon\TypeReflection;

/**
 * @psalm-immutable
 */
enum Variance
{
    case COVARIANT;
    case INVARIANT;
    case CONTRAVARIANT;
}
