<!DOCTYPE html>
<html>

<head>
    <title>Image retrieve</title>

    <!-- <link rel="stylesheet" href="css/Display_Img.css"> -->

    <link href="bootstrap.css" rel="stylesheet">
    <script src="bootstrap.js" defer></script>

    <style>
        .bd 
        {
            display: flex;
            min-height: 100vh;
            background: #bfd1ec;
            justify-content: center;
            align-items: center;
            font-size: x-large;
            font-weight: 100;
            margin: 0;
            padding: 0;
            font-weight: 100;
            background: url("displayimg.jpeg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="bd">
    <form name="form1" action="Display_Img_Process.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><input type="submit" name="submit2" value="display"></td>
            </tr>
        </table>
    </form>

</html>