
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
            <span>Course</span>
            <span><a href="add_course.php">Add Course</a></span>
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
                    <th>Name</th>
                    <th>Fees</th>
                    <th>Duration</th>
                    <th>Detail</th>
                    <th width='15%'>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "select * from course where isdeleted=0 order by id";
                    $cmd = $db->prepare($sql);
                    $cmd->execute();

                    while($row = $cmd->fetch())
                    {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['fees']; ?></td>
                        <td><?php echo $row['duration']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td>
                            <a href="edit_course.php?courseid=<?= $row['id']; ?>"><i title="edit" class="fa fa-edit fa-2x"></i></a>
                            <a class="delete"><i title="delete" class="fa fa-trash fa-2x"></i></a>
                        </td>
                    </tr>
               <?php 
                    }
                ?>
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
                    let table = 'course';
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
