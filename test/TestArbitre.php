<?php




use App\Arbitre;
use App\Humain;
use PHPUnit\Framework\TestCase;


class TestArbitre extends TestCase
{
    public function testConstructeur()
    {
        $giroud = new Arbitre("Giroud", "Olivier", new DateTime("1986-09-30"), "Français");


        $this->assertEquals("Giroud", $giroud->getNom());


        $this->assertEquals("Olivier", $giroud->getPrenom());


        $this->assertEquals("1986-09-30", $giroud->getDateNaissance()->format("Y-m-d"));

        $this->assertEquals("Français", $giroud->getNationalite());
    }
}
