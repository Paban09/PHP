<?php include "header.php" ?>
    <section class="py-5">
        <div class="container">


                <?php foreach ( $product_details as $product){ ?>
                    <div class="card border-0">
                        <img style="height: 500px; margin: 0 auto;" class="w-50" src="assets/img/<?php echo $product["image"]?>" />
                        <h3 class="pt-3">Product Name: <?php echo $product["name"]?></h3>
                        <h5>Product Price: <?php echo $product["price"]?></h5>
                        <p class="py-2"><?php echo $product["details"]?></p>
                        <a href="action.php?page=home" class="btn btn-primary">Back To Home</a>
                    </div>

                <?php } ?>


        </div>
    </section>
<?php include "footer.php" ?>