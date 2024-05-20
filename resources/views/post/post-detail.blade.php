<x-app-layout>
<section class="text-gray-700 body-font overflow-hidden bg-white">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="{{ Storage::url('public/CkELjvEghqoRXcqHqRTd8eHSND1y79kxstLe6nW5.jpg') }}">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <div class="flex gap-3 items-center">
                    <img src="{{ Storage::url('public/DBVXBTEDJoY3POBitRVnKZQ9QcFcv2YgbaavGpoG.jpg') }}"
                        class="object-cover w-8 h-8 rounded-full 
                        border-2 border-emerald-400  shadow-emerald-400
                        ">

                        
                    <h3 class="font-bold">
                        Putuayu202
                    </h3>
                </div>
                <p class="leading-relaxed mt-2">Bersama Teman Teman</p>
                <div class="flex mt-2">
                    <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                    </svg>
                </button>
                </div>
                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                    <div class="flex">
                        <span class="mr-3">Comment</span>
                    </div>
                </div>
                <form>

                    <div class="flex flex-col">

                        <div class="border rounded-md p-3 ml-3 my-3">
                            <div class="flex gap-3 items-center">

                                <img src="https://avatars.githubusercontent.com/u/22263436?v=4"
                                    class="object-cover w-8 h-8 rounded-full 
                                    border-2 border-emerald-400  shadow-emerald-400
                                    ">

                                <h3 class="font-bold">
                                    Danoyyy
                                </h3>
                            </div>


                            <p class="text-gray-600 mt-2">
                                Comment 1
                            </p>

                        </div>
<!-- 
                        <div class="border rounded-md p-3 ml-3 my-3">
                            <div class="flex gap-3 items-center">

                                <img src="https://avatars.githubusercontent.com/u/22263436?v=4"
                                    class="object-cover w-8 h-8 rounded-full 
                                    border-2 border-emerald-400  shadow-emerald-400
                                    ">

                                <h3 class="font-bold">
                                    User name
                                </h3>
                            </div>


                            <p class="text-gray-600 mt-2">
                                this is sample commnent
                            </p>

                        </div> -->





                    </div>



                    <div class="w-full px-3 my-2">
                        <textarea
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            name="body" placeholder='Type Your Comment' required></textarea>
                    </div>

                    <div class="w-full flex justify-end px-3">
                        <input type='submit' class="px-2.5 py-1.5 rounded-md text-white text-sm bg-indigo-500" value='Post Comment'>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</section>
</x-app-layout>