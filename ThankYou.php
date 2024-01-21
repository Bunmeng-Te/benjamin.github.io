<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <!-- Import the icons from boxicon website -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
</head>
<body>
    <!-- header -->
    <div id="header"> 
        <h1>BUNMENG TE</h1>
    </div>

    <!-- Navigation Bar-->
    <div id = "navbar">
        <ul>
            <li><a href = "index.html">Home</a></li>
            <li><a href = "about.html">About</a></li>
            <li><a href = "future.html">Future</a></li>
        </ul>
    </div>

    <!-- Main Container -->
    <div id = "maincontainer">

        <!-- If we get the information then we echo Thank You. Otherwise, we echo no information provided -->
        <?php
            if(!isset($_GET['username']) || isset($_GET['emailaddress']) || isset($_GET['myfeedback']))
            {
                $username = htmlspecialchars($_GET['username']);
                $emailaddress = htmlspecialchars($_GET['emailaddress']);
                $myfeedback = htmlspecialchars($_GET['myfeedback']);

                echo "<div id=thank>";
                echo "Hello, <b>$username($emailaddress)</b>!!!";
                echo "<br>";
                echo "You feedback is <b>$myfeedback</b>.";
                echo "<br>";
                echo "Thanks for your feedback. Without you, we can't be improved:)";

                echo "<img src='Image/thank.jpg'>";
                echo "</div>";
            }
            else 
            {
                echo "You did not provide any data </br>";
            }
        ?>

    </div>


    <!-- Footer, social media, navigation bar, and copy right -->
    <footer>
        <div id="footercontainer">
            <h1><b>Contact Me On</b></h1>
            <div class="socialIcons">
                <a href="https://www.facebook.com/people/Bun-Meng/pfbid02mwosfJytoKS9b17n4f7eCDmqqumEx9D6ydWMzmYz2F4Jy9g7j6HL5fGNQJPaQgH5l/?mibextid=LQQJ4d"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/meng.bun?igsh=MTI3ZGh4cnE0YnJydg%3D%3D&utm_source=qr"><i class='bx bxl-instagram'></i></a>
                <a href="https://t.me/Te_Bunmeng"><i class='bx bxl-telegram'></i></a>
                <a href="https://www.linkedin.com/in/bun-meng-772b932aa?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class='bx bxl-linkedin'></i></a>
            </div>
            <div class="footerNav">
                <ul>
                    <li><a href = "index.html">Home</a></li>
                    <li><a href = "about.html">About</a></li>
                    <li><a href = "future.html">Future</a></li>
                </ul>
            </div>
            <div class="footerBottom">
                <p>Copyright &copy;2024; Designed by <b>BUNMENG TE</b> </p>
            </div>
        </div>
    </footer>
</body>
</html>

