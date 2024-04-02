<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

use App\Classes\Dices;

final class DicesTest extends TestCase {

    /*
        // test result
        // test roll
        // test is_double
    */

    public function testResult():void
    {
        $dices = new Dices();
        $res = $dices->roll();

        $this->assertTrue( gettype($res) == "integer" );
        $this->assertTrue($res >= 1 && $res <= $dices->getNbFaces());
        $this->assertTrue($res == $dices->getTotal());

        $base_value = $dices->roll();
        $nb_rounds = 10;
        $result = False;
        while (!$result && $nb_rounds >= 0) {
            $roll_value = $dices->roll();
            $nb_rounds--;
            if ($roll_value != $base_value) {
                $result = True;
            }
        }
        $this->assertTrue($result);

    }
    
    
}

