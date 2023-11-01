<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felix Payer</title>
    <link rel="stylesheet" type="text/css" href="CSS/index_mobile_viewport.css">
    <link rel="stylesheet" type="text/css" href="CSS/index_tablet_viewport.css">
    <link rel="stylesheet" type="text/css" href="CSS/index_desktop_viewport.css">
    <link rel="stylesheet" type="text/css" href="CSS/index_general.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <script defer src="index.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="flex-introduction">
            <div class="flex-introduction-item hidden">
                <h1>Hi, <br>I'm Felix Payer</h1>
                <p>I am Felix Payer, a Media Technician and Gaming Coach. I've worked with countless individuals, as well as
                    smaller businesses. <br><br> I love sharing my knowledge with other individuals in form of online
                    courses,
                    1:1 consultations and free video tutorials. With 5+ years of experience, I create highly satisfactory
                    products.
                </p>
            </div>
            <div class="flex-introduction-image">
                <img src="images/felix.PNG" style="width: 100%; border-radius: 3%;"></img>
            </div>
        </div>




        <div class="flex-reviews">
            <div class="flex-reviews-left">
                <div class="flex-reviews-left-item medium-smooth-zoom">
                    <a href="https://www.fiverr.com/failx_editz" style="pointer-events: auto; position:absolute; width:122px; height:290px"></a>
                    <div class="center-children">
                        <h1 class="font-resizable-70px">4.9</h1>
                        <h2 style="color: #f0ad4e; margin-top: -15px">★★★★★</h2>
                        <h4 style="margin-bottom: 0; padding-bottom: 0">40+ Ratings</h4>
                        <h4 style="margin-top: 0; padding-top: 0">Fiverr Reviews</h4>
                        <div class="flex-reviews-fiverr-image medium-smooth-zoom" style="object-fit: cover; max-width: 100px;">
                            <img src="images/fiverr_icon.png" style="width: 100%;"></img>
                        </div>
                    </div>
                </div>
                <div class="flex-reviews-left-item medium-smooth-zoom" style="margin-left: 70px">
                    <a href="https://www.youtube.com/@1failx1"  style="pointer-events: auto; position:absolute; width:270px; height:290px"></a>
                    <div class="center-children">
                        <h1 class="font-resizable-70px">150.000+</h1>
                        <h4>Views on YouTube</h4>
                        <div class="flex-reviews-youtube-image medium-smooth-zoom" style="object-fit: cover; max-width: 100px">     
                            <img src="images/youtube_icon.png" style="width: 100%;"></img>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-reviews-right hidden">
                <h2>Trusted by numerous clients</h2>
                <p style="color: green; font-size: 20px; font-weight: 500;">Patrick Vandl</p>
                <p style="font-size: 18px; font-style: italic;">This was the best coaching session I've had so far, a
                    really fun learning experience!
                </p>
            </div>
        </div>




        <form method="post">
            <div class="flex-contact">
                <div class="flex-contact-left">
                    <h2>Contact me</h2>
                    <p>Fill out the form and I'll get back to you shortly!</p>
                </div>
                <div class="flex-contact-right">
                    <div class="flex-contact-form-emailname">
                        <div class="flex-contact-form-emailname-item">
                            <p>Name<br>
                                <input type="text" name="Name"
                                    style="margin-top:5px; padding:10px; width:100%; border-radius:8px;background-color:rgba(0,0,0,0.07);color:#111827; border:none">
                        </div>
                        <div class="flex-contact-form-emailname-item">
                            <p>E-Mail<br>
                                <input type="text" name="Email"
                                    style="margin-top:5px; padding:10px; width:100%; border-radius:8px;background-color:rgba(0,0,0,0.07);color:#111827; border:none">
                        </div>
                    </div>
                    <div>
                        <p>Message
                            <textarea name="Message"
                                style="margin-top:5px; padding:10px; width:100%; height: 200px; border-radius:8px;background-color:rgba(0,0,0,0.07);color:#111827; border:none"></textarea>
                        </p>
                    </div>
                    <div style="text-align: right;">
                        <input class="button" type="submit" value="Send"/>
                    </div>
                    <div>
                        <?php
                            if (isset($_POST['Email'])) {

                                // EDIT THE FOLLOWING TWO LINES:
                                $email_to = "business@felix-payer.at";
                                $email_subject = "New form submissions";

                                function problem($error)
                                {
                                    echo "We're sorry, but there were error(s) found with the form you submitted. ";
                                    echo "These errors appear below.<br><br>";
                                    echo $error . "<br><br>";
                                    echo "Please go back and fix these errors.<br><br>";
                                    die();
                                }

                                // validation expected data exists
                                if (
                                    !isset($_POST['Name']) ||
                                    !isset($_POST['Email']) ||
                                    !isset($_POST['Message'])
                                ) {
                                    problem('We\'re sorry, but there appears to be a problem with the form you submitted.');
                                }

                                $name = $_POST['Name']; // required
                                $email = $_POST['Email']; // required
                                $message = $_POST['Message']; // required

                                $error_message = "";
                                $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

                                if (!preg_match($email_exp, $email)) {
                                    $error_message .= 'The Email address you entered does not appear to be valid.<br>';
                                }

                                $string_exp = "/^[A-Za-z .'-]+$/";

                                if (!preg_match($string_exp, $name)) {
                                    $error_message .= 'The Name you entered does not appear to be valid.<br>';
                                }

                                if (strlen($message) < 2) {
                                    $error_message .= 'The Message you entered do not appear to be valid.<br>';
                                }

                                if (strlen($error_message) > 0) {
                                    problem($error_message);
                                }

                                $email_message = "Form details below.\n\n";

                                function clean_string($string)
                                {
                                    $bad = array("content-type", "bcc:", "to:", "cc:", "href");
                                    return str_replace($bad, "", $string);
                                }

                                $email_message .= "Name: " . clean_string($name) . "\n";
                                $email_message .= "Email: " . clean_string($email) . "\n";
                                $email_message .= "Message: " . clean_string($message) . "\n";

                                // create email headers
                                $headers = 'From: ' . $email . "\r\n" .
                                    'Reply-To: ' . $email . "\r\n" .
                                    'X-Mailer: PHP/' . phpversion();
                                mail($email_to, $email_subject, $email_message, $headers);
                                echo "Thanks for getting in touch. We'll get back to you soon.";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>