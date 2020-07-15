<?php
$submitbutton= $_POST['submitbutton'];
$box= $_POST['box'];
if ($submitbutton){
if ($box=="box")
{
header('Location: visitorpage.html');
}
else
{
 header('Location: interface.html');
}
}
?>


