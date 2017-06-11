<?php

namespace Nasyrov\Laravel\Enum\Tests\Unit;

use PHPUnit\Framework\TestCase;
use UnexpectedValueException;

class EnumTest extends TestCase
{
    /** @test */
    public function it_cannot_create_enum_with_invalid_value()
    {
        $this->expectException(UnexpectedValueException::class);

        new EnumStub('test');
        new EnumStub(1234);
    }

    /** @test */
    public function it_converts_enum_value_to_string()
    {
        $this->assertEquals(
            EnumStub::FOO,
            (string)new EnumStub(EnumStub::FOO)
        );
        $this->assertEquals(
            EnumStub::BAR,
            (string)new EnumStub(EnumStub::BAR)
        );
    }

    /** @test */
    public function it_gets_enum_key()
    {
        $this->assertEquals(
            'FOO',
            (new EnumStub(EnumStub::FOO))->getKey()
        );
        $this->assertEquals(
            'BAR',
            (new EnumStub(EnumStub::BAR))->getKey()
        );
    }

    /** @test */
    public function it_gets_enum_value()
    {
        $this->assertEquals(
            EnumStub::FOO,
            (new EnumStub(EnumStub::FOO))->getValue()
        );
        $this->assertEquals(
            EnumStub::BAR,
            (new EnumStub(EnumStub::BAR))->getValue()
        );
    }
}
