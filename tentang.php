<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "./layout/meta.php"?>
    <link rel="icon" href="./dist/img/ts.png">
    <title>Tinta Sekolah | Postingan</title>
    <link rel="stylesheet" href="./dist/css/main.css">
    <link rel="stylesheet" href="./plugin/sweetalert2/css/sweetalert2.css">
    <script src="./plugin/sweetalert2/js/sweetalert2.all.js"></script>
    <script>
        import Swal from './plugin/sweetalert2/js/sweetalert2.all.js';
    </script>
    <script src="./plugin/gsap/all.js"></script>
    <script src="./plugin/gsap/gsap.js"></script>
    <script src="./plugin/gsap/TextPlugin.js"></script>
    <script src="./plugin/gsap/EaselPlugin.js"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-600 overflow-x-hidden">

    <?php require_once "./layout/offCanvas.php"?>

    <?php require_once "./layout/navbar.php"?>

    <main class="container py-6">
        <h1 class="closure-text text-center text-xl sm:text-2xl md:text-3xl lg:text-4xl text-gray-900 dark:text-white mb-6">‎</h1>
        <div class="w-full px-4 py-4 shadow-md border-l border-gray-900 dark:border-white rounded-t rounded-r-md text-gray-900 dark:text-white bg-white dark:bg-gray-200">
            <article>
                <h1 class="text-gray-900 text-base sm:text-lg font-medium mb-1">Tinta Sekolah</h1>
                <h3 class="text-gray-900 text-base sm:text-lg text-justify tracking-normal">Tinta Sekolah adalah sebuah website yang memfasilitasi siswa/i untuk mengirimkan sebuah kesan dan pesan pada suatu acara atau kegiatan dengan tujuan untuk menjadikan pesan atau kesan itu menjadi sebuah evaluasi ataupun sarana komunikasi antara siswa/i di SMKN 1 Kertajati. Website ini dikembangkan oleh siswa jurusan <strong>Rekayasa Perangkat Lunak</strong> atau RPL di SMKN 1 Kertajati dan juga website ini dalam pengawasan OSIS dan MPK SMKN 1 Kertajati.</h3>
                <p class="text-gray-900"><strong>copyright</strong> &copy; 2024 SMKN 1 Kertajati.</p>
            </article>
        </div>
    </main>

    <script>
        gsap.registerPlugin(TextPlugin, EaselPlugin);
        gsap.to('.closure-text', {
            text: 'Terimakasih sudah berkunjung',
            duration: 2,
            ease: 'steps(25)',
        });
    </script>
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