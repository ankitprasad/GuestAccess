<?php
header(“content-type: text/xml”);
echo “<?xml version=\”1.0\” encoding=\”UTF-8\”?>\n“;
?>
<Response>
<Gather action=”/doorbell_gather.php” method=”POST”>
<Say voice=”woman”>If you have a code, enter it now.</Say>
<Say voice=”woman”>If you are here for Ankit, press 2.</Say>
<Say voice=”woman”>For Ashley, press 3.</Say>
</Gather>
</Response>
