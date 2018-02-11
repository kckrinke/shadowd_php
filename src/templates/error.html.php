<!DOCTYPE html>
<html>
<head>
    <title>Shadow Daemon - Request Blocked</title>
    <style>
        .content {
            font-family: Tahoma, "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            padding: 50px;
        }

        .info {
            background-color: rgb(217, 237, 247);
            border-bottom-color: rgb(188, 232, 241);
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
            border-bottom-style: solid;
            border-bottom-width: 1px;
            border-image-outset: 0;
            border-image-repeat: stretch stretch;
            border-image-slice: 100%;
            border-image-source: none;
            border-image-width: 1;
            border-left-color: rgb(188, 232, 241);
            border-left-style: solid;
            border-left-width: 1px;
            border-right-color: rgb(188, 232, 241);
            border-right-style: solid;
            border-right-width: 1px;
            border-top-color: rgb(188, 232, 241);
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-top-style: solid;
            border-top-width: 1px;
            box-sizing: border-box;
            color: rgb(58, 135, 173);
            line-height: 20px;
            margin-bottom: 20px;
            padding: 50px;
        }

        a {
            text-decoration: none;
        }
    </style>
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