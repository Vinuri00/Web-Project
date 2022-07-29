<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>

    <link rel="stylesheet" href="css/contactus.css">
    
</head>
<body>
    
    <div class="container">
        <div class="container-left">
            <h3 style="color:rgba(133, 133, 175, 0.89);">CONTACT US</h3>
                    <br><br><br>
                    <!-- <Label>Email : <a style="color: aqua;"href = "blackgoldgiftitems.gmail.com">blackgoldgiftitems.gmail.com</a><br><br><br> -->
                    <Label>Email : <a style="color: aqua;"href = "https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox">blackgoldgiftitems.gmail.com</a><br><br><br>
                    <label><b>Call us: +94 770******/+94 3100*****</b></label><br><br><br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15846.303361252902!2d80.0415729!3d6.8213291!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x546c34cd99f6f488!2sNSBM%20Green%20University!5e0!3m2!1sen!2slk!4v1646154084431!5m2!1sen!2slk" width="300" height="300" style="border:0;;" allowfullscreen="" loading="lazy"></iframe>


        </div>
        <form onsubmit="sendEmail(); reset(); return false;" method = "post" action="contact_process.php">
            <h3>GET IN TOUCH</h3>
            <input type="text" name="username" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email Address"required>
            <input type="text" name="phone" placeholder="Your Phone Number(Optional)"required>
            <textarea name="msg" rows="8" placeholder="How can we help?"required></textarea>
            <button type="submit" name="save">SEND</button>
        </form>
    </div>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script> 
        function sendEmail(){
            Email.send({
                SecureToken :"3f0735f3-78e2-43c1-9865-0bd5645d00f9",
                // To : 'blackngoldnsbm@gmail.com',
                To : 'blackgoldgiftitems.gmail.com',
                From : document.getElementById("email").value,
                Subject : "New contact from Enquiry",
                Body : "Name:"+document.getElementById("name").value
                + "<br>Email:" +document.getElementById("email").value
                + "<br>Number:" +document.getElementById("number").value
                +"<br>Message:" +document.getElementById("message").value
            }).then(
                message => alert("Your Message Was Succesfull")
            );
        }
    </script>
</body>
</html>