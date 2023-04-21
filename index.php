

<?php
include_once './database/connection.php';
include_once './api/class.users.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link rel="icon" type="image/x-icon" href="https://media.discordapp.net/attachments/929125716094746624/1025976091669708860/7P8sfaD.png">
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <meta charset="UTF-8">
    <title>Sunset Music: Login</title>


</head>

<body class="bg-gray-900">
<script>

</script>
<div class="flex flex-col h-screen justify-between">

    <nav class="border-gray-200 px-2 sm:px-4 py-2.5 bg-gray-800">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="https://sunset-music.online" class="flex items-center">
                <img src="https://media.discordapp.net/attachments/929125716094746624/1025976091669708860/7P8sfaD.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Sunset Music</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 text-gray-400 hover:bg-gray-700 focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex flex-col p-4 mt-4 rounded-lg border md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 bg-gray-800 md:bg-gray-900 border-gray-700">
                    <li>
                        <a href="index.php" class="block py-2 pr-4 pl-3 bg-blue-700 rounded md:bg-transparent md:text-orange-500 md:p-0 text-orange-500" aria-current="page">Início</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    User::login();
    User::register();
    ?>


    <section class="flex items-center h-full w-full">


        <div class="bg-logo flex justify-center w-full flex-col">
            <div class="flex justify-center w-full mt-10">
                <a href="#" class="mb-6">
                    <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Faça Login</span>
                </a>
            </div>

            <div class="flex justify-center w-full">
                <form class="p-6 w-2/4 max-w-sm rounded-lg border shadow-md bg-gray-800 border-gray-700" method="POST">
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-300">Usuário</label>
                    <div class="relative mb-6">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <img src="https://1.bp.blogspot.com/-GHPZPhoXMZE/X6d4oqVUTSI/AAAAAAABfBc/z_NTH5wbcCM7HG4NM9tAVvkCczrFR0CBwCPcBGAsYHg/s0/476__-0OZ.png" aria-hidden="true" class="text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns=""><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></img>
                        </div>
                        <input type="text" name="username" id="input-group-1" class="text-sm rounded-lg block w-full pl-10 p-2.5  bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Username...">
                    </div>
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-300">Senha</label>
                    <div class="relative mb-6">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <img src="https://2.bp.blogspot.com/-BVxF0DeJrOI/X1k2eGvb8EI/AAAAAAABeA0/msxgFR26kAginc-gBvoCowo3fedM6WQlACPcBGAsYHg/s1600/Cadeado2.png" aria-hidden="true" class="text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns=""><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></img>
                        </div>
                        <input type="password" name="password" id="input-group-1" class="text-sm rounded-lg block w-full pl-10 p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Senha...">



                    </div>
                    <div class="relative mb-6">

                        <div class="g-recaptcha" data-sitekey="6LfdlIEjAAAAADNowUBbtip5fVvTJOz3-oyX1bCA"></div>
                    </div>

                    <button type="submit"
                            class="w-full text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                            name="login" value="Entrar">
                        Logar
                    </button>
                    <button class="mt-3 block w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center focus:ring-blue-800" type="button" data-modal-toggle="authentication-modal">
                        Criar conta
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!-- Registro -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 rounded-lg text-sm p-1.5 ml-auto text-white inline-flex items-center hover:bg-gray-800 hover:text-white" data-modal-toggle="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-white">Criar conta</h3>
                    <form method="POST" class="space-y-6" action="">
                        <div>
                            <label for="Username" class="block mb-2 text-sm font-medium text-gray-300">Username</label>
                            <input type="text" name="username" id="username" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" placeholder="Username">
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Email</label>
                            <input type="email" name="email" id="email" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" placeholder="hyze@gmail.com">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-300">Senha</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-300">Repita a senha</label>
                            <input type="password" name="password_repeat" id="password" placeholder="••••••••" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                        </div>
                        <div class="relative mb-6">

                            <div class="g-recaptcha" data-sitekey="6LfdlIEjAAAAADNowUBbtip5fVvTJOz3-oyX1bCA"></div>
                        </div>
                        <button type="submit" name="register" class="w-full text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Criar conta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="mt-10 p-4 rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 bg-gray-800">
    <span class="text-sm text-gray-500 sm:text-center text-gray-400">© 2022 <a href="https://sunset-music.online"
                                                                               class="hover:underline">Sunset Music</a>. Todos os direitos reservados.
    </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 "></a>
            </li>
            <li>
                <button id="theme-toggle" type="button"
                        class="text-gray-400 hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                              fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </li>
        </ul>
    </footer>
</div>
<script>
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function () {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

            // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

    });
</script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
</html>