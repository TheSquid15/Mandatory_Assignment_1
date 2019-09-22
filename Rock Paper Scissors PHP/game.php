<?php 
function getUserChoice($userInput) {
    strtolower($userInput);

    if ($userInput === 'rock' || $userInput === 'scissors' || $userInput === 'paper' || $userInput === 'dynamite') {
        return $userInput;
    }
    else {
        echo $userInput . ' is not a valid weapon, my guy';
        return;
    }
};

function getComputerChoice() {
    switch(rand(0, 2)) {
        case 0:
            return 'rock';
        case 1:
            return 'paper';
        case 2: 
            return 'scissors';
    };
};
  
function battle($userChoice, $computerChoice) {
    if ($userChoice === $computerChoice) {
        switch(rand(0, 2)) {
            case 0: 
                return 'You trade blows with your foe, yet you both stand!';
            case 1:
                return 'Press this advantage, leave them no quarter!';
            case 2: 
                return 'It\'s not over until one of you is laying on the ground!';
        }
    }
    else if ($userChoice === 'rock') {
        if ($computerChoice === 'paper') {
            switch(rand(0, 2)){
                case 0:
                    return 'With swift movement that is as fluid as water, your foe fells you!';
                case 1:
                    return 'In one vast swiping motion, your enemy cleaves your head clean off!';
                case 2:
                    return 'Before you have time to act, the enemy has already impaled you with his dart...';
            }
        }
        else {
            switch(rand(0, 2)){
                case 0:
                    return 'Human made steel has no bearing on the power of Gaiya!';
                case 1:
                    return 'Crushed... Maimed... Mangled... no words can describe what you have done to this poor soul...';
                case 2: 
                    return 'You rocked your enemy\'s world!';
            }
        }
    }
    else if ($userChoice === 'paper') {
        if ($computerChoice === 'scissors') {
            switch(rand(0, 2)){
                case 0:
                    return 'Your opponent snips you in half!';
                case 1: 
                    return 'Your opponent seamlessly cuts off your arm!';
                case 2:
                    return 'Your flesh is no match against the cold steel';
            }
        }
        else {
            switch(rand(0, 2)){
                case 0: 
                    return 'By fanning the paper at your opponent, you blow him away!';
                case 1: 
                    return 'You fold the paper <b>8 times</b>! It causes a nuclear fusion, your opponent is reduced to dust...';
                case 2: 
                    return 'You write a mean letter to your foe and hand it to him. He dies of sadness...';
            }
        }
    }
    else if ($userChoice === 'scissors'){
        if ($computerChoice === 'rock') {
            switch(rand(0,2)){
                case 0:
                    return 'You got Dwayne the Rock Johnsonned';
                case 1:
                    return 'Your foe crushes you with a decisive blow';
                case 2:
                    return 'The enemy rocks your world';
            }
        }
        else {
            switch(rand(0, 2)){
                case 0:
                    return 'Paper is no match for scissors, so is human flesh...';
                case 1:
                    return 'Great is the weapon, that cuts on its own...';
                case 2:
                    return 'Refined... Decisive... Swift... a perfect blow dealt to your foe';

            }
        }
    }
    else if ($userChoice === 'dynamite') {
        return 'Well, not much your foe can do against suicide bombing, it\'s a draw';
    }
};

function playGame($weapon) {
    $userWeapon = getUserChoice($weapon);
    $computerWeapon = getComputerChoice();
    echo '<h3>You chose ' . $userWeapon . '</h3>';
    echo '<h3>The computer chose ' . $computerWeapon. '</h3>';
    echo '<h3>' . battle($userWeapon, $computerWeapon) . '</h3>';
    
}
  
if (isset($_POST['submit']) && !empty($_POST['weapons'])) {
    
    $choice = $_POST['weapons'];

    playGame($choice);
}
?>