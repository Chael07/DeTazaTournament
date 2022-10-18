<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    div#formdv {
      width: 50%;
      display: block;
      padding: 20px;
    }
  </style>    

</head>
    <body>
<?php
    
// query used to fetch the result
$query = "SELECT team.name AS teamname, 
COUNT(*) AS MP, 
SUM(CASE WHEN match_details.result = 'win' THEN 1 ELSE 0 END) AS WIN, 
SUM(CASE WHEN match_details.result = 'loss' THEN 1 ELSE 0 END) AS LOSS,
SUM(CASE WHEN match_details.result = 'draw' THEN 1 ELSE 0 END) AS DRAW,
SUM(match_details.points) AS POINTS
FROM tally_db.team INNER JOIN tally_db.match_details
ON match_details.idteam = team.idteam
GROUP by team.idteam
ORDER BY POINTS desc, team.name;";
    

$result = mysqli_query($conn, $query);
$records = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<div id="formdv">
    <table class="table">
        <thead class="thead-dark">
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </thead>
        
        <tbody>
            
        </tbody>

    </table>
    </div>
    </body>
</html>