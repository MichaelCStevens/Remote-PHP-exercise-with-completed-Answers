<?php

/**
 * The following do-while results in an infinite loop. It should only display
 * the numbers 1-30. What's the problem?
 */

$i = 1;

do {
    echo $i . '<br>';
   // the counter is reset everytime $i = $i++;
    //should be
    $i++;
} while ($i <= 30);