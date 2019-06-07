<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Soccer Database Query</title>
</head>
<body>
    <?php
    include 'db_connection.php';
    ?>

<div class="sub_pad">
  <form action="/query1.php" method ="POST">
    <div class="form-group">
      <label for="formGroupExampleInput"><p style="color:red;font-size:30px;">Team Name</p></label>
      <input type="text" name = "team_name" class="form-control" id="formGroupExampleInput" placeholder="Team Name">
    </div>

    <div class="col-auto my-1">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>

<div>
  <form action="/query2.php" method ="POST">
    <div class="form-group">
        <label for="formGroupExampleInput2"><p style="color:red;font-size:30px;">Player Name</p></label>
        <input type="text" name = "player_name" class="form-control" id="formGroupExampleInput2" placeholder="Player Name">
    </div>

    <div class="col-auto my-1">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>