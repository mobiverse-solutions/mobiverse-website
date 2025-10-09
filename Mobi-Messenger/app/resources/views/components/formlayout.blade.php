<x-headlayout>

     {{$slot}}
                <!-- Form Pop-Up -->

                <section x-show="Form" x-transition
                    class="fixed inset-0 size-auto max-h-none max-w-none overflow-auto bg-transparent backdrop:bg-transparent z-50">
                    <div class="fixed inset-0 bg-gray-500/75 transition-opacity">

                        <div
                            class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
                            <!-- relative bg-white py-6 w-3xs md:w-1/3 mx-auto px-10 rounded-xl shadow-lg border border-gray-200 -->
                            <div
                                class="relatieve transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg max-h-full py-6 px-10">
                                <div @click="Form = false" class="relative cursor-pointer">
                                    <i class="fa fa-times absolute -top-2 -right-5" aria-hidden="true"></i>
                                </div>

                                <div>
                                    <div class="text-md sm:text-lg font-semibold py-6 text-center">
                                        <h1><span class="sm:text-lg text-lg text-red-600 ">Hello,</span> please fill
                                            the form below
                                            to contact our Sales Team</h1>
                                    </div>
                                    <form action="/contactform" method="POST">
                                        @csrf
                                        <div class="grid grid-cols-1 justify-center">

                                            <div class="pb-2">
                                                <label for="fullname" class=""><span
                                                        class="font-medium text-sm">Full Name<span
                                                            class="text-red-500">*</span></span></label>
                                            </div>
                                            <div class="pb-2 md:pb-4">
                                                <input
                                                    class="border-2 focus:outline-none focus:border-red-600 
                                        w-full px-2 rounded-lg py-1"
                                                    type="text" id="fullname" name="fullname" required>
                                            </div>


                                            <label for="email" class="py-2"><span
                                                    class="font-medium text-sm">Email Address<span
                                                        class="text-red-500">*</span></span></label>
                                            <div class="pb-2 md:pb-4">
                                                <input
                                                    class="border-2 focus:outline-none focus:border-red-600   
                                            w-full px-2 rounded-lg py-1"
                                                    type="text" id="email" name="email" required>
                                            </div>

                                            <label for="message" class="py-2"><span
                                                    class="font-medium text-sm">Message<span
                                                        class="text-red-500">*</span></span></label>
                                            </label>
                                            <div class="pb-2">
                                                <textarea
                                                    class="border-2 focus:outline-none focus:border-red-600
                                             w-full pb-16 resize-none py-2 px-2 rounded-lg "
                                                    type="text" id="message" name="message" required></textarea>
                                            </div>
                                            {!! RecaptchaV3::field('register') !!}
                                            <div class="py-4">
                                                <button class="bg-red-500 px-10 py-2 rounded-lg text-white" type="submit"
                                                    class=" font-semibold text-lg">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
</x-headlayout>