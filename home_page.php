<html>

<head>
    <title> Home Page</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="css/homepg.css">

    <style>
        /* .img
        {
            position: relative;
            top: 100px;
            height: 100px;
            width: 200px ;
        } */

        /* .head1 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../hm1111.jpg"); 
            height: 100vh;
            background-size: cover;
            background-position: center;
        } */

        .btn1 {
            background-color: black;
            border: 1px solid #fff;
            padding: 10px 30px;
            color: white;
            text-decoration: none;
            transition: 0.6s ease;
        }

        .btn1:hover {
            background-color: #C5B358;
            color: #000;
        }

        .btn2 {
            background-color: black;
            border: 1px solid #fff;
            padding: 10px 30px;
            color: white;
            text-decoration: none;
            transition: 0.6s ease;
        }

        .btn2:hover {
            background-color: #C5B358;
            color: #000;
        }
    </style>

    <script>
        function myFunction1() {
            window.open("http://localhost/WEB/creatAcc_form.php");
        }

        function myFunction2() {
            window.open("http://localhost/WEB/login_form.php");
        }
    </script>
</head>

<body>
    <!-- <img src="Logo.jpg" class="img"> -->
    <header class="head1">
        <div class="main">
            <ul>
                <!-- <li class="active"><a href="#">Home</a></li>  -->
                <li><a href="http://localhost/WEB/servicesnew/services1.php"><b>Services</b></a></li>
                <!-- <li><a href="#">Gallery</a></li> -->
                <li><a href="http://localhost/WEB/about_us.php"><b>About Us</b></a></li>
                <li><a href="http://localhost/WEB/contact_us.php"><b>Contact Us<b></a></li>
            </ul>
        </div>
        <!-- <div class="title">
            <h1><i>BAGZHERE</i></h1>
        </div>

        <div class="button">
            <button onclick="myFunction1()" class="btn1"><b>Register</b></a></button>
            <button onclick="myFunction2()" class="btn2"><b>Sign In</b></a></button>
        </div> -->

        <div class="title">
            <h1><i>BAGZHERE</i></h1>
            <div style="margin-left: 50px; margin-top: 10px">
                <button onclick="myFunction1()" class="btn1"><b>Register</b></a></button>
                <button onclick="myFunction2()" class="btn1"><b>Sign In</b></a></button>
            </div>
        </div>

    </header>

</body>

</html>