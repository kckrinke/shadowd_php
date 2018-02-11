<!DOCTYPE html>
<html>
<head>
    <title>Shadow Daemon - Request Blocked</title>
    <?php

    $file = dirname(__FILE__) . '/base.css';
    echo '<link href="' . htmlspecialchars(\shadowd\Template::getInlineFile($file, 'text/css')) . '" rel="stylesheet" />';

    ?>
</head>
<body>
    <div class="content">
        <div class="info">
            <a href="https://shadowd.zecure.org">
                <?php

                $file = dirname(__FILE__) . '/logo.png';
                echo '<img src="' . htmlspecialchars(\shadowd\Template::getInlineFile($file, 'image/png')) . '" />';

                ?>
            </a>
            <h1>Request Blocked</h1>
            <p>Your request was considered dangerous by <a href="https://shadowd.zecure.org">Shadow Daemon</a>. To prevent harm it was blocked.</p>
            <p>If you think this is an error please contact your administrator.</p>
        </div>
    </div>
</body>
</html>