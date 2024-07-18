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
            <span>Subject -> Add Subject</span>
            <span><a href="subject.php">BACK</a></span>
        </div>
    </div>
    <div class="container white-form">
        <form action="submit/insert_subject.php" method="post">
            <table id="input-table">
                <tr>
                    <td width='33%'>Select course</td>
                    <td>
                        <select name="courseid" id="courseid" class="input-box" required>
                            <option value="">select course</option>
                            <?php
                         //var_dump($_POST);
                            $sql = "select id,title from subject order by title";
                            $cmd = $db -> prepare($sql);
                            $cmd->execute();
                            $table = $cmd -> fetchAll();
                            foreach($table as $row)
                            { 
                                echo "<option value={$row['id']}>{$row['title']}</option>";
                            }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>
                        <input type="text" name="title" id="title" class="input-box" required />
                    </td>
                </tr>
                <tr>
                    <td>Rate</td>
                    <td>
                        <input type="number" name="rate" id="rate" class="input-box" required />
                    </td>
                </tr>
               
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit" class="save" name="submit" >
                            <i class="fa fa-save"></i> Save
                        </button>
                        <button type="reset" class="clear">
                            <i class="fa fa-trash"></i> clear all
                        </button>
                    </td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <?php require_once("inc/message.php") ?>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>