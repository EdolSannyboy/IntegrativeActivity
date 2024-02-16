<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">LOGIN FORM</h1>

    <form action="process.php" method="POST">

    <label for="">sport:</label>
    <input type="text" name= "sport"> 

    <label for="">address:</label>
    <input type="text" name= "address">

    <label for="">sdate</label>
    <input type="date" name= "start_date">

    <label for="">edate </label>
    <input type="date"name= "end_date">

    <label for="">sponsor</label>
    <input type="text" name= "sponsor">

    <!-- <label for="">Email:</label>
    <input type="email" name= "email"> -->

    <button type="submit" name= "registrationButton">Register</button>
    


    



    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>