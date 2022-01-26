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
          return 1;
        }
        else {
          return 0;
        }
  }
// function to delete data in the db
  public function Delete($tables, $tablesId, $data){
    $pid = $data;
    $stmts = "DELETE FROM ".$tables." WHERE ".$tablesId."=:pid";

    $del = $this->getConnection()->prepare($stmts);
   
    if ($del->execute(array(':pid'=>$pid))) {
      return 1;
    }
    else {
      return 0;
    }

  }

public function SelectAll($tblname, $valeur){
  $myql = "SELECT * FROM ".$tblname;
   $donne = $this->getConnection()->prepare($myql);
    $donne->execute();
    while($don = $donne->fetch()){
      return $don[$valeur];
    }

}

public function Verify($tabl,$colum, $value){

  $myqls = "SELECT * FROM $tabl WHERE $colum = $value";

  $mysql =$this->getConnection()->prepare($myqls);

  $mysql->execute();
  
  if($mysql->rowCount()>0){
    return  $mysql->fetch();
    echo 1;
  }
  else{
    echo 0;
  }
}

public function Updated($table, $user_id, $rowId, $fields = array()) {

  $columns = [];

  foreach ($fields as $name => $value) {
      $columns[] = "`{$name}` = :{$name}";
  }

  $sql = sprintf('UPDATE %s SET %s WHERE  %s = %s'
          , $table
          , implode(', ', $columns)
          , $user_id
  );

  if ($stmt = $this->pdo->prepare($sql)) {
      $stmt->execute($fields);
  }
}

}

$object = new Database();
//$object->Verify("users",);
//  $values = array('email'=>'email@gmail.com','password'=>'14255666','nom_prenom'=>'Simeon _ZONGO','telephone'=>'67602470','genre'=>'Male');
//  if($object->Updated("users","id_users",$values)==1){
//   echo "super insert";
//  }



// if ($object->Insertion("users",$values)==1){
//   echo "super insert";
// }
// elseif ($object->Insertion("users",$values)==0){

//   echo "bade insert";
// }

// $oj = $object->SelectAll("users",'telephone');
// echo $oj;
// if($object->Delete("users","id_users","16")==1){
//   echo "super";
// }
// $myql = "SELECT * FROM users";
//    $donne = $object->getConnection()->prepare($myql);
//     $donne->execute();
//     while($don = $donne->fetch()){
//       echo $don['telephone'].' ';
//     }



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
