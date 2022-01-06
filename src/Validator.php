<?php
declare(strict_types=1);

namespace Airxyxy\JWT;

use Airxyxy\JWT\Validation\Constraint;
use Airxyxy\JWT\Validation\NoConstraintsGiven;
use Airxyxy\JWT\Validation\RequiredConstraintsViolated;

interface Validator
{
    /**
     * @throws RequiredConstraintsViolated
     * @throws NoConstraintsGiven
     */
    public function assert(Token $token, Constraint ...$constraints): void;

    /** @throws NoConstraintsGiven */
    public function validate(Token $token, Constraint ...$constraints): bool;
}
