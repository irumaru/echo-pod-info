<?php

$envs = [
    ['Node name', 'KUBERNETES_NODE_NAME'],
    ['Pod name', 'KUBERNETES_POD_NAME'],
    ['Host name', 'HOSTNAME'],
    ['Server ip address', 'SERVER_ADDR'],
    ['Client ip address', 'REMOTE_ADDR']
];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/5.3.0_dist_css_bootstrap.min.css" rel="stylesheet">
    <title>Test pod</title>
</head>
<body>
    <div class="container">
        <h1>Pod Environment</h1>
        <table class="table">
            <tr>
                <th>Item</th>
                <th>Environment</th>
                <th>Value</th>
            </tr>
            <?php foreach($envs as $env){ ?>
            <tr>
                <td><?php echo $env[0] ?></td>
                <td><?php echo $env[1] ?></td>
                <td><?php echo getenv($env[1]) ?></td>
            </tr>
            <?php } ?>
        </table>
        <script src="bootstrap/5.3.0_dist_js_bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>
