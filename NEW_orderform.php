<html>
<head>
    <title>
        Register Form
    </title>
    <link rel="stylesheet" href="css/NEW_orderform.css">
</head>
<body>

<div class="fram">
        <!-- <form> -->
    <div id="frame">

<h1 class="ord">
    Order Now
</h1>
<form name="orderform" method="post" action="orderprocess.php">
<table width="400" height="400">

    <tr>
        <td><div class="form">Name </div></td>
        <td><input type="text"name="uname" style="width: 250px;"></td>
    </tr>
        
    <tr>
        <td><div class="form">Contact Number </div></td>
        <td><input type="text"name="contactnum" style="width: 250px;"></td>
    </tr>
    
    <tr>
        <td><div class="form">Province </div></td>
        <td>
            <input type="text"name="province" style="width: 250px;">
            <!-- <select name="province" style="width: 250px;">
                <option value="0">Select the Province</option>
                <option value="1">Western Province</option>
                <option value="2">Central Province</option>
                <option value="3">Southern Province</option>
                <option value="4">Uva Province</option>
                <option value="5">Sabaragamuwa Province</option>
                <option value="6">North Western Province</option>
                <option value="7">North Central Province</option>
                <option value="8">Nothern Province</option>
                <option value="9">Eastern Province</option>
            </select> -->
        </td>
    </tr>
    
        <tr>
            <td><div class="form">Distric </div></td>
            <td>
                <input type="text"name="distric" style="width: 250px;">
                <!-- <select name="district" style="width: 250px;">
                    <option value="0">Select the District</option>
                    <option value="1">Jaffna</option>
                    <option value="2">Kilinochchi</option>
                    <option value="3">Mannar</option>
                    <option value="4">Mullaitivu</option>
                    <option value="5">Vavuniya</option>
                    <option value="6">Puttalam</option>
                    <option value="7">Kurunegala</option>
                    <option value="8">Gampaha</option>
                    <option value="9">Colombo</option>
                    <option value="10">Kalutara</option>
                    <option value="11">Anuradhapura</option>
                    <option value="12">Polonnaruwa</option>
                    <option value="13">Matale</option>
                    <option value="14">Kandy</option>
                    <option value="15">Nuwara Eliya</option>
                    <option value="16">Kegalle</option>
                    <option value="17">Ratnapura</option>
                    <option value="18">Trincomalee</option>
                    <option value="19">Batticaloa</option>
                    <option value="20">Ampara</option>
                    <option value="21">Badulla</option>
                    <option value="22">Monaragala</option>
                    <option value="23">Hambantota</option>
                    <option value="24">Matara</option>
                    <option value="25">Galle</option>
                </select> -->
            </td>
        </tr>
        
    <tr>
        <td><div class="form">Address </div></td>
        <td><input type="text"name="uaddress" style="width: 250px;"></td>
    </tr>
    
    <tr>
        <td><div class="form">Gift Name </div></td>
        <td><input type="text"name="giftname" style="width: 250px;"></td>
    </tr>

    <tr>
        <td><div class="form">Email Address </address> </div></td>
        <td><input type="text"name="email" style="width: 250px;"></td>
    </tr>

    <tr>
        <td><div class="form">Purpose </div></td>
        <td>
            <input type="text"name="purpose" style="width: 250px;">
            <!-- <select name="purpose" style="width: 250px;">
                <option value="0">Select the Purpose</option>
                <option value="1">Birthday</option>
                <option value="2">Valentine</option>
                <option value="3">Anniversary</option>
                <option value="4">Other</option>
            </select> -->
        </td>
    </tr>
    
</table>

        <br><br>
            <input type="submit"name="save"value="Order Now "style="background-color: #C5B358; width: 150px;height: 30px;">
        
    </div>
</form>
</div>
</body>
</html>