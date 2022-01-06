<?php
/**
 * This file is part of Airxyxy\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Airxyxy\JWT\Signer;

use Airxyxy\JWT\Signature;
use Airxyxy\JWT\Signer;

/**
 * Base class for signers
 *
 * @author Luís Otávio Cobucci Oblonczyk <Airxyxy@gmail.com>
 * @since 0.1.0
 */
abstract class BaseSigner implements Signer
{
    /**
     * {@inheritdoc}
     */
    public function modifyHeader(array &$headers)
    {
        $headers['typ'] = 'JWS';
        $headers['alg'] = $this->getAlgorithmId();
    }

    /**
     * {@inheritdoc}
     */
    public function sign($payload, $key)
    {
        return new Signature($this, $this->createHash($payload, $key));
    }

    /**
     * Creates a hash with the given data
     *
     * @param string $payload
     * @param string|resource $key
     *
     * @return string
     */
    abstract public function createHash($payload, $key);
}
