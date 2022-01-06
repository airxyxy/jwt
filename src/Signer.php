<?php
declare(strict_types=1);

namespace Airxyxy\JWT;

use Airxyxy\JWT\Signer\CannotSignPayload;
use Airxyxy\JWT\Signer\Ecdsa\ConversionFailed;
use Airxyxy\JWT\Signer\InvalidKeyProvided;
use Airxyxy\JWT\Signer\Key;

interface Signer
{
    /**
     * Returns the algorithm id
     */
    public function algorithmId(): string;

    /**
     * Creates a hash for the given payload
     *
     * @throws CannotSignPayload  When payload signing fails.
     * @throws InvalidKeyProvided When issue key is invalid/incompatible.
     * @throws ConversionFailed   When signature could not be converted.
     */
    public function sign(string $payload, Key $key): string;

    /**
     * Returns if the expected hash matches with the data and key
     *
     * @throws InvalidKeyProvided When issue key is invalid/incompatible.
     * @throws ConversionFailed   When signature could not be converted.
     */
    public function verify(string $expected, string $payload, Key $key): bool;
}
