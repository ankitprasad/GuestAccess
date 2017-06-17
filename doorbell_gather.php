<?php
if($_REQUEST[‘Digits’] == ‘2’) {
header(“Location: ankit.xml”);
die;
}
if($_REQUEST[‘Digits’] == ‘3’) {
header(“Location: ashley.xml”);
die;
}
if($_REQUEST[‘Digits’] == ‘6677’) {
header(“Location: secret-code.xml”);
die;
}
if($_REQUEST[‘Digits’] == ‘9988’) {
header(“Location: secret-code.xml”);
die;
}
header(“content-type: text/xml”);
echo “<?xml version=\”1.0\” encoding=\”UTF-8\”?>\n“;
?>
<Response>
<Say>I’m sorry, but the person you attempted to reach is unavailable.  Please try again later.</Say>
</Response>
