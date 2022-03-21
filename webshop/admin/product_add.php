<?php 
include 'admin_includes/header.admin.inc.php';
?>

<body>
    <div class="container">
    <div class="row justify-content-center">
    <form action="process.php" method="post">
        <div class="form-group">
        <input type="text" class=form-control placeholder="name" name="product_name">
        </div>
        <div class="form-group">
        <input type="text" class=form-control placeholder="description" name="product_description">
        </div>
        <!-- for category_id
        <div class="form-group">
        <input type="text" class=form-control placeholder="category_id" name="product_category_id">
        </div>
        -->
        <div class="form-group">
        <input type="text" class=form-control placeholder="price" name="product_price">
        </div>
        <div class="form-group">
        <input type="text" class=form-control placeholder="color" name="product_color">
        </div>
        <div class="form-group">
        <input type="text" class=form-control placeholder="weight" name="product_weight">
        </div>
        <!--for active or not
        <div class="form-group">
        <input type="text" class=form-control placeholder="active" name="product_active">
        </div>
        -->
        <div class="form-group">
        <input type="submit" class="form-control btn btn-primary"name="newproduct_submit">
        </div>
    </form>
    
    
</div>
    </div>
    
</body>
</html>