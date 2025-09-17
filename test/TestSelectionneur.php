<?php




use App\Selectionneur;
use PHPUnit\Framework\TestCase;


class TestSelectionneur extends TestCase
{
    public function testConstructeur()
    {
        $giroud = new Selectionneur("Giroud", "Olivier", new DateTime("1986-09-30"), "Français");


        $this->assertEquals("Giroud", $giroud->getNom());


        $this->assertEquals("Olivier", $giroud->getPrenom());


        $this->assertEquals("1986-09-30", $giroud->getDateNaissance()->format("Y-m-d"));

        $this->assertEquals("Français", $giroud->getNationalite());
    }
}
