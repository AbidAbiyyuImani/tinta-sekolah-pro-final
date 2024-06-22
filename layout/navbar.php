<nav class="w-full h-16 transition duration-500 ease-in-out bg-white dark:bg-gray-700">
    <div class="container flex flex-row self-center justify-between">
        <div class="flex flex-row self-center">
            <img class="img-brand self-center" src="./dist/img/ts.png" alt="Tinta Sekolah" width="60px"/>
            <a href="index.php" class="self-center font-medium px-2 text-base md:text-xl lg:text-2xl text-gray-900 dark:text-white">Tinta Sekolah</a>
        </div>
        <div class="flex flex-row self-center">
            <input class="hidden" type="checkbox" name="darkMode" id="darkMode">
            <span id="dark" class="hidden -translate-x-4 px-2 py-2 text-gray-900 dark:text-white">
                <a href="#">
                    <label for="darkMode">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 0 1 .162.819A8.97 8.97 0 0 0 9 6a9 9 0 0 0 9 9 8.97 8.97 0 0 0 3.463-.69.75.75 0 0 1 .981.98 10.503 10.503 0 0 1-9.694 6.46c-5.799 0-10.5-4.7-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 0 1 .818.162Z" clip-rule="evenodd" />
                        </svg>
                    </label>
                </a>
            </span>
            <span id="light" class="-translate-x-4 px-2 py-2 text-gray-900 dark:text-white">
                <a href="#">
                    <label for="darkMode">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path d="M12 2.25a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75ZM7.5 12a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM18.894 6.166a.75.75 0 0 0-1.06-1.06l-1.591 1.59a.75.75 0 1 0 1.06 1.061l1.591-1.59ZM21.75 12a.75.75 0 0 1-.75.75h-2.25a.75.75 0 0 1 0-1.5H21a.75.75 0 0 1 .75.75ZM17.834 18.894a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 1 0-1.061 1.06l1.59 1.591ZM12 18a.75.75 0 0 1 .75.75V21a.75.75 0 0 1-1.5 0v-2.25A.75.75 0 0 1 12 18ZM7.758 17.303a.75.75 0 0 0-1.061-1.06l-1.591 1.59a.75.75 0 0 0 1.06 1.061l1.591-1.59ZM6 12a.75.75 0 0 1-.75.75H3a.75.75 0 0 1 0-1.5h2.25A.75.75 0 0 1 6 12ZM6.697 7.757a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 0 0-1.061 1.06l1.59 1.591Z" />
                        </svg>
                    </label>
                </a>
            </span>
        </div>
        <ul class="flex flex-row self-center">
            <li class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:border-b hover:border-b-gray-900 dark:hover:border-b-white hidden sm:inline transition duration-500 ease-in-out">
                <a href="index.php">Beranda</a>
            </li>
            <li class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:border-b hover:border-b-gray-900 dark:hover:border-b-white hidden sm:inline transition duration-500 ease-in-out">
                <a href="postingan.php">Postingan</a>
            </li>
            <li class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:border-b hover:border-b-gray-900 dark:hover:border-b-white hidden sm:inline transition duration-500 ease-in-out">
                <a href="tentang.php">Tentang</a>
            </li>
            <li class="inline sm:hidden">
                <a id="toggleCanvas" class="dark:text-white" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</nav>