<?php

use App\Stade;
use PHPUnit\Framework\TestCase;
use DateTime;

class TestStade extends TestCase
{
    public function testConstructeurEtGetters(): void
    {
        $std = new Stade("GoeffreyJean", "Marseille", "450");

        $this ->assertEquals("GoeffreyJean", $std->getNom());

        $this ->assertEquals("Marseille", $std->getVille());

        $this ->assertEquals("450", $std->getCapacite());

    }  
}
