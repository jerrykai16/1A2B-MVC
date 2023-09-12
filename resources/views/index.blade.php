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
    <h1>猜數字遊戲</h1>
    <div class="div">        
        <form action="{{ route('guess') }}" method="get" name="form1" id="form1">
            <br>
                <label for="playerName">玩家名稱:</label>
                <input name="name" type="text" id="name" size="18" value="{{ session('name') }}" required>
                <p></p>       
                <label for="guessNum">請輸入數字:</label>
                <input name="guess" type="text" id="guess" size="20" autofocus required><br><br>
                <input type="submit" name="submit" id="submit" value="猜猜看"><br>
        </form>
        <p>
            <iframe src="{{ route('show') }}" frameborder="0" class="iframe"></iframe>
        </p>
        <p class="sql">
            <a href="{{ route('insert') }}">寫回資料庫</a>
            <a href="{{ route('clear') }}">重新開始</a>
        </p>        
    </div>
    <div>
            @foreach(session('unique_num', []) as $num)
            <img src="{{ asset('img/' . $num . '.png') }}" width="125px" height="200px">
            @endforeach
    </div>
</body>
</html>