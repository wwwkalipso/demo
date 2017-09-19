<?php

/**
 * Класс для обработки статей
 */

class User
{
 
  public $userId = null;
  public $userName = null;
  public $surname = null;
  public $password = null;
  public $phone = null;
  public $email = null;



  /**
  * Устанавливаем свойства с помощью значений в заданном массиве
  *
  * @param assoc Значения свойств
  */

  public function __construct( $data=array() ) {
    if ( isset( $data['userId'] ) ) $this->userId = (int) $data['userId'];
    if ( isset( $data['userName'] ) ) $this->userName = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['userName'] );
    if ( isset( $data['surname'] ) ) $this->surname = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['surname'] );
    if ( isset( $data['password'] ) ) $this->password = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['password'] );
    if ( isset( $data['phone'] ) ) $this->phone = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['phone'] );
    if ( isset( $data['email'] ) ) $this->email = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['email'] );
   
    
  }


   public function storeFormValues ( $params ) {

    // Сохраняем все параметры
    $this->__construct( $params );

  }

 public static function getCountRows(  ) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "SELECT value  FROM options WHERE optionName = :optionName";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":optionName", "countRows", PDO::PARAM_STR );
    $st->execute();
    $row = $st->fetch();
    $conn = null;
    if ( $row ) return  $row[0] ;
  }

  public static function getById( $id ) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "SELECT *  FROM users WHERE id = :id";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":id", $id, PDO::PARAM_INT );
    $st->execute();
    $row = $st->fetch();
    $conn = null;
    if ( $row ) return new User( $row );
  }

  public static function getUser( $userName, $password ) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "SELECT *  FROM users WHERE userName = :userName AND password=:password";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":userName", $userName, PDO::PARAM_STR );
    $st->bindValue( ":password", $password, PDO::PARAM_STR );
    $st->execute();
    $row = $st->fetch();
    $conn = null;
    if ( $row ) return new User( $row );
  }

  public static function getUserByName( $userName ) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "SELECT *  FROM users WHERE userName = :userName ";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":userName", $userName, PDO::PARAM_STR );
    $st->execute();
    $row = $st->fetch();
    $conn = null;
    if ( $row ) return new User( $row );
  }

  public static function getList( $numRows=1000000, $order="userName DESC" ) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM users
            ORDER BY " . mysql_escape_string($order) . " LIMIT :numRows";

    $st = $conn->prepare( $sql );
    $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
    $st->execute();
    $list = array();

    while ( $row = $st->fetch() ) {
      $user = new User( $row );
      $list[] = $user;
    }
    $sql = "SELECT FOUND_ROWS() AS totalRows";
    $totalRows = $conn->query( $sql )->fetch();
    $conn = null;
    return ( array ( "results" => $list, "totalRows" => $totalRows[0] ) );
  }

  public function insert() {

  $this->userId =null;
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "INSERT INTO users (  userName, surname, password, phone, email) VALUES ( :userName, :surname, :password, :phone, :email )";
    $st = $conn->prepare ( $sql );
    $st->bindValue( ":userName", $this->userName, PDO::PARAM_STR );
    $st->bindValue( ":surname", $this->surname, PDO::PARAM_STR );
    $st->bindValue( ":password", $this->password, PDO::PARAM_STR );
    $st->bindValue( ":phone", "+380".$this->phone, PDO::PARAM_STR );
    $st->bindValue( ":email", $this->email, PDO::PARAM_STR );
   
    $st->execute();
    $this->id = $conn->lastInsertId();
    $conn = null;

  }

  public function update() {

    // Есть ли у объекта статьи ID?
    if ( is_null( $this->userId ) ) trigger_error ( "User::update(): Attempt to update an User object that does not have its ID property set.", E_USER_ERROR );
   
    // Обновляем статью
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "UPDATE users SET  userName=:userName, surname=:surname, password=:password, phone=:phone, email=:email WHERE userId = :userId";
    $st = $conn->prepare ( $sql );
    
    $st->bindValue( ":userName", $this->userName, PDO::PARAM_STR );
    $st->bindValue( ":surname", $this->surname, PDO::PARAM_STR );
    $st->bindValue( ":password", $this->password, PDO::PARAM_STR );
    $st->bindValue( ":phone", "+380".$this->phone, PDO::PARAM_STR );
    $st->bindValue( ":email", $this->email, PDO::PARAM_STR );
    
    $st->bindValue( ":userId", $this->userId, PDO::PARAM_INT );
    $st->execute();
    $conn = null;
  }


  /**
  * Удаляем текущий объект статьи из базы данных
  */

  public function delete() {

    // Есть ли у объекта статьи ID?
    if ( is_null( $this->id ) ) trigger_error ( "User::delete(): Attempt to delete an User object that does not have its ID property set.", E_USER_ERROR );

    // Удаляем статью
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare ( "DELETE FROM users WHERE userId = :userId LIMIT 1" );
    $st->bindValue( ":userId", $this->userId, PDO::PARAM_INT );
    $st->execute();
    $conn = null;
  }

 

}

?>
