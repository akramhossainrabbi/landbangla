<?php $target = '/home/landblandanglabd/public_html/storage/app/public/';

$shortcut = '/home/landblandanglabd/public_html/public/storage';
var_dump(symlink($target, $shortcut));
exit;
?>