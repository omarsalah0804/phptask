<?php
class Greeting {
    public function introduce($name) {
        echo "Hello All, I am $name\n";
    }
}

$greeting = new Greeting();
$greeting->introduce("Scott");
?>
