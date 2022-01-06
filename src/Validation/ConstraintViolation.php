<?php
declare(strict_types=1);

namespace Airxyxy\JWT\Validation;

use Airxyxy\JWT\Exception;
use RuntimeException;

final class ConstraintViolation extends RuntimeException implements Exception
{
}
