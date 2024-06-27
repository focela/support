<?php
/*
 * Copyright (c) 2024 Focela Technologies. All rights reserved.
 * Use of this source code is governed by a MIT style
 * license that can be found in the LICENSE file.
 */

namespace Focela\Support\Tests\Traits;

use PHPUnit\Framework\TestCase;
use Focela\Support\Traits\RepositoryTrait;

class RepositoryTraitTest extends TestCase
{
    /** @test */
    public function it_can_set_and_retrieve_the_model()
    {
        $repository = new RepositoryTraitStub();

        $repository->setModel('FooModelStub');

        $this->assertSame('FooModelStub', $repository->getModel());
    }

    /** @test */
    public function it_can_create_a_model()
    {
        $repository = new RepositoryTraitStub();

        $repository->setModel('StdClass');

        $this->assertInstanceOf('StdClass', $repository->createModel());
    }

    /** @test */
    public function it_can_call_dynamic_methods()
    {
        $repository = new RepositoryTraitStub();

        $repository->setModel('Focela\Support\Tests\Traits\FooModelStub');

        $this->assertSame('Focela\Support\Tests\Traits\FooModelStub', $repository->getModel());

        $this->assertSame('bar', $repository->foo());
    }
}

class RepositoryTraitStub
{
    use RepositoryTrait;

    public $model;
}

class FooModelStub
{
    public function foo()
    {
        return 'bar';
    }
}
