<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Payment</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="payment.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="menu">
        <ul>
            <li><a href="anasayfa.php" accesskey="1" title="">Main menu</a></li>
            <li><a href="saksı.php" accesskey="2" title="">Potted Plant</a></li>
            <li><a href="buket.php" accesskey="3" title="">Bouquet</a></li>
            <li><a href="teraryum.php" accesskey="4" title="">Terrarıum</a></li>
            <li><a href="aboutus.php" accesskey="5" title="">About us</a></li>
            <li><a href="contact.php" accesskey="6" title="">Contact</a></li>
            <li><a href="logout.php" accesskey="7" title="">Log Out</a></li>
        </ul>
    </div>
    <!-- end #menu -->
    <div id="header">
        <div id="logo">

            <h1><a href="#" style="color: #be3489;">BE FLOWERS </a></h1>
            <h2><a href="http://www.freecsstemplates.org/" style="color: #000000;"> for best day...</a></h2>
        </div>
        <div id="banner">
            <a href="#"> </a>
        </div>
    </div>
    <!-- end #header -->

    <div class=main>
        <div class="content">

            <form action="">
                <h1 id="title">Payment Information</h1>
                <hr>
                <br>

                <div class="inside_form">
                    <p id="text_input">
                        <label for="">Receiver's Name:</label><br>
                        <input id="text_input1" type="text" name="item_name" placeholder="Enter Receiver Name" class="select" required>
                    </p>
                    <br>
                    <hr><br>
                    <p id="text_input">
                        <label for="">Address:</label><br>
                        <textarea name="item_name" class="select" rows="6" cols="64" placeholder="Enter Address" required></textarea>

                    </p>

                    <br>
                    <hr><br>
                    <p id="text_input">
                        <label for="">Day of Delivery:</label><br>
                        <input id="text_input2" type="date" name="item_name" placeholder="Enter Delivery Day" class="select" required>
                    </p>

                    <br>
                    <hr><br>
                    <p id="text_input">
                        <label for="">Time of Delivery:</label><br>
                        <input id="text_input2" type="time" name="item_name" placeholder="Enter Time" class="select" required>
                    </p>

                    <br>
                    <hr><br>
                    <p id="text_input">
                        <label for="">Your Message to the Receiver (Optional):</label><br>
                        <textarea name="item_name" class="select" rows="6" cols="64" placeholder="Enter Message"></textarea>
                    </p>
                    <br>
                    <hr><br>

                    <p id="text_input">
                        <label for="Credit Card No">Credit Card Information</label><br>
                        <input id="text_input1" type="text" name="item_name" pattern="[0-9]{4}[0-9]{4}[0-9]{4}[0-9]{4}" placeholder="xxxx xxxx xxxx xxxx" name="cd" class="select" required>
                    </p>

                </div>

                <br><br><br>
                <button class="buy" type="submit">BUY</button>

            </form>

            </form>
        </div>
    </div>

</body>

</html>