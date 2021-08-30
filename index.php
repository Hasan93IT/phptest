<?php


// zählen for schleife
for ($i = 1; $i <= 100; $i++) {
    // Bedingung für noramle Zählung
    if ($i % 3 != 0 && $i % 5 != 0) {
        echo "$i <br/>";
    }
    //vielfach von 3
    if ($i % 3 == 0 && $i % 5 != 0) {
        echo "Fizz <br/>";
    }
    //vielfach von 5
    if ($i % 5 == 0 && $i % 3 != 0) {
        echo "Buzz <br/>";
    }
    //vielfach von 3 und 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz <br/>"; 
    }
}
