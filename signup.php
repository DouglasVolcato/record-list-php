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
    <title>Registration form</title>
  </head>

  <body>
    <h3 class="text-center text-primary">Fill out the information</h3>

    <div>
      <form action="signupProcess.php" method="post" class="mx-auto w-25">
        <label for="fname">Firstname</label>
        <br>
        <input
          type="text"
          id="fname"
          name="firstname"
          placeholder="Your name..."
        /><br>

        <label for="lname">Lastname</label>
        <br>
        <input
          type="text"
          id="lname"
          name="lastname"
          placeholder="Your last name..."
        /><br>

        <label for="fname">Address</label>
        <br>
        <input
          type="text"
          id="address"
          name="address"
          placeholder="Your address..."
        />
        <br>
          <input class="btn btn-success m-2" type="submit" value="SAVE" name="save" />
          <button class="btn btn-primary m-2" type="button" onClick="document.location='allData.php'">CLOSE</button>
      </form>
    </div>
  </body>
</html>
