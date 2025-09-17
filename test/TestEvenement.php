<?php


use App\Evenement;
use PHPUnit\Framework\TestCase;
use DateTime;


class TestEvenement extends TestCase
{
    public function testConstructeurEtGetters()
    {
        $horaire = new DateTime('2025-01-01 20:45:00');
        $evt = new Evenement($horaire, "Coup d'envoi");


        $this->assertEquals('20:45', $evt->getHoraire()->format('H:i'));
        $this->assertSame("Coup d'envoi", $evt->getDescription());
        $this->assertSame("20:45 - Coup d'envoi", $evt->donneTexte());
    }


    public function testSetters()
    {
        $evt = new Evenement(new DateTime('2025-01-01 20:45:00'), 'Init');
        $evt->setHoraire(new DateTime('2025-01-01 21:15:00'));
        $evt->setDescription('But !');


        $this->assertEquals('21:15', $evt->getHoraire()->format('H:i'));
        $this->assertSame('But !', $evt->getDescription());
        $this->assertSame('21:15 - But !', $evt->donneTexte());
    }
}
