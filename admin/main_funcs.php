<?php


function changeLang($l) {
    global $uri;

    $cookie_name = "lang";
    $cookie_value = strtolower($l);
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    ?>
        <script type="application/javascript">window.location.href = ""+window.location.origin+"/admin/<? echo $uri[2]; ?>"</script>
    <?php
}

function changeLangFront($l){

    $cookie_name = "lang";
    $cookie_value = strtolower($l);

    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    ?>
    <script type="application/javascript">
        window.location.href = "" + window.location.origin
    </script>
    <?php
}



function primary($uri, $count)
{
    if ($count === 3){
        switch ($uri[2]){
            case "blog" : include "./pages/blog/index.php";
                break;

            case "conference" : include "./pages/conference/index.php";
                break;

            default : null;
        }
    } elseif ($count === 4){
        if ($uri[3] === "create"){
            switch ($uri[2]){

                case "blog" : include "./pages/blog/create.php";
                    break;

                case "conference" : include "./pages/conference/create.php";
                    break;


                default : null;
            }
        }
    }
    elseif ($count === 5){
        if ($uri[3] === "view"){
            switch ($uri[2]){
                case "blog" : include "./pages/blog/view.php";
                    break;


                case "conference" : include "./pages/conference/view.php";
                    break;

            }
        } elseif ($uri[3] === "edit") {
            switch ($uri[2]){
                case "blog" : include "./pages/blog/edit.php";
                    break;
                case "conference" : include "./pages/conference/edit.php";
                    break;

                default : null;
            }
        }  elseif ($uri[3] === "add") {
            switch ($uri[2]){

                default : null;
            }
        } elseif ($uri[3] === "delete") {
            include "./pages/delete.php";
        }
    } else {
        echo "Not found";
    }
}


function delete($id, $table)
{
    global $con;
    $sql = "delete from {$table} where id = '{$id}'";
    $r = mysqli_query($con, $sql);
    if ($r) {
        return true;
    } else {
        return false;
    }
}


function getAll($table)
{
    global $con;
    $sql = "select * from {$table} order by id DESC";
    $r = mysqli_query($con, $sql);
    if (mysqli_num_rows($r) > 0) {
        $arr = [];
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
            array_push($arr, $row);
        }

        return $arr;
    } else {
        return null;
    }
}

function getOne($id,$table)
{
    global $con;
    $sql = "select * from {$table} where id = '{$id}'";
    $r = mysqli_query($con, $sql);
    if (mysqli_num_rows($r) > 0) {
        return mysqli_fetch_array($r, MYSQLI_ASSOC);
    } else {
        return null;
    }
}


function response($res, $page){
    if ($res === true) {
        ?><script>window.location.href = window.location.origin + "/admin/<?echo $page;?>"</script><?php
    } else {
        ?><script>alert("Malumot yuklanmadi -_-");</script><?php
    }
}

function responseFront($res){
    if ($res === true) {
        ?><script>
            alert("Ma'lumot yuklandi!")
            window.location.href = window.location.origin
        </script><?php
    } else {
        ?><script>alert("Malumot yuklanmadi -_-");</script><?php
    }
}



