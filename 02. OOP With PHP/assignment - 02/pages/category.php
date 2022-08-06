<?php include 'header.php'  ?>

    <section class="py-5">
        <div class="container">
            <div class="row">

                <?php  foreach ($categorised_products as $product){ ?>
                    <div class="col-md-4 mb-3">
                        <div class="card ">
                            <img style="height: 300px;" clas="w-50" src="assets/img/<?php echo $product['image'] ?>">
                            <div class="card-body">

                                <h4>Name: <?php echo $product['name'] ?></h4>
                                <p>TK. <?php echo $product['price'] ?></p>
                                <a href="action.php?page=details&&id=<?php echo $product['id'] ?>" class="btn btn-outline-primary px-3">Details</a>
                            </div>
                        </div>

                    </div>
                <?php  }  ?>
            </div>
        </div>
    </section>
<?php include 'footer.php'  ?>