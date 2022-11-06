<?php

require_once("signupConfig.php");
$data = new signUpConfig();
$all = $data->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <title>All data</title>
  </head>

  <body>
    
    <main class="mx-auto w-25 d-flex flex-column">
      <h2 class="text-center text-primary">List of records</h2>
      <a class="btn btn-success" href="signup.php">ADD NEW</a>
    </main>
    <br />

    <table class="w-100">
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Address</th>
        <th>Action</th>
      </tr>

      <?php
        foreach($all as $val){
      ?>

      <tr class="border border-dark">
        <td class="border border-dark p-2"><?=$val['firstName']?></td>
        <td class="border border-dark p-2"><?=$val['lastName']?></td>
        <td class="border border-dark p-2"><?=$val['address']?></td>
        <td>
          <a class="btn btn-danger text-light" href="delete.php?id=<?=$val['id']?>&req=delete">DELETE</a>
          <a class="btn btn-success text-light" href="edit.php?id=<?=$val['id']?>">EDIT</a>
        </td>
      </tr>

      <?php
        }
      ?>

    </table>
  </body>
</html>
