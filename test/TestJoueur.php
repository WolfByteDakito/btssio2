<?php




use App\Joueur;
use PHPUnit\Framework\TestCase;


class TestJoueur extends TestCase
{
    public function testConstructeur()
    {
        $giroud = new Joueur("Giroud", "Olivier", new DateTime("1986-09-30"), "9");
        $this->assertEquals("Giroud", $giroud->getNom());


        $this->assertEquals("Olivier", $giroud->getPrenom());


        $this->assertEquals("1986-09-30", $giroud->getDateNaissance()->format("Y-m-d"));
        $this->assertEquals("9", $giroud->getNumero());
        $this->assertEquals("nom : Giroud prenom : Olivier (9)", $giroud->donneTexte());


    }


    public function testGetSet(): void
    {
        $giroud = new Joueur("Giroud", "Olivier", new DateTime("1986-09-30"), 9);
        $giroud->setNom("Giezman");
        $this->assertEquals("Giezman", $giroud->getNom());
        $giroud->setPrenom("Antoine");
        $this->assertEquals("Antoine", $giroud->getPrenom());
        $giroud->setDateNaissance(new DateTime("1991-03-21"));
        $this->assertEquals("1991-03-21", $giroud->getDateNaissance()->format("Y-m-d"));
        $giroud->setNumero(10);
        $this->assertEquals(10, $giroud->getNumero());
    }
}

