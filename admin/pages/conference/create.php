<?php
global $local_strings;
global $lang;
global $con;
?>
<script src="/admin/editor/ckeditor.js"></script>

<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="row mt-4">
            <div class="col-12"><span><? echo $local_strings[$lang]['name']; ?> Uz</span>
                <textarea name="nameUz" class="form-control" id="" rows="1"></textarea>
            </div>
            <div class="col-12 mt-3"><span><? echo $local_strings[$lang]['name']; ?> Ru</span><textarea name="nameRu" class="form-control" id="" rows="1"></textarea>
            </div>
            <div class="col-12 mt-3"><span><? echo $local_strings[$lang]['name']; ?> En</span><textarea name="nameEn" class="form-control" id="" rows="1"></textarea>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12"><span><? echo $local_strings[$lang]['description']; ?> Uz</span><textarea name="contentUz" id="blogContentUz" class="form-control"  ></textarea>
            </div>
            <div class="col-12 mt-3"><span><? echo $local_strings[$lang]['description']; ?> Ru</span><textarea name="contentRu" class="form-control" id="blogContentRu" ></textarea>
            </div>
            <div class="col-12 mt-3"><span><? echo $local_strings[$lang]['description']; ?> En</span><textarea name="contentEn" class="form-control" id="blogContentEn"></textarea>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 mt-3"><span><? echo $local_strings[$lang]['daycount']; ?></span><input type="number" min="0" name="soni" class="form-control"></div>
            <div class="col-12 mt-3"><span><? echo $local_strings[$lang]['p4']; ?></span><input type="number" min="0" name="kuni" class="form-control">
            </div>
            <div class="col-12 mt-3"><span><?=$local_strings[$lang]['pattern']; ?> Uz</span><input type="text" name="yonalishUz" class="form-control"></div>
            <div class="col-12 mt-3"><span><?=$local_strings[$lang]['pattern']; ?> Ru</span><input type="text" name="yonalishRu" class="form-control"></div>
            <div class="col-12 mt-3"><span><?=$local_strings[$lang]['pattern']; ?> En</span><input type="text" name="yonalishEn" class="form-control"></div>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col-4">
                <span><?=$local_strings[$lang]['photo']; ?></span>
                <input type="file" class="form-control" name="file">
            </div>
        </div>

        <div class="col-4 mt-4 pb-5">
            <a href="/admin/blog" class="btn btn-secondary"><? echo $local_strings[$lang]['cancel'];?></a>
            <button class="btn btn-success" type="submit" name="submit"><? echo $local_strings[$lang]['create'];?></button>
        </div>

        <?php
        if (isset($_POST['submit'])) {
            $nameuz = $_POST['nameUz'];
            $nameru = $_POST['nameRu'];
            $nameen = $_POST['nameEn'];

            $contentuz = $_POST['contentUz'];
            $contentru = $_POST['contentRu'];
            $contenten = $_POST['contentEn'];

            $son = $_POST['soni'];
            $kun = $_POST['kuni'];

            $yonalishuz = $_POST['yonalishUz'];
            $yonalishru = $_POST['yonalishRu'];
            $yonalishen = $_POST['yonalishEn'];


            $typeFile = $_FILES['file']['type'];
            $sizeFile = $_FILES['file']['size']/1024;
            $stringEquals = substr($typeFile,0,5);
            $data = $_FILES['file']['name'];

            if ($sizeFile >=10240){
                ?><script>alert('<?=$local_strings[$lang]['photosize'];?>');</script><?
            }
            else if (strcmp($stringEquals,"image")!==0){
                ?><script>alert('<?=$local_strings[$lang]['addphoto'];?>');</script><?
            }
            else{
                $sqlblog = "insert into conference(name_uz,name_ru,name_en,content_uz,content_ru,content_en,photo,soni,kuni,yonalish_uz,yonalish_ru,yonalish_en,vaqt) values ('{$nameuz}','{$nameru}','{$nameen}','{$contentuz}','{$contentru}','{$contenten}','{$data}','{$son}','{$kun}','{$yonalishuz}','{$yonalishru}','{$yonalishen}',NOW())";
                $rblog = mysqli_query($con,$sqlblog);
                move_uploaded_file($_FILES['file']['tmp_name'],"./../uploads/".$data);
                if ($rblog){
                    ?><script>
                        alert('<?=$local_strings[$lang]['saveData'];?>');
                        window.location.href='/admin/conference';
                    </script><?
                }
                else{
                    ?><script>alert('<?=$local_strings[$lang]['saveDataError'];?>');</script><?
                }
            }
        }
        ?>
    </form>
</div>
<script>
    CKEDITOR.replace('blogContentUz');
    CKEDITOR.replace('blogContentRu');
    CKEDITOR.replace('blogContentEn');
</script>