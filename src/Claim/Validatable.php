<?php
/**
 * This file is part of Airxyxy\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Airxyxy\JWT\Claim;

use Airxyxy\JWT\ValidationData;

/**
 * Basic interface for validatable token claims
 *
 * @author Luís Otávio Cobucci Oblonczyk <Airxyxy@gmail.com>
 * @since 2.0.0
 */
interface Validatable
{
    /**
     * Returns if claim is valid according with given data
     *
     * @param ValidationData $data
     *
     * @return boolean
     */
    public function validate(ValidationData $data);
}
