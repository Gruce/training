<form action="#" method="post">
    <input type="text" name="first_name" placeholder="Your first name"><br />

    <input type="text" name="second_name" placeholder="Your second name"><br />

    <input type="submit" name="send">
</form>


<?php

    if (isset($_POST['send'])){
        $f_name = $_POST['first_name'];
        $s_name = $_POST['second_name'];
    
        echo $f_name;
        echo $s_name;
    }

?>
