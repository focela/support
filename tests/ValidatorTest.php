<?php
/*
 * Copyright (c) 2024 Focela Technologies. All rights reserved.
 * Use of this source code is governed by a MIT style
 * license that can be found in the LICENSE file.
 */

namespace Focela\Support\Tests;

use Mockery as m;
use Focela\Support\Validator;
use PHPUnit\Framework\TestCase;
use Illuminate\Translation\Translator;
use Illuminate\Translation\ArrayLoader;
use Illuminate\Validation\Factory as IlluminateValidator;

class ValidatorTest extends TestCase
{
    /**
     * The Validator instance.
     *
     * @var Validator
     */
    protected $validator;

    /** @test */
    public function it_can_be_instantiated()
    {
        $validator = new ValidatorStub(
            $this->getRealValidator()
        );

        $this->assertInstanceOf('Focela\Support\Validator', $validator);
    }

    protected function getRealValidator()
    {
        $trans = new Translator(new ArrayLoader(), 'en');

        return new IlluminateValidator($trans);
    }

    /** @test */
    public function it_can_get_and_set_the_rules()
    {
        $this->assertCount(1, $this->validator->getRules());

        $this->validator->setRules([]);
        $this->assertCount(0, $this->validator->getRules());

        $this->validator->setRules([
            'name'  => 'required',
            'email' => 'required',
        ]);
        $this->assertCount(2, $this->validator->getRules());
    }

    /** @test */
    public function it_can_get_and_set_the_messages()
    {
        $this->validator->setMessages([
            'name'  => 'name is required',
            'email' => 'email is required',
        ]);
        $this->assertCount(2, $this->validator->getMessages());

        $this->validator->setMessages([]);
        $this->assertCount(0, $this->validator->getMessages());
    }

    /** @test */
    public function it_can_get_and_set_the_custom_attributes()
    {
        $this->validator->setCustomAttributes([
            'first_name' => 'First Name',
            'last_name'  => 'Last Name',
        ]);
        $this->assertCount(2, $this->validator->getCustomAttributes());

        $this->validator->setCustomAttributes([]);
        $this->assertCount(0, $this->validator->getCustomAttributes());
    }

    /** @test */
    public function it_can_define_scenarios()
    {
        $scenario = $this->validator->on('update', ['foo']);

        $this->assertInstanceOf('Focela\Support\Validator', $scenario);
    }

    /** @test */
    public function it_can_register_bindings()
    {
        $this->validator->bind(['foo' => 'bar']);

        $this->assertSame(['foo' => 'bar'], $this->validator->getBindings());
    }

    /** @test */
    public function it_can_validate()
    {
        $messages = $this->validator->validate([]);

        $this->assertCount(1, $messages);

        $messages = $this->validator->on('update')->bind(['email' => 'popop@asdad.com'])->validate([
            'email' => 'john@doe.com',
        ]);

        $this->assertTrue($messages->isEmpty());
    }

    /** @test */
    public function it_can_by_pass_tests()
    {
        $this->validator->bypass();

        $messages = $this->validator->validate([]);

        $this->assertTrue($messages->isEmpty());
    }

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        $this->validator = new ValidatorStub(
            $this->getRealValidator()
        );
    }

    /**
     * @inheritdoc
     */
    protected function tearDown(): void
    {
        m::close();
    }
}

class ValidatorStub extends Validator
{
    protected $rules = [
        'email' => 'required|email',
    ];

    public function onUpdate()
    {
    }
}
