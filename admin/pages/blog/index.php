<?php
global $local_strings;
global $lang;
global $lang_count;

?>

<a href="/admin/blog/create" class="btn btn-success my-3">
    <? echo $local_strings[$lang]['create']; ?>
</a>
<table class="table table-hover">
    <thead>
    <tr>
        <th>№</th>
        <th><? echo $local_strings[$lang]['name']; ?> <?=$lang;?></th>
        <th><? echo $local_strings[$lang]['description']; ?> <?=$lang;?></th>
        <th><?=$local_strings[$lang]['daycount']; ?></th>
        <th><?=$local_strings[$lang]['p4']; ?></th>
        <th><? echo $local_strings[$lang]['photo'];?></th>
        <th><? echo $local_strings[$lang]['action']; ?></th>

    </tr>
    </thead>
    <tbody>
    <?php
    $blogs = getAll("blog");
//    $logo = getAttachmentR($blogs["photo"]);
    if ($blogs !== null && $blogs !== "") {
        $i = 1;
        foreach ($blogs as $blog) {
            echo "<tr>";
            echo "<th>" . $i++ . "</th>";
            echo "<td>" .substr($blog['name_'.$lang], 0, 25) ."...</td>";
            echo "<td>" .substr($blog['content_'.$lang], 0, 25) ."...</td>";
            echo "<td>" .$blog['soni']."</td>";
            echo "<td>" .$blog['kuni']."</td>";
            echo "<td> <img src='/uploads/".$blog['photo']."'class='img-thumbnail' style='height: 50px'> </td>";
            echo "<td><a href='/admin/blog/view/" . $blog['id'] . "' class='btn btn-primary mr-1'><i class='fa fa-eye'></i></a>";
            echo "<a href='/admin/blog/edit/" . $blog['id'] . "' class='btn btn-warning mr-1'><i class='fa fa-pencil'></i></a>";
            echo "<a href='/admin/blog/delete/" . $blog['id'] . "' class='btn btn-danger'><i class='fa fa-trash'></i></a></td>";
            echo "</tr>";
        }
    }
    ?>
    </tbody>
</table>