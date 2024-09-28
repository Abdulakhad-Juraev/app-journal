<?php
require 'includes/head.php';
require 'includes/navbar.php';
require './admin/config.php';
include "admin/strings.php";
global $local_strings;
global $lang;
global $con;
?>
    <div class="container-fluid mx-auto flex items-center justify-center"
         style="height: 300px; background-image:url('./assets/images/bg_journal-page.png'); background-repeat: no-repeat; background-size: 100% 100%; ">
        <h1 class="montserrat text-white text-7xl font-medium">Jurnallar</h1>
    </div>
    <div class="w-full h-full pt-0"
         style="background: url('./assets/images/bgimg.png') no-repeat; background-size: cover;">

        <div class="container pt-5 mx-auto">
            <div class="mx-20">
                <div class="mt-16">
                    <?
                    $con;
                    $sql = "select * from blog order by id desc limit 0,5";
                    $r = mysqli_query($con, $sql);
                    while ($q = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                    ?>
                        <div class="grid grid-cols-12 gap-x-10 py-14">
                            <div class="col-span-7">
                                <div class="flex">
                                    <div class="px-5">
                                        <img src="./uploads/<?=$q['photo'];?>" class="max-w-max w-48" alt="">
                                        <p class="text-base leading-tight text-center mt-3 font-semibold">
                                            “<?=$q['name_'.$lang];?>”
                                        </p>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-xl gilroy"><?=$q['name_'.$lang];?></p>
                                        <p class="text-sm tracking-wide my-6 font-medium montserrat">
                                            <?= (strlen($q['content_'.$lang]) > 200) ? substr($q['content_'.$lang], 0, 200) . "..." : $q['content_'.$lang];?>
                                        </p>
                                        <div class="font-semibold flex mt-20">
                                            <a href="journal-detail.php?jid=<?= $q['id']; ?>" class="text-sm text-blue-800 underline mr-4">Jurnalni ko'rish</a>
                                            <a href="#" class="text-sm text-blue-800 underline">Nashr etilgan son</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-4 pt-12">
                                <p class="text-base font-bold ">Nashr etilishi: Bir oyda <?=$q['soni'];?> marotaba</p>
                                <p class="text-base font-bold ">Maqolalar qabul qilinishi: <?=$q['kuni'];?> kun</p>
                                <p class="text-base font-bold ">Qabul yo‘nalishlari: <?=$q['yonalish_'.$lang];?></p>
                                <p class="text-base font-bold ">ISSN: <?=$q['code'];?></p>
                            </div>
                        </div>


                        <?
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
<?php
require 'includes/footer.php';
