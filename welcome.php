<?php 

    session_start();

    if ($_SESSION['id'] == "") {
        header("location: signin.php");
    } else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1 class="mt-5">Welcome, <?php echo $_SESSION['fname']; ?></h1>
        <hr>
        <p>Click the button to demonstrate the prompt box.</p>
        <button onclick="myFunction()">Try it</button>
<p id="demo"></p>
        <script>
function myFunction() {
  var name = prompt("Please enter your name", "");
  if (name != null) {
    document.getElementById("demo").innerHTML =
    "Hello " + name + "! This day is good day " + name + "!";
  }
}
</script>
        <hr>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>


<?php 

}
?>
    