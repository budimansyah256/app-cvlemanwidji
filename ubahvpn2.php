<?php

$pass = isset($_GET['noport']) ? $_GET['noport'] : "";


try {
    $db = new PDO('sqlite:dbvpn.sqlite');

    $sql = "UPDATE portdb SET portvpn='$pass' where id=2";

    $result = $db->query($sql);

} catch (PDOexception $e) {
    echo $e->getMessage();
}

?>

