<!DOCTYPE html>
<html>

<head>
    <title>Insert Image in MySql using PHP</title>

    <link rel="stylesheet" href="Upload_Img.css">
    <link href="bootstrap.css" rel="stylesheet">
    <script src="bootstrap.js" defer></script>
</head>



<body>
<table>
    <center>
        <form action="Upload_Img_process.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="formFileLg" class="form-label">Large file input example</label>
            <input class="form-control form-control-lg" id="formFileLg" name="image" type="file">
            <button type="submit" class="btn btn-light mt-3">Upload</button>
        </div>
        </form>
    </center>
</table>
</body>

</html>