<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>
            Bridge
        </title>
        <meta name="description" content="Simple landind page" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
        <style>
        .gradient {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        }
        </style>
    </head>

    <body class="leading-normal tracking-normal text-white gradient"
        style="font-family: 'Source Sans Pro', sans-serif;">
        <!--Nav-->
        <nav id="header" class="fixed w-full z-30 top-0 text-white">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
                <div class="pl-4 flex items-center">
                    <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                        href="#">
                        <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502"
                            transform="matrix(1,0,0,1,0,0)" />
                        <path class="plane-take-off"
                            d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z " />
                        </svg>
                        Bridge
                    </a>
                </div>
                <div class="block lg:hidden pr-4">
                    <button id="nav-toggle"
                        class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Bridge</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>
                <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20"
                    id="nav-content">
                    <ul class="list-reset lg:flex justify-end flex-1 items-center">
                        <li class="mr-3">
                            <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">Beranda</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                                href="#">Berita</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                                href="#">Tentang</a>
                        </li>
                    </ul>
                    <button id="navAction"
                        class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Location
                    </button>
                </div>
            </div>
            <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
        </nav>
        <!--Hero-->
        <div class="pt-24">
            <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <!--Left Col-->
                <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                    <!-- <p class="uppercase tracking-loose w-full">Selamat Datang di Website Bridge</p> -->
                    <h1 class="my-4 text-5xl font-bold leading-tight">
                        Selamat Datang di Website Bridge
                    </h1>
                    <p class="leading-normal text-2xl mb-8">
                        Bridge adalah salah satu permainan kartu yang dimana tidak seperti bermain kartu biasa tetapi
                        disini kita menggunakan pikiran kita untuk berpikir langkah selanjutnya yang akan kita buat.
                    </p>
                    <button
                        class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Instagram
                        <img class="w-full md:w-10 z-50" src="dist/instagram.png" />
                    </button>
                </div>
                <!--Right Col-->
                <div class="w-full md:w-3/5 py-6 text-center">
                    <img class="w-full md:w-4/5 z-50" src="dist/beranda.jpg" />
                </div>
            </div>
        </div>
        <div class="relative -mt-12 lg:-mt-24">
            <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="100" stroke-width="1000" fill="100" fill-rule="evenodd">
                    <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path
                            d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                            opacity="0.100000001"></path>
                        <path
                            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                            opacity="0.100000001"></path>
                        <path
                            d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                            id="Path-4" opacity="0.200000003"></path>
                    </g>
                    <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path
                            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                        </path>
                    </g>
                </g>
            </svg>
        </div>
        <section class="bg-white border-b py-8">
            <div class="container max-w-5xl mx-auto m-8">
                <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                    Berita
                </h2>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-5/6 sm:w-1/2 p-6">
                        <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                            Kemenangan Pada Saat Tournament Bridge
                        </h3>
                        <p class="text-gray-600 mb-8">
                            Berkat strategi yang brilian dan keahlian yang luar biasa, tim Bridge yang terdiri dari enam
                            pemain telah berhasil memenangkan pertandingan.
                            Dengan keunggulan yang signifikan, mereka mengalahkan tim lawan dengan skor yang
                            mengesankan. Taktik yang cerdas dan kemampuan berkomunikasi yang solid menjadi kunci
                            keberhasilan mereka dalam meraih gelar juara ini.
                            Para pemain Bridge menunjukkan keterampilan yang luar biasa dalam membaca permainan dan
                            mengambil keputusan yang tepat pada saat yang paling kritis. Tim ini benar-benar telah
                            menunjukkan dominasi mereka.
                            Pertandingan ini menjadi bukti nyata bahwa persiapan yang matang dan kerjasama yang solid
                            dapat menghasilkan kemenangan gemilang. Selain itu, pengalaman mereka yang luas dalam
                            bermain juga memberi mereka keunggulan yang tidak dapat disangkal.
                            <br />
                            <br />
                        </p>
                    </div>
                    <div class="w-full sm:w-1/2 p-6">
                        <svg class="w-full sm:h-100 mx-auto" viewBox="0 0 1177 598.5"
                            xmlns="http://www.w3.org/2000/svg">
                            <a class="flex items-center" href="#"></a>
                            <img src="dist/berita01.jpg" class="w-full sm:h-64 mx-auto" alt="Berita Pertama" />
                            <title></title>
                        </svg>
                    </div>
                </div>
                <div class="flex flex-wrap flex-col-reverse sm:flex-row">
                    <div class="w-full sm:w-1/2 p-6 mt-6">
                        <svg class="w-5/6 sm:h-64 mx-auto" viewBox="0 0 1176.60617 873.97852"
                            xmlns="http://www.w3.org/2000/svg">
                            <img src="dist/berita02.jpg" class="w-full sm:h-64 mx-auto" alt="Berita Kedua" />
                        </svg>
                    </div>
                    <div class="w-full sm:w-1/2 p-6 mt-6">
                        <div class="align-middle">
                            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                                Nama Atlet yang mendapatkan juara
                            </h3>
                            <p class="text-gray-600 mb-8">
                                Ini dia pemain bridge yang patut diperkenalkan kepada dunia. Berikut adalah 6 pemain
                                yang mendapatkan juara pada saat tournament bridge.
                                1. Ecky Manu Pramana.
                                2. Gana Nareswarya.
                                3. Anindya Nariswari.
                                4. Anggita Sidi Karang.
                                5. Miyuki Septi anggarini.
                                6. Eilin Athalia.
                                Inilah 6 pemain bridge yang patut diperkenalkan karena prestasi mereka yang mengesankan.
                                <a class="text-pink-500 underline" href="#"></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");

        document.addEventListener("scroll", function() {

            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                header.classList.add("bg-white");
                navaction.classList.remove("bg-white");
                navaction.classList.add("gradient");
                navaction.classList.remove("text-gray-800");
                navaction.classList.add("text-white");

                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-gray-800");
                    toToggle[i].classList.remove("text-white");
                }
                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("bg-white");
            } else {
                header.classList.remove("bg-white");
                navaction.classList.remove("gradient");
                navaction.classList.add("bg-white");
                navaction.classList.remove("text-white");
                navaction.classList.add("text-gray-800");

                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-white");
                    toToggle[i].classList.remove("text-gray-800");
                }

                header.classList.remove("shadow");
                navcontent.classList.remove("bg-white");
                navcontent.classList.add("bg-gray-100");
            }
        });
        </script>
        <script>
        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                if (checkParent(target, navMenu)) {
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    navMenuDiv.classList.add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
        </script>
    </body>

    </html>
</x-app-layout>