<?php
/*
 * Copyright (c) 2024 Focela Technologies. All rights reserved.
 * Use of this source code is governed by a MIT style
 * license that can be found in the LICENSE file.
 */

namespace Focela\Support\Handlers;

use Illuminate\Contracts\Container\Container;

class EventHandler
{
    /**
     * Dispatch after all db transactions are committed.
     *
     * @var bool|null
     */
    public $afterCommit;

    /**
     * The container instance.
     *
     * @var Container
     */
    protected $app;

    /**
     * Constructor.
     *
     * @param Container $app
     *
     * @return void
     */
    public function __construct(Container $app)
    {
        $this->app = $app;
    }

    /**
     * Dynamically retrieve objects from the container.
     *
     * @param string $key
     *
     * @return mixed
     */
    public function __get($key)
    {
        return $this->app[$key];
    }
}
