<?php

function validate_expression(string $expression): bool {
    $open_parenthesis_counter = $close_parenthesis_counter = 0;
    for($i = 0; $i < strlen($expression); ++$i) {
        if($expression[$i] === "(") ++$open_parenthesis_counter;
        //Pregunta abierta: Porque no otro if aquí?
        else if($expression[$i] === ")") ++$close_parenthesis_counter;
    }
    return $open_parenthesis_counter == $close_parenthesis_counter;
}


$expression = readline("Please, introduce mathematic expression:");
if(validate_expression($expression)) {
    echo "Correcte".PHP_EOL;
}
else {
    echo "Incorrecte".PHP_EOL;
}

?>