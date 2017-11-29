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

    $sql = "SELECT * FROM appointments ";
    $sql .= "ORDER BY id ASC";
    //echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
	db_disconnect($db);
    return $result;
  }

  function find_appointment_by_id($id) {
    $db = db_connect();

    $sql = "SELECT * FROM appointments ";
    $sql .= "WHERE id='" . db_escape($db, $id) . "'";
    // echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $subject = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
	db_disconnect($db);
    return $subject; // returns an assoc. array
  }

  function validateAppointment($subject) {
    $errors = [];

    // menu_name
    if(is_blank($subject['nsid'])) {
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

  function insertAppointment($subject) {
    $db = db_connect();

    $errors = validateAppointment($subject);
    if(!empty($errors)) {
      return $errors;
    }

    $sql = "INSERT INTO appointments ";
    $sql .= "(doctor_id, date, time, brief_desc, full_desc, nsid) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $subject['doctor_id']) . "',";
    $sql .= "'" . db_escape($db, $subject['date']) . "',";
    $sql .= "'" . db_escape($db, $subject['time']) . "',";
    $sql .= "'" . db_escape($db, $subject['brief_desc']) . "',";
    $sql .= "'" . db_escape($db, $subject['full_desc']) . "',";
    $sql .= "'" . db_escape($db, $subject['nsid']) . "'";
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

  function updateAppointment($subject) {
    $db = db_connect();

    $errors = validateAppointment($subject);
    if(!empty($errors)) {
      return $errors;
    }

    $sql = "UPDATE appointments SET ";
    $sql .= "doctor_id='" . db_escape($db, $subject['doctor_id']) . "', ";
    $sql .= "date='" . db_escape($db, $subject['date']) . "', ";
    $sql .= "time='" . db_escape($db, $subject['time']) . "' ";
    $sql .= "brief_desc='" . db_escape($db, $subject['brief_desc']) . "' ";
    $sql .= "full_desc='" . db_escape($db, $subject['full_desc']) . "' ";
    $sql .= "WHERE nsid='" . db_escape($db, $subject['nsid']) . "' ";
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

  function deleteAppointment($nsid) {
    $db = db_connect();

    $sql = "DELETE FROM appointments ";
    $sql .= "WHERE id='" . db_escape($db, $nsid) . "' ";
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
