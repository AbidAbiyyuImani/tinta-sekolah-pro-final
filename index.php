<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "./layout/meta.php"?>
    <link rel="icon" href="./dist/img/ts.png">
    <title>Tinta Sekolah</title>
    <link rel="stylesheet" href="./dist/css/main.css">
    <link rel="stylesheet" href="./plugin/sweetalert2/css/sweetalert2.css">
    <script src="./plugin/sweetalert2/js/sweetalert2.all.js"></script>
    <script>
        import Swal from './plugin/sweetalert2/js/sweetalert2.all.js';
    </script>
    <script src="./plugin/gsap/all.js"></script>
    <script src="./plugin/gsap/gsap.js"></script>
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>
<body class="bg-gray-100 dark:bg-gray-600 overflow-x-hidden">

    <?php require_once "./layout/offCanvas.php"?>

    <?php require_once "./layout/navbar.php"?>

    <main class="container py-6">
        <form action='index.php' method='POST'>
            <div class="flex flex-col mb-4">
                <label for="pengirim" class="mb-2 font-medium text-base md:text-lg lg:text-xl text-gray-900 dark:text-white">Pengirim</label>
                <input type="text" id="pengirim" name="pengirim" placeholder="nama pengirim bisa disamarkan" class="w-full text-gray-900 dark:text-white placeholder:text-gray-600 placeholder:text-sm placeholder:dark:text-white bg-white dark:bg-gray-400 px-4 py-2 border-white dark:border-gray-800 rounded-md shadow-md focus:outline-none focus:ring focus:ring-blue-200 dark:focus:ring-violet-200 focus:border-blue-300 dark:focus:border-violet-300">
            </div>
            <div class="flex flex-col mb-4">
                <label for="kepada" class="mb-2 font-medium text-base md:text-lg lg:text-xl text-gray-900 dark:text-white">Kepada</label>
                <input type="text" id="kepada" name="kepada" placeholder="kepada kepada siapa kesan dan pesan ini" class="w-full text-gray-900 dark:text-white placeholder:text-gray-600 placeholder:text-sm placeholder:dark:text-white bg-white dark:bg-gray-400 px-4 py-2 border-white dark:border-gray-800 rounded-md shadow-md focus:outline-none focus:ring focus:ring-blue-200 dark:focus:ring-violet-200 focus:border-blue-300 dark:focus:border-violet-300">
            </div>
            <div class="flex flex-col mb-4">
                <label for="kesan" class="mb-2 font-medium text-base md:text-lg lg:text-xl text-gray-900 dark:text-white">Kesan</label>
                <textarea type="text" rows="4" id="kesan" name="kesan" placeholder="tuliskan kesannya.." class="w-full text-gray-600 placeholder:text-sm dark:text-white placeholder:text-gray-900 placeholder:dark:text-white bg-white dark:bg-gray-400 px-4 py-2 border-white dark:border-gray-800 rounded-md shadow-md focus:outline-none focus:ring focus:ring-blue-200 dark:focus:ring-violet-200 focus:border-blue-300 dark:focus:border-violet-300"></textarea>
            </div>
            <div class="flex flex-col mb-4">
                <label for="pesan" class="mb-2 font-medium text-base md:text-lg lg:text-xl text-gray-900 dark:text-white">Pesan</label>
                <textarea type="text" rows="5" id="pesan" name="pesan" placeholder="jangan lupa dengan pesannya.." class="w-full text-gray-900 dark:text-white placeholder:text-gray-600 placeholder:text-sm placeholder:dark:text-white bg-white dark:bg-gray-400 px-4 py-2 border-white dark:border-gray-800 rounded-md shadow-md focus:outline-none focus:ring focus:ring-blue-200 dark:focus:ring-violet-200 focus:border-blue-300 dark:focus:border-violet-300"></textarea>
            </div>
            <div class="mb-4">
                <button type="submit" name="kirim" class="px-6 py-2 bg-blue-600 dark:bg-violet-600 text-white font-medium rounded-md shadow-md hover:bg-blue-700 dark:hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-violet-500">Kirim</button>
            </div>
        </form>
    </main>

    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            darkMode.checked = true;
            light.classList.add('hidden');
            dark.classList.remove('hidden');
        } else {
            darkMode.checked = false;
            dark.classList.add('hidden');
            light.classList.remove('hidden');
        }
    </script>
    <script>
        const htmlTag = document.querySelector("html");
        const darkMode = document.querySelector("#darkMode");
        const dark = document.querySelector("#dark");
        const light = document.querySelector("#light");

        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            darkMode.checked = true;
            dark.classList.add('block');
            htmlTag.classList.add("dark");
        } else {
            darkMode.checked = false;
            light.classList.add('block');
            htmlTag.classList.remove("dark");
        }

        darkMode.addEventListener("click", () => {
            if (darkMode.checked) {
                light.classList.add('hidden');
                dark.classList.remove('hidden');
                dark.classList.add('block');
                htmlTag.classList.add("dark");
                localStorage.theme = 'dark';
            } else {
                dark.classList.add('hidden');
                light.classList.remove('hidden');
                light.classList.add('block');
                htmlTag.classList.remove("dark");
                localStorage.theme = 'light';
            }
        });
    </script>
    <script>
        const offCanvas = document.querySelector('#offCanvas');
        const toggleCanvas = document.querySelector('#toggleCanvas');
        toggleCanvas.addEventListener('click', function(){
            offCanvas.classList.toggle('hidden');
            offCanvas.classList.toggle('translate-x-full');
        });
    </script>

</body>
</html>
<?php

require_once "./service/database.php";

if (isset($_POST['kirim'])) {
    $pengirim = htmlspecialchars($_POST['pengirim']);
    $kepada = htmlspecialchars($_POST['kepada']);
    $kesan = htmlspecialchars($_POST['kesan']);
    $pesan = htmlspecialchars($_POST['pesan']);

    if (empty($pengirim) || empty($kepada) || empty($kesan) || empty($pesan)) {
        echo '<script>
                Swal.fire({
                    title: "Owaduh",
                    text: "Form tidak boleh kosong",
                    icon: "error"
                });
                </script>';
        return;
    }

    try {
        $sql = "INSERT INTO postingan (pengirim, kepada, kesan, pesan) VALUES ('$pengirim', '$kepada', '$kesan', '$pesan')";

        if ($db->query($sql)) {
            // header('Location: postingan.php');
            echo '<script>
                    Swal.fire({
                        title: "Mantap",
                        text: "Kesan dan Pesan sudah terkirim",
                        icon: "success"
                    });
                </script>';
        } else {
            // header('Location: postingan.php');
            echo '<script>
                    Swal.fire({
                        title: "Owaduh",
                        text: "Kesan dan Pesan tidak terkirim",
                        icon: "error"
                    });
                </script>';
        }
    } catch (mysqli_sql_exception $e) {
        $pesan_kirim = 'error, gagal mengirim' . '<br>' . $e;
    };
};

?>