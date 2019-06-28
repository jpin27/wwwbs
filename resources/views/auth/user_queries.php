<?php

// here we have the database credentials;
require_once('db_credentials.php');

function db_connect() {
  $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
  confirm_db_connect();
  return $connection;
}

function db_disconnect($connection) {
  if(isset($connection)) {
	mysqli_close($connection);
  }
}

function db_escape($connection, $string) {
  return mysqli_real_escape_string($connection, $string);
}

function confirm_db_connect() {
  if(mysqli_connect_errno()) {
	$msg = "Database connection failed: ";
	$msg .= mysqli_connect_error();
	$msg .= " (" . mysqli_connect_errno() . ")";
	exit($msg);
  }
}

function confirm_result_set($result_set) {
  if (!$result_set) {
	 exit("Database query failed.");
  }
}


  function find_all() {
    $db = db_connect();

    $sql = "SELECT * FROM users ";
    $sql .= "ORDER BY id ASC";
    //echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
	db_disconnect($db);
    return $result;
  }

  function find_user_by_id($id) {
    $db = db_connect();

    $sql = "SELECT * FROM users ";
    $sql .= "WHERE id='" . db_escape($db, $id) . "'";
    // echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $subject = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
	db_disconnect($db);
    return $subject; // returns an assoc. array
  }

  function validateUser($subject) {
    $errors = [];

    // menu_name
    if(is_blank($subject['menu_name'])) {
      $errors[] = "Name cannot be blank.";
    } elseif(!has_length($subject['menu_name'], ['min' => 2, 'max' => 255])) {
      $errors[] = "Name must be between 2 and 255 characters.";
    }

    // position
    // Make sure we are working with an integer
    $postion_int = (int) $subject['position'];
    if($postion_int <= 0) {
      $errors[] = "Position must be greater than zero.";
    }
    if($postion_int > 999) {
      $errors[] = "Position must be less than 999.";
    }

    // visible
    // Make sure we are working with a string
    $visible_str = (string) $subject['visible'];
    if(!has_inclusion_of($visible_str, ["0","1"])) {
      $errors[] = "Visible must be true or false.";
    }

    return $errors;
  }

  function insertUser($subject) {
    $db = db_connect();

    $errors = validateUser($subject);
    if(!empty($errors)) {
      return $errors;
    }

    $sql = "INSERT INTO users ";
    $sql .= "(fullName, email, password, nsid, healthNumber, birthDate, address) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $subject['fullName']) . "',";
    $sql .= "'" . db_escape($db, $subject['email']) . "',";
    $sql .= "'" . db_escape($db, $subject['password']) . "',";
    $sql .= "'" . db_escape($db, $subject['nsid']) . "',";
    $sql .= "'" . db_escape($db, $subject['healthNumber']) . "',";
    $sql .= "'" . db_escape($db, $subject['birthDate']) . "',";
    $sql .= "'" . db_escape($db, $subject['address']) . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    // For INSERT statements, $result is true/false
    if($result) {
      return true;
    } else {
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

  function updateUser($subject) {
    $db = db_connect();

    $errors = validateUser($subject);
    if(!empty($errors)) {
      return $errors;
    }

    $sql = "UPDATE users SET ";
    $sql .= "fullName='" . db_escape($db, $subject['fullName']) . "', ";
    $sql .= "email='" . db_escape($db, $subject['email']) . "', ";
    $sql .= "password='" . db_escape($db, $subject['password']) . "' ";
    $sql .= "nsid='" . db_escape($db, $subject['nsid']) . "' ";
    $sql .= "healthNumber='" . db_escape($db, $subject['healthNumber']) . "' ";
    $sql .= "birthDate='" . db_escape($db, $subject['birthDate']) . "' ";
    $sql .= "address='" . db_escape($db, $subject['address']) . "' ";
    $sql .= "WHERE id='" . db_escape($db, $subject['id']) . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    // For UPDATE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // UPDATE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }

  }

  function deleteUser($id) {
    $db = db_connect();

    $sql = "DELETE FROM user ";
    $sql .= "WHERE id='" . db_escape($db, $id) . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

?>
