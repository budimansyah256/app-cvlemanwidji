<?php

try {
  $db = new PDO('sqlite:dbvpn.sqlite');

  $sql = "select * from portdb where id=3" ;
  
  $result = $db->query($sql);
  
  foreach ($result as $key => $row) {
    print $row['portvpn'];
  }
  
} catch (PDOexception $e) {
  echo $e->getMessage();
}

?>


