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
    <link rel="shortcut icon" href="#" type="image/png">
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.1839160758814!2d-73.8272838850948!3d40.735978444086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c260618039000d%3A0x4e4216fa03a650cf!2sMain%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sge!4v1608990375227!5m2!1sen!2sge" width="100%" height="385" frameborder="0" style="padding: 50px 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="contact container">
        <a href="#" class="link-contact">CONTACT</a>
        <h3 class="contact-title">
            Contact us to get free support
        </h3>
    </div>
    <div class="form-container input-flex container">
        <form name="frmContact" id="" frmContact"" method="post" action="" enctype="multipart/form-data" onsubmit="return validateContactForm()">

            <div class="input-row">
                <label>Name</label> <span id="userName-info" class="info"></span><br /> <input type="text" class="form-input" name="userName" id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info" class="info"></span><br /> <input type="text" class="form-input" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Subject</label> <span id="subject-info" class="info"></span><br /> <input type="text" class="form-input" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info" class="info"></span><br />
                <textarea name="content" id="content" class="description" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="send-button" value="Send" />

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
                <li class="contact-li">Example@yahoo.com</li>
                <li class="contact-li">Examplemail@yahoo.com</li>
            </ul>
        </div>
        <div class="contact-flex">
            <span>
                <img src="photos/phone.svg" alt="phone-icon" class="icon">
            </span>
            <ul class="phone-ul">
                <li class="phone-li bold">Phone</li>
                <li class="phone-li">+0 320 422 4254</li>
                <li class="phone-li">+0 342 552 523</li>
            </ul>
        </div>
        <div class="contact-flex">
            <span>
                <img src="photos/map-pin.svg" alt="map-icon" class="icon">
            </span>
            <ul class="location-ul">
                <li class="location-li bold">Location</li>
                <li class="location-li">Main Str Chicago Ilinois</li>
                <li class="location-li">Main Street New York City</li>
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
<script src="script.js" type="text/javascript"></script>

</html>