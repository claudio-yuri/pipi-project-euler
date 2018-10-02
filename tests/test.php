<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

foreach (glob("lib/*.php") as $filename)
{
    include $filename;
}


final class ProjectEulerTest extends TestCase
{
    public function testExcercise01()
    {
        $this->assertEquals(
            233168,
            excercise_01()
        );
    }

    public function testExcercise02(){
        $this->assertEquals(4613732, excercise_02());
    }
    public function testExcercise03(){
        $primefactors = getPrimeFactors(600851475143);
        $this->assertEquals(6857, end($primefactors));
    }
    public function testExcercise04(){
        $this->assertEquals(906609, getLargestPalindrom());
    }
}

?>