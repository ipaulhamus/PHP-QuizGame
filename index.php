<?php

if(session_status() != PHP_SESSION_ACTIVE)
{
    session_start();
}

$key1 = "Luigi";
$key2 = "Yoshi";
$key3 = "Zelda";
$key4 = "DS";
$key5 = "Famicom";

$correctAnswers = 0;

$correctPercentage = 0;

?>

<html lang="en" data-bs-theme="dark">
<head>
    <title>Quiz Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css"
</head>
<body>
<main class="container-lg my-3">
    <h1 class="red-text">Nintendo Trivia</h1>
    <h5 class="red-text">Your Score Will Be Displayed At The Bottom of The Page!</h5>

    <form id="quiz-form" action="index.php" method="post">
        <br />
        <h4 class="blue-text">Question 1: What is the name of Mario's Brother?</h4>
        <br />
        <label for="answer1" class="form-label">Your Answer:</label><br>
        <input type="text" id="answer1" name="answer1" class="form-control w-25" required>
        <br />
        <h4 class="blue-text">Question 2: Who is Mario's Loyal Dinosaur Companion?</h4>
        <br />
        <label for="answer2" class="form-label">Your Answer:</label><br>
        <input type="text" id="answer2" name="answer2" class="form-control w-25" required>
        <br />
        <h4 class="blue-text">Question 3: Who is the Princess in "The Legend of Zelda" Series?</h4>
        <br />
        <label for="answer3" class="form-label">Your Answer:</label><br>
        <input type="text" id="answer3" name="answer3" class="form-control w-25" required>
        <br />
        <h4 class="blue-text">Question 4: What Handheld Console Was Released After the GameBoy Advance?</h4>
        <br />
        <label for="answer4" class="form-label">Your Answer:</label><br>
        <input type="text" id="answer4" name="answer4" class="form-control w-25" required>
        <br />
        <h4 class="blue-text">Question 5: What Was Nintendo's First Home Console?</h4>
        <br />
        <input type="radio" class="form-radio" id="console-pong" name="answer5" value="Pong" required/>
        <label for="console-pong" class="form-check-label">Pong</label>
        <br>
        <input type="radio" class="form-radio" id="console-famicom" name="answer5" value="Famicom" required/>
        <label for="console-famicom" class="form-check-label">Famicom</label>
        <br>
        <input type="radio" class="form-radio" id="console-NES" name="answer5" value="NES" required/>
        <label for="console-NES" class="form-check-label">NES</label>
        <br>
        <input type="radio" class="form-radio" id="console-N64" name="answer5" value="N64" required/>
        <label for="console-N64" class="form-check-label">N64</label>

        <br />
        <br />
        <button type="submit" class="btn btn-success">Submit Quiz</button>
        <br />

    </form>

    <?php if($_SERVER["REQUEST_METHOD"] === "POST"):

        $answer1 = $_POST['answer1'];
        $answer2 = $_POST['answer2'];
        $answer3 = $_POST['answer3'];
        $answer4 = $_POST['answer4'];
        $answer5 = $_POST['answer5'];

        if($answer1 == $key1)
        {
            $correctAnswers++;
        }
        if($answer2 == $key2)
        {
            $correctAnswers++;
        }
        if($answer3 == $key3)
        {
            $correctAnswers++;
        }
        if($answer4 == $key4)
        {
            $correctAnswers++;
        }
        if($answer5 == $key5)
        {
            $correctAnswers++;
        }

        $correctPercentage = $correctAnswers / 5 * 100;

        ?>

    <h3 class="response-feedback green-text">Your Score: <?= $correctAnswers ?> / 5</h3>
    <br />
    <h3 class="response-percentage green-text">Your Percentage: <?= $correctPercentage ?>%</h3>

    <?php endif; ?>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>