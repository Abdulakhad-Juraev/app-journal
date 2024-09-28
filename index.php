<?php
require './includes/head.php';
require './includes/navbar.php';
require './admin/config.php';
include "admin/strings.php";
global $local_strings;
global $lang;
global $con;
?>

    <div style="background-image: url('./assets/images/background.png'); background-size: cover; height: 600px"
         class="w-full">
        <div class="container mx-auto">
            <div class="mx-20 py-32">
                <div class="grid grid-cols-12">
                    <div class="col-span-6">
                        <div class="mt-1 py-1 bg-blue-500 w-28 text-center text-white alice">
                            <p>Jurnal</p>
                        </div>
                        <div class="text-white mt-7">
                            <p class="text-4xl alice">“IJODKOR O'QITUVCHI” <br> Respublika ilmiy-uslubiy jurnali</p>
                            <p class="text-sm mt-8 w-11/12 font-light opacity-70 montserrat">Mazkur jurnalda zamonaviy
                                ta’lim tizimini rivojlantirish jarayonida
                                innovatsion ta’lim texnologiyalarini joriy etish va loyihalashtirish, integratsion
                                ta’limni rivojlantirishda yo’naltirilgan ilmiy-uslubiy jurnal</p>
                            <button class="bg-blue-500 py-3 px-10 rounded-full mt-12 gilroy">
                                <a href="#">Maqola yuborish</a>
                            </button>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <img src="./assets/images/books.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full py-16" style="background-image: url('./assets/images/bgimg.png'); background-size: 100%;">
        <div class="container max-auto">
            <div class="mx-20">
                <div class="flex justify-center">
                    <div class="max-w-max">
                        <p class="text-center font-bold text-2xl montserrat">Jurnallar</p>
                        <div class="flex justify-center">
                            <div class="h-0.5 w-6/12 mt-2 bg-blue-800 rounded-lg"></div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-x-8 px-20 py-14 font-semibold montserrat">
                    <?
                    $con;
                    $sql = "select * from blog order by id desc limit 0,3";
                    $r = mysqli_query($con, $sql);
                    while ($q = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                        ?>
                        <div>
                            <a href="journal-detail.php?jid=<?= $q['id']; ?>">
                            <img src="./uploads/<?= $q['photo']; ?>" alt="" style="width: 292px; height: 207px;">
                            <div class="flex justify-center pt-4">
                                <p class="w-2/3 text-center"><?= $q['name_' . $lang]; ?></p>
                            </div>
                            </a>
                        </div>

                        <?
                    }
                    ?>
                </div>
                <div class="flex justify-center">
                    <div class="max-w-max">
                        <p class="text-center font-bold text-2xl montserrat">Konferensiyalar</p>
                        <div class="flex justify-center">
                            <div class="h-0.5 w-6/12 mt-2 bg-blue-800 rounded-lg"></div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-6 gap-x-8 px-20 py-14 font-semibold montserrat">
                    <div></div>
                    <?
                    $con;
                    $sql2 = "select * from conference order by id desc limit 0,2";
                    $r2 = mysqli_query($con, $sql2);
                    while ($q2 = mysqli_fetch_array($r2, MYSQLI_ASSOC)) {
                        ?>
                        <div class="col-span-2">
                            <a href="conference-detail.php?cid=<?= $q2['id']; ?>">
                            <img src="./uploads/<?= $q2['photo']; ?>" alt="" style="width: 292px; height: 207px;">
                            <div class="flex justify-center pt-4">
                                <p class="w-2/3 text-center"><?= $q2['name_' . $lang]; ?></p>
                            </div>
                            </a>
                        </div>
                        <?
                    }
                    ?>

                    <div></div>
                </div>
                <div class="flex justify-center">
                    <div class="max-w-max">
                        <p class="text-center font-bold text-2xl montserrat">Jurnal haqida ma'lumot</p>
                        <div class="flex justify-center">
                            <div class="h-0.5 w-6/12 mt-2 bg-blue-800 rounded-lg"></div>
                        </div>
                    </div>
                </div>
                <div class="flex mt-12 w-full">
                    <div class="flex mr-auto py-1.5 px-12 bg-blue-500 text-white rounded-md alice"><p>Jurnallar</p>
                    </div>
                    <div class="flex ml-auto py-1.5 px-6 bg-blue-500 text-white rounded-md alice"><p>Konferensiyalar</p>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-x-8">
                    <div class="montserrat">
                        <div class="my-10">
                            <a href="https://t.me/trolluz" class="text-sm font-normal hover:underline"><p
                                        class="leading-snug">
                                    “Ijodkor o‘qituvchi” jurnali zamonaviy ta’lim tizimini rivojlantirish jarayonida
                                    innovatsion ta’lim texnologiyalarini joriy etish va loyihalashtirish, integratsion
                                    ta’limni rivojlantirishda yo’naltirilgan ilmiy-uslubiy jurnal.</p></a>
                        </div>
                        <div class="my-10">
                            <a href="https://t.me/trolluz" class="text-sm font-normal hover:underline">
                                <p class="leading-snug">“O‘zbekistonda fanlararo innovatsiyalar va ilmiy tadqiqotlar
                                    jurnali”
                                    mualliflarga o'zlarining asl tadqiqot maqolalarini barcha sohalarda nashr etish
                                    imkoniyatini
                                    beradi. Mazkur jurnal- bu bir oyda bir marta ko'rib chiqiladigan ochiq kirish
                                    jurnalidir.</p>
                            </a>
                        </div>
                        <div class="my-10">
                            <a href="https://t.me/trolluz" class="text-sm font-normal hover:underline">
                                <p class="leading-snug">Respublika milliy taqdimot jurnali axloqiy ochiq nashr etikasi
                                    va
                                    amaliyotiga amal qiladi. Nashr qilish uchun qabul qilingan barcha ilmiy maqolalar
                                    ikki tomonlama
                                    ko'rib chiqish jarayonidan o'tadi. Jurnal ko'p tarmoqli sohalarini qamrab oladi.</p>
                            </a>
                        </div>
                    </div>
                    <div class="w-full h-80 gilroy">
                        <div class="w-full h-full bg-blue-500 my-10 text-center px-6 py-16">
                            <p class="text-lg text-white">Telegram kanalimizga Obuna bo’ling!</p>
                            <p class="text-sm text-white opacity-70 pt-6">Respublika ilmiy tadqiqot jurnallari va milliy
                                konferensiyalar hamda xalqaro ilmiy amaliy tanlovlar haqida yangiliklar doirasida
                                bo‘lishinigiz
                                uchun obuna bo‘ling!</p>
                            <button class="py-1.5 px-6 text-blue-500 bg-white font-semibold rounded-full mt-8">
                                <div class="flex">
                                    <img src="./assets/images/telegram.png" alt="" class="my-auto"
                                         style="width: 14px; height: 14px;">
                                    <a href="#" class="pl-2">Obuna bo'lmoq</a>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="montserrat">
                        <div class="my-10">
                            <a href="https://t.me/trolluz" class="text-sm font-normal hover:underline">
                                <p class="leading-snug">“YOSH OLIMLAR, MAGISTR VA IQTIDORLI TALABALARNING ILMIY
                                    FAOLIYATINI
                                    OSHIRISHDA ULARGA QARATILGAN KREATIV G‘OYALAR, YECHIM VA TAKLIFLAR” ilmiy-amaliy
                                    on-line
                                    konferensiyada yosh olimlar, magistr va iqtidorli
                                    talabalarning ilmiy faoliyatini oshirish maqsad qilib olingan.</p>
                            </a>
                        </div>
                        <div class="my-10">
                            <a href="https://t.me/trolluz" class="text-sm font-normal hover:underline">
                                <p class="leading-snug">“Zamonaviy ta’lim tizimini rivojlantirish va unga qaratilgan
                                    kreativ
                                    g’oyalar, takliflar va yechimlar” mavzusidagi respublika ilmiy-amaliy on-line
                                    konferensiyasida
                                    zamonaviy ta’lim tizimini rivojlantirish jarayonida innovatsion ta’lim
                                    texnologiyalarini joriy
                                    etish va loyihalashtirish maqsad qilib olingan.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-image: url('./assets/images/background2.png')">
            <div class="container mx-auto gilroy">
                <div class="mx-20 py-20">
                    <p class="font-semibold text-6xl text-white mb-4">XALQARO TANLOVLAR</p>
                    <p class="text-sm text-white">MDX talaba - yoshlarini ilm yo’lida birlashtirishga qaratilgan
                        O’zbekistonda “Eng yaxshi ilmiy<br> maqola - 2021” (Лучшая научная статья 2021) xalqaro
                        ilmiy-amaliy
                        maqolalar tanlovini<br> o’tqazish to’grisida KONSEPTSIYA</p>
                    <button class="py-2 px-12 mt-8 bg-blue-500 rounded-full text-white">
                        <a href="#">O'qish</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="container mx-auto">
            <div class="mx-20 pt-28">
                <div class="pb-48">
                    <div class="flex justify-center">
                        <div class="max-w-max">
                            <p class="text-center font-bold text-2xl montserrat">Xalqaro OAK tan olgan bazalar</p>
                            <div class="flex justify-center">
                                <div class="h-0.5 w-6/12 mt-2 bg-blue-800 rounded-lg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-16 grid grid-cols-4">
                        <div class="p-6">
                            <img src="./assets/images/companyLogo1.png" alt="">
                        </div>
                        <div class="p-6">
                            <img src="./assets/images/companyLogo2.png" alt="">
                        </div>
                        <div class="p-6">
                            <img src="./assets/images/companyLogo3.png" alt="">
                        </div>
                        <div class="p-6">
                            <img src="./assets/images/companyLogo4.png" alt="">
                        </div>
                    </div>
                    <div class="grid grid-cols-4">
                        <div class="p-6">
                            <img src="./assets/images/companyLogo5.png" alt="">
                        </div>
                        <div class="p-6">
                            <img src="./assets/images/companyLogo6.png" alt="">
                        </div>
                        <div class="p-6">
                            <img src="./assets/images/companyLogo7.png" alt="">
                        </div>
                        <div class="p-6">
                            <img src="./assets/images/companyLogo8.png" alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-start">
                        <div class="max-w-max">
                            <p class="text-center font-bold text-2xl montserrat">Biz bilan bog'laning</p>
                            <div class="flex justify-center">
                                <div class="h-0.5 w-8/12 mt-1 bg-blue-800 rounded-lg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-x-8">
                        <div class="">
                            <div class="pt-16">
                                <p class="text-xs montserrat">“Eng yaxshi maqola - 2021” (Лучшая научная статья 2021)
                                    xalqaro ilmiy-amaliy maqolalar tanlovi yangi kontseptual jarayonga boy, tarmoq
                                    maummolarga ilmiy - innovatsion xamda zamonaviy echimlarni qamrab oladi</p>
                            </div>
                            <form action="" class="pt-8">
                                <div class="flex">
                                    <div>
                                        <label for="" class="text-sm text-blue-800">Ism Familiyangiz <span
                                                    class="text-red-700">*</span></label><br/>
                                        <input type="text"
                                               class="w-56 p-1 focus:outline-none border-2 border-blue-800 mt-4">
                                    </div>
                                    <div class="ml-auto">
                                        <label for="" class="text-sm text-blue-800">Telefon raqamingiz <span
                                                    class="text-red-700">*</span></label><br/>
                                        <input type="text"
                                               class="w-56 p-1 focus:outline-none border-2 border-blue-800 mt-4">
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <label for="" class="text-sm text-blue-800">Sizning xabaringiz <span
                                                class="text-red-700">*</span></label><br/>
                                    <textarea
                                            class="w-full h-48 p-1 focus:outline-none border-2 border-blue-800 mt-4"> </textarea>
                                </div>
                                <div class="w-full flex">
                                    <button type="submit"
                                            class="py-2 px-6 border rounded-sm mt-4 ml-auto text-blue-800 border-blue-800 hover:bg-blue-800 hover:text-white">
                                        Yuborish
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="">
                            <div class="px-4 h-full">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d189.78438551412648!2d71.7169329989191!3d40.44095854929335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bb9da31b77efa3%3A0xeab111eca5cb68cb!2sRaqamli%20texnologiyalar%20markazi!5e0!3m2!1suz!2s!4v1637295863410!5m2!1suz!2s"
                                        class="w-full h-3/4" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                <div class="pt-4">
                                    <div class="flex">
                                        <img src="./assets/images/location.png" alt="" class="px-2">
                                        <p class="text-sm text-blue-800 font-semibold">Farg’ona viloyati, Farg’on
                                            shahar,
                                            A.Navoi ko‘chasi 37-E, 13-honadon</p>
                                    </div>
                                    <div class="flex pt-2">
                                        <img src="./assets/images/calendar.png" alt="" class="px-2">
                                        <p class="text-sm text-blue-800 font-semibold">Ish vaqti: Dushanba-Shanba, 9:00
                                            dan-20:00 gacha</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
require './includes/footer.php';
?>