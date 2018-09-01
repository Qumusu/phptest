<?php

if($_POST){
    echo "こんにちは、 ".$_POST['name']."さん";
}else{
    
}
?>


<p>名前を入力</p>
<form method="post">
    <input type="text" name="name">
    <input type="submit" value="送信する">
</form>