<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

include("lib/excercise_01.php");
include("lib/excercise_02.php");
include("lib/excercise_03.php");

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
}

?>