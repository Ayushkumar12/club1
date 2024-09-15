<?php include 'header.php';?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="js/jquery.popupoverlay.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='http://cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">
    <link href="css/timer.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- AOS(animation on scroll) css -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Cyberzero</title>
    
</head>

<!-- <body class="bg-gray-950"> -->
<body class="imgloaded">
<div id="fadeandscale" class="well">
        <a href= "https://lu.ma/xuc3qgn2"> 
         <img id="pop_img" class="hidden w-[30rem]" src="assets/home/23sep.jpg" alt="#">
        </a>
    </div>
    <script> 
            $(window).on('load', function () {
                $('#fadeandscale').popup({
                    transition: 'all 0.3s',
                    blur: true,
                    color: 'black',
                    opacity: '0.6',
                    escape: false,
                    scrolllock: true,
                    closebutton: true
                });
                $("#pop_img").show();
                $('#fadeandscale').popup('show');
            });  
    </script>
    <style>
        
        .well {
            filter: drop-shadow(0 0 10px rgba(0, 0, 0, 0.3));
            display: none;
            max-width: 740px;
        }

        .well .popup_close {
            position: absolute;
            top: 0;
            right: 0px;
            background: none;
            font-size: 25px;
            color:white;
        }

        .well {
            min-height: 20px;
            background-color: #f5f5f5;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05)
        }

        #fadeandscale {
            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            -ms-transform: scale(0.8);
            transform: scale(0.8);
        }

        .popup_visible #fadeandscale {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }
    </style>
    <div id="preloader">
    </div>

    <div >
        <div class="glitch">
            <div class="glitch__img"></div>
            <div class="glitch__img"></div>
            <div class="glitch__img"></div>
            <div class="glitch__img"></div>
            <div class="glitch__img"></div>
        </div>
        <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h1 class="display-1 bold color_white content__title">CyberZero Club<span
                                class="vim-caret">&nbsp;</span></h1>
                        <!-- <h1 class="display-3 bold color_white content__title2">Club</h1> -->
                    </div>
                </div>
                <div class="row align-items-center mt-5 ">
                    <div class="col-lg-12">
                        <h1 id="countdown_text" class="display-3 bold color_white content__title2"></h1>
                        <div class="container">
                            <div id="countdown">
                                <ul>
                                    <li><span id="days"></span>days</li>
                                    <li><span id="hours"></span>Hours</li>
                                    <li><span id="minutes"></span>Minutes</li>
                                    <li><span id="seconds"></span>Seconds</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <button class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter"
                            onclick="(function(){window.location.href='https://ctfd.uctf.ir'})();">
                            <h4>About Us</h4>
                        </button>
                        <button class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter"
                            onclick="(function(){window.location.href='https://ctfd.uctf.ir'})();">
                            <h4>Jion </h4>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="js/timer2.js"></script>
    <script src="js/preloader.js"></script>
    
    <!-- AOS script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset:200,
            once: false,
            easing: 'ease-in-out'
        });
    </script>
</body>
</html>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['send'])) {
    // Form variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Include PHPMailer configuration
    require 'auth/PHPMailer/Exception.php';
    require 'auth/PHPMailer/PHPMailer.php';
    require 'auth/PHPMailer/SMTP.php';

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = 'localhost';
        $mail->SMTPAuth = false;
        $mail->SMTPAutoTLS = false;

        // Sender and recipient email addresses
        $mail->setFrom('info@cyberzero.club', 'Cyberzero account team');
        $mail->addAddress('anshukiran.s30@gmail.com', 'Recipient');

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "Name: $name\n Email: $email\n\n$message";

        // Send the email
        $mail->send();

        echo '<script>alert("Message has been sent successfully!");</script>';
    } catch (Exception $e) {
        echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '");</script>';
    }
}
?>