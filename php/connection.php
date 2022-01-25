<?php

class Database
{
  private $servername ;
  private $username;
  private $password;
  private $dbname;
  private $charset;
/// fonction pour la connection a la base de donnee
  public function getConnection(){

    $this->servername = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->dbname = "yambadh";
    $this->charset = "utf8mb4";
    try {
      $connected ="mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
      $conn = new PDO($connected,$this->username,$this->password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
// function pour insertion dans la base de donne
  public function Insertion($table ,$values= array()){
    foreach ($values as $field => $valu)
            $ins[] = ':' . $field;

        $ins = implode(',', $ins);
        $fields = implode(',', array_keys($values));
        $sql = "INSERT INTO $table ($fields) VALUES ($ins)";

        $sth = $this->getConnection()->prepare($sql);
        foreach ($values as $f => $valu)
        {
            $sth->bindValue(':' . $f, $valu);
        }
        if ( $sth->execute()) {
          echo 1;
        }
        else {
          echo 0;
        }
  }

}

// $object = new Database();
// $values = array('email'=>'value1','password'=>'value2');
// $object->Insertion("users",$values);




// function Insertion($table, $data)
// {
//   global $conn;
//   foreach ($data as $column => $value) {
//     $sql = "INSERT INTO {$table} ({$column}) VALUES (:{$column});";
//     $stmt = $conn->prepare($sql);
//     $excut = $stmt->execute(array(':' . $column => $value));

//     if ($excut) {
//       echo 1;
//     } else {
//       echo 0;
//     }
//   }
// }
