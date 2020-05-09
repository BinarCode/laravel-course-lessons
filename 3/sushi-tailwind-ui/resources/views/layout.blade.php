<!DOCTYPE HTML>
<html>
<head>
    <title>Sushi online</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">
    <style>
        html, body {
            scroll-behavior: smooth;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
</head>
<body>

<div class="relative bg-gray-50 overflow-hidden">
    <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full">
        <div class="relative h-full max-w-screen-xl mx-auto">
            <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2" width="404"
                 height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="400" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)"/>
            </svg>
            <svg
                class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2"
                width="404" height="400" fill="none" viewBox="0 0 404 500">
                <defs>
                    <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="400" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)"/>
            </svg>
        </div>
    </div>

    <div x-data="{ open: false }" class="relative pt-6 pb-12 sm:pb-16 md:pb-20 lg:pb-28 xl:pb-32">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
            <nav class="relative flex items-center justify-between sm:h-10 md:justify-center">
                <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="#">
                            <img class="h-8 w-auto sm:h-10" src="/img/logos/workflow-mark-on-white.svg" alt=""/>
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <button @click="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <a href="{{ url('/') }}"
                       class="font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Home</a>
                    <a href="{{ url('/about') }}"
                       class="ml-10 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">FAQ</a>
                    <a href="{{ url('/sushi/create') }}"
                       class="ml-10 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Add
                        Sushi</a>
                </div>
                <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                          <span class="inline-flex rounded-md shadow">
                            <a href="#"
                               class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-green-600 bg-white hover:text-green-500 focus:outline-none focus:shadow-outline-blue active:bg-gray-50 active:text-green-700 transition duration-150 ease-in-out">
                              Log in
                            </a>
                          </span>
                </div>
            </nav>
        </div>
        <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"
             x-show="open"
             x-description="Mobile menu, show/hide based on menu open state."
             x-transition:enter="duration-150 ease-out"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="duration-100 ease-in"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95">
            <div class="rounded-lg shadow-md">
                <div class="rounded-lg bg-white shadow-xs overflow-hidden">
                    <div class="px-5 pt-4 flex items-center justify-between">
                        <div>
                            <img class="h-8 w-auto" src="/img/logos/workflow-mark-on-white.svg" alt="">
                        </div>
                        <div class="-mr-2">
                            <button @click="open = false" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="px-2 pt-2 pb-3">
                        <a href="{{ url('/') }}"
                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Home</a>
                        <a href="{{ url('/about') }}"
                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">FAQ</a>
                        <a href="{{ url('/sushi/create') }}"
                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Add
                            Sushi</a>
                    </div>
                    <div>
                        <a href="/#sushi-list"
                           class="block w-full px-5 py-3 text-center font-medium text-green-600 bg-gray-50 hover:bg-gray-100 hover:text-green-700 focus:outline-none focus:bg-gray-100 focus:text-green-700 transition duration-150 ease-in-out">
                            Get Sarted
                        </a>
                    </div>
                </div>
            </div>
        </div>

        @yield('header')
    </div>

    @yield('content')

    <div class="bg-gray-800">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">
                                Solutions
                            </h4>
                            <ul class="mt-4">
                                <li>
                                    <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                                        Marketing
                                    </a>
                                </li>
                                <li class="mt-4">
                                    <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                                        Analytics
                                    </a>
                                </li>
                                <li class="mt-4">
                                    <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                                        Commerce
                                    </a>
                                </li>
                                <li class="mt-4">
                                    <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                                        Insights
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">
                                Support
                            </h4>
                            <ul class="mt-4">
                                <li>
                                    <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                                        Pricing
                                    </a>
                                </li>
                                <li class="mt-4">
                                    <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                                        Documentation
                                    </a>
                                </li>
                                <li class="mt-4">
                                    <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                                        Guides
                                    </a>
                                </li>
                                <li class="mt-4">
                                    <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                                        API Status
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">
                                Company
                            </h4>
                            <ul class="mt-4">
                                <li>
                                    <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                                        About
                                    </a>
                                </li>
                                <li class="mt-4">
                                    <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                                        Blog
                                    </a>
                                </li>
                                <li class="mt-4">
                                    <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                                        Jobs
                                    </a>
                                </li>
                                <li class="mt-4">
                                    <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                                        Press
                                    </a>
                                </li>
                                <li class="mt-4">
                                    <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                                        Partners
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">
                                Legal
                            </h4>
                            <ul class="mt-4">
                                <li>
                                    <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                                        Claim
                                    </a>
                                </li>
                                <li class="mt-4">
                                    <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                                        Privacy
                                    </a>
                                </li>
                                <li class="mt-4">
                                    <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                                        Terms
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-8 xl:mt-0">
                    <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">
                        Subscribe to our newsletter
                    </h4>
                    <p class="mt-4 text-gray-300 text-base leading-6">
                        The latest news, articles, and resources, sent to your inbox weekly.
                    </p>
                    <form class="mt-4 sm:flex sm:max-w-md">
                        <input aria-label="Email address" type="email" required
                               class="appearance-none w-full px-5 py-3 border border-transparent text-base leading-6 rounded-md text-gray-900 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 transition duration-150 ease-in-out"
                               placeholder="Enter your email"/>
                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                            <button
                                class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-green-500 hover:bg-green-400 focus:outline-none focus:bg-green-400 transition duration-150 ease-in-out">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
                <div class="flex md:order-2">
                    <a href="#" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="ml-6 text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="ml-6 text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                    </a>
                    <a href="#" class="ml-6 text-gray-400 hover:text-gray-300">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="ml-6 text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Dribbble</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
                <p class="mt-8 text-base leading-6 text-gray-400 md:mt-0 md:order-1">
                    &copy; 2020 Sushi, Inc. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
