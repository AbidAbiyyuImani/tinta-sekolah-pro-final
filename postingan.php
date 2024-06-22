<?php

require_once "./service/database.php";

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };
    return $rows;
};

$detail_postingan = query("SELECT * FROM postingan ORDER BY created_at DESC");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "./layout/meta.php"?>
    <link rel="icon" href="./dist/img/ts.png">
    <title>Tinta Sekolah | Postingan</title>
    <meta http-equiv="refresh" content="15">
    <link rel="stylesheet" href="./dist/css/main.css">
    <link rel="stylesheet" href="./plugin/sweetalert2/css/sweetalert2.css">
    <script src="./plugin/sweetalert2/js/sweetalert2.all.js"></script>
    <script>
        import Swal from './plugin/sweetalert2/js/sweetalert2.all.js';
    </script>
    <script src="./plugin/gsap/all.js"></script>
    <script src="./plugin/gsap/gsap.js"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-600 overflow-x-hidden">

    <?php require_once "./layout/offCanvas.php"?>

    <?php require_once "./layout/navbar.php"?>

    <main class="container py-6 grid gap-6 sm:grid-cols-2 md:grid-cols-3">
        <?php foreach ($detail_postingan as $post) : ?>
            <div class="bg-white dark:bg-gray-200 shadow-md rounded-lg py-5">
                <header class="px-4">
                    <h1 class="text-lg text-gray-900 font-medium mb-1">Pengirim : <strong><?= $post['pengirim'] ?></strong></h1>
                    <p class="mb-2 text-gray-600">Kepada : <?= $post['kepada'] ?></p>
                </header>
                <article class="border-t border-gray-300">
                    <dl>
                        <div class="bg-gray-100 dark:bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                            <dt class="text-sm sm:text-base font-medium text-gray-500">Kesan</dt>
                            <dd class="mt-1 sm:mt-0 text-sm sm:text-base sm:col-span-2 text-gray-900"><?= $post['kesan'] ?></dd>
                        </div>
                        <div class="bg-white dark:bg-gray-200 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                            <dt class="text-sm sm:text-base font-medium text-gray-500">Pesan</dt>
                            <dd class="mt-1 sm:mt-0 text-sm sm:text-base sm:col-span-2 text-gray-900"><?= $post['pesan'] ?></dd>
                        </div>
                    </dl>
                </article>
            </div>
        <?php endforeach; ?>
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