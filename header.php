
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cyberzero is an community where students delve into the vast realm of computer science, fuelled by a passion for innovation and a desire to challenge their limits" />
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Cyberzero:community of students" />
    <meta property="og:description"
        content="Cyberzero is an community where students delve into the vast realm of computer science, fuelled by a passion for innovation and a desire to challenge their limits" />
    <meta property="og:url" content="https://cyberzero.club" />
    <meta property="og:image" content="https://cyberzero.club/assets/cyberzero.png" />
    <meta property="og:image:secure_url" content="assets/cyberzero.png" />
    <meta property="og:image:width" content="512" />
    <meta property="og:image:height" content="512" />
    <meta property="og:image:alt" content="Cyberzero" />
    <meta property="og:image:type" content="image/png" />

    <link rel="canonical" href="https://cyberzero.club" />

    <!-- Standard favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">

    <!-- For IE -->
    <link rel="icon" type="image/x-icon" href="assets/favicon/favicon.ico">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">

    <!-- Android Chrome Icon -->
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-chrome-192x192.png">

    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="src/output.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">
</head>

<body>
    <header
        class="z-40 fixed top-0 flex h-16 w-full shrink-0 items-center justify-between bg-gradient-to-b px-2 lg:px-8 ">

            <div class="h-10 w-10 lg:h-12 lg:w-12 relative">
                <a href="index" class="logo-container block h-full w-full relative">
                    <img src="assets/logo.webp" alt="CyberZero Logo"
                        class="logo_A absolute inset-0 h-full w-full opacity-100 transition-opacity duration-1000 ease-in-out">
                        </a><a href="https://niu.edu.in/">
                        <img src="assets/niu.png" alt="Niu Logo"
                        class="logo_B absolute inset-0 h-full w-full opacity-0 transition-opacity duration-1000 ease-in-out">
                </a>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const logoA = document.querySelector(".logo_A");
                    const logoB = document.querySelector(".logo_B");

                    function fadeInOut() {
                        logoA.style.opacity = 1;
                        logoB.style.opacity = 0;

                        setTimeout(() => {
                            logoA.style.opacity = 0;
                            logoB.style.opacity = 1;
                        }, 9000); // Adjust the duration of each logo's visibility (in milliseconds)

                        setTimeout(fadeInOut,7000); // Adjust the total duration of the loop (in milliseconds)
                    }

                    fadeInOut(); // Start the loop
                });
            </script>
            <ul id="options" class=" hidden lg:flex lg:justify-centre items-center gap-10 ">
                <a href="index" class="text-white hover:underline">
                    <span>Home</span>
                </a>
                <a href="event" class="text-white hover:underline">
				    <span>Events</span>
                </a>
                <a href="mentors" class="text-white hover:underline">
				    <span>Mentors</span>
                </a>
                <a href="members" class="text-white hover:underline">
				    <span>Members</span>
                </a>
                <a href="about.php" class="text-white hover:underline">
                    <span>About us</span>
                </a>
            </ul>
            <?php if (isset($_SESSION['token']) || isset($_SESSION['loggedin'])): ?>
                <div class="lg:block hidden relative text-left dropdown">
                    <span class="rounded-md shadow-sm"><button
                            class="inline-flex items-center justify-center w-10 h-10 transition duration-150 ease-in-out border border-gray-300 rounded-full hover:text-purple-800 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50"
                            type="button" aria-haspopup="true" aria-expanded="true"
                            aria-controls="headlessui-menu-items-117">
                            <img class="rounded-full" src="<?= $picture ?>" alt="pic">
                        </button>
                    </span>
                    <div
                        class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                        <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                            aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                            <div class="px-4 py-3">
                                <p class="text-sm font-medium leading-5 text-gray-900 truncate">
                                    <?= $email ?>

                                </p>
                            </div>
                            <div class="py-1">
                                <a href="#" tabindex="0"
                                    class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                    role="menuitem">Profile</a>
                                <a href="#" tabindex="1"
                                    class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                    role="menuitem">Support</a>
                                <span role="menuitem" tabindex="-1"
                                    class="flex justify-between w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 cursor-not-allowed opacity-50"
                                    aria-disabled="true">New feature (soon)</span>
                                <a href="#" tabindex="2"
                                    class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                    role="menuitem">Setting</a>
                            </div>
                            <div class="py-1">
                                <a href="logout.php" tabindex="3"
                                    class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                    role="menuitem">logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="lg:block hidden">
                    <a href="#"
                        class="inline-flex items-center justify-center rounded-md text-sm font-medium shadow  border h-8 px-4 py-2"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="white" class="h-4 w-4">
                            <path
                                d="M230.92 212c-15.23-26.33-38.7-45.21-66.09-54.16a72 72 0 1 0-73.66 0c-27.39 8.94-50.86 27.82-66.09 54.16a8 8 0 1 0 13.85 8c18.84-32.56 52.14-52 89.07-52s70.23 19.44 89.07 52a8 8 0 1 0 13.85-8ZM72 96a56 56 0 1 1 56 56 56.06 56.06 0 0 1-56-56Z">
                            </path>
                        </svg><span class="hidden text-white ml-2 md:flex">join</span>
                    </a>
                </div>
            <?php endif; ?>
            <div class="lg:hidden">
                <button id="open-sidebar" class="z-10 navbar-burger flex items-center text-grey-600 p-3">
                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15"></path>
                    </svg>
                </button>
            </div>
    </header>

    <style>
        .dropdown:focus-within .dropdown-menu {
            opacity: 1;
            transform: translate(0) scale(1);
            visibility: visible;
        }
    </style>

    <aside id="sidebar"
        class="z-50 w-60 fixed bg-gray-950 min-h-full shadow-xl px-3 overflow-x-hidden transition-transform transform -translate-x-full duration-300 ease-in-out">
        <div class="mt-10 mb-6 text-white text-center">
                <a href="auth/sign-in"
                    class="mx-auto w-20 h-20 rounded-full text-white border-gray-200 flex items-center justify-center transition duration-150 ease-in-out border hover:text-purple-800 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 ">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 15">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 7.5h11m0 0L8 3.786M12 7.5l-4 3.714M12 1h3c.53 0 1.04.196 1.414.544.375.348.586.82.586 1.313v9.286c0 .492-.21.965-.586 1.313A2.081 2.081 0 0 1 15 14h-3" />
                    </svg>
                </a>
                <span>Sign-In</span>
            </div>
        <div id="menu" class="flex flex-col space-y-2">
            <?php if (isset($_SESSION['token']) || isset($_SESSION['loggedin'])): ?>
                <a href="auth/sign-in"
                    class="text-sm font-medium text-white py-2 px-2 hover:bg-gray-300 hover:text-purple-800 hover:scale-105 rounded-md transition duration-150 ease-in-out">
                    <svg class="w-5 h-5 fill-current inline-block" fill="currentColor" viewBox="0 0 14 18"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z">
                        </path>
                    </svg>
                    <span class="">Profile</span>
                </a>
            <?php endif; ?>
            <a href="index"
                class="text-sm font-medium text-white py-2 px-2 hover:bg-gray-300 hover:text-purple-800 hover:scale-105 rounded-md transition duration-150 ease-in-out">
                <svg class="w-5 h-5 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z">
                    </path>
                </svg>
                <span class="">Home</span>
            </a>
            <a href="event"
                class="text-sm font-medium text-white py-2 px-2 hover:bg-gray-300 hover:text-purple-800 hover:scale-105 rounded-md transition duration-150 ease-in-out">
                <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="">Events</span>
            </a>
            <a href="mentors"
                class="text-sm font-medium text-white py-2 px-2 hover:bg-gray-300 hover:text-purple-800 hover:scale-105 rounded-md transition duration-150 ease-in-out">
                <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                    <path fill-rule="evenodd"
                        d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="">Mentors</span>
            </a>
            <a href="members"
                class="text-sm font-medium text-white py-2 px-2 hover:bg-gray-300 hover:text-purple-800 hover:scale-105 rounded-md transition duration-150 ease-in-out">
                <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                    </path>
                </svg>
                <span class="">Members</span>
            </a>
            <a href="about.php" style="
                display: flex;
                flex-wrap: nowrap;"
                class="text-sm font-medium text-white py-2 px-2 hover:bg-gray-300 hover:text-purple-800 hover:scale-105 rounded-md transition duration-150 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" x="0px" y="0px" width="19" height="19" viewBox="0 0 50 50">
                <path d="M 25 1 C 11.214844 1 0 10.960938 0 23.199219 C 0 29.113281 2.574219 34.644531 7.261719 38.835938 C 6.394531 41.394531 4.171875 43.15625 2.519531 44.464844 C 1.003906 45.664063 -0.09375 46.53125 0.234375 47.757813 L 0.339844 48.160156 L 0.699219 48.367188 C 1.609375 48.886719 2.820313 49.152344 4.308594 49.152344 C 9.257813 49.152344 16.371094 46.3125 19.503906 44.945313 C 21.285156 45.316406 23.054688 45.5 24.898438 45.5 C 38.6875 45.5 49.898438 35.539063 49.898438 23.300781 C 49.898438 11.003906 38.730469 1 25 1 Z M 26.601563 34 C 26.601563 34.199219 26.5 34.398438 26.199219 34.398438 L 23.902344 34.398438 L 23.902344 34.300781 C 23.699219 34.300781 23.5 34.199219 23.5 33.902344 L 23.5 20.5 C 23.5 20.300781 23.601563 20.101563 23.902344 20.101563 L 26.199219 20.101563 C 26.402344 20.101563 26.601563 20.199219 26.601563 20.5 Z M 26.601563 15.800781 C 26.601563 16 26.5 16.199219 26.199219 16.199219 L 23.800781 16.199219 C 23.601563 16.199219 23.402344 16.101563 23.402344 15.800781 L 23.402344 13.199219 C 23.402344 13 23.5 12.800781 23.800781 12.800781 L 26.199219 12.800781 C 26.402344 12.800781 26.601563 12.898438 26.601563 13.199219 Z"></path>
                </svg>
                <span style="margin: 5px;">About us</span>
            </a>
            <?php if (isset($_SESSION['token']) || isset($_SESSION['loggedin'])): ?>
                <a href="logout.php"
                    class="text-sm font-medium text-white py-2 px-2 hover:bg-gray-300 hover:text-purple-800 hover:scale-105 rounded-md transition duration-150 ease-in-out">
                    <svg class="w-5 h-5 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 16 16">
                        <path stroke="currentColor" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3" />
                    </svg>
                    <span class="">logout</span>
                </a>
            <?php endif; ?>
        </div>
        </div>
    </aside>
    <script>
        const sidebar = document.getElementById('sidebar');
        const openSidebarButton = document.getElementById('open-sidebar');

        openSidebarButton.addEventListener('click', (e) => {
            e.stopPropagation();
            sidebar.classList.toggle('-translate-x-full');
        });
        document.addEventListener('click', (e) => {
            if (!sidebar.contains(e.target) && !openSidebarButton.contains(e.target)) {
                sidebar.classList.add('-translate-x-full');
            }
        });
    </script>
</body>

</html>