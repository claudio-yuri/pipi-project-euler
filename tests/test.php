<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

include("lib/exercise_01.php");

final class ProjectEulerTest extends TestCase
{
    public function testExcercise01()
    {
        $this->assertEquals(
            233168,
            excercise_01()
        );
    }
}

?>