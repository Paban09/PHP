<?php include 'header.php' ?>
    <section class="py-5">
        <div class="container">
            <h1 class="fw-bold text-center">Teachers Details</h1>

            <div class="row">
                <?php foreach ($information as $data){ ?>
                    <div class="col-md-4 mb-4">
                        <div class=card >
                            <img src="assets/img/<?php echo $data['image']; ?>" class="" style="height: 300px;"/>
                            <div class="card-body">
                                <h2><?php echo $data['name']; ?></h2>
                                <p><?php echo $data['subject']; ?></p>
                                <a href="" class="btn btn-outline-primary px-5">Details</a>
                            </div>
                        </div>
                    </div>
                <?php }  ?>
            </div>
        </div>
    </section>

<?php include 'footer.php' ?>
