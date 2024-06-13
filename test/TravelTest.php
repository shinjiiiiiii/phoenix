<?php
namespace Todo;

use PHPUnit\Framework\InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Todo\Models\Catalogue;
use Todo\Models\CatalogueManager;

include 'src/config/config.php';
final class TravelTest extends TestCase
{

    protected $manager;
    public function setUp(): Void 
    {
        $this->manager = new CatalogueManager();
    }

    public function testmodels() : void
    {
        $this->assertEquals('1',$this->manager->find(1)[0]->getId());
        // je verifie avec le find si il y a un travel avec l'id 1
    }

    public function testNegativeTestcaseForAssertEmpty() 
    { 
        $this->assertEmpty( 
            $this->manager->find(1)[0]->getDescription(), 
            "description is not empty"
        ); 
        // je verifie si la description de mon voyage est vide
    } 
    // il y aura une erreur car la description est pas vide
}