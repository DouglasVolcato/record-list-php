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
      <form action="signupProcess.php" method="post">
        <label for="fname">Firstname</label>
        <input
          type="text"
          id="fname"
          name="firstname"
          placeholder="Your name..."
        />

        <label for="lname">Lastname</label>
        <input
          type="text"
          id="lname"
          name="lastname"
          placeholder="Your last name..."
        />

        <label for="fname">Firstname</label>
        <input
          type="text"
          id="address"
          name="address"
          placeholder="Your address..."
        />

        <input type="submit" value="Save" name="save" />
      </form>
    </div>
  </body>
</html>
