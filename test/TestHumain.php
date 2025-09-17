<?php




use App\Humain;
use PHPUnit\Framework\TestCase;


class TestHumain extends TestCase
{
    public function testConstructeur()
    {
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));


        $this->assertEquals("Giroud", $giroud->getNom());


        $this->assertEquals("Olivier", $giroud->getPrenom());


        $this->assertEquals("1986-09-30", $giroud->getDateNaissance()->format("Y-m-d"));
    }


    public function testGetSet(): void
    {
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
        $giroud->setNom("Giezman");
        $this->assertEquals("Giezman", $giroud->getNom());
        $giroud->setPrenom("Antoine");
        $this->assertEquals("Antoine", $giroud->getPrenom());
        $giroud->setDateNaissance(new DateTime("1991-03-21"));
        $this->assertEquals("1991-03-21", $giroud->getDateNaissance()->format("Y-m-d"));
    }
}
