<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/app.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="font-sans">
    <!-- main nav start -->
    <div id="main-nav" x-data="{menuOpen:false}" @keydown.escape="isOpen = false">
        <div class="relative bg-white border-b border-gray-200">
            <div class="container max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex justify-between items-center py-4 md:justify-start">
                    <div class="flex items-center md:hidden -mr-2 -my-2">
                        <div class="border-r">
                            <a href="" class="inline-flex items-center justify-center pr-2 rounded-md hover:text-gray-400 focus:outline-none focus:text-gray-400 transition duration-150 ease-in-out" >
                                <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 20 20" width="20" height="20" ><g transform="matrix(0.8333333333333334,0,0,0.8333333333333334,0,0)"><path d="M16.793.249,4.322,11.233h0a1.066,1.066,0,0,0,0,1.539L16.793,23.751a.987.987,0,0,0,1.414-.107l1.557-1.85a1.028,1.028,0,0,0-.111-1.438L10.2,12.191a.25.25,0,0,1,0-.379l9.45-8.168a1.021,1.021,0,0,0,.349-.7,1,1,0,0,0-.238-.741L18.207.356A.988.988,0,0,0,17.522,0,.978.978,0,0,0,16.793.249Z" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"></path></g></svg>
                            </a>
                        </div>
                        <div class="">
                            <button type="button" class="inline-flex items-center justify-center pl-2 rounded-md text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400 transition duration-150 ease-in-out" @click=" menuOpen = ! menuOpen">
                                <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 20 20" width="24" height="24" x-show="!menuOpen"><g transform="matrix(0.8333333333333334,0,0,0.8333333333333334,0,0)"><path d="M0.500 2.500 L23.500 2.500 L23.500 5.500 L0.500 5.500 Z" fill="currentColor" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"></path><path d="M0.500 10.500 L23.500 10.500 L23.500 13.500 L0.500 13.500 Z" fill="currentColor" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"></path><path d="M0.500 18.500 L23.500 18.500 L23.500 21.500 L0.500 21.500 Z" fill="currentColor" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"></path></g></svg>
                                <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 20 20" width="24" height="24" x-show="menuOpen"><g transform="matrix(0.8333333333333334,0,0,0.8333333333333334,0,0)"><path d="M14.3,12.179a.25.25,0,0,1,0-.354l9.263-9.262A1.5,1.5,0,0,0,21.439.442L12.177,9.7a.25.25,0,0,1-.354,0L2.561.442A1.5,1.5,0,0,0,.439,2.563L9.7,11.825a.25.25,0,0,1,0,.354L.439,21.442a1.5,1.5,0,0,0,2.122,2.121L11.823,14.3a.25.25,0,0,1,.354,0l9.262,9.263a1.5,1.5,0,0,0,2.122-2.121Z" fill="currentColor" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"></path></g></svg>
                            </button>
                        </div>
                    </div>
                    <div class="md:w-0 md:flex-1">
                        <a href="#" class="flex">
                            <img class="h-8 w-auto sm:h-10" src="assets/img/logos/kd-logo.png" alt="Workflow" />
                        </a>
                    </div>
                    <div class="flex items-center -ml-2 -my-2 space-x-2">
                        <div class="border-r">
                            <!-- this is the search button -->
                            <a href="" type="button" class="inline-flex items-center justify-center pr-2 rounded-md text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 20 20" width="20" height="20"><g transform="matrix(0.8333333333333334,0,0,0.8333333333333334,0,0)"><path d="M23.414,20.591l-4.645-4.645a10.256,10.256,0,1,0-2.828,2.829l4.645,4.644a2.025,2.025,0,0,0,2.828,0A2,2,0,0,0,23.414,20.591ZM10.25,3.005A7.25,7.25,0,1,1,3,10.255,7.258,7.258,0,0,1,10.25,3.005Z" fill="currentColor" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"></path></g></svg>
                            </a>
                        </div>
                        <div class="border-r hidden md:block">
                            <!-- this is the search button -->
                            <a href="" type="button" class="inline-flex items-center justify-center pr-2 rounded-md text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 20 20" width="40" height="40"><g transform="matrix(0.8333333333333334,0,0,0.8333333333333334,0,0)"><path d="M6.500 6.250 A5.500 5.500 0 1 0 17.500 6.250 A5.500 5.500 0 1 0 6.500 6.250 Z" fill="currentColor" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"></path><path d="M12,13.25a9.511,9.511,0,0,0-9.5,9.5.5.5,0,0,0,.5.5H21a.5.5,0,0,0,.5-.5A9.511,9.511,0,0,0,12,13.25Z" fill="currentColor" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"></path></g></svg>
                            </a>
                        </div>
                        <div class="">
                            <!-- this is the basket button -->
                            <a href="" type="button" class="inline-flex items-center justify-center rounded-md text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 20 20" width="24" height="24"><g transform="matrix(0.8333333333333334,0,0,0.8333333333333334,0,0)"><path d="M22.974,2.125H20.369a1.494,1.494,0,0,0-1.46,1.157L17.815,7.933a.249.249,0,0,1-.243.192H1.089A1,1,0,0,0,.14,9.442l2.668,8a1,1,0,0,0,.948.683H15.1a.251.251,0,0,1,.244.308l-.118.5a.249.249,0,0,1-.243.192H4.922a2.25,2.25,0,1,0,2.3,2.249A.247.247,0,0,1,7.3,21.2a.25.25,0,0,1,.177-.074h6a.25.25,0,0,1,.25.25,2.25,2.25,0,1,0,3.569-1.82.251.251,0,0,1-.1-.26L20.72,4.318a.251.251,0,0,1,.244-.193h2.01a1,1,0,0,0,0-2Z" fill="currentColor" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"></path></g></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="desktop-nav-items" class="relative bg-white border-b-2 border-gray-100 hidden md:block md:shadow-md">
            <div class="container max-w-7xl mx-auto px-4">
                <div class="flex flex-shrink justify-center py-4 text-lg font-light space-x-12">
                    <a class="inline-block" href="/my-account">My Account</a>
                    <a class="inline-block" href="/product-detail">Product Detail</a>
                    <a class="inline-block" href="">About</a>
                    <a class="inline-block" href="">Courses</a>
                    <a class="inline-block" href="">Products</a>
                    <a class="inline-block" href="">Blog</a>
                    <a class="inline-block" href="">Contact</a>
                    <a class="inline-block" href="">Events</a>
                 </div>       
            </div>
        </div>
        <div id="mobile-nav-items" class="md:hidden" x-bind:class="{ 'hidden':!menuOpen}">
            <div class="relative bg-gray-300">
                <div class="container max-w-7xl mx-auto px-4 sm:px-6">
                    <div class="flex justify-center items-center py-4 md:justify-start md:space-x-10">     
                        <div class="inline-block text-center">
                            <a href="/account/signin" class="block p-4 text-white bg-gray-800 rounded-full">
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 20 20" width="40" height="40"><g transform="matrix(0.8333333333333334,0,0,0.8333333333333334,0,0)"><path d="M17.508,18.5a1,1,0,0,0-1,1V20a.5.5,0,0,1-.5.5h-5.5a.5.5,0,0,1-.5-.5V4a.5.5,0,0,1,.5-.5h5.5a.5.5,0,0,1,.5.5V5a1,1,0,0,0,2,0V2.5a1,1,0,0,0-1-1h-7.5V.5A.5.5,0,0,0,9.4.012l-9,2A.5.5,0,0,0,.008,2.5v19a.5.5,0,0,0,.392.489l9,2a.506.506,0,0,0,.421-.1.5.5,0,0,0,.187-.39v-1h7.5a1,1,0,0,0,1-1v-2A1,1,0,0,0,17.508,18.5Zm-10-6a1.5,1.5,0,1,1-1.5-1.5A1.5,1.5,0,0,1,7.508,12.5Z" fill="currentColor" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"></path><path d="M22.492,11H18.367V9.25a1,1,0,0,0-1.555-.832l-4.875,3.25a1,1,0,0,0,0,1.664l4.875,3.25a1,1,0,0,0,1.555-.832V14h4.125a1.5,1.5,0,1,0,0-3Z" fill="currentColor" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"></path></g></svg>
                            </a>
                            <span class="text-xs uppercase">Sign in</span>
                        </div>
                        <div class="mx-6"><span class="">or</span></div>
                        <div class="inline-block text-center">
                            <a href="/account/register" class="block p-4 text-white bg-gray-800 rounded-full">
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 20 20" width="40" height="40"><g transform="matrix(0.8333333333333334,0,0,0.8333333333333334,0,0)"><path d="M6.500 6.250 A5.500 5.500 0 1 0 17.500 6.250 A5.500 5.500 0 1 0 6.500 6.250 Z" fill="currentColor" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"></path><path d="M12,13.25a9.511,9.511,0,0,0-9.5,9.5.5.5,0,0,0,.5.5H21a.5.5,0,0,0,.5-.5A9.511,9.511,0,0,0,12,13.25Z" fill="currentColor" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"></path></g></svg>
                            </a>
                            <span class="text-xs uppercase">Register</span>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="relative bg-white shadow-md">
                <div class="container max-w-7xl mx-auto px-4 sm:px-6">
                    <div class="flex justify-center items-center py-4 md:justify-start md:space-x-10">
                        <div class="flex-col w-1/2">
                        <a class="inline-block" href="/my-account">My Account</a>
                        <a class="inline-block" href="/product-detail">Product Detail</a>
                            <a class="block w-full mb-10" href="">About</a>
                            <a class="block w-full" href="">Courses</a>
                        </div>
                        <div class="flex-col w-1/2">
                            <a class="block w-full mb-10" href="">Products</a>
                            <a class="block w-full mb-10" href="">Blog</a>
                            <a class="block w-full mb-10" href="">Contact</a>
                            <a class="block w-full" href="">Events</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- <div id="basket-pull-out z-50">
            <div class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <section class="absolute inset-y-0 right-0 pl-10 max-w-full flex">
                        
                            //Slide-over panel, show/hide based on slide-over state.

                            //Entering: "transform transition ease-in-out duration-500 sm:duration-700"
                            //From: "translate-x-full"
                            //To: "translate-x-0"
                            //Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
                            //From: "translate-x-0"
                            //To: "translate-x-full"
                        
                        <div class="w-screen max-w-md">
                            <div class="h-full flex flex-col space-y-6 py-6 bg-white shadow-xl overflow-y-scroll">
                                <header class="px-4 sm:px-6">
                                    <div class="flex items-start justify-between space-x-3">
                                        <h2 class="text-lg leading-7 font-medium text-gray-900">
                                            Panel title
                                        </h2>
                                        <div class="h-7 flex items-center">
                                            <button aria-label="Close panel" class="text-gray-400 hover:text-gray-500 transition ease-in-out duration-150">
                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </header>
                                <div class="relative flex-1 px-4 sm:px-6">
                                     // Replace with your content 
                                    <div class="absolute inset-0 px-4 sm:px-6">
                                        <div class="h-full border-2 border-dashed border-gray-200"></div>
                                    </div>
                                     //End replace 
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div> -->
    </div>


