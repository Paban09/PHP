<?php include 'header.php'; ?>

<section >
    <div class="container-fluid">
        <div class ="row">
            <div class="col-md-4">
                <div class="ms-auto ">
                    <img src="assets/img/logo.png"  height="100" width="150" />
                </div>
            </div>
            <div class="py-3 col-md-8"><h1 class="fw-bold "><i>The Daily Star</i></h1></div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class ="row">
            <?php foreach ($allNews as $news){ ?>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-title"><?php echo $news["title"]?></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4"><img src="<?php echo $news['image']; ?>" alt="" height="200" width="200"/></div>
                                <div class="col-md-8"><?php echo $news["description"]?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
