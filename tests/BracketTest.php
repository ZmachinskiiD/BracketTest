<?php

namespace tests;

use PHPUnit\Framework\TestCase;

class BracketTest extends TestCase
{
    public function testGoodBrackets()
    {
        $this->assertEquals(true,bracketStringAsessment("()()<>"));
        $this->assertEquals(true,bracketStringAsessment("()()()"));
        $this->assertEquals(true,bracketStringAsessment("dd(){}{{()}}(fffff)()"));
    }
    public function testBadBrackets()
    {
        $this->assertEquals(false,bracketStringAsessment("()("));
        $this->assertEquals(false,bracketStringAsessment(")"));
        $this->assertEquals(false,bracketStringAsessment("{PP(})"));
    }
}
