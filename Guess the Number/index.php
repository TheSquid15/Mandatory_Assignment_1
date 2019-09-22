<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guess the Number</title>
</head>
<body style="height: 100vh; margin: 0; display: flex; justify-content:center; align-items:center;">
    <div style="display:inline-block; width:300px; height:300px; align-items: center; justify-content: center;">
        <h3>Choose a number between 1 - 10</h3>
        <form method="post">
            <input type="number" name="numbers" min="1" max="10">
            <input type="submit" value="Submit" name="submit"><br>
            <?php 
            
           
            if (isset($_POST['submit']) && !empty($_POST['numbers'])) {

                $randomNumber = rand(1, 10);
                $guessingNumber = $_POST['numbers'];

                if ($guessingNumber != $randomNumber) {
                    echo 'Sorry, that\'s not the number, it was ' . $randomNumber;
                }
                else {
                    echo 'That\'s correct! The number was ' . $randomNumber . '!';
                }
            }
            else {
                echo '<h3>Please input a number</h3>';
            }

            ?>
        </form>
    </div>
</body>
</html>