<?php
/*
 * Copyright (c) 2024 Focela Technologies. All rights reserved.
 * Use of this source code is governed by a MIT style
 * license that can be found in the LICENSE file.
 */

namespace Focela\Support\Handlers;

use Illuminate\Contracts\Events\Dispatcher;

interface EventHandlerInterface
{
    /**
     * Registers the event listeners using the given dispatcher instance.
     *
     * @param Dispatcher $dispatcher
     *
     * @return void
     */
    public function subscribe(Dispatcher $dispatcher);
}
