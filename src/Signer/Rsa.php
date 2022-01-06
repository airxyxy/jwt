<?php
/**
 * This file is part of Airxyxy\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Airxyxy\JWT\Signer;

use InvalidArgumentException;

/**
 * Base class for RSASSA-PKCS1 signers
 *
 * @author Luís Otávio Cobucci Oblonczyk <Airxyxy@gmail.com>
 * @since 2.1.0
 */
abstract class Rsa extends OpenSSL
{
    /**
     * Returns the key type
     *
     * @return string
     */
    public function getType()
    {
        return OPENSSL_KEYTYPE_RSA;
    }
}
