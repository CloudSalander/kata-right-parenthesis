<?php

function validate_expression(string $expression): bool {
    return false;
}


$expression = readline("Please, introduce mathematic expression:");
if(validate_expression($expression)) {
    echo "Correcte".PHP_EOL;
}
else {
    echo "No és correcte".PHP_EOL;
}

?>