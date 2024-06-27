<?php
/*
 * Copyright (c) 2024 Focela Technologies. All rights reserved.
 * Use of this source code is governed by a MIT style
 * license that can be found in the LICENSE file.
 */

namespace Focela\Support\Traits;

use Illuminate\Contracts\Container\Container;

trait ContainerTrait
{
    /**
     * The IoC container instance.
     *
     * @var Container
     */
    protected $container;

    /**
     * Returns the IoC container.
     *
     * @return Container
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Sets the IoC container instance.
     *
     * @param Container $container
     *
     * @return $this
     */
    public function setContainer(Container $container)
    {
        $this->container = $container;

        return $this;
    }
}
