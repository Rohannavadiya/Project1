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
            <span>Subject</span>
            <span><a href="add_subject.php">Add Subject</a></span>
        </div>
    </div>
    <div class="container">
        <?php 
            require_once('inc/message.php');
        ?>
        <table align="center" class="data">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Course</th>
                    <th>Title</th>
                    <th>Rate</th>
                    <th width='10%'>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql ="select s.*,c.title as 'coursetitle' from subject s,course c where courseid=c.id order by s.id ";
                    $cmd = $db -> prepare($sql);
                    $cmd->execute();

                    while($row=$cmd->fetch())
                    {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?= $row['coursetitle']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['rate']; ?></td>
                    <td>
                        <a href="edit_subject.php"><i title="edit" class="fa fa-edit fa-2x"></i></a>
                        <a href="delete_subject.php"><i title="delete" class="fa fa-trash fa-2x"></i></a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>