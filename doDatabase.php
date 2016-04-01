<?php
function addVideo($title, $uploader, $description){
    include 'openDB.php';

    $key = hash('sha256', $description . $uploader);

    $insert = $db->prepare("insert into videos (title, uploader, description, hash) values ('$title','$uploader','$description', '$key')");

    $insert->execute();
    include 'closeDB.php';

}

function getVideo($hash){
    include 'openDB.php';

    $query = $db->prepare("select * from videos where hash=:hash");
    $query->bindValue(':hash', $hash, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    include 'closeDB.php';
    return $result;
}

?>
