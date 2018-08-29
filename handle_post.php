<!doctype html>
<html lang="en">
<head>
    <meta charset="ut-8">
    <title>Forum Posting</title>
</head>
<body>
<?php //script for posting.html
/*This script receives five values from posting.html: first_name, last_name, email, posting, submit*/

//get values from the $_POST array:
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$posting = nl2br($_POST['posting'], false);

//create a full name variable for concatenation
$name = $first_name . ' ' . $last_name;

//output message to user
print "<div>Thank you, $name,for your posting:
    <p>$posting</p></div>";

//make a link to another page
$name = urlencode($name);
$email = urlencode($_POST['email']);
print"<p>Click <a href=\"thanks.php?$name&$email=$email\">here</a> to continue.</p>";
?>
</body>
</html>