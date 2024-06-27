<?php
/*
 * Copyright (c) 2024 Focela Technologies. All rights reserved.
 * Use of this source code is governed by a MIT style
 * license that can be found in the LICENSE file.
 */

namespace Focela\Support\Traits;

trait NamespacedEntityTrait
{
    /**
     * Returns the entity namespace.
     *
     * @return string
     */
    public static function getEntityNamespace(): string
    {
        return static::$entityNamespace ?? get_called_class();
    }

    /**
     * Sets the entity namespace.
     *
     * @param string $namespace
     *
     * @return void
     */
    public static function setEntityNamespace($namespace): void
    {
        static::$entityNamespace = $namespace;
    }
}
