<?php

/*
 * This file is part of ssx/php-ssh-keypair
 *
 *  (c) Scott Wilcox <scott@dor.ky>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace SSX\SSH\Tests;

use PHPUnit\Framework\TestCase;
use SSX\SSH\KeyPair;

final class KeypairTest extends TestCase
{

    /**
     * @test
     */
    public function testItCanGenerateAKeyPair()
    {
        $keypair = new KeyPair(4096);
        $this->assertNotEmpty($keypair->getPrivateKey());
        $this->assertNotEmpty($keypair->getPublicKey());
    }
}
