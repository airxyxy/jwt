<?php
declare(strict_types=1);

namespace Airxyxy\JWT;

use Airxyxy\JWT\Encoding\CannotDecodeContent;
use Airxyxy\JWT\Token\InvalidTokenStructure;
use Airxyxy\JWT\Token\UnsupportedHeaderFound;

interface Parser
{
    /**
     * Parses the JWT and returns a token
     *
     * @throws CannotDecodeContent      When something goes wrong while decoding.
     * @throws InvalidTokenStructure    When token string structure is invalid.
     * @throws UnsupportedHeaderFound   When parsed token has an unsupported header.
     */
    public function parse(string $jwt): Token;
}
