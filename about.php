<?php include 'header.php'; ?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animation.css">
    <!-- AOS(animation on scroll) css -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>About us</title>
</head>
<style>
    body > * {
    overflow:hidden;
}
</style>
<body class="bg-gray-950">
    <!-- about us  -->
    <!-- <section class="text-gray-600 body-font">
        <div class="relative container flex flex-col-reverse py-8 md:flex-row items-center ">
            <div data-aos='zoom-in-right'
                class="slidetext">
                <h2 class="head text-4xl md:text-5xl font-bold mt-4">About us</h2>
                <p class="mb-4 leading-relaxed text-white mt-2 text-sm md:text-base">
                    CyberZero is a club of Noida international university
                    where students delve into
                    the vast realm of computer science, fuelled by a passion for innovation and a desire to challenge
                    their limits more than just a club it's a dynamic community of
                    forward-thinkers, creators, and enthusiasts. Our Vision
                    At CyberZero, we envision a world where students not only embrace the ever-evolving landscape of
                    computer science but actively contribute to its growth. Our vision is grounded in the belief that
                    starting from scratch breeds resilience, creativity, and a relentless pursuit of excellence.
                </p>
            </div>
            <swiper-container class="" navigation="false" space-between="30" centered-slides="true"
                autoplay-delay="2500" autoplay-disable-on-interaction="false">
                <swiper-slide class='rounded-[20px]'><img src="assets/slider/00.webp" alt="" class='rounded-20'>
                </swiper-slide>
                <swiper-slide class='rounded-[20px]'><img src="assets/slider/55.webp" alt="" class='rounded-20'>
                </swiper-slide>
                <swiper-slide class='rounded-[20px]'><img src="assets/slider/20.webp" alt="" class='rounded-20'>
                </swiper-slide>
                <swiper-slide class='rounded-[20px]'><img src="assets/slider/3.webp" alt="" class='rounded-20'>
                </swiper-slide>
                <swiper-slide><img src="assets/slider/4.jpeg" alt="" class='rounded-20'></swiper-slide>
                <swiper-slide class='rounded-[20px]'><img src="assets/slider/5.jpeg" alt=""></swiper-slide>
            </swiper-container>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </section> -->
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
            color: white;
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

        swiper-container{
            width: 100dvw;
            object-fit: cover;
            position: absolute;
            top: 0%;
            left: 0%;

        }
        swiper-slide{
            width: 100dvw;
            filter: opacity(0.5);
            object-fit: cover;
            height: 60%;
        }
        .slidetext{
            width: 100dvw;
            height: 100dvh;
            filter: opacity(2);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
    <a href="https://api.whatsapp.com/send/?phone=918265826529&amp;text&amp;app_absent=0" class="float" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="60" width="60"
            viewBox="-93.2412 -156.2325 808.0904 937.395">
            <defs>
                <linearGradient x1=".5" y1="0" x2=".5" y2="1" id="a">
                    <stop stop-color="#20B038" offset="0%" />
                    <stop stop-color="#60D66A" offset="100%" />
                </linearGradient>
                <linearGradient x1=".5" y1="0" x2=".5" y2="1" id="b">
                    <stop stop-color="#F9F9F9" offset="0%" />
                    <stop stop-color="#FFF" offset="100%" />
                </linearGradient>
                <linearGradient xlink:href="#a" id="f" x1="270.265" y1="1.184" x2="270.265" y2="541.56"
                    gradientTransform="scale(.99775 1.00225)" gradientUnits="userSpaceOnUse" />
                <linearGradient xlink:href="#b" id="g" x1="279.952" y1=".811" x2="279.952" y2="560.571"
                    gradientTransform="scale(.99777 1.00224)" gradientUnits="userSpaceOnUse" />
                <filter x="-.056" y="-.062" width="1.112" height="1.11" filterUnits="objectBoundingBox" id="c">
                    <feGaussianBlur stdDeviation="2" in="SourceGraphic" />
                </filter>
                <filter x="-.082" y="-.088" width="1.164" height="1.162" filterUnits="objectBoundingBox" id="d">
                    <feOffset dy="-4" in="SourceAlpha" result="shadowOffsetOuter1" />
                    <feGaussianBlur stdDeviation="12.5" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                    <feComposite in="shadowBlurOuter1" in2="SourceAlpha" operator="out" result="shadowBlurOuter1" />
                    <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.21 0" in="shadowBlurOuter1" />
                </filter>
                <path
                    d="M576.337 707.516c-.018-49.17 12.795-97.167 37.15-139.475L574 423.48l147.548 38.792c40.652-22.23 86.423-33.944 133.002-33.962h.12c153.395 0 278.265 125.166 278.33 278.98.025 74.548-28.9 144.642-81.446 197.373C999 957.393 929.12 986.447 854.67 986.48c-153.42 0-278.272-125.146-278.333-278.964z"
                    id="e" />
            </defs>
            <g fill="none" fill-rule="evenodd">
                <g transform="matrix(1 0 0 -1 -542.696 1013.504)" fill="#000" fill-rule="nonzero" filter="url(#c)">
                    <use filter="url(#d)" xlink:href="#e" width="100%" height="100%" />
                    <use fill-opacity=".2" xlink:href="#e" width="100%" height="100%" />
                </g>
                <path transform="matrix(1 0 0 -1 41.304 577.504)" fill-rule="nonzero" fill="url(#f)"
                    d="M2.325 274.421c-.014-47.29 12.342-93.466 35.839-134.166L.077 1.187l142.314 37.316C181.6 17.133 225.745 5.856 270.673 5.84h.12c147.95 0 268.386 120.396 268.447 268.372.03 71.707-27.87 139.132-78.559 189.858-50.68 50.726-118.084 78.676-189.898 78.708-147.968 0-268.398-120.386-268.458-268.358" />
                <path transform="matrix(1 0 0 -1 31.637 586.837)" fill-rule="nonzero" fill="url(#g)"
                    d="M2.407 283.847c-.018-48.996 12.784-96.824 37.117-138.983L.072.814l147.419 38.654c40.616-22.15 86.346-33.824 132.885-33.841h.12c153.26 0 278.02 124.724 278.085 277.994.026 74.286-28.874 144.132-81.374 196.678-52.507 52.544-122.326 81.494-196.711 81.528-153.285 0-278.028-124.704-278.09-277.98zm87.789-131.724l-5.503 8.74C61.555 197.653 49.34 240.17 49.36 283.828c.049 127.399 103.73 231.044 231.224 231.044 61.74-.025 119.765-24.09 163.409-67.763 43.639-43.67 67.653-101.726 67.635-163.469-.054-127.403-103.739-231.063-231.131-231.063h-.09c-41.482.022-82.162 11.159-117.642 32.214l-8.444 5.004L66.84 66.86z" />
                <path
                    d="M242.63 186.78c-5.205-11.57-10.684-11.803-15.636-12.006-4.05-.173-8.687-.162-13.316-.162-4.632 0-12.161 1.74-18.527 8.693-6.37 6.953-24.322 23.761-24.322 57.947 0 34.19 24.901 67.222 28.372 71.862 3.474 4.634 48.07 77.028 118.694 104.88 58.696 23.146 70.64 18.542 83.38 17.384 12.74-1.158 41.11-16.805 46.9-33.03 5.791-16.223 5.791-30.128 4.054-33.035-1.738-2.896-6.37-4.633-13.319-8.108-6.95-3.475-41.11-20.287-47.48-22.603-6.37-2.316-11.003-3.474-15.635 3.482-4.633 6.95-17.94 22.596-21.996 27.23-4.053 4.643-8.106 5.222-15.056 1.747-6.949-3.485-29.328-10.815-55.876-34.485-20.656-18.416-34.6-41.16-38.656-48.116-4.053-6.95-.433-10.714 3.052-14.178 3.12-3.113 6.95-8.11 10.424-12.168 3.467-4.057 4.626-6.953 6.942-11.586 2.316-4.64 1.158-8.698-.579-12.172-1.737-3.475-15.241-37.838-21.42-51.576"
                    fill="#FFF" />
            </g>
        </svg></i>
    </a>

    <section>
        <br/>
        <br/>
        <br/>
        <br/>
        <div class="relative container flex flex-col px-5 py-8 md:flex-row items-center">
            <div class="w-full sm:w-1/2 mt-30 flex justify-center">
                <img data-aos="zoom-in-right" src="assets/member/Anmol3.webp" alt="anmol" class="img rounded-full ">
            </div>
            <div data-aos="zoom-in-left"
                class=" lg:flex-grow md:w-1/2 lg:pr-8 md:pl-8 flex flex-col md:items-start md:text-left items-center text-center">
                <h2 class="head text-4xl pt-0 md:text-5xl lg:text-6xl font-bold mb-3">
                    Mr. Anmol Kumar</h2>
                <h6 class="text-2xl pt-0 md:pt-2 md:text-5xl lg:text-4xl font-bold mb-4 text-white">
                    Founder</h6>
                <p class="mb-4 leading-relaxed text-white mt-2 text-base sm:text-2xl md:text-base">
                    Hello I’m Anmol Kumar
                    ,the Founder of cyberZero.club
                    our community focused on raising awareness about cybersecurity
                    and promoting a safe digital environment.
                    this journey to protect ourselves and our digital future!
                    I’m incredibly passionate about cybersecurity,
                    with hands-on experience in tools,and hold certifications as an Enterprise Security Cyber
                    Criminologist,
                    Digital Forensics Investigator, Cyber Crime Investigator,
                    and Cyber Security Researcher.
                </p>
            </div>
        </div>
    </section>
    <!-- about us  -->
    <section class="text-gray-600 body-font">
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </section>
    <!-- our houourabel -->

    <section class="pt-5 pb-5 ">
        <span>
            <h2 class="head text-5xl font-bold text-center mb-10">Our Honourable's</h2>
        </span>
        <div class="flex flex-wrap items-center justify-evenly z-10">
            <div data-aos="fade-down-right"
                class=" relative container mx-auto flex flex-col px-5 py-8 md:flex-row items-center">
                <div class="w-full sm:w-1/2 flex justify-center mb-10 sm:mb-0">
                    <img src="assets/images/Dr.DeveshSingh.webp" alt="" class="object-cover rounded-full w-90 h-96">
                </div>
                <div class="w-full sm:w-1/2 h-full flex items-center text-left">
                    <span>
                        <h2 class="text-3xl pt-0 md:text-5xl lg:text-4xl font-bold mb-3 text-white">Dr. Devesh Kumar
                            Singh</h2>
                        <span
                            class="text-2xl pt-0 md:text-3xl lg:text-2xl font-semibold mb-3 text-white">Chairman</span>
                        <p class="text-white text-sm md:text-base">Dr. Devesh Kumar Singh, Hon’ble Chairman of Noida
                            International University.
                            In 2013, he successfully completed his doctorate and decided to join his family’s business
                            by taking reins of Noida International University.
                            His persistent drive that children should get the right to equal education.</p>
                    </span>
                </div>
            </div>
            <div data-aos="fade-down-left"
                class=" relative container mx-auto flex flex-col-reverse px-5 py-8 md:flex-row items-center">
                <div class="w-full sm:w-1/2 h-full flex items-center text-right">
                    <span>
                        <h2 class="text-3xl pt-0 md:text-5xl lg:text-4xl font-bold mb-3 text-white">Prof. (Dr.) Vikram
                            Singh</h2>
                        <span
                            class="text-2xl pt-0 md:text-3xl lg:text-2xl font-semibold mb-3 text-white">Chancellor</span>
                        <p class="text-white text-sm md:text-base">Prof. (Dr.) Vikram Singh is the Chancellor of Noida
                            International University and a retired Director General of Police (DGP) in Uttar Pradesh.
                            Known for his tireless efforts in curbing crime and establishing law and order, Dr. Vikram
                            Singh is a prominent figure with high integrity and discipline.</p>
                    </span>
                </div>
                <div class="w-full sm:w-1/2 flex justify-center mb-10 sm:mb-0">
                    <img src="assets/images/Dr.-Vikram-Singh.webp" alt="" class="object-cover rounded-full w-90 h-96">
                </div>
            </div>
            <div data-aos="fade-down-right"
                class="relative container mx-auto flex flex-col px-5 py-8 md:flex-row items-center">
                <div class="w-full sm:w-1/2 flex justify-center mb-10 sm:mb-0">
                    <img src="assets/images/Dr.-Uma-Bhardwaj.webp" alt="" class="object-cover rounded-full w-90 h-96">
                </div>
                <div class="w-full sm:w-1/2 h-full flex items-center text-left">
                    <span>
                        <h2 class="text-3xl pt-0 md:text-5xl lg:text-4xl font-bold mb-3 text-white">Prof.(Dr.)Uma
                            Bhardwaj</h2>
                        <span class="text-2xl pt-0 md:text-3xl lg:text-2xl font-semibold mb-3 text-white">Vice
                            Chancellor</span>
                        <p class="text-white text-sm md:text-base">Prof. (Dr.) Uma Bhardwaj serves as the
                            Vice-Chancellor of Noida International University. In a message to students and parents, she
                            emphasizes the institution's commitment to providing education aligned with industry
                            standards and producing skilled leaders capable of contributing to society.</p>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- Activities & Events -->
    <section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <h2 class="head text-5xl font-bold text-center mb-10 ">
                Activities & Events
            </h2>
        </div>
        <div class="flex flex-wrap justify-evenly items-center">
            <div data-aos="zoom-in-left" class="link mb-4 bg-gray-900">
                <a href="event">
                    <div class="flex flex-col md:max-w-sm max-w-xs justify-between p-5 border rounded shadow-sm">
                        <div class="  flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
                            <img src="assets/home/workshop.svg" alt="">
                        </div>
                        <h6 class="  head mb-2 font-semibold text-white leading-5">Workshops</h6>
                        <p class="  mb-3 text-sm text-white">
                            workshops to enhance your technical skills and knowledge in
                            cybersecurity.
                        </p>
                    </div>
                </a>
            </div>
            <div data-aos="zoom-in" class=" mb-4 bg-gray-900">
                <a href="event">
                    <div class="flex flex-col md:max-w-sm max-w-xs justify-between p-5 border rounded shadow-sm">
                        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
                            <img src="assets/home/hacker.svg" alt="">
                        </div>
                        <h6 class="head mb-2 font-semibold text-white leading-5">Hackathons</h6>
                        <p class="  mb-3 text-sm text-white">
                            Put your skills to the test and collaborate with like-minded individuals to solve real-world
                            cybersecurity challenges.
                        </p>
                    </div>
                </a>
            </div>
            <div data-aos="zoom-in-right" class="mb-4 bg-gray-900">
                <a href="event">
                    <div class="flex flex-col md:max-w-sm max-w-xs justify-between p-5 border rounded shadow-sm">
                        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
                            <img src="assets/home/speaker.svg" alt="">
                        </div>
                        <h6 class="head mb-2 font-semibold text-white leading-5">Guest Speakers</h6>
                        <p class="  mb-3 text-sm text-white">
                            Gain insights from industry experts and thought leaders through engaging talks and panel
                            discussions.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- <section>
        <div class='event'>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(assets/Event/1jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(assets/Event/1jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(https://i.postimg.cc/8cfgmQYD/campbell-3-ZUs-NJhi-Ik-unsplash.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(https://i.postimg.cc/8Ck5BcmS/evgeny-tchebotarev-aiwu-Lj-LPFn-U-unsplash.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(https://i.postimg.cc/66F8J9tr/hakon-sataoen-qyfco1nf-Mtg-unsplash.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(https://i.postimg.cc/ydbzRYvv/joey-banks-YApi-Wyp0lqo-unsplash.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(https://i.postimg.cc/NGKKzyqG/joshua-koblin-eq-W1-MPin-EV4-unsplash.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(https://i.postimg.cc/JhK81QJw/marcus-p-o-UBjd22g-F6w-unsplash.jpg)"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            partial
            <script src='https://unpkg.com/swiper@8/swiper-bundle.min.js'></script>
        </div>
    </section> -->
    <!-- contact section-->
    <section class="text-white body-font relative">
        <div class="container px-5 py-12 md:py-24 mx-auto flex flex-col lg:flex-row">
            <div data-aos="fade-right"
                class="lg:w-2/3 md:w-full bg-gray-300 rounded-lg overflow-hidden p-6 md:p-10 flex items-end justify-start relative">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
                    marginwidth="0" scrolling="no"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3510.555543571263!2d77.53691617438488!3d28.372283995853333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cc74a1da523db%3A0xf0736e7a99d63eb0!2sNoida%20International%20University!5e0!3m2!1sen!2sin!4v1699988235160!5m2!1sen!2sin"></iframe>
                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="title-font font-semibold text-gray-500 tracking-widest text-xs">ADDRESS</h2>
                        <p class="mt-1 text-black">Noida International University, Plot 1, Sector-17 A, Yamuna
                            Expressway, Gautam
                            Budh Nagar, Uttar Pradesh 203201</p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-semibold text-gray-500 tracking-widest text-xs">EMAIL</h2>
                        <a class="text-blue-500 leading-relaxed">info@cyberzero.club</a>
                        <h2 class="title-font font-semibold text-gray-500 tracking-widest text-xs mt-4">PHONE</h2>
                        <p class="leading-relaxed text-black">+918265826528</p>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left"
                class="lg:w-1/3 md:w-full bg-transparent md:pl-8 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="head text-lg mb-4 font-medium title-font">Contact us</h2>

                <form method="post" action="">
                    <div class="relative mb-4">
                        <label for="name" class="leading-7 text-sm text-white">Name</label>
                        <input type="text" name="name" id="name"
                            class="w-full bg-gray-950 rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-slate-300 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-white">Email</label>
                        <input type="email" name="email" id="email"
                            class="w-full bg-gray-950 rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-slate-300 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-white">Message</label>
                        <textarea name="message" id="message"
                            class="w-full bg-gray-950 rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 h-32 text-base outline-none text-slate-300 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                    <button
                        class="text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg"
                        type="submit" name="send">Send</button>
                </form>
            </div>
        </div>
    </section>
    <!-- AOS script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 200,
            once: false,
            easing: 'ease-in-out'
        });
    </script>
</body>

</html>
<?php include 'footer.php'; ?>