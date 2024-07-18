<?php
require_once('inc/verify_login.php');
require_once('inc/connection.php');
require_once('inc/header-part.php');
?>
</head>

<body>
    <?php require_once('inc/menu.php'); ?>
    <div class="heading">
        <div>
            <span>Reports - Batch Wise</span>
            <span><a href="report.php">batch Report</a></span>
        </div>
    </div>
    <div class="container">
        <table align="center" class="data">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Batch Detail</th>
                    <th align='right'>Unpaid Amount</th>
                    <th align='right'>Paid Amount</th>
                    <th align='right'>Total Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql="select title,classtime,b.id as batchid, (select sum(amount) from lecture l where  l.batchid=batchid and payoutid is null) as 'unpaid',ifnull((select sum(amount) from lecture l where  l.batchid=batchid and payoutid is not null),0) as 'paid' from course c, batch b where c.id=courseid";
                    $cmd = $db -> prepare($sql);
                    $cmd -> execute();
                    $table= $cmd -> fetchALL();
                    $unpaidTotla = 0;
                    $paidTotal = 0;
                    foreach($table as $row)
                    {
                        extract($row);
                        $unpaidTotla += $unpaid;
                        $paidTotal += $paid;
                ?>
                <tr>
                    <td><?= $batchid ?></td>
                    <td><?= $title ?></td>
                    <td align='right'><?= $unpaid ?></td>
                    <td align='right'><?= $paid ?></td>
                    <td align='right'><?= $paid + $unpaid ?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th align='right'><?= $unpaidTotla ?></th>
                    <th align='right'><?=$paidTotal ?></th>
                    <th align='right'><?=$unpaidTotla + $paidTotal?></th>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>