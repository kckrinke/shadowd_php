<?php

$file = dirname(__FILE__) . '/logo.png';
echo '<img src="' . htmlspecialchars(\shadowd\Template::getInlineFile($file, 'image/png')) . '" />';

?>

<p>Your request was considered dangerous by <a href="https://shadowd.zecure.org"">Shadow Daemon</a>. To prevent harm it was blocked.</p>
<p>If you think this is an error please contact your administrator.</p>