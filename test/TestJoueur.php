<?php




use App\Joueur;
use PHPUnit\Framework\TestCase;


class TestJoueur extends TestCase
{
    public function testConstructeur()
    {
        $giroud = new Joueur("Giroud", "Olivier", new DateTime("1986-09-30"), "12");


        $this->assertEquals("Giroud", $giroud->getNom());


        $this->assertEquals("Olivier", $giroud->getPrenom());


        $this->assertEquals("1986-09-30", $giroud->getDateNaissance()->format("Y-m-d"));

        $this->assertEquals("12", $giroud->getNumero());
    }
}
