<?php
include '../includes/db.inc.php';
include 'admin_includes/header.admin.inc.php';
?>
<div class="container-fluid">


<?php
    if (isset($_GET['p_id'])) {
        $product_id = $_GET['p_id'];
        $sql = "select * from product where product_id = $product_id";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {

            $product_name = $row["name"];
            $product_description = $row["description"];
            $product_price = $row["price"];
            $product_color = $row["color"];
            $product_weight = $row["weight"];
            //$product_active = $row["product_active"];
        }
    }

    ?>

    <!--form to display product details and be able to edit details-->

    <form action="process.php?p_id=<?php echo $_GET['p_id']?> &opt=update" method="post" enctype="multipart/form-data">
    
    
    <div class="form-group">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="<?php echo $product_name;?>"placeholder="name" class="form-control pb-2">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" name="description" value="" cols="30" rows="10">    <?php echo $product_description;?>   </textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" value="<?php echo $product_price;?>" placeholder="Price" class="form-control pb-2">
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" name="color" value="<?php echo $product_color;?>" placeholder="color" class="form-control pb-2">
        </div>
        <div class="form-group">
            <label for="weight">Weight</label>
            <input type="decimal" name="weight" value="<?php echo $product_weight;?>" placeholder="Weight" class="form-control pb-2">
        </div>
        <div class="form-group pt-4 text-center">
            <button class="btn btn-success" type="submit" name="btn_edit_post">Edit Post</button>
        </div>
    </form>
</div>