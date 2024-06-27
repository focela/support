<?php
/*
 * Copyright (c) 2024 Focela Technologies. All rights reserved.
 * Use of this source code is governed by a MIT style
 * license that can be found in the LICENSE file.
 */

namespace Focela\Support\Tests\Traits;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use Focela\Support\Traits\ContainerTrait;

class ContainerTraitTest extends TestCase
{
    /** @test */
    public function it_can_set_and_retrieve_the_container()
    {
        $containerTrait = new ContainerTraitStub();

        $container = m::mock('Illuminate\Contracts\Container\Container');

        $containerTrait->setContainer($container);

        $this->assertSame($containerTrait->getContainer(), $container);
    }

    /**
     * @inheritdoc
     */
    protected function tearDown(): void
    {
        m::close();
    }
}

class ContainerTraitStub
{
    use ContainerTrait;
}
