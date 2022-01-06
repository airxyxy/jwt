<?php
declare(strict_types=1);

namespace Airxyxy\JWT\Signer;

interface Key
{
    public function contents(): string;

    public function passphrase(): string;
}
