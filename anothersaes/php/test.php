<?php
$my_Insert_Statement = $my_Db_Connection->prepare("INSERT INTO Students (name, lastname, email) VALUES (:first_name, :last_name, :email)");
// Now we tell the script which variable each placeholder actually refers to using the bindParam() method
// First parameter is the placeholder in the statement above - the second parameter is a variable that it should refer to
$my_Insert_Statement->bindParam(:first_name, $first_Name);
$my_Insert_Statement->bindParam(:last_name, $last_Name);
$my_Insert_Statement->bindParam(:email, $email);
// Execute the query using the data we just defined
// The execute() method returns TRUE if it is successful and FALSE if it is not, allowing you to write your own messages here
if ($my_Insert_Statement->execute()) {
  echo "New record created successfully";
} else {
  echo "Unable to create record";
}
// At this point you can change the data of the variables and execute again to add more data to the database
$first_Name = "John";
$last_Name = "Smith";
$email = "john.smith@email.com";
$my_Insert_Statement->execute();
// Execute again now that the variables have changed
if ($my_Insert_Statement->execute()) {
  echo "New record created successfully";
} else {
  echo "Unable to create record";
}
?>