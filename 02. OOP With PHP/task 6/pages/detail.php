<?php include"header.php" ?>


    <section class="py-5">
        <div class="container">
            <div class="row">

                    <div class="col-md-6">
                        <div class="card card-body">
                            <img src="assests/img/<?php echo $singleProduct['image']; ?>" class="" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-body">
                            <h1><?php echo $singleProduct['name']; ?></h1>
                            <h4>Price: <?php echo $singleProduct['price']; ?> </h4>
                            <hr/>
                            <h5>Category Name : <?php echo $singleProduct['category_id']; ?></h5>
                            <h5>Brand Name :</h5>
                            <div>
                                <h4>Descripton : </h4>
                                <p><?php echo $singleProduct['description']; ?></p>

                            </div>
                        </div>


                    </div>

            </div>
        </div>
    </section>

<?php include"footer.php" ?>
