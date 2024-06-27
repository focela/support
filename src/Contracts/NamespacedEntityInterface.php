<?php
/*
 * Copyright (c) 2024 Focela Technologies. All rights reserved.
 * Use of this source code is governed by a MIT style
 * license that can be found in the LICENSE file.
 */

namespace Focela\Support\Contracts;

interface NamespacedEntityInterface
{
    /**
     * Returns the entity namespace.
     *
     * @return string
     */
    public static function getEntityNamespace(): string;

    /**
     * Sets the entity namespace.
     *
     * @param string $namespace
     *
     * @return void
     */
    public static function setEntityNamespace(string $namespace): void;
}
