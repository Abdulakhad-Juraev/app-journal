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
        <h1 class="montserrat text-white text-7xl font-medium">Conference Batafsil</h1>
    </div>
    <div class="w-full h-full pt-0"
         style="background: url('./assets/images/bgimg.png') no-repeat; background-size: cover;">

<!---->
            <?
            if (isset($_GET['cid'])) {
                $sql = "select * from conference where id =" . $_GET['cid'];
                $r = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($r, MYSQLI_ASSOC);

                echo $row['name_uz'];
                echo "<br>";
                echo $row['content_uz'];
                echo "<br>";
                echo "<img src='uploads/".$row['photo']."'>";
                echo "<br>";
                echo $row['soni'];
                echo "<br>";
                echo $row['kuni'];
                echo "<br>";
                echo $row['yonalish_uz'];
            }
            ?>
        </div>
<!---->
    </div>
<?php
require 'includes/footer.php';
