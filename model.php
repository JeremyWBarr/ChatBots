<?php
	
$dbName = "/home/jbarr/public_html/chatbot/chatbot.db";
$dsn = "sqlite:$dbName";
$dbh = null;

if(array_key_exists("action", $_POST)) {
    $_POST["action"]($_POST);
}

function connectToDB(){
    global $dsn;
    global $dbh;

    try{
        if($dbh == null){
            $dbh = new PDO($dsn);
            setupDB();
        }
    } catch(PDOException $e) {
        die("Couldn't establish a connection to the database: ". 
            $e->getMessage());
    }
}

function setupDB(){
    global $dbh;
    try {
        // Set up the users table.
        $dbh->exec("create table if not exists chatbots(".
            "id integer primary key autoincrement,".
            "bot_name text,".
            "bot_desc text,".
            "stu_name text,".
        	"bot_data text)");

        // Check for errors.
        $error = $dbh->errorInfo();
        if($error[0] !== '00000' && $error[0] !== '01000') {
            die("There was an error setting up the chatbots table: ". $error[2]);
        }

    } catch(PDOException $e) {
        die("There was an error setting up the database: ". $e->getMessage());
    }
}

function addBot($data) {
	global $dbh;
    connectToDB();

    try {
        $statement = $dbh->prepare("insert into chatbots(bot_name, bot_desc, stu_name, bot_data) ".
            "values(:bot_name, :bot_desc, :stu_name, :bot_data)");

        $success = $statement->execute(array(
            ":bot_name" 	=> $data["botName"],
            ":bot_desc" 	=> $data["botDesc"],
            ":stu_name"     => $data["stuName"],
            ":bot_data" 	=> $data["botData"]
        ));
           
        if(!$success){
            die("There was an error saving to the database: ". 
                $dbh->errorInfo()[2]);
        }
    } catch(PDOException $e){
        die("There was an error saving to the database: ". $e->getMessage());
    }
}

function getBotData($bName) {
	global $dbh;
	connectToDB();

	try {
		$statement 	= $dbh->prepare("select * from chatbots where bot_name = :bot_name");
		$success 	= $statement->execute(array(":bot_name" => $bName));

		if(!$success){
            die("There was an error reading from the database: ". 
                $dbh->errorInfo()[2]);
        } else {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
	} catch(PDOException $e){
        die("There was an error getting data from the database: ". $e->getMessage());
    }
}

function getBots() {
	global $dbh;
	connectToDB();

	try {
		$statement 	= $dbh->prepare("select * from chatbots");
		$success 	= $statement->execute();

		if(!$success){
            die("There was an error reading from the database: ". 
                $dbh->errorInfo()[2]);
        } else {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
	} catch(PDOException $e){
        die("There was an error getting data from the database: ". $e->getMessage());
    }	
}


?>