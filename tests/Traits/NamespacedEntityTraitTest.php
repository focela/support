<?php
/*
 * Copyright (c) 2024 Focela Technologies. All rights reserved.
 * Use of this source code is governed by a MIT style
 * license that can be found in the LICENSE file.
 */

namespace Focela\Support\Tests\Traits;

use PHPUnit\Framework\TestCase;
use Focela\Support\Traits\NamespacedEntityTrait;
use Focela\Support\Contracts\NamespacedEntityInterface;

class NamespacedEntityTraitTest extends TestCase
{
    /** @test */
    public function it_can_get_and_set_the_entity_namespace()
    {
        $entity = new NamespacedEntityTraitStub();

        $this->assertSame('Focela\Support\Tests\Traits\NamespacedEntityTraitStub', $entity->getEntityNamespace());

        $entity->setEntityNamespace('Foo\Bar');

        $this->assertSame('Foo\Bar', $entity->getEntityNamespace());
    }
}

class NamespacedEntityTraitStub implements NamespacedEntityInterface
{
    use NamespacedEntityTrait;

    protected static $entityNamespace;
}
