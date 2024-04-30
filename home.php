<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>

<!-- ---------------------------------------------------------Search Bar------------------------------------------------------------------- -->

<nav class="flex items-center justify-between bg-gray-900 p-4">
    <div class="flex items-center">

    <!---- Logo or site title ------->
        <a href="#" class="text-white text-lg font-bold">YourSite</a>
    </div>

    <div class="flex items-center">
<!----- Search form --------->
        <form class="flex items-center">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" img src="drop.png" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                    </svg>
                </div>
                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-40 p-2.5 pl-10" placeholder="Search items.." required>
            </div>
            <button type="submit" class="ml-2 bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300">Search</button>
        </form>

<!------ Dropdown for Products -------->
        <div class="relative ml-4">
            <a href="product.php" class="text-white font-medium bg-green-700 px-4 py-2 rounded-lg hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-black-100">
                Products
                <svg class="w-3 h-3 inline-block ml-1" viewBox="0 0 20 20" fill="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </a>
        </div>

<!------- Dropdown for Blog ---------->
        <div class="relative ml-4">
            <a href="blog.php" class="text-white font-medium bg-green-700 px-4 py-2 rounded-lg hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-black-100">
                Blog
                <svg class="w-3 h-3 inline-block ml-1" viewBox="0 0 20 20" fill="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
            <div id="blogDropdownMenu" class="hidden absolute bg-white rounded-lg shadow-lg mt-2 py-2 w-40">
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Blog Post 1</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Blog Post 2</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Blog Post 3</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Blog Post 4</a>
            </div>
        </div>
    </div>
</nav>

<!-- ----------------------------------------------------Home----------------------------------------------------------------------- -->

<img src="home.png">

<!-- ----------------------  ---------------------------footer------------------------------------------------------------------------- -->

<footer class="bg-green-800 rounded-lg shadow m-4 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-white sm:text-center dark:text-gray-400">Copyright © 2024 Heritage Landscape Supply Group, Inc. All rights reserved.</span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-white dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">About</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
</footer>

</body>
</html>




</body>
</html>