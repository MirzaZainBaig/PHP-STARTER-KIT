<?php
class LoopExamples {
    private $colors = ["red", "green", "blue", "yellow"];

    public function displayForLoop() {
        echo 'For loop example<br>';
        for ($i = 0; $i < 5; $i++) {
            echo "The value of i is: $i<br>";
        }
    }

    public function displayForeachLoop() {
        echo 'Foreach loop example<br>';
        foreach ($this->colors as $color) {
            echo "Color: $color<br>";
        }
    }

    public function displayWhileLoop() {
        echo 'While loop example<br>';
        $x = 0;
        while ($x < 5) {
            echo "The value of x is: $x<br>";
            $x++;
        }
    }

    public function displayDoWhileLoop() {
        echo 'Do While loop example<br>';
        $y = 0;
        do {
            echo "The value of y is: $y<br>";
            $y++;
        } while ($y < 5);
    }
}

// Instantiate the class and call its methods
$obj = new LoopExamples();
$obj->displayForLoop();
$obj->displayForeachLoop();
$obj->displayWhileLoop();
$obj->displayDoWhileLoop();
?>
