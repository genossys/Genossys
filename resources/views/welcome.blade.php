<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Genossys || Make your dream Apps & Website</title>

    {{-- Genosstyle --}}
    <link href="{{ asset('css/genosstyle.css') }} " rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- AOS JS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,800&display=swap"
        rel="stylesheet">



    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>

</head>

<body>
    <div class="">

        {{-- NAVBAR --}}
        <nav
            class="z-20 bg-white border-gray-200 fixed top-0 left-0 right-0 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900 shadow-sm">
            <div class="container flex flex-wrap items-center justify-between mx-auto ">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Genossys</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#beranda" class="block py-2 pl-3 pr-4 nav-link" aria-current="page">Beranda</a>
                        </li>
                        <li>
                            <a href="#layanan" class="block py-2 pl-3 pr-4 nav-link" aria-current="page">Layanan</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="block py-2 pl-3 pr-4 nav-link" aria-current="page">Portfolio</a>
                        </li>
                        <li>
                            <a href="#client" class="block py-2 pl-3 pr-4 nav-link" aria-current="page">Klien</a>
                        </li>
                        <li>
                            <a href="#contact" class="block py-2 pl-3 pr-4 nav-link" aria-current="page">Kontak</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        {{-- HERO --}}
        <section class="hero bg-white " id="beranda">
            {{-- Headline --}}
            <div class="absolute md:left-20 md:top-1/3 md:w-1/3 top-36 left-5 right-5 z-10">
                <p class="md:text-5xl text-xl font-medium leading-snug" data-aos="fade-right" data-aos-duration="300">
                    Wujudkan
                    Aplikasi dan Website
                    Impianmu
                </p>
                <p class="mt-4" data-aos="fade-right" data-aos-duration="400">Kami siap untuk mewujudkan aplikasi dan
                    website yang kamu
                    impikan, kontak kami untuk
                    informasi lebih lanjut</p>
                <div data-aos="fade-right" data-aos-duration="500">
                    <a class="mt-6 inline-block button" href="#">Kontak
                        Kami</a>
                </div>
            </div>

            <img class="absolute right-0 top-0 h-100% sm:block hidden"
                src="{{ asset('assets/images/background.png') }}" />
            <div class="absolute right-5 bottom-0 h-75%">
                <img class=" object-bottom object-contain h-full" src="{{ asset('assets/images/heroimage.png') }}" />
                <img class="absolute object-contain acc1" src="{{ asset('assets/images/heroacc1.png') }}" />
                <img class="absolute object-contain  md:block hidden  acc2"
                    src="{{ asset('assets/images/heroacc2.png') }}" />
                <img class="absolute object-contain  md:block hidden  acc3"
                    src="{{ asset('assets/images/heroacc3.png') }}" />
                <img class="absolute object-contain  md:block hidden  acc4"
                    src="{{ asset('assets/images/heroacc4.png') }}" />
                <img class="absolute object-contain md:block hidden  acc5"
                    src="{{ asset('assets/images/heroacc5.png') }}" />
                <img class="absolute object-contain    acc6" src="{{ asset('assets/images/heroacc6.png') }}" />
            </div>




        </section>

        {{-- OUR SERVICE --}}
        <a class="anchor" id="layanan"></a>
        <section class="ourservice">
            <div class="container  grid md:grid-cols-4 grid-cols-1 p-5 gap-10">
                <div data-aos="fade-up" data-aos-duration="500">
                    <div class="flex justify-center items-center">
                        <p class="md:text-4xl text-2xl font-medium text-center">Layanan <br> Kami</p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="600">
                    <div class="card flex flex-col p-3 justify-center items-center" x-data="{ hover: false }"
                        x-effect="console.log(hover)" x-on:mouseenter="hover = true" @mouseover.away="hover = false">
                        <img class="h-16 icon object-contain" :class="hover ? 'hovered' : ''"
                            src="{{ asset('/assets/images/online-test.png') }}" />
                        <p class="text-center mt-3 text-lg font-medium leading-5">WEB <br> DEVELOPER</p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="700">
                    <div class="card flex flex-col p-3 justify-center items-center" x-data="{ hover: false }"
                        x-effect="console.log(hover)" x-on:mouseenter="hover = true" @mouseover.away="hover = false">
                        <img class="h-16 icon object-contain" :class="hover ? 'hovered' : ''"
                            src="{{ asset('/assets/images/android.png') }}" />
                        <p class="text-center mt-3 text-lg font-medium leading-5">ANDROID <br> DEVELOPER</p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="800">
                    <div class="card flex flex-col p-3 justify-center items-center" x-data="{ hover: false }"
                        x-effect="console.log(hover)" x-on:mouseenter="hover = true" @mouseover.away="hover = false">
                        <img class="h-16 icon object-contain" :class="hover ? 'hovered' : ''"
                            src="{{ asset('/assets/images/smartphone.png') }}" />
                        <p class="text-center mt-3 text-lg font-medium leading-5">IOS <br> DEVELOPER</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- QUESTION --}}
        <section class="question container mx-auto max-w-4xl">

            <p class="text-center md:text-4xl text-xl  p-5 md:p-0 font-medium" data-aos="fade-up"
                data-aos-duration="300">
                Pernahkah anda
                memikirkan sebuah ide untuk membuat website
                yang
                hebat dan keren, tapi bingung bagaimana cara membuatnya ? </p>

            <div class="">
                <p class="text-center mt-5 text-2xl p-5 md:p-0 text-gray-800" data-aos="fade-up"
                    data-aos-duration="300">Ini
                    adalah beberapa
                    langkah yang harus kamu lakukan </p>

                <ol
                    class="mt-16 relative p-5 md:p-0  text-gray-500 border-l border-gray-200 dark:border-gray-700 dark:text-gray-400 ml-auto mr-auto max-w-xl">
                    <li class="mb-10 ml-6" data-aos="fade-up" data-aos-duration="300">

                        <span
                            class="absolute flex items-center  justify-center w-8 h-8 bg-red-500 rounded-full text-white -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                            1
                        </span>
                        <div class="md:ml-5 ml-7">
                            <h3 class="font-medium text-2xl  leading-tight text-red-500">Hubungi Kami</h3>
                            <p class="text-lg mt-3 card">Ceritakan Secara detail website atau aplikasi yang ingin kamu
                                buat <br><span>
                                    <a class="mt-6 inline-block button-sm text-sm md:text-sm"
                                        href="https://wa.me/628975050520" target="_blank">Hubungi Kami Sekarang</a>
                                </span> </p>

                        </div>

                    </li>

                    <li class="mb-10 ml-6" data-aos="fade-up" data-aos-duration="300">

                        <span
                            class="absolute flex items-center justify-center w-8 h-8 bg-red-500 rounded-full text-white  -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                            2
                        </span>
                        <div class="md:ml-5 ml-7">
                            <h3 class="font-medium text-2xl leading-tight text-red-500">Tunggu Penawaran Dari Kami</h3>
                            <p class="text-lg mt-3 card">Kami akan memberikan penawaran yang menarik dengan beberapa
                                pilihan </p>
                        </div>

                    </li>

                    <li class="mb-10 ml-6" data-aos="fade-up" data-aos-duration="300">

                        <span
                            class="absolute flex items-center justify-center w-8 h-8 bg-red-500 rounded-full text-white  -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                            3
                        </span>
                        <div class="md:ml-5 ml-7">
                            <h3 class="font-medium text-2xl  leading-tight text-red-500">Tanda Tangan MOU</h3>
                            <p class="text-lg mt-3 card">Kami akan menyiapkan MOU yang akan disetujui kedua pihak </p>
                        </div>

                    </li>

                    <li class="mb-10 ml-6" data-aos="fade-up" data-aos-duration="300">

                        <span
                            class="absolute flex items-center justify-center w-8 h-8 bg-red-500 rounded-full text-white  -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                            4
                        </span>
                        <div class="md:ml-5 ml-7">
                            <h3 class="font-medium text-2xl  leading-tight text-red-500">Proses Pengerjaan Website atau
                                Aplikasi</h3>
                            <p class="text-lg mt-3 card">Kami akan mengerjakan website dan aplikasi sesuai dengan
                                persetujuan dari MOU yang ditanda tangani </p>
                        </div>

                    </li>

                    <li class="mb-10 ml-6 " data-aos="fade-up" data-aos-duration="300">

                        <span
                            class="absolute flex items-center justify-center w-8 h-8 bg-red-500 rounded-full text-white  -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                            5
                        </span>
                        <div class="md:ml-5 ml-7">
                            <h3 class="font-medium text-2xl  leading-tight text-red-500">Proses Serah Terima Website
                                atau Aplikasi</h3>
                            <p class="text-lg mt-3 card">Setelah website atau aplikasi selesai dibuat maka akan ada
                                serah teruma website atau aplikasi, akan ada training "Jika dibutuhkan" </p>
                        </div>

                    </li>

                    <li class="mb-10 ml-6" data-aos="fade-up" data-aos-duration="300">

                        <span
                            class="absolute flex items-center justify-center w-8 h-8 bg-red-500 rounded-full text-white  -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                            6
                        </span>
                        <div class="md:ml-5 ml-7">
                            <h3 class="font-medium text-2xl  leading-tight text-red-500">Support</h3>
                            <p class="text-lg mt-3 card">Kami juga akan memberikan support dengan maintenance berkala
                            </p>
                        </div>

                    </li>

                </ol>
            </div>




        </section>


        <section class="purpose container max-w-6xl md:mt-36 mt-10 mx-auto ">
            <div class="card md:mx-auto mx-5" data-aos="fade-up" data-aos-duration="300">
                <p class="md:text-4xl text-xl text-center text-white">Tujuan Kami adalah membuat website atau aplikasi
                    impianmu
                    menjadi nyata dan membuat usahamu berkembang</p>
            </div>
        </section>

        <a class="anchor" id="portfolio"></a>
        <section class="portfolio mt-36 ">
            <div class="mx-auto container">
                <div>
                    <p class="text-2xl md:text-4xl text-center md:mx-0 mx-5" data-aos="fade-up"
                        data-aos-duration="300"><span class="text-red-500">Project </span> yang Telah Kami Buat
                    </p>
                </div>

                <div class="grid md:grid-cols-3 grid-cols-1 gap-10 mt-10 mx-5 md:mx-0">

                    <div class=" bg-white border border-gray-200 rounded-lg shadow-sm " data-aos="fade-up"
                        data-aos-duration="300">
                        <a href="#">
                            <img class="rounded-t-lg h-72 object-cover w-full" src="assets/images/sukmatrip.jpg"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Sukmatrip.com</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Sukmatrip adalah perusahaan
                                jasa yang dikhususkan untuk perjalanan bulan madu serta perjalanan romantis lainnya.
                                Kami hadir sejak tahun 2019 </p>

                        </div>
                    </div>

                    <div class=" bg-white border border-gray-200 rounded-lg shadow-sm " data-aos="fade-up"
                        data-aos-duration="300">
                        <a href="#">
                            <img class="rounded-t-lg h-72 object-cover w-full" src="assets/images/omahgue.jpg"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Omah Gue</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">OmahGue hadir untuk anda yang
                                memiliki mobilitas tinggi agar tetap betah dimanapun anda berada, mencari tempat
                                menginap, tempat usaha dan tempat kerja lebih mudah dan murah. </p>

                        </div>
                    </div>

                    <div class=" bg-white border border-gray-200 rounded-lg shadow-sm " data-aos="fade-up"
                        data-aos-duration="300">
                        <a href="#">
                            <img class="rounded-t-lg h-72 object-cover w-full" src="assets/images/solopos.jpg"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Solopos</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Aplikasi berita terupdate,
                                dengan beberapa kategori yang disediakan sehingga mencari berita menjadi lebih mudah.
                            </p>

                        </div>
                    </div>

                    <div class=" bg-white border border-gray-200 rounded-lg shadow-sm " data-aos="fade-up"
                        data-aos-duration="300">
                        <a href="#">
                            <img class="rounded-t-lg h-72 object-cover w-full" src="assets/images/fasya.jpg"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Fakultas Syariah </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Web Profile Fakultas Syariah
                                Raden Mas Said Surakarta, dengan fitur share materi oleh dosen atau admin, sehingga
                                mahasiswa dapat memperoleh materi secara berkala melalui website ini. </p>

                        </div>
                    </div>

                    <div class=" bg-white border border-gray-200 rounded-lg shadow-sm " data-aos="fade-up"
                        data-aos-duration="300">
                        <a href="#">
                            <img class="rounded-t-lg h-72 object-cover w-full" src="assets/images/kiwi.jpg"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Are You Smartest Kiwi</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Sebuah Aplikasi trivia dari
                                New Zeland, dilengkapi dengan admin panel untuk menambah soal trivia dan dilengkapi juga
                                sistem score, sehingga lebih competitive</p>

                        </div>
                    </div>

                    <div class=" bg-white border border-gray-200 rounded-lg shadow-sm " data-aos="fade-up"
                        data-aos-duration="300">
                        <a href="#">
                            <img class="rounded-t-lg h-72 object-cover w-full" src="assets/images/rsx.jpg"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Raja Sulaiman Express</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Web Profile perusahaan jasa
                                pengiriman barang yang dilengkapi dengan fitur cek resi yang sederhana dan mudah
                                pemakaianya. </p>

                        </div>
                    </div>

                    <div class=" bg-white border border-gray-200 rounded-lg shadow-sm " data-aos="fade-up"
                        data-aos-duration="300">
                        <a href="#">
                            <img class="rounded-t-lg h-72 object-cover w-full" src="assets/images/temanbelajar.jpg"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Teman Belajar</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Website dan aplikasi start up
                                di Surakarta yang mempertemukan penyedia jasa kursus dan siswa yang ingin belajar mata
                                pelajaran tertentu atau Skill tertentu. Terdapat fitur Offline dan Online. </p>

                        </div>
                    </div>

                    <div class=" bg-white border border-gray-200 rounded-lg shadow-sm " data-aos="fade-up"
                        data-aos-duration="300">
                        <a href="#">
                            <img class="rounded-t-lg h-72 object-cover w-full" src="assets/images/yousee.jpg"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Yousee Indonesia</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Website internal yang
                                berfungsi untuk melakukan pencatatan lokasi titik baliho yang akan ditampilkan langsung
                                melalui google maps.</p>

                        </div>
                    </div>


                </div>

            </div>
        </section>

        <a class="anchor" id="client"></a>
        <section class="client">
            <div class="mx-auto container">
                <div>
                    <p class="text-4xl text-center" data-aos="fade-up" data-aos-duration="300"><span
                            class="text-red-500">Klien </span> Kami
                    </p>
                </div>

                <div class="flex flex-wrap mt-16 gap-24 justify-center items-center">
                    <img class="imagelogo h-12" src="{{ asset('assets/images/sukmatriplogo.png') }}"
                        data-aos="fade-up" data-aos-duration="300" />
                    <img class="imagelogo h-20" src="{{ asset('assets/images/fasyalogo.png') }}" data-aos="fade-up"
                        data-aos-duration="400" />
                    <img class="imagelogo h-20" src="{{ asset('assets/images/omahguelogo.png') }}"
                        data-aos="fade-up" data-aos-duration="500" />
                    <img class="imagelogo h-20" src="{{ asset('assets/images/psglogo.png') }}" data-aos="fade-up"
                        data-aos-duration="600" />
                    <img class="imagelogo h-16" src="{{ asset('assets/images/rsxlogo.png') }}" data-aos="fade-up"
                        data-aos-duration="700" />
                    <img class="imagelogo h-8" src="{{ asset('assets/images/soloposlogo.png') }}" data-aos="fade-up"
                        data-aos-duration="800" />
                    <img class="imagelogo h-14" src="{{ asset('assets/images/temanbelajarlogo.png') }}"
                        data-aos="fade-up" data-aos-duration="900" />
                    <img class="imagelogo  h-16" src="{{ asset('assets/images/youseelogo.png') }}"
                        data-aos="fade-up" data-aos-duration="1000" />
                </div>
            </div>
        </section>

        <a class="anchor" id="contact"></a>
        <section class="kontak">

            <div class="mx-auto container">

                <div class="">
                    <div class="info">
                        <p class="text-4xl text-center" data-aos="fade-up" data-aos-duration="300"><span
                                class="text-red-500">Kontak </span> Kami
                        </p>
                        <p class="text-center p-10 mb-0 pb-0 text-2xl text-gray-600" data-aos="fade-up"
                            data-aos-duration="300">Office</p>
                        <a class="text-center link font-bold text-lg block" data-aos="fade-up"
                            data-aos-duration="300" href="https://goo.gl/maps/74mbortfrDm1H2a68" target="_blank">Jl.
                            Ontorejo no: 8 Serengan
                            Serengan
                            Surakarta
                        </a>

                        <div class="md:grid md:grid-cols-3 " data-aos="fade-up" data-aos-duration="300">
                            <div>
                                <p class="text-center p-10 mb-0 pb-0 text-2xl text-gray-600">Instagram</p>
                                <a class="text-center link font-bold block text-lg"
                                    href="https://www.instagram.com/genossys/" target="_blank">@genossys
                                </a>
                            </div>
                            <div>
                                <p class="text-center p-10 mb-0 pb-0 text-2xl text-gray-600">Whatsapp</p>
                                <a class="text-center link font-bold block text-lg" href="https://wa.me/628975050520"
                                    target="_blank">0897-5050-520
                                </a>
                            </div>
                            <div>
                                <p class="text-center p-10 mb-0 pb-0 text-2xl text-gray-600">Facebook</p>
                                <a class="text-center link font-bold block text-lg"
                                    href="https://www.facebook.com/genossys" target="_blank">Genossys
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer  ">
            <div class="container grid md:grid-cols-4 grid-cols-1 gap-10 md:mx-auto md:px-0 px-5">
                <div class="md:col-span-2">
                    <p class="title">Sejarah Singkat</p>
                    <p class="content text-sm">Genossys didirikan pada tahun 2019 di Kota Surakarta sebagai perusahaan
                        pengembangan perangkat lunak. Perusahaan ini didirikan oleh Pradana Mahendra, Bagus Yanuar,
                        Taufiq
                        Muhajir dan Erfin Aditya, yang merupakan teman-teman kuliah di salah satu Universitas di
                        Surakarta
                        yang
                        memiliki pengalaman luas dalam bidang teknologi informasi. <br><br>

                        Pada awalnya, perusahaan ini hanya untuk mengerjakan pekerjaan sampingan dan hanya membuat
                        project-project kecil saja, tapi seiring berjalanya waktu project yang dikerjakan mulai besar
                        dan
                        harus
                        dikerjakan dengan serius, jadi kami memutuskan untuk keluar dari pekerjaan utama dan serius
                        untuk
                        membuat Genossys menjadi besar. <br><br>

                        Dalam beberapa tahun terakhir, Genossys telah menjadi mengerjakan project-project dengan skala
                        besar
                        dan
                        komplek. Genossys terus berkembang dan mengikuti perkembangan teknologi informasi, dan
                        berkomitmen untuk memberikan solusi perangkat lunak terbaik dan terbaru kepada pelanggan.</p>
                </div>
                <div>
                    <p class="title">Menu</p>
                    <a class="link" href="#beranda">Beranda</a>
                    <a class="link" href="#layanan">Layanan Kami</a>
                    <a class="link" href="#portfolio">PortFolio</a>
                    <a class="link" href="#client">Klien Kami</a>
                    <a class="link" href="#contact">Kontak Kami</a>
                </div>
                <div>
                    <p class="title">Media Sosial</p>
                    <a><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="iconsocial"
                            viewBox="0 0 30 30">
                            <path fill="currentColor"
                                d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z">
                            </path>
                        </svg></a>
                    <a><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="iconsocial"
                            viewBox="0 0 30 30">
                            <path fill="currentColor"
                                d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M19.181,11h-1.729 C16.376,11,16,11.568,16,12.718V14h3.154l-0.428,3H16v7.95C15.671,24.982,15.338,25,15,25c-0.685,0-1.354-0.07-2-0.201V17h-3v-3h3 v-1.611C13,9.339,14.486,8,17.021,8c1.214,0,1.856,0.09,2.16,0.131V11z">
                            </path>
                        </svg></a>
                    <a><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"class="iconsocial"
                            viewBox="0 0 30 30">
                            <path fill="currentColor"
                                d="M 15 3 C 8.373 3 3 8.373 3 15 C 3 17.251208 3.6323415 19.350068 4.7109375 21.150391 L 3.1074219 27 L 9.0820312 25.431641 C 10.829354 26.425062 12.84649 27 15 27 C 21.627 27 27 21.627 27 15 C 27 8.373 21.627 3 15 3 z M 10.892578 9.4023438 C 11.087578 9.4023438 11.287937 9.4011562 11.460938 9.4101562 C 11.674938 9.4151563 11.907859 9.4308281 12.130859 9.9238281 C 12.395859 10.509828 12.972875 11.979906 13.046875 12.128906 C 13.120875 12.277906 13.173313 12.453437 13.070312 12.648438 C 12.972312 12.848437 12.921344 12.969484 12.777344 13.146484 C 12.628344 13.318484 12.465078 13.532109 12.330078 13.662109 C 12.181078 13.811109 12.027219 13.974484 12.199219 14.271484 C 12.371219 14.568484 12.968563 15.542125 13.851562 16.328125 C 14.986562 17.342125 15.944188 17.653734 16.242188 17.802734 C 16.540187 17.951734 16.712766 17.928516 16.884766 17.728516 C 17.061766 17.533516 17.628125 16.864406 17.828125 16.566406 C 18.023125 16.268406 18.222188 16.319969 18.492188 16.417969 C 18.766188 16.515969 20.227391 17.235766 20.525391 17.384766 C 20.823391 17.533766 21.01875 17.607516 21.09375 17.728516 C 21.17075 17.853516 21.170828 18.448578 20.923828 19.142578 C 20.676828 19.835578 19.463922 20.505734 18.919922 20.552734 C 18.370922 20.603734 17.858562 20.7995 15.351562 19.8125 C 12.327563 18.6215 10.420484 15.524219 10.271484 15.324219 C 10.122484 15.129219 9.0605469 13.713906 9.0605469 12.253906 C 9.0605469 10.788906 9.8286563 10.071437 10.097656 9.7734375 C 10.371656 9.4754375 10.692578 9.4023438 10.892578 9.4023438 z">
                            </path>
                        </svg></a>

                    <p class="title mt-5">Credit</p>
                    <a data-modal-target="kreditModal" data-modal-toggle="kreditModal"><svg
                            xmlns="http://www.w3.org/2000/svg" x="0px" class="iconsocial" height="90"
                            viewBox="0 0 30 30">
                            <path fill="currentColor"
                                d="M4,4v20c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V4H4z M18,8h-6c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1h6 c0.552,0,1,0.448,1,1C19,7.552,18.552,8,18,8z">
                            </path>
                        </svg></a>
                </div>




            </div>
        </footer>
    </div>

    <!-- Main modal -->
    <div id="kreditModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Credit
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="kreditModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6">
                    <a class="block link" target="_blank"
                        href="https://www.freepik.com/free-vector/web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_10798281.htm#query=website&position=36&from_view=search&track=sph">Image
                        by upklyak on Freepik</a>
                    <a class="block link" target="_blank" href="https://www.flaticon.com/free-icons/computer"
                        title="computer icons">Computer icons
                        created by Freepik - Flaticon</a>
                    <a class="block link" target="_blank"
                        href="https://www.flaticon.com/free-icons/android-character"
                        title="android character icons">Android character icons created by Freepik - Flaticon</a>
                    <a class="block link" target="_blank" href="https://www.flaticon.com/free-icons/device"
                        title="device icons">Device
                        icons created by
                        Flat Icons - Flaticon</a>
                </div>

            </div>
        </div>
    </div>

    {{-- AOS JS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

{{-- CREDIT --}}
{{-- <a href="https://www.freepik.com/free-vector/web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_10798281.htm#query=website&position=36&from_view=search&track=sph">Image by upklyak</a> on Freepik --}}
{{-- <a href="https://www.flaticon.com/free-icons/computer" title="computer icons">Computer icons created by Freepik - Flaticon</a> --}}
{{-- <a href="https://www.flaticon.com/free-icons/android-character" title="android character icons">Android character icons created by Freepik - Flaticon</a> --}}
{{-- <a href="https://www.flaticon.com/free-icons/device" title="device icons">Device icons created by Flat Icons - Flaticon</a> --}}

</html>
