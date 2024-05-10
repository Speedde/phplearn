<?php
    $login = 'zorg1';
    $password = 'Z0101N';

    if( $_POST['login'] == $login && $_POST['password'] == $password) {
        echo "Доюро пожаловать!";
    } else {
        echo "Неверній логин или пароль<br>";
        echo var_export($_POST) . "<br>"; }
    ?>
<pre>
    <?php print_r($GLOBALS); ?>
</pre>


