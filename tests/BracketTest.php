<?php

namespace tests;

use PHPUnit\Framework\TestCase;

class BracketTest extends TestCase
{
    public function testGoodBrackets(): void
    {
        $this->assertEquals(true, bracketStringAsessment("()[]{}<>"));
        $this->assertEquals(true, bracketStringAsessment("{()}<()>()"));
        $this->assertEquals(true, bracketStringAsessment("dd(){}{{()}}(fffff)()"));
    }

    public function testBadBracketsOpeningBracketCase(): void
    {
        $this->assertEquals(false, bracketStringAsessment("("));
        $this->assertEquals(false, bracketStringAsessment("["));
        $this->assertEquals(false, bracketStringAsessment("{"));
        $this->assertEquals(false, bracketStringAsessment("<"));
    }

    public function testBadBracketsClosingBracketCase(): void
    {
        $this->assertEquals(false, bracketStringAsessment(")"));
        $this->assertEquals(false, bracketStringAsessment("]"));
        $this->assertEquals(false, bracketStringAsessment("}"));
        $this->assertEquals(false, bracketStringAsessment(">"));
    }

    public function testBadBracketsWrongOrderCase(): void
    {
        $this->assertEquals(false, bracketStringAsessment("({)}"));
        $this->assertEquals(false, bracketStringAsessment("[<]>"));
        $this->assertEquals(false, bracketStringAsessment("(<)>"));
    }
}