<?php 
    if ($uri && $uri != '/' && file_exists('../src/pages/'.$uri.'.html')) {
        echo file_get_contents('../src/pages/'.$uri.'.html');
    } else {
        echo file_get_contents('../src/pages/login.html');
    }
?>

<div class="pt-10 pb-10 bg-gray-800 relative">
        <div class="container mx-auto px-6">
            <div class="flex flex-row flex-wrap md:flex-no-wrap mx-3 text-white">
                <div class="flex flex-col w-full md:w-1/2 mb-10 md:mb-0 md:mr-6">
                    <div class="mb-10">
                        <img class="w-auto sm:h-10" src="assets/img/logos/kd-logo.png" alt="Workflow" />
                    </div>
                    <a href="" class="block text-xs">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current inline-block" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-n1"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        demo@kurious.agency
                    </a>
                    <a href="" class="block text-xs">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current inline-block" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>                        
                        01234567891
                    </a>
                </div>
                <div class="flex flex-row w-full flex-wrap md:w-2/3">
                    <div class="flex flex-col w-full md:w-1/2 mt-4 md:mt-0 md:pr-6">
                        <div class="">
                            <span class="font-bold inline-block text-xl mb-3">Menu</span>
                            <ul>
                                    <li class="mb-2"><a href="">Brands</a></li>
                                    <li class="mb-2"><a href="">Products</a></li>
                                    <li class="mb-2"><a href="">Offers</a></li>
                                    <li class="mb-2"><a href="">Blog</a></li>
                                    <li class="mb-2"><a href="">About</a></li>
                                    <li class="mb-2"><a href="">Contact</a></li>
                                    <li class="mb-2"><a href="">Courses</a></li>
                                    <li class="mb-2"><a href="">Events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col w-full md:w-1/2 mt-4 md:mt-0 md:pl-3">
                        <div class="">
                            <span class="font-bold inline-block text-xl mb-3">Links</span>
                            <ul>
                                <li class="mb-2"><a href="" class="">Privacy Policy</a></li>
                                <li class="mb-2"><a href="" class="">Terms and Conditions</a></li>
                                <li class="mb-2"><a href="" class="">Examples</a></li>
                                <li class="mb-2"><a href="" class="">Gift Voucher Listing Page</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex justify-between w-full pt-10 mt-6 border-t border-gray-600">
                        <div class="">
                            <svg class="inline-block" width="30" height="30" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"><path class="fill" fill="currentColor" d="M25 4.167c11.487 0 20.833 9.345 20.833 20.833 0 11.487-9.346 20.833-20.833 20.833-11.488 0-20.833-9.346-20.833-20.833C4.167 13.512 13.512 4.167 25 4.167zM25 0C11.194 0 0 11.194 0 25s11.194 25 25 25 25-11.194 25-25S38.806 0 25 0zm13.542 18.288c-.92.408-1.909.683-2.946.808a5.152 5.152 0 0 0 2.256-2.838 10.263 10.263 0 0 1-3.258 1.244 5.114 5.114 0 0 0-3.742-1.62c-3.312 0-5.746 3.089-4.998 6.297a14.568 14.568 0 0 1-10.57-5.358 5.136 5.136 0 0 0 1.587 6.848 5.12 5.12 0 0 1-2.321-.642c-.056 2.375 1.648 4.598 4.115 5.094a5.14 5.14 0 0 1-2.317.087 5.136 5.136 0 0 0 4.792 3.56 10.322 10.322 0 0 1-7.598 2.128 14.507 14.507 0 0 0 7.86 2.304c9.525 0 14.904-8.044 14.58-15.258a10.34 10.34 0 0 0 2.56-2.654z" fill-rule="evenodd"></path></svg>
                            <svg class="inline-block" width="30" height="30" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"><path class="fill" fill="currentColor" d="M25 4.167c11.487 0 20.833 9.345 20.833 20.833 0 11.487-9.346 20.833-20.833 20.833-11.488 0-20.833-9.346-20.833-20.833C4.167 13.512 13.512 4.167 25 4.167zM25 0C11.194 0 0 11.194 0 25s11.194 25 25 25 25-11.194 25-25S38.806 0 25 0zm-4.167 16.667c0 1.16-.93 2.1-2.083 2.1a2.089 2.089 0 0 1-2.083-2.1c0-1.16.93-2.1 2.083-2.1 1.152 0 2.083.941 2.083 2.1zm0 4.166h-4.166v12.5h4.166v-12.5zm6.25 0h-4.166v12.5h4.166v-5.96c0-3.588 4.171-3.919 4.171 0v5.96h4.163v-6.998c0-6.841-6.517-6.591-8.334-3.225v-2.277z" fill-rule="evenodd"></path></svg>
                        </div>
                        <div class="">
                            <svg class="inline-block stroke-current" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 30 30" width="30" height="30"><g transform="matrix(1.25,0,0,1.25,0,0)"><path d="M0.504 3.500 L23.504 3.500 L23.504 20.500 L0.504 20.500 Z" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.957,10H6.238L6.6,13.6a.448.448,0,0,0,.85.148L9.3,9.891" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.113 9.969L10.301 14.031" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.832,9.922s-1.375-.36-1.844.422.266,1.281.75,1.578,1.016.75.875,1.281-.734,1.313-2.3.766" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M16,14.031l1.88-3.789a.436.436,0,0,1,.825.158l.3,3.569" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M16.598 12.828L18.926 12.828" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
                            <svg class="inline-block stroke-current" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 30 30" width="30" height="30"><g transform="matrix(1.25,0,0,1.25,0,0)"><path d="M0.504 3.500 L23.504 3.500 L23.504 20.500 L0.504 20.500 Z" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.5,12a5,5,0,1,1-5-5A5,5,0,0,1,13.5,12Z" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.5,12a5,5,0,1,1-5-5A5,5,0,0,1,13.5,12Z" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.018,15.557A4.949,4.949,0,0,0,15.5,17a5,5,0,1,0,0-10,4.945,4.945,0,0,0-3.486,1.444" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.5,11.9a.1.1,0,1,0,.1.1.1.1,0,0,0-.1-.1" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.5,13.9a.1.1,0,0,0,0,.2.1.1,0,0,0,.092-.056.073.073,0,0,0,.008-.033V14a.1.1,0,0,0-.1-.1" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.5,9.9a.1.1,0,1,0,.1.1V9.989a.073.073,0,0,0-.008-.033A.1.1,0,0,0,12.5,9.9" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6.5,8.9a.1.1,0,1,0,.1.1.1.1,0,0,0-.1-.1" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.5,8.9a.1.1,0,1,0,.1.1.1.1,0,0,0-.1-.1" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.5,10.9a.1.1,0,1,0,.1.1.1.1,0,0,0-.1-.1" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.5,12.9a.1.1,0,1,0,.1.1.1.1,0,0,0-.1-.1" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.5,14.9a.1.1,0,1,0,.1.1.1.1,0,0,0-.1-.1" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6.5,10.9a.1.1,0,1,0,.1.1.1.1,0,0,0-.1-.1" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6.5,12.9a.1.1,0,1,0,.1.1.1.1,0,0,0-.1-.1" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6.5,14.9a.1.1,0,1,0,.1.1.1.1,0,0,0-.1-.1" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.5,9.9a.1.1,0,1,0,.1.1.1.1,0,0,0-.1-.1" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.5,7.9a.1.1,0,1,0,.1.1.1.1,0,0,0-.1-.1" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.5,11.9a.1.1,0,1,0,.1.1.1.1,0,0,0-.1-.1" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.5,13.9a.1.1,0,1,0,.1.1.1.1,0,0,0-.1-.1" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.5,15.9a.1.1,0,1,0,.1.1.1.1,0,0,0-.1-.1" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.5,11.9a.1.1,0,1,0,.1.1.1.1,0,0,0-.1-.1" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.5,13.9a.1.1,0,0,0-.1.1.118.118,0,0,0,.014.055.084.084,0,0,0,.075.045H4.5a.1.1,0,1,0,0-.2" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.5,9.9H4.493a.083.083,0,0,0-.075.045A.118.118,0,0,0,4.4,10a.1.1,0,1,0,.1-.1" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
                            <svg class="inline-block stroke-current" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 30 30" width="30" height="30"><g transform="matrix(1.25,0,0,1.25,0,0)"><path d="M12.422,8.863a3.362,3.362,0,0,0,.481-.37,2.917,2.917,0,0,0,.85-1.424,1.7,1.7,0,0,0-.581-1.911,1.791,1.791,0,0,0-1.061-.328H9.721l-.076.328-.97,4.151h2.289A2.773,2.773,0,0,0,12.422,8.863Z" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1.615,18.484,5.589,1.493H13.9c2.49,0,5.265,1.79,4.43,5.576a6.8,6.8,0,0,1-6.86,5.424H7.988L6.494,18.484Z" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path><path d="M20.985,6.681a4.762,4.762,0,0,1,.363,3.405,6.741,6.741,0,0,1-6.713,5.4c-.317.006-3.291,0-3.609,0L9.509,21.5H4.631l.34-1.511" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
