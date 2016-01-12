<?php

// include db.config
include_once('db_config.php');


// get username string parameter
$q = $_GET['q'];

// select from db, matching string

try{
	echo 'Var:	' .$q.'<br/>';
	$stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE username = :q");
	$stmt->bindParam(':q', $q);
	$stmt->execute();

	echo 'Count: 	'.$count = $stmt->fetchColumn().'<br/>';

	if ($count == 1) {
      echo "Sorry, looks like somebody already has that username!";
    } else {
      echo "That username hasn't been taken yet!";
    }

} catch(PDOException $e) {
    trigger_error('Error occured while trying to select users in DB:' . $e->getMessage(), E_USER_ERROR);
}




// $username_stmt = $query->execute(array(':q'=>$q));
// 	echo $number_of_rows = $username_stmt->fetchColumn();

// 	// check the numbers of returned rows
// 	if($number_of_rows < 1) {
// 		echo $number_of_rows." | This username is available";
// 	} else {
// 		echo $number_of_rows." | Sorry, this username is already taken.";
// 	}
// } catch (PDOException $e) {
// 	echo $e->getMessage();
// }

?>