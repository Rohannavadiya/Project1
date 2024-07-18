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
            <span>Batch -> Add Batch</span>
            <span><a href="batch.php">BACK</a></span>
        </div>
    </div>
    <div class="container white-form">
        <form action="submit/insert_batch.php" method="post">
            <table id="input-table">
                <tr>
                    <td width='33%'>Add courseid</td>
                    <td>
                    <select name="courseid" id="courseid" class="input-box" required>
                            <option value="0">select course</option>
                            <?php
                         //var_dump($_POST);
                            $sql = "select id,title from course order by title";
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
                    <td>Add startdate</td>
                    <td>
                        <input type="date" name="startdate" id="startdate" class="input-box" 
                        required/>
                    </td>
                </tr>
                <tr>
                    <td>Add enddate</td>
                    <td>
                        <input type="date" name="enddate" id="enddate" class="input-box" required/>
                    </td>
                </tr>
                <tr>
                    <td>Add classtime</td>
                    <td>
                    <input type="text" name="classtime" id="classtime" class="input-box" required/>
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