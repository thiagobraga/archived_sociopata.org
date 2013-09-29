<html><body onload="document.getElementById('safari_fix').submit();">
<form id='safari_fix' method='post' action=''>
<?php foreach($_REQUEST as $k => $v): ?>
<input type='hidden' name="<?php echoaddslashes($k)?>" value="<?php echoaddslashes($v)?>" />
<?php endforeach; ?></form>
</body></html>