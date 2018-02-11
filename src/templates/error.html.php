<?php

function logo() {
    $file = dirname(__FILE__) . '/logo.png';
    return 'data:image/png;base64,' . file_get_contents(
        'php://filter/read=convert.base64-encode/resource=' . $file
    );
}

echo '<img src="' . htmlspecialchars(logo()) . '" />';

?>

<p>Your request was considered dangerous by <a href="https://shadowd.zecure.org"">Shadow Daemon</a>. To prevent harm it was blocked.</p>
<p>If you think this is an error please contact your administrator.</p>