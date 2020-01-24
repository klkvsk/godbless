<?php


class ГосподьTest extends \PHPUnit\Framework\TestCase
{
    public function testЕстьЛиОн()
    {
        $this->assertTrue(class_exists(Господь::class));
    }

    public function testСлышитЛиОн()
    {
        $this->assertTrue(is_callable([ Господь::class, 'getБлагословение' ]));
    }

    public function testБлагословитЛиОн()
    {
        $this->assertTrue(Господь::getБлагословение());
    }

    public function testЕдинВоВекиВековЛиОн()
    {
        $reflectionClass = new ReflectionClass(Господь::class);
        $this->assertFalse($reflectionClass->isInstantiable());
        $this->assertTrue($reflectionClass->isFinal());
    }
}