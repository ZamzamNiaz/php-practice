<?php

// print table of 3


class MultiplicationTable {

    public function printTable($num) {
        for ($i = 1; $i <= 10; $i++) {
            $result = $num * $i;
            echo "$num x $i = $result <br>";
        }
    }
}
$table = new MultiplicationTable();
$table->printTable(3);









?>