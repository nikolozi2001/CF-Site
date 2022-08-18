<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- seo meta tags -->
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Nika Kachibaia">
    <!-- facebook  meta tags -->
    <meta property="og:url" content="https://nikolozi2001.github.io/UniLab-NK-Lesson10/" />
    <meta property="og:type" content="lesson" />
    <meta property="og:title" content="Unilab" />
    <meta property="og:description" content="Unilab lessons 10" />
    <meta property="og:image" content="http://unilab.iliauni.edu.ge/wp-content/uploads/2020/02/frontendd.jpg" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico" />
    <title>Forms</title>
</head>

<body>
    <header>
        <div class="main-container">
            <div class="background-img">
                <div class="container flex">
                    <nav>
                        <h3 class="title">Contact</h3>
                        <ul class="flex">
                            <li class="nav-li">
                                <a href="#" class="nav-a">Home</a>
                            </li>
                            <span></span>
                            <li class="nav-li">
                                <a href="#" class="nav-a">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="map container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1770.4713783809566!2d44.799650591727236!3d41.72988156638339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472b62853ba09%3A0xa05d0cb0a0c61544!2z4YOh4YOQ4YOl4YOQ4YOg4YOX4YOV4YOU4YOa4YOd4YOhIOGDoeGDouGDkOGDouGDmOGDoeGDouGDmOGDmeGDmOGDoSDhg5Thg6Dhg53hg5Xhg5zhg6Phg5rhg5gg4YOh4YOQ4YOb4YOh4YOQ4YOu4YOj4YOg4YOY!5e0!3m2!1ska!2sge!4v1660713108822!5m2!1ska!2sge" width="100%" height="385" frameborder="0" style="padding: 50px 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="contact container">
        <a href="#" class="link-contact">CONTACT</a>
        <h3 class="contact-title">
            Contact us to get free support
        </h3>
    </div>
    <div class="form-container input-flex container">
        <form name="frmContact" id="frmcontact" frmContact"" method="post" action="https://formsubmit.co/mr.qachibaia@gmail.com" enctype="multipart/form-data" onsubmit="return validateContactForm()">

            <div class="inputs">
                <div class="input-row">
                    <label for="name"></label> <span id="userName-info" class="info"></span><br /> <input type="text" class="form-input" placeholder="Name" name="userName" id="userName" required />
                </div>
                <div class="input-row">
                    <label for="email"></label> <span id="userEmail-info" class="info"></span><br /> <input type="email" class="form-input" placeholder="Email" name="email" id="userEmail" required />
                </div>
                <div class="input-row">
                    <label for="subject"></label> <span id="subject-info" class="info"></span><br /> <input type="text" class="form-input" placeholder="Subject" name="subject" id="subject" required />
                </div>
                <div class="input-row">
                    <label for="message"></label> <span id="userMessage-info" class="info"></span><br />
                    <textarea name="content" id="content" class="description" placeholder="Text" cols="60" rows="6" required></textarea>
                </div>
                <div>
                    <input type="submit" name="send" class="send-button" value="Send" />
                    <input type="hidden" name="_cc" value="sandroambokadze@gmail.com">
                    <input type="hidden" name="_cc" value="nika.kachibaia.1@iliauni.edu.ge">
                    <!-- <input type="hidden" name="_cc" value="mr.qachibaia44@gmail.com"> -->
                    <!-- <input type="hidden" name="_cc" value="sandroambokadze@gmail.com"> -->
                    <input type="hidden" name="_cc" value="nkachibaia@geostat.ge">\
                    <input type="hidden" name="_cc" value="sambokadze@geostat.ge">
                    <!-- <input type="hidden" name="_next" value="https://localhost/CF-Site/thanks.php"> -->
                    <input type="hidden" name="_captcha" value="false">

                    <div id="statusMessage">
                        <?php
                        if (!empty($message)) {
                        ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<footer class="container">
    <div class="footer-flex">
        <div class="contact-flex">
            <span>
                <img src="photos/mail.svg" alt="email-icon" class="icon">
            </span>
            <ul class="contact-ul">
                <li class="contact-li bold">Email</li>
                <li class="contact-li">info@geostat.ge</li>
                <li class="contact-li">info@geostat.ge</li>
            </ul>
        </div>
        <div class="contact-flex">
            <span>
                <img src="photos/phone.svg" alt="phone-icon" class="icon">
            </span>
            <ul class="phone-ul">
                <li class="phone-li bold">Phone</li>
                <li class="phone-li">(+995 32) 236 72 10</li>
                <li class="phone-li">(+995 32) 260 11 60</li>
            </ul>
        </div>
        <div class="contact-flex">
            <span>
                <img src="photos/map-pin.svg" alt="map-icon" class="icon">
            </span>
            <ul class="location-ul">
                <li class="location-li bold">Location</li>
                <li class="location-li">ცენტრალური ოფისი: ქ. თბილისი</li>
                <li class="location-li">0180, ცოტნე დადიანის ქ. 30</li>
            </ul>
        </div>
    </div>
</footer>
<button onclick="myFunction()" class="apperance">Dark mode</button>
<script>
    function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
</script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>

</html>