<?php include 'header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($categoryProducts as $product){ ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="assets/images/<?php echo $product["image"] ?>" alt="" class="card-img-top" style="height:250px;" />
                        <div class="card-body">
                            <h5><?php echo $product["name"] ?></h5>
                            <p><?php echo $product["price"] ?></p>
                            <hr>
                            <a herf="" class="btn btn-outline-primary px-5">Details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php include 'footer.php' ?>