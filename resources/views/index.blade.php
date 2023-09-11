<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numbers</title>
    <style>
        body{
            text-align: center;
        }
        h1{
            color: burlywood;
        }
        .div{
            background-color: navajowhite;
            width: 530px;
            height: 400px;    
            margin: auto;
        }
        .iframe{
            background-color:white;
            width: 500px;
            height: 200px;
            overflow: auto;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION["player"]))
            $player = $_SESSION["player"];
        else
            $player = "";            
    ?> 
    <h1>猜數字遊戲</h1>
    <div class="div">        
        <form action="guess.php" method="post" name="form1" id="form1">
            <br>
                <label for="playerName">玩家名稱:</label>
                <input name="player" type="text" autofocus required id="player" size="18" value=<?php echo $player?>><p></p>       
                <label for="guessNum">請輸入數字:</label>
                <input name="guess" type="text" required id="guess" size="20"><br><br>
                <input type="submit" name="submit" id="submit" value="猜猜看"><br>
        </form>
        <p>
            <iframe src="" frameborder="0" class="iframe"></iframe>
        </p>
        <p class="sql">
            <a href="process_guesses.php">寫回資料庫</a>
            <a href="clear.php">重新開始</a>
        </p>        
    </div>
    <div>
        <iframe src="" frameborder="0" width="500" ></iframe>    
    </div>
</body>
</html>