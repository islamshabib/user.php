<!DOCTYPE html>
<html>
<head>
    <title>Game Login</title>
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            height: 100vh;
            background: #080b12;
            color: #00ffcc;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            width: 420px;
            padding: 35px;
            background: #101620;
            border: 2px solid #00ffcc;
            box-shadow: 0 0 25px #00ffcc55;
            clip-path: polygon(8% 0,100% 0,100% 92%,92% 100%,0 100%,0 8%);
        }

        h1 {
            text-align: center;
            letter-spacing: 4px;
            color: #fff;
            margin-bottom: 30px;
            text-shadow: 0 0 12px #00ffcc;
        }

        label {
            display: block;
            margin: 15px 0 6px;
            color: #aaa;
            font-size: 13px;
            letter-spacing: 1px;
        }

        input {
            width: 100%;
            padding: 12px;
            background: #080b12;
            border: 1px solid #34404d;
            color: #00ffcc;
            outline: none;
        }

        input:focus {
            border-color: #00ffcc;
            box-shadow: 0 0 10px #00ffcc55;
        }

        input[type="submit"] {
            margin-top: 25px;
            background: #00ffcc;
            color: #080b12;
            border: none;
            font-weight: bold;
            letter-spacing: 2px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #fff;
            box-shadow: 0 0 20px #00ffcc;
        }

        .status {
            text-align: center;
            font-size: 11px;
            color: #777;
            margin-top: 18px;
        }
    </style>
</head>

<body>
    <div class="box">
        <h1>PLAYER LOGIN</h1>

        <form method="POST">
            <label>USERNAME</label>
            <input type="text" name="userid">

            <label>PASSWORD</label>
            <input type="password" name="pass">

            <label>LEVEL</label>
            <input type="number" name="rank">

            <input type="submit" name="sub" value="ENTER GAME">

            <div class="status">● SYSTEM ONLINE // PLAYER DATABASE</div>
        </form>
    </div>
    
    <?php
        $con = mysqli_connect('localhost','root','Password','user_info');
        if(isset($_POST['sub']))
            {
                $username=$_POST['userid'];
                $password=$_POST['pass'];
                $lvl=$_POST['rank'];


                $query = "INSERT INTO mydata(username, password,level)values ('$username','$password','$lvl')";

                $execute=mysqli_query($con,$query);

            }
    ?>
</body>
</html>