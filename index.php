<?php
    // key => value
    $human = [
        'name' =>
        ["Mohammed",'zainab','noor'],
        'age' => 25,
        'cars' => 'kia',
        'dep' => 
        [
'bio','math','cs'
        ],
    ];
    
    foreach ($human as $element){
        if (is_array($element))
            foreach ($element as $names)
                echo $names . '<br/>';
        else
            echo 'none' . "<br />";
        
    }

?>
