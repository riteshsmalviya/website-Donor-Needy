<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="logo.png">
    <title>Donor & Needy</title>
</head>

<body>
    <!-- component -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="w-full text-gray-700 bg-purple-600 bg-opacity-25">
        <div x-data="{ open: false }"
            class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between">
                <span><img src="logo.png" alt="" class="rounded-full" width="70" height="70"></span>

                <span>
                    <h1 class="text-3xl">Donor & Needy</h1>
                </span>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}"
                class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900  rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600  dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-white focus:text-gray-900 hover:bg-purple-700 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="index.php">Home</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:bg-purple-700 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="donor.php">Donor</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:bg-purple-700 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="needy.php">Needy</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:bg-purple-700 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="about.php">About Us </a>

            </nav>
        </div>
    </div>
    <section class="text-gray-600 body-font ">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20">
                <h1
                    class="text-6xl font-medium  text-white mb-4 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500">
                    Welcome to Donor & Needy</h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-900">Hey guys!<br>
                    We are seeing people suffering from covid-19. So as an Indian we have some responsibilities to help
                    our countrymen. If you want to help people. If you wanted to donate your resources you are at a
                    right place. Give you required details below. Please share this website to all of your friend and
                    family people that you can help more and more people.</p>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-green-500 inline-flex"></div>
                </div>
            </div>

            <a href="index.php#team"><button
                    class="flex mx-auto mt-16 text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg animate-bounce ">Know
                    More</button></a>
        </div>
    </section>
    <section id="services">
        <div class="flex mt-6 justify-center">
            <div class="w-64 h-1 rounded-full bg-green-500 inline-flex"></div>
        </div>
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div
                    class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">DONOR</h1>
                    <p class="mb-8 leading-relaxed">If you want to donate you have to give your details. Give your
                        details properly so needy can reach to you easily !</p>
                    <a href="donor.php"><button
                            class="flex mx-auto mt-16 text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg animate-bounce ">I want to donate</button></a>
                    <div class="flex w-full md:justify-start justify-center items-end">


                    </div>
                    <!-- <p class="text-sm mt-2 text-gray-500 mb-8 w-full">Neutra shabby chic ramps, viral fixie.</p> -->

                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded" width="720" height="200" alt="hero" src="donor.png">
                </div>
            </div>


            <div class="flex mt-6 justify-center">
                <div class="w-64 h-1 rounded-full bg-green-500 inline-flex"></div>

            </div>
            <section class="text-gray-600 body-font">
                <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                        <img class="object-cover object-center rounded" alt="hero" src="needy.png">
                    </div>
                    <div
                        class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
                            NEEDY
                            <br class="hidden lg:inline-block">
                        </h1>
                        <p class="mb-8 leading-relaxed">If you want resources you have to fill details. give your
                            details properly so donor can reach to you easily !</p>
                        <a href="needy.php"><button
                                class="flex mx-auto mt-16 text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg animate-bounce ">I need resources</button></a>
                    </div>
                </div>
                <div class="flex mt-6 justify-center">
                    <div class="w-64 h-1 rounded-full bg-green-500 inline-flex"></div>

                </div>
                <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                    <div
                        class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Donor & Needy</h1>
                        <p class="mb-8 leading-relaxed">How to use it !</p>
                        <div class="flex w-full md:justify-start justify-center items-end">


                        </div>
                        <!-- <p class="text-sm mt-2 text-gray-500 mb-8 w-full">Neutra shabby chic ramps, viral fixie.</p> -->

                    </div>
                    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                        <!-- <img class="object-cover object-center rounded" alt="hero" src="donor.jpg"> -->
                        <video controls poster="donor.jpg">
                            <source src="donor and needy.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </section>
        </section>
        <div class="flex mt-6 justify-center">


        </div>
        <section class="text-gray-600 body-font" id="team">

            </div>
        </section>
        <div class="flex mt-6 justify-center">


        </div>
        <section class="text-gray-600 body-font">

        </section>
        <div class="flex mt-6 justify-center">


        </div>
</body>
<footer class="text-gray-600 body-font">

    <div class="bg-gray-900 bg-opacity-100">
        <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class="text-gray-500 text-sm text-center sm:text-left ">© 2021 Donor & Needy

            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                <a class="text-gray-500 cursor-pointer hover:text-white">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500 cursor-pointer hover:text-white">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a href="https://www.instagram.com/sabsealag07/"
                    class="ml-3 text-gray-500 cursor-pointer hover:text-white" target="_blank">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500 cursor-pointer hover:text-white">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </div>
</footer>

</html>