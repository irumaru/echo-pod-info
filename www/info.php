<?php

$envs = [
    ['Node name', 'KUBERNETES_NODE_NAME'],
    ['Pod name', 'KUBERNETES_POD_NAME'],
    ['Host name', 'HOSTNAME'],
    ['Server ip address', 'SERVER_ADDR'],
    ['Client ip address', 'REMOTE_ADDR']
];

?>
<p class="fs-3">Server time: <?php echo date("Y/m/d H:i:s") ?></p>
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
