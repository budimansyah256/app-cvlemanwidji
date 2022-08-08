<?php

try {
    $db = new PDO('sqlite:dbvpn.sqlite');

    $db->exec("CREATE TABLE portdb(id INTEGER PRIMARY KEY,nama TEXT,portvpn TEXT)");

    $db->exec("INSERT INTO portdb(id,nama,portvpn) VALUES (1,'cv leman widji','12345');");
    $db->exec("INSERT INTO portdb(id,nama,portvpn) VALUES (2,'cv leman widji jatibarang','12345');");
    $db->exec("INSERT INTO portdb(id,nama,portvpn) VALUES (3,'cv leman widji kuningan','12345');");
} catch (PDOexception $e) {
    echo $e->getMessage();
}

?>
