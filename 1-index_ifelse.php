<?php

$role = "admin";
$position = "guest";

//$position = "directer";

if($role == "admin" || $position == "directer"){
    echo "<p>管理画面に進んでください。</p>";
}else{
    echo "<p>あなたは管理者ではないので、ここから先には進めません。</p>";
}

?>