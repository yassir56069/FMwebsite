<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact us</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <?php 
        include_once 'header.php';
        ?>
        

        <div class="Contact_us-header-section">
            <div class="h-container" style="width:1108px;position:absolute;margin-top: 278px;">
                <div class="v-container" style="padding-right:48px";>
                    <h2 style="text-align: left;">
                        CONTACT US
                    </h2>
                    <p style="width:446px;height: 100px;">
                        Whether you're embarking on a new project, seeking innovative solutions, 
                        or simply curious about what our consultants can do for you,
                        we're here to listen and help. Drop us a message using the form below,
                        and one of our squad members will get back to you in no time.
                    </p>
                </div>

                <div class="v-container">

                
        <form class="contactform" action="./includes/contact.inc.php" method="post">
            <?php

                if (isset($_GET['status'])) 
                {
                    if ($_GET['status'] == 'contact')
                    { 
                        include_once 'contact_us_submission.php';
                    }
                }
                else
                {
                    echo "
                    <label class='HT-bold cf-title'> READY TO CONQUER YOUR DIGITAL CHALLENGES? </label>
                    <input type=textarea class=cfinput placeholder=Full name* style=margin-top: 32px; required>
                    <input type=textarea name='email' class=cfinput placeholder=Email Address* required>
                    <input type=textarea name='phonenum' class=cfinput placeholder=Phone* required>
                    <input type=textarea name='msg' class='cfinput message' placeholder='Message' >
                    <button type='submit' name='submit' class='o-btn cu-btn' style='float: right;'>Submit</button>
                    ";
                }
            ?>

        </form>
                </div>
            </div>
        </div>

        <div class="wsection" style="height:495px;"></div>

        <!-- footer-->
        <iframe src="footer.php" width="100%" height="700" frameborder="0" scrolling="no"></iframe>

    </body>
</html>

    