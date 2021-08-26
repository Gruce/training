<?php
    // key => value
    $human = [
        'name' => "nooruldeen",
        'age' => 25,
        'cars' => [
            'Kia',
            'BMW'
        ],
    ];
    
    foreach ($human as $element){
        if (is_array($element))
            foreach ($element as $car)
                echo $car . '<br/>';
        else
            echo $element . "<br />";
        
    }

?>
