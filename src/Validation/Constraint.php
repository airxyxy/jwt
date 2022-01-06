<?php
declare(strict_types=1);

namespace Airxyxy\JWT\Validation;

use Airxyxy\JWT\Token;

interface Constraint
{
    /** @throws ConstraintViolation */
    public function assert(Token $token): void;
}
