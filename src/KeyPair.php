<?php

/*
 * This file is part of ssx/php-ssh-keypair
 *
 *  (c) Scott Robinson <scott@dor.ky>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace SSX\SSH;

use phpseclib\Crypt\RSA;

/**
 * Class KeyPair
 * @package SSX\SSH
 */
class KeyPair
{

    /**
     * @var
     */
    private $public_key;
    /**
     * @var
     */
    private $private_key;

    /**
     * Generate a new KeyPair constructor.
     * @param int $bits
     */
    public function __construct($bits = 4096)
    {
        $rsa = new RSA();
        $rsa->setPublicKeyFormat(RSA::PUBLIC_FORMAT_OPENSSH);
        $rsa->setPrivateKeyFormat(RSA::PRIVATE_FORMAT_PKCS1);
        $key = $rsa->createKey($bits);
        $this->private_key = $key["privatekey"];
        $this->public_key = $key["publickey"];
    }


    /**
     * @return string
     */
    public function getPublicKey()
    {
        return $this->public_key;
    }

    /**
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->private_key;
    }
}
