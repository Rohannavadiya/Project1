<?php
require_once("inc/verify_login.php");
require_once('inc/connection.php');
require_once('inc/header-part.php');
?>
</head>

<body>
    <?php require_once('inc/menu.php'); 
        extract($_REQUEST);
        $sql="SELECT * FROM `subject` WHERE id=?";
        $cmd=$db->prepare($sql);
        $cmd->bindParam(1,$subjectid);
        $cmd->execute();
        $subject=$cmd->fetch();
        extract($subject); 
    ?>
    <div class="heading">
        <div>
            <span>Subject -> Edit Subject</span>
            <span><a href="subject.php">BACK</a></span>
        </div>
    </div>
    <div class="container white-form">
        <form action="Submit/update_subject.php" method="post">
            <table id="input-table">
                <tr>
                <td>Edit Course</td>
                    <td>
                        <input type="text" name="courseid" id="courseid" class="input-box" required value="<?= $courseid ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Edit Title</td>
                    <td>
                        <input type="text" name="title" id="title" class="input-box" required value="<?= $title ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Edit Rate</td>
                    <td>
                        <input type="number" name="rate" id="rate" class="input-box" required value="<?= $rate ?>"/>
                    </td>
                </tr>
               
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit" class="save">
                            <i class="fa fa-save"></i> Save Changes
                        </button>
                        <button type="reset" class="clear">
                            <i class="fa fa-trash"></i> clear all
                        </button>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="subjectid" value="<?= $id; ?>">
        </form>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>