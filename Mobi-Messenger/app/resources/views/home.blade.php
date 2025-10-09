<x-formlayout>

    <body x-data="{ Form: false }" class="dark:bg-black">
        <!--Header-->

        <header class="dark:bg-[#18181B] bg-white fixed z-50 right-0 left-0 top-0 shadow-md">
            <nav x-data="{ HamburgerButton: false }"
                class="flex items-center max-w-screen-xl mx-auto justify-between px-4 sm:px-16 py-4 sm:py-4">
                <a href="#">
                    <img class="h-[40px] dark:hidden" src="./images/mobi_messenger_logo.svg" alt="mobi_messenger_logo">
                    <img class="h-[40px] hidden dark:block" src="./images/logo-dark.png" alt="mobi_messenger_logo">
                </a>

                <div class="hidden lg:hidden xl:flex gap-10 dark:text-white">
                    <a href="#features" class="hover:text-red-500">Features</a>
                    <a href="#cases" class="hover:text-red-500">Use Cases</a>
                    {{-- <a href="#api" class="hover:text-red-500">API Docs</a> --}}
                    <a href="#pricing" class="hover:text-red-500">Pricing</a>
                    <a href="#contact" class="hover:text-red-500">Contact</a>
                </div>
                <div class="hidden lg:hidden xl:flex gap-6">
                    <a href="https://app.mobimessenger.com/app/login"
                        class="dark:bg-gray-700 bg-white hover:bg-red-600 hover:text-white dark:border-none border-2 border-red-600  px-14 py-2 rounded-md dark:text-white text-red-600 font-semibold">
                        Login</a>
                    <a href="https://app.mobimessenger.com/app/register"
                        class=" bg-red-600 rounded-md px-14 py-2 hover:bg-red-700 text-white font-semibold">Sign
                        Up</a>
                </div>

                <div class="hover:text-red-500  xl:hidden">
                    <button @click="HamburgerButton = !HamburgerButton">
                        <i class="fa fa-bars pr-2" aria-hidden="true"></i>
                        Menu</button>
                </div>
                <div x-show="HamburgerButton" x-transition
                    class=" xl:hidden fixed z-50 absolute top-full left-0 w-full bg-red-600 text-white ">
                    <div class="flex flex-col gap-4 ">
                        <a href="#features" @click="HamburgerButton = false"
                            class="py-2 px-4 hover:text-white hover:bg-red-700 font-semibold">Features</a>
                        <a href="#cases" @click="HamburgerButton = false"
                            class="py-2 px-4 hover:text-white hover:bg-red-700 font-semibold">Use Cases</a>
                        <a href="#pricing" @click="HamburgerButton = false"
                            class="py-2 px-4 hover:text-white hover:bg-red-700 font-semibold">Pricing</a>
                        {{-- <a href="#api" @click="HamburgerButton = false"
                            class="py-2 px-4 hover:text-white hover:bg-red-700 font-semibold">API Docs</a> --}}
                        <a href="#contact" @click="HamburgerButton = false"
                            class="py-2 px-4 hover:text-white hover:bg-red-700 font-semibold">Contact</a>
                        <a href="https://app.mobimessenger.com/app/login" @click="HamburgerButton = false"
                            class="py-2 px-4 hover:bg-red-700 hover:text-white text-white font-semibold">Login</a>
                        <a href="https://app.mobimessenger.com/app/register" @click="HamburgerButton = false"
                            class="py-2 px-4 hover:bg-red-700 hover:text-white font-semibold">SignUp</a>
                    </div>
                </div>
            </nav>
        </header>

        <!--Bulk-->
        <section>
            <div class="dark:bg-gray-800 bg-rose-50 h-full w-full">
                <div class="max-w-screen-xl mx-auto px-8 sm:px-16">
                    <div class="pt-28 text-center sm:pt-40">
                        <h1 class="font-bold text-2xl sm:text-2xl sm:text-5xl dark:text-white">
                            Bulk & Transactional SMS Made Effortless</h1>
                        <p class="text-gray-500  py-6 text-md leading-[27px] sm:text-xl  mx-auto dark:text-white">
                            Reach your customers instantly with reliable, high-delivery messaging<br />
                            through our powerful platform and developer-friendly API
                        </p>
                    </div>
                    <div class="flex sm:flex-none gap-5 justify-center text-sm sm:text-base font-semibold sm:py-6">
                        <a href="https://app.mobimessenger.com/app/register"
                            class="bg-red-600  text-white  px-6 py-3 rounded-md hover:bg-red-700 ">Get Started</a>
                        {{-- <a href="https://via.placeholder.com/500x400"
                            class="bg-black text-white px-6 py-3 rounded-md hover:bg-stone-800">View API Docs</a> --}}
                    </div>
                    <div class=" pt-8 py-10 sm:pb-16 border border-gray-100 dark:border-none dark:hidden">
                        <img class="rounded-lg shadow-xl" src="./images/mobimessenger_dashboard_image.png"
                            alt="mobimessenger_dashboard_image">
                    </div>
                    <div class=" pt-8 py-10 sm:pb-16 dark:block hidden border border-gray-100 dark:border-none">
                        <img class="rounded-lg shadow-xl" src="./images/dark-dashboard.png"
                            alt="mobimessenger_dashboard_image">
                    </div>
                </div>
            </div>
        </section>


        <!--Key Features-->
        <section id="features" class="max-w-screen-xl mx-auto px-8 sm:px-16 py-8 sm:py-16">
            <div class=" text-center sm:pt-0">
                <h2 class="text-2xl font-bold sm:text-2xl sm:text-4xl dark:text-white">Key Features</h2>
                <p class="text-gray-500 pt-6 sm:pt-6 dark:text-white">Powerful messaging
                    capabilities designed for businesses of all sizes</p>
            </div>
            <div class="grid grid-cols-1 sm:gap-8 pt-8 gap-6 sm:grid-cols-2 sm:grid-cols-2 sm:pt-8">
                <div
                    class="dark:bg-[#18181B] bg-white border border-gray-200 dark:border-none shadow-md rounded-xl h-full
            transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="py-8 px-8 sm:pt-10">
                        <i class="fa fa-paper-plane text-red-600 sm:pb-4 text-2xl sm:text-4xl" aria-hidden="true"></i>
                        <p class="font-bold sm:pb-2 text-md sm:text-xl dark:text-white">Bulk SMS Campaigns</p>
                        <p class="text-gray-500 pt-2 dark:text-white">Send thousands of messages with scheduling,
                            segmentation and personalization</p>
                    </div>
                </div>
                <div
                    class="dark:bg-[#18181B] bg-white border border-gray-200 dark:border-none shadow-md rounded-xl h-full
            transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="py-8 px-8 sm:pt-10">
                        <!-- <div class="flex gap-4"> -->
                        <i class="fa fa-code text-red-600 sm:pb-4 text-2xl sm:text-4xl" aria-hidden="true"></i>
                        <p class="font-bold sm:pb-2 text-md sm:text-xl dark:text-white">Transactional Messaging via API
                        </p>
                        <!-- </div> -->
                        <p class="text-gray-500 pt-2 dark:text-white">Seamless integration with your applications using
                            a secure API</p>
                    </div>
                </div>

                <div
                    class="dark:bg-[#18181B] bg-white border border-gray-200 dark:border-none shadow-md rounded-2xl h-full
            rounded-xl h-full transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="py-8 px-8 sm:pt-10">
                        <i class="fa fa-bar-chart text-red-600 sm:pb-4 text-2xl sm:text-4xl" aria-hidden="true"></i>
                        <p class="font-bold sm:pb-2 text-md sm:text-xl dark:text-white">Real-time Delivery Reports</p>
                        <p class="text-gray-500 pt-2 dark:text-white">Track message status engagememt and performance
                        </p>
                    </div>
                </div>

                <div
                    class="dark:bg-[#18181B] bg-white border border-gray-200 dark:border-none shadow-md rounded-2xl h-full
            rounded-xl h-full transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="py-8 px-8 sm:pt-10">
                        <i class="fa fa-shield-alt text-red-600 sm:pb-4 text-2xl sm:text-4xl" aria-hidden="true"></i>
                        <p class="font-bold sm:pb-2 text-md sm:text-xl dark:text-white">Secure & Scalable
                            Infrastructure</p>
                        <p class="text-gray-500 pt-2 dark:text-white">Built for performance, privacy and reliability
                        </p>
                    </div>
                </div>

            </div>
        </section>


        <!-- Use Cases -->
        <section id="cases" class="">
            <div class="dark:bg-gray-800 bg-gray-50 py-8 sm:py-16">
                <div class="max-w-screen-xl mx-auto px-8 sm:px-16">
                    <div class="text-center ">
                        <h3 class="font-bold text-2xl sm:text-2xl sm:text-4xl dark:text-white">Use Cases</h3>
                        <p class="text-gray-500 pt-4 sm:pt-6 dark:text-white">How businesses are using Mobi Messenger
                            to improve customer communication</p>
                    </div>
                    <div class="grid grid-cols-1 sm:pt-10 pt-8 sm:gap-8 gap-4 sm:grid-cols-3">
                        <div
                            class="dark:bg-gray-700 bg-white dark:border-none border border-gray-200 shadow-md rounded-lg px-8 py-8
                    transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <p class="text-red-600 text-xl font-bold ">E-commerce</p>
                            <p class="pt-4 dark:text-white">Send order confirmations, sharing updates, and promotions.
                            </p>
                        </div>

                        <div
                            class="dark:bg-gray-700 bg-white dark:border-none border border-gray-200 shadow-md rounded-lg px-8 py-8
                    transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <p class="text-red-600 text-xl font-bold">Financial Services</p>
                            <p class="pt-4 dark:text-white">Alerts, OTPs, fraud notifications.</p>
                        </div>
                        <div
                            class="dark:bg-gray-700 bg-white dark:border-none border border-gray-200 shadow-md rounded-lg px-8 py-8
                    transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <p class="text-red-600 text-xl font-bold">Healthcare</p>
                            <p class="pt-4 dark:text-white">Appointment reminders, health tips.</p>
                        </div>
                        <div
                            class="dark:bg-gray-700 bg-white dark:border-none border border-gray-200 shadow-md rounded-lg px-8 py-8
                    transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <p class="text-red-600 text-xl font-bold">Education</p>
                            <p class="pt-4 dark:text-white">Parent notifications, exam alerts, fee reminders.</p>
                        </div>
                        <div
                            class="dark:bg-gray-700 bg-white dark:border-none border border-gray-200 shadow-md rounded-lg px-8 py-8
                    transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <p class="text-red-600 text-xl font-bold">Logistics</p>
                            <p class="pt-4 dark:text-white">Delivery updates, driver instructions</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Pricing -->
        <section id="pricing">
            <div class="dark:bg-gray-800 py-8 sm:py-16">
                <div class="max-w-screen-xl mx-auto px-8 sm:pt-0 sm:px-16 ">
                    <div class="text-center">
                        <h5 class="font-bold text-2xl sm:text-4xl dark:text-white">Simple, Transparent Pricing</h5>
                        <p class="text-gray-500 pt-4 sm:pt-6 dark:text-white">Choose the plan that fits your business
                            needs</p>
                    </div>
                    <div class="grid grid-cols-1 sm:gap-8 gap-10 sm:pt-12 pt-10 lg:grid-cols-5">
                        <a href="https://app.mobimessenger.com/app/register"
                            class="dark:bg-gray-800 bg-white py-10 sm:pt-12 text-center border border-gray-100 rounded-xl shadow-md
                    transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <p class="text-2xl font-bold dark:text-white">Starter</p>

                            <div class="text-red-500 text-4xl  font-bold pt-4 sm:pt-4">1,000 <br> SMS</div>

                            <p class="pt-6 sm:pt-8 pb-2 dark:text-white text-2xl">GHS 30.00</p>

                        </a>

                        <!-- Business  -->
                        <a href="https://app.mobimessenger.com/app/register"
                            class="dark:bg-gray-800 bg-white py-10 sm:pt-12 text-center border border-gray-200 rounded-xl shadow-md
                    transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <p class="text-2xl font-bold dark:text-white">Starter Plus</p>

                            <div class="text-red-500 text-4xl font-bold pt-4 sm:pt-4">5,000 <br> SMS</div>

                            <p class="text-2xl pt-6 sm:pt-8 pb-2 dark:text-white ">GHS 145.00</p>
                        </a>

                        <!-- Most Popular -->
                        <a href="https://app.mobimessenger.com/app/register"
                            class="dark:bg-gray-800 bg-white text-center border-2 border-red-500 rounded-xl shadow-md
                    transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <div class="relative w-full">
                                <div
                                    class="absolute -top-5 
                             md:text-xs w-full">
                                    <p class="w-fit mx-auto text-white text-base bg-red-500 py-2 px-4 rounded-2xl text-center ">Most Popular</p></div>
                            </div>
                            <p class="text-2xl font-bold pt-8 sm:pt-12 dark:text-white">Business</p>

                            <div class="text-red-500 text-4xl font-bold pt-4">10,000 <br> SMS</div>

                            <p class="text-2xl pt-6 sm:pt-8 pb-2 dark:text-white">GHS 290.00</p>

                        </a>

                        <!-- Enterprise  -->
                        <a href="https://app.mobimessenger.com/app/register"
                            class="dark:bg-gray-800 bg-white py-10 sm:pt-12 text-center border border-gray-200 rounded-xl shadow-md
                    transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <p class="text-2xl font-bold dark:text-white">Business Plus</p>

                            <div class="text-red-500 text-4xl font-bold pt-4">50,000 <br>SMS</div>

                            <p class="text-2xl pt-6 sm:pt-8 pb-2 dark:text-white">GHS 1,450.00</p>
                        </a>

                        <!-- Enterprise  -->

                        <a href="https://app.mobimessenger.com/app/register"
                            class="dark:bg-gray-800 bg-white py-10 sm:pt-12 text-center border border-gray-200 rounded-xl shadow-md
                    transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <p class="text-2xl font-bold dark:text-white">Enterprise</p>

                            <div class="text-red-500 text-4xl font-bold pt-4">100,000 <br>SMS</div>

                            <p class="text-2xl pt-6 sm:pt-8 pb-2 dark:text-white">GHS 2,700.00</p>
                        </a>

                    </div>
                    {{-- Sign Up --}}
                    <div class="pt-16 text-center">
                        <p class="text-gray-500 text-2xl"><span class="underline text-red-600 text-2xl"><a
                                    href="https://app.mobimessenger.com/app/register">Sign Up</a></span> to experience
                            more of our packages</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Why Choose -->
        <section class="bg-gray-50">
            <section class="max-w-screen-xl mx-auto px-8 sm:py-16 py-8">
                <div class="text-center sm:pt-0">
                    <h5 class="text-2xl font-bold sm:text-2xl sm:text-4xl dark:text-white">Why Choose Mobi Messenger?
                    </h5>
                    <p class="pt-2 text-gray-500 sm:pt-6 dark:text-white">Here's what sets us apart from other
                        messaging
                        platforms</p>
                </div>
                <div class="grid grid-cols-1 gap-6 pt-6 sm:grid-cols-3 sm:pt-8">
                    <div>
                        <div class="flex gap-4">
                            <i class="fa fa-check-circle text-red-600 text-2xl pt-1" aria-hidden="true"></i>
                            <div>
                                <p class="font-bold text-lg sm:text-md dark:text-white">High Delivery Rates</p>
                                <p class="dark:text-white">Our direct carrier connections ensure your messages reach
                                    their
                                    destination.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex gap-4">
                            <i class="fa fa-building text-red-600 text-2xl pt-1" aria-hidden="true"></i>
                            <div>
                                <p class="font-bold text-lg sm:text-md dark:text-white">Trusted by businesses</p>
                                <p class="dark:text-white">Used by companies of all sizes across multiple industries.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex gap-4">
                            <i class="fas fa-headset text-red-600 text-2xl sm:text-2xl pt-1" aria-hidden="true"></i>
                            <div>
                                <p class="font-bold text-lg sm:text-md dark:text-white">Fast Support</p>
                                <p class="dark:text-white">Our team is ready to help whenever you need assistance.</p>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
            </section>
        </section>


        <!-- Customers -->
        <section id="contact" class="dark:bg-gray-800 bg-red-600">
            <div class="max-w-screen-xl mx-auto px-8 sm:py-16 py-8 sm:px-16 ">
                <div class="text-center text-white">
                    <h5 class="text-2xl font-bold sm:text-2xl sm:text-4xl">Ready to reach your Customers faster?</h5>
                    <p class="pt-4 text-sm md:text-xl sm:pt-2 sm:pt-4 ">Start sending messages in minutes with Mobi
                        Messenger.</p>
                </div>

                <div class="flex gap-6 justify-center pt-8  ">
                    <a href="https://app.mobimessenger.com/app/register"
                        class="dark:bg-red-600 bg-white dark:text-white text-red-600 font-semibold sm:py-3 py-2 px-2 sm:px-6 rounded-md
                sm:text-md dark:border-none border-2 border-transparent hover:text-white hover:bg-red-600 hover:border-white">
                        Get Started</a>

                    <button @click="Form = true"
                        class="border-2 dark:hover:text-white dark:hover:border-red-600
                border-white font-semibold text-white sm:pt-3 py-2 px-2 sm:px-6 rounded-md sm:text-md
                hover:bg-white hover:text-red-600 dark:hover:bg-red-600 ">
                        Contact Sales</button>
                </div>

                {{-- Form Pop-Up --}}

            </div>
        </section>


        <!-- Footer -->
        <footer class="bg-black">
            <section class="max-w-screen-xl mx-auto px-8 pt-10 sm:pt-16 sm:px-12">
                <div class="grid md:grid-cols-4 grid-cols-1 sm:gap-8 gap-8 sm:pb-12"> <!--grid grid-cols-5-->
                    <div>
                        <p class="text-white font-bold text-lg">Mobi Messenger</p>
                        <p class="text-white pt-2 sm:pt-6">Powerful messaging platform for businesses to connect with their customers via SMS</p>
                    </div>

                    <div>
                        <p class="text-white font-bold text-lg">Company</p>
                        <ul class="py-6">
                            {{-- <li> <button @click="Form = true"
                                    class="text-gray-400  hover:text-white">Contact</button></li> --}}
                                    <li class="text-gray-400 hover:text-white">
                                        <a href="https://mobivs.com">Mobiverse Solutions Ltd.</a></li>
                        </ul>
                    </div>


                    <div>
                        <p class="text-white font-bold text-lg">Legal</p>
                        <ul class="py-4">
                            <li class="text-gray-400 pt-2 hover:text-white"><a href="#">Privacy Policy</a></li>
                            <li class="text-gray-400 pt-2 hover:text-white"><a href="#">Terms of Service</a>
                            </li>
                        </ul>
                    </div>

                    {{-- <div>
                        <p class="text-white font-bold text-lg">Resources</p>
                        <ul class="py-2">
                            <li class="text-gray-400 pt-3 hover:text-white"><a
                                    href="https://via.placeholder.com/500x400">API Docs</a></li>
                        </ul>
                    </div> --}}

                </div>

                <p class="border-y border-slate-50/15"></p>
                <!-- border-b border-gray-200 -->
                <p class="text-gray-400 text-center py-4 sm:py-6 text-sm">&copy; {{ now()->year }} Mobi Messenger.
                    All rights
                    reserved. This is a product of Mobiverse Ltd.
                </p>
            </section>
        </footer>
    </body>


</x-formlayout>
