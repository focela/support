<?php
/*
 * Copyright (c) 2024 Focela Technologies. All rights reserved.
 * Use of this source code is governed by a MIT style
 * license that can be found in the LICENSE file.
 */

namespace Focela\Support\Traits;

use Focela\Support\Mailer;

trait MailerTrait
{
    /**
     * The Mailer instance.
     *
     * @var Mailer
     */
    protected $mailer;

    /**
     * Returns the Mailer instance.
     *
     * @return Mailer
     */
    public function getMailer()
    {
        return $this->mailer;
    }

    /**
     * Sets the Mailer instance.
     *
     * @param Mailer $mailer
     *
     * @return $this
     */
    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;

        return $this;
    }
}
