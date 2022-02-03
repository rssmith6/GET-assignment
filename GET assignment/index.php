<?php 
$firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_STRING);


if(isset($_GET["first"]) && isset($_GET["last"]) && isset($_GET["age"])) {
    $firstname = $_GET['first'];
    $lastname = $_GET['last'];
    $age = $_GET['age'];
    $ageInt = (int) $age;
    $ageInDays = $age * 365;

    if(!empty($firstname) && !empty($lastname) && !empty($age)) {
        $message = "Hello, my name is " . $firstname . " " . $lastname . "." . "<br>";
     
    
        if($age >= 18) {
            $message .= "I am old enough to vote in the United States." . "<br>";
        } else {
            $message .= "I am not old enough to vote in the United States." . "<br>";
        }
        $message .= "I am " . $ageInDays . " days old. Approximately. I don't know your exact birthdate." . "<br>";
        $message .= "Today's date is " . date("Y/m/d") . "<br>";
    } else {
        $message = "Hello, you are missing some data.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting Data</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>Robert Smith's GET assignment</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>">
    <label for="first">First Name :</label>
    <input type="text" id="first" name="first" autocomplete="off">
    <label for="last"> Last Name :</label>
    <input type="text" id="last" name="last" autocomplete="off">
    <label for="age"> Age :</label>
    <input type="text" id="age" name="age" autocomplete="off">
    <div>
        <button type="submit">Submit</button>
    </div>
    </form>

    <p>
        <?php echo $message ?>
    </p>


</body>
</html>