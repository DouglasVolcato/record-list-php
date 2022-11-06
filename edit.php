<?php

require_once("signupConfig.php");
$data = new signupConfig();
$id = $_GET['id'];
$data->setId($id);

if(isset($_POST['edit'])){
    $data->setFirstName($_POST['firstname']);
    $data->setLastName($_POST['lastname']);
    $data->setAddress($_POST['address']);

    $data->update();
}
$record = $data->fetchOne();
$val = $record[0];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Registration form</title>
  </head>

  <body>
    <h3>Fill out the information</h3>

    <div>
      <form action="" method="post">
        <label for="fname">Firstname</label>
        <input
          type="text"
          id="fname"
          name="firstname"
          value="<?php echo $val['firstName']; ?>"
        />

        <label for="lname">Lastname</label>
        <input
          type="text"
          id="lname"
          name="lastname"
          value="<?php echo $val['lastName']; ?>"
        />

        <label for="fname">Firstname</label>
        <input
          type="text"
          id="address"
          name="address"
          value="<?php echo $val['address']; ?>"
        />

        <input type="submit" value="Update" name="edit" />
      </form>
    </div>
  </body>
</html>
