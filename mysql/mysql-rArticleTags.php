<?php
include_once("config.php");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

// sql to create table
$sql = "
CREATE TABLE rArticleTags
(
ID int  NOT NULL AUTO_INCREMENT,
articleId int,
tagId int,
PRIMARY KEY (ID)
)";

if ($mysqli->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $mysqli->error;
}

$mysqli->close();
?>



