<?php
/*
 * Copyright (c) 2024 Focela Technologies. All rights reserved.
 * Use of this source code is governed by a MIT style
 * license that can be found in the LICENSE file.
 */

namespace Focela\Support\Tests\Traits;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use Focela\Support\Traits\MailerTrait;

class MailerTraitTest extends TestCase
{
    /** @test */
    public function it_can_set_and_retrieve_the_mailer_instance()
    {
        $mailerTrait = new MailerTraitStub();

        $mailer = m::mock('Focela\Support\Mailer');

        $mailerTrait->setMailer($mailer);

        $this->assertSame($mailerTrait->getMailer(), $mailer);
    }

    /**
     * @inheritdoc
     */
    protected function tearDown(): void
    {
        m::close();
    }
}

class MailerTraitStub
{
    use MailerTrait;
}
