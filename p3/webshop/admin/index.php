<?php
include 'process.php';
include 'admin_includes/header.admin.inc.php';
?>
<?php
if(isset($SESSION['message'])):?>

<div class="alert alert-<?=$SESSION['msg_type']?>">

<?php
    echo $SESSION['message'];
    unset($SESSION['message']);
?>
</div>
<?php
endif
?>


 <body>
    <div class="container">
    <div class="row justify-content-center">
        <table class="table table-bordered">
            <tr>
                <th style="width:20%"> Category id</th>
                <th style="width:50%"> Category name</th>
                <th style="width:30%" colspan="3"> Operations</th>
            </tr>
            <tr>
                <?php
                $sql = "select * from product";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <td><?php echo $row['product_id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td> <a href="process.php?Del=<?php echo $row['product_id'] ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
                <td><a href="product_detail_edit.php?opt=edit_post&p_id=<?php echo $row['product_id'];?>" class="btn btn-success"><span class="fa fa-edit"></td>
             </tr>
            
           
        <?php
                }
               
               
                //add product
                if (isset($_GET['add'])){
                    header('Location: product_add.php');
                }
                //go back to product_add (will become admin_index)
                if (isset($_GET['back'])){
                    header('Location: index.php');
                }

        ?>
        </table>
        </div>
        </div>
        <td> <a href="index.php?add=" class="btn btn-success"><span class="fa-solid fa-plus"></span></a></td>
</body>

</html>