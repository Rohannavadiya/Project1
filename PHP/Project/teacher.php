<?php
require_once('inc/verify_login.php');
require_once("inc/connection.php");
require_once('inc/header-part.php');
?>
<link rel="stylesheet" href="dist/css/lightbox.min.css">
</head>

<body>
    <?php require_once('inc/menu.php'); ?>
    <div class="heading">
        <div>
            <span>Teacher</span>
            <span><a href="add_teacher.php">Add Teacher</a></span>
        </div>
    </div>
    <div class="container">
        <?php require_once('inc/message.php'); ?>
        <table align="center" class="data">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Mobile <br />
                        Email
                    </th>
                    <th>Gender</th>
                    <th>Qualification <br />
                        Experience
                    </th>
                    <th width='8%'>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from teacher where isdeleted=0 order by id desc";
                $cmd = $db->prepare($sql);
                $cmd->execute();
                //fetch all rows 
                $table = $cmd->fetchAll();
                foreach ($table as $row) {
                    extract($row);
                ?>
                    <tr>
                        <td><?= $id; ?></td>
                        <td><?= $fullname; ?></td>
                        <td>
                            <a class="example-image-link" href="images/<?= $photo; ?>" data-lightbox="example-1">
                                <img class="example-image" height='100px' src="images/<?= $photo; ?>" alt="">
                            </a>
                        </td>
                        <td>Mo : <?= $mobile; ?> <br />
                            Email : <?= $email; ?>
                        </td>
                        <td><?= $gender; ?></td>
                        <td>
                            <?= $qulification; ?>
                        </td>
                        <td>
                            <a href="edit_teacher.php"><i title="edit" class="fa fa-edit fa-2x"></i></a>
                            <a class="delete"><i title="delete" class="fa fa-trash fa-2x"></i></a>
                        </td>
                    </tr>
                <?php } //end of loop 
                ?>
                <tr>

                </tr>
            </tbody>
        </table>
    </div>
    <script src="jquery-min.js"></script>
    <script>
        $(document).ready(function() {

            $(".delete").click(function(){

                let chioce = confirm("DO YOU WANT TO DELETE");
                if(chioce===true){

                    let id = $(this).parent().parent().find("td:first").html();
                    let row = $(this).parent().parent();
                    let table = 'teacher';
                    var pageAddress = "ajax/delete_row.php";
                    $.post(pageAddress, {
                        rowid:id,
                        tablename:table
                    },
                    function(response){
                       console.log(response);
                        $(row).fadeOut(1000,function(){
                            $(row).remove();
                        })
                    }
                    ).fail(function(error) {
                        alert('error occured....');
                    });
                }
            });
        });
    </script>
</body>
<?php
require_once('inc/footer.php');
?>