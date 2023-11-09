<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <meta name="description" content="Ich bin Felix Payer: Website Designer, Content Creator, Gaming Coach und Programmierer. Sehen Sie sich meine Website an, um mehr über meine Services zu lernen!">
    <meta name="keywords" content="Felix Payer, Payer, Webdevelopment, Content Creation, Gaming Coach">

    <title>Felix Payer</title>
    <link rel="stylesheet" type="text/css" href="CSS/index_mobile_viewport.css">
    <link rel="stylesheet" type="text/css" href="CSS/index_small_tablet_viewport.css">
    <link rel="stylesheet" type="text/css" href="CSS/index_tablet_viewport.css">
    <link rel="stylesheet" type="text/css" href="CSS/index_desktop_viewport.css">
    <link rel="stylesheet" type="text/css" href="CSS/index_general.css">
    <link rel="icon" type="image/png" sizes="16x16" rel="noopener" target="_blank" href="/favicon_16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" rel="noopener" target="_blank" href="/favicon_32x32.png">
    <link rel="icon" type="image/png" sizes="64x64" rel="noopener" target="_blank" href="/favicon_64x64.png">
    <link rel="icon" type="image/png" sizes="128x128" rel="noopener" target="_blank" href="/favicon_128x128.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link defer href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <script defer src="index.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="header-subcontainer">
                <img style="height: 80%; padding-right: 10px" src="favicon.ico" alt="Felix Payer Logo">
                <a href="https://felix-payer.at/" class="header-logo">felix-payer</a>
                <a href="#services" class="header-links">SERVICES</a>
                <a href="#webdev" class="header-links">WEB DEVELOPMENT</a>
                <a href="#contentcreation" class="header-links">CONTENT CREATION</a>
                <a href="#coaching" class="header-links">COACHING</a>
                <a href="#contact" class="header-links">KONTAKT</a>
            </div>
        </div>


        <div class="flex-introduction-wrapper">
            <div class="flex-introduction-innercontainer"> 
                <div class="flex-introduction-item hidden">
                    <h1>Ich bin Felix Payer</h1>
                    <p>Ich bin Felix Payer, ein Web-Designer, Content Creator und Gaming Coach. Ich habe bereits mit unzähligen Einzelpersonen, als auch Unternehmen, gearbeitet. <br><br> Ich lehre mein Wissen gerne mittels 1-on-1 Coachings und Video Tutorials. Mit über fünf Jahren extensiver Erfahrung habe ich viele zufriedene Kunden angesammelt.
                    </p>
                </div>
                <div class="flex-introduction-image">
                    <img src="images/felix.webp" alt="Felix Payer Nahaufnahme"></img>
                </div>
            </div>
        </div>

        <div class="service-container" id="services" style="text-align: center; overflow-x:visible">
                <h1>Services</h1>
                <p class="big-text">Eine Liste meiner Services</p>
                <hr class="horizontal-line-01">
                <div class="service-sub-container">
                    <a href="#webdev">
                        <div class="service-sub-element hidden-bottom-to-top">
                            <img src="images/webdev_01.webp" style="width: 100%; height: auto" alt="Web Development Cover Image">
                            <h2 class="margin-top-10px" style="font-size: 24px">Web Development</h2>
                        </div>
                    </a>
                    <a href="#contentcreation">
                        <div class="service-sub-element hidden-bottom-to-top" style="transition-delay: 200ms;">
                            <img src="images/contentcreation_01.webp" style="width: 100%; height: auto" alt="Content Creation Cover Image">
                            <h2 class="margin-top-10px" style="font-size: 24px">Content Creation</h2>
                        </div>
                    </a>
                    <a href="#coaching">
                        <div class="service-sub-element hidden-bottom-to-top" style="transition-delay: 400ms;">
                            <img src="images/coaching_01.webp" style="width: 100%; height: auto" alt="Gaming Coaching Cover Image">
                            <h2 class="margin-top-10px" style="font-size: 24px">Gaming Coaching</h2>
                        </div>
                    </a> 
                </div>
        </div>

        <div class="service-container" id="webdev">
            <div class="hidden-top-to-bottom">
                <h2>Web Development</h2>
                <p class="big-text">Mit über einem <b class="green-text">halben Jahrzehnt</b> Erfahrung im Web Development kann ich ganz nach Ihren Wünschen eine Website für Ihre Firma oder Privatperson erstellen.</p>
                <hr class="horizontal-line-01" align="left">
            </div>
            <div class="service-sub-container">
                <div class="service-sub-element hidden-left-to-right">
                    <img src="images/icons/man_in_smoking.png" alt="Man in Smoking">
                    <h3 class="margin-top-10px">Seriöser Auftritt</h3>
                    <p>Ein professionelles Design Ihrer Marke schafft einen positiven ersten Eindruck bei potenziellen Kunden und verbessert die Stärke und Seriosität Ihrer Markenidentität.</p>
                </div>
                <div class="service-sub-element hidden-left-to-right" style="transition-delay: 200ms;">
                    <img src="images/icons/seo.png" alt="SEO symbol">
                    <h3 class="margin-top-10px">SEO optimiert</h3>
                    <p>Ich lege bei meinen Produkten großen Wert auf SEO (Search Engine Optimization), was für ein hohes Ranking ihres Web-Auftritts in Suchmaschinen sorgt.</p>
                </div>
                <div class="service-sub-element hidden-left-to-right" style="transition-delay: 400ms;">
                    <img src="images/icons/computer_with_code.png" alt="Computer with code">
                    <h3 class="margin-top-10px">Moderne Technologien</h3>
                    <p>Meine Webseiten sind nicht mit Templating-Tools, wie Wordpress, sondern mit den besten CSS- und JS-Frameworks handgefertigt, um aus der Masse herauszustechen.</p>
                </div> 
            </div>
        </div>

        <div class="service-container" id="contentcreation" style="text-align: right">
            <div class="hidden-top-to-bottom">
                <h2>Content Creation</h2>
                <p class="big-text">Wenn es um das Aufnehmen, bis hin zur Audio- und Videobearbeitung und folglich dem Publishing von <b class="green-text">hervorragenden Videos</b> geht, dann bin ich gerne Ihre Ansprechperson.</p>
                <hr class="horizontal-line-01" align="right">
            </div>
            <div class="service-sub-container">
                <div class="service-sub-element hidden-right-to-left" style="transition-delay: 400ms;">
                    <img src="images/icons/convinced.png" alt="Convinced Icon">
                    <h3 class="margin-top-10px">Überzeugende Produkte</h3>
                    <p>Mein Content, den ich für Firmen, Privatpersonen und mich produziert habe, konnte bis dato nahezu eine Million Zuschauer erreichen.</p>
                </div>
                <div class="service-sub-element hidden-right-to-left" style="transition-delay: 200ms;">
                    <img src="images/icons/video.png" alt="Video symbol">
                    <h3 class="margin-top-10px">Shortform Content</h3>
                    <p>Ich bin spezialisiert auf Shortform Content, wie Reels, Shorts und TikTok-Videos, da ich mich mit den Algorithmen dieser Plattformen ausgezeichnet auskenne.</p>
                </div>
                <div class="service-sub-element hidden-right-to-left">
                    <img src="images/icons/marketing.png" alt="Marketing Symbol">
                    <h3 class="margin-top-10px">Modernes Marketing</h3>
                    <p>Heutzutage bewerben viele Unternehmen ihre Produkte, Podcasts und Kampanien erfolgreich mittels Shortform Content – so auch meine Partner, deren Videos ich produziere!</p>
                </div> 
            </div>
        </div>

        <div class="service-container" id="coaching" style="text-align: left">
            <div class="hidden-top-to-bottom">
                <h2>Gaming Coach</h2>
                <p class="big-text">Seit 2022 bin ich <b class="green-text">erfolgreich</b> bei dem Freelancing-Dienst „Fiverr“ als Coach für das Videospiel „Rocket League“ tätig.</p>
                <hr class="horizontal-line-01" align="left">
            </div>
            <div class="service-sub-container">
                <div class="service-sub-element hidden-left-to-right">
                    <img src="images/icons/coach.png" alt="Coach Icon">
                    <h3 class="margin-top-10px">Etablierter Coach</h3>
                    <p>Nahezu 100 zufriedenen Kunden untermauern meine Fähigkeit zu lehren. Durch Kunden aus der ganzen Welt durfte ich viele Ansichten kennenlernen.</p>
                </div>
                <div class="service-sub-element hidden-left-to-right" style="transition-delay: 200ms;">
                    <img src="images/icons/Client.png" alt="Client symbol">
                    <h3 class="margin-top-10px">Wiederkehrende Kunden</h3>
                    <p>Meine Services haben eine hohe Anzahl an wiederkehrenden Kunden, welche durch rapide Resultate von meinem Coaching begeistert wurden.</p>
                </div>
                <div class="service-sub-element hidden-left-to-right" style="transition-delay: 400ms;">
                    <img src="images/icons/rating.png" alt="Rating Star Symbol">
                    <h3 class="margin-top-10px">Hervorragende Bewertung</h3>
                    <p>Von etwa 60 Bewertungen erhielten meine Dienste ein überzeugendes durchschnittliches Rating von 4.9 Sternen.</p>
                </div> 
            </div>
        </div>

        <form method="post">
            <div id="contact" class="flex-contact">
                <div class="flex-contact-left hidden-left-to-right">
                    <h2>Kontaktieren Sie mich</h2>
                    <p>Füllen Sie das Formular aus, und ich werde Ihnen zeitnah antworten.</p>
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
                        <p>Nachricht
                            <textarea name="Message"
                                style="margin-top:5px; padding:10px; width:100%; height: 200px; border-radius:8px;background-color:rgba(0,0,0,0.07);color:#111827; border:none"></textarea>
                        </p>
                    </div>
                    <div style="text-align: right;">
                        <input class="button" type="submit" value="Absenden"/>
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

        <div class="footer">
            <p>Website by Felix Payer 2023 ©</p>
            <p>Icons from <a style="color: #fff;" target="_blank" href="https://icons8.com">Icons8</a></p>
        </div>
    </div>
</body>

</html>