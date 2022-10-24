<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>TV Show Application</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<center>
  <div class="wrapper">
<form class="frm-mail">
 <h1>Random TV Shows Generator</h1><br><br>
    <label for="show">How many TV Shows?</label><br>
    <input type="text" id="show" name="show" ><br>
    <br> <br>
    <label for="show">Genres (Optional) </label><br>
    <select name="shows" size="10">  
    <option value="Action"> Action </option>  
    <option value="Adventure"> Adventure </option>  
    <option value="Animation"> Animation </option>  
    <option value="Comedy"> Comedy </option>  
    <option value="Crime"> Crime </option>  
    <option value="History"> History </option>  
    </select>  <br><br>
    <a class="btn btn-primary" href="#" role="button">Random Shows</a>
 
    <br><br><hr>
    <?php
    $url='https://api.tvmaze.com/schedule';
    $json=file_get_contents($url);
    $retval=json_decode($json,TRUE);

    for($x=0;$x<count($retval);$x++){
           echo $retval[$x]['show']['name']."<br>";
    }
?>


</form> </div>
</center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
