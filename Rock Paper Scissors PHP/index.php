<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rock Paper Scissors</title>
</head>
<body style="height: 100vh; margin: 0; display:flex; justify-content: center; align-items: center;">
<div style="width: 500px; height: 500px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
    <form method="post" class="login">
        <input list="weapons" name="weapons">
        <datalist id="weapons">
            <option value="rock">
            <option value="paper">
            <option value="scissors">
            <option value="dynamite">
        </datalist>
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php require('game.php') ?>
</div>
</body>
</html>