<?php
declare(strict_types=1);

namespace Airxyxy\JWT\Signer\Key;

use InvalidArgumentException;
use Airxyxy\JWT\Exception;
use Throwable;

final class FileCouldNotBeRead extends InvalidArgumentException implements Exception
{
    public static function onPath(string $path, ?Throwable $cause = null): self
    {
        return new self(
            'The path "' . $path . '" does not contain a valid key file',
            0,
            $cause
        );
    }
}
