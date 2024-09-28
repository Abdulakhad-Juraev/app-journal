<div class="container mx-auto">
    <div class="mx-20">
        <div class="flex justify-center pt-6">
            <img src="./assets/images/LOGO.png" alt="">
        </div>
        <div class="flex justify-center montserrat my-4">
            <div class="mx-5">
                <div class="group">
                    <p class="font-medium group-hover:text-blue-800 cursor-pointer"><a href="/">Bosh sahifa</a></p>
                    <div class="flex justify-center">
                        <div class="h-0.5 w-5/12 bg-white group-hover:bg-blue-800 rounded-lg"></div>
                    </div>
                </div>
            </div>
            <div class="mx-5">
                <div class="group relative">
                    <div>
                        <div class="flex">
                            <p class="font-medium group-hover:text-blue-800 cursor-pointer"><a href="journal.php">Jurnallar</a></p>
                        </div>
                        <div class="flex justify-center">
                            <div class="h-0.5 w-5/12 bg-white group-hover:bg-blue-800 rounded-lg"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-5">
                <div class="group relative">
                    <div>
                        <div class="flex">
                            <p class="font-medium group-hover:text-blue-800 cursor-pointer"><a href="conference.php">Konferensiyalar</a></p>
                        </div>
                        <div class="flex justify-center">
                            <div class="h-0.5 w-5/12 bg-white group-hover:bg-blue-800 rounded-lg"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-5">
                <div class="group relative" x-data="{ open: false }" @mouseleave="open = false">
                    <div @mouseover="open = true">
                        <div class="flex">
                            <p class="font-medium group-hover:text-blue-800">Tanlovlar</p>
                            <span class="my-2 mx-1.5">
                                    <div class="my-0.5">
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.90824 6.76096C7.06328 5.10306 8.72084 2.70318 9.70698 1.21217C10.0096 0.75456 9.68103 0.164402 9.13239 0.164402L1.38119 0.164402C0.805865 0.164402 0.472216 0.815766 0.808383 1.28266L4.75844 6.76885C5.04243 7.16328 5.6304 7.15974 5.90824 6.76096Z"
                                                  fill="#0F172A"/>
                                        </svg>
                                    </div>
                                </span>
                        </div>
                        <div class="flex justify-center">
                            <div class="h-0.5 w-5/12 bg-white group-hover:bg-blue-800 rounded-lg"></div>
                        </div>
                        <div class="origin-top-right z-50 absolute -right-2 mt-1 w-28 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                             role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                             x-show="open"
                             x-transition.scale.origin.top>
                            <div class="py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                   tabindex="-1">Tanlov 1</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                   tabindex="-1">Tanlov 2</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                   tabindex="-1">Tanlov 3</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-5">
                <div class="group">
                    <p class="font-medium group-hover:text-blue-800">Arxiv</p>
                    <div class="flex justify-center">
                        <div class="h-0.5 w-5/12 bg-white group-hover:bg-blue-800 rounded-lg"></div>
                    </div>
                </div>
            </div>
            <div class="mx-5">
                <div class="group">
                    <p class="font-medium group-hover:text-blue-800">Biz bilan aloqa</p>
                    <div class="flex justify-center">
                        <div class="h-0.5 w-5/12 bg-white group-hover:bg-blue-800 rounded-lg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-full bg-blue-500 py-4">
    <div class="container mx-auto pt-1">
        <div class="mx-20">
            <div class="flex">
                <div class="flex flex-col gilroy">
                    <div class="flex">
                        <img src="./assets/images/covert.png" alt="" class="w-4 h-4">
                        <p class="text-sm text-white ml-2">info.bestpublication@mail.ru</p>
                    </div>
                    <div class="flex mt-1">
                        <img src="./assets/images/coolicon.png" alt="" class="w-4 h-4">
                        <p class="text-sm text-white ml-2">+998 99 367 03 64</p>
                    </div>
                </div>
                <div class="mx-20">
                    <div class="relative mx-auto text-gray-600">
                        <input class="bg-white h-10 px-5 pr-10 text-md w-96 focus:outline-none"
                               type="search" name="search" placeholder="Qidiruv...">
                        <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px"
                                 y="0px"
                                 viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                 xml:space="preserve"
                                 width="512px" height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                                </svg>
                        </button>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col text-white mx-4">
                        <p class="text-2xl mb-0 leading-6 alice">56 668</p>
                        <p class="text-xs montserrat">Obunachilar</p>
                    </div>
                    <div class="h-full w-0.5 bg-white rounded-xl"></div>
                    <div class="flex flex-col text-white mx-4">
                        <p class="text-2xl mb-0 leading-6 alice">150+</p>
                        <p class="text-xs montserrat">Hamkorlar</p>
                    </div>
                    <div class="h-full w-0.5 bg-white rounded-xl"></div>
                    <div class="flex flex-col text-white mx-4">
                        <p class="text-2xl mb-0 leading-6 alice">21 575</p>
                        <p class="text-xs montserrat">Maqolalar</p>
                    </div>
                    <!--                        <div class="h-full w-0.5 bg-white rounded-xl"></div>-->
                </div>
            </div>
        </div>
    </div>
</div>