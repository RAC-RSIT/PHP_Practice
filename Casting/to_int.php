<pre>
<?php
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (int) $a; //output: 5
    $b = (int) $b; //output: 5
    $c = (int) $c; //output: 0
    $d = (int) $d; //output: 1
    $e = (int) $e; //output: 0

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
?> 
</pre>