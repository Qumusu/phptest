<?php

echo "こんにちは、 ".$_GET['name']."さん";

?>

<p>名前を入力</p>
<form>
    <input type="text" name="name">
    <input type="submit" value="送信する">
</form>