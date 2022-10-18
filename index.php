<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Tally</title>

  <style>
    div#formdv {
      width: 500px;
      display: block;
      padding: 20px;
    }
  </style>
</head>

<body>
  <form method="" action="">
    <div id="formdv">
      <div class="form-group">
        <label for="exampleFormControlSelect1">Team 1</label>
        <select class="form-control" id="team1">
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Team 2</label>
        <select class="form-control" id="team2">
        </select>
      </div> <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" value="win" checked>
        <label class="form-check-label" for="exampleRadios1">
          Win
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" value="loss">
        <label class="form-check-label" for="exampleRadios2">
          Loss
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" value="draw">
        <label class="form-check-label" for="exampleRadios3">
          Draw
        </label>
      </div>
      <br><br>
      <button type="submit" class="btn btn-primary">Submit</button> <br><br>
      <a href="#">Game Summary</a>
    </div>
    
  </form>
</body>

</html>