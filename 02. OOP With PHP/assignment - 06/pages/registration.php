<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">

                    <div class="card-header text-center">Registration Form</div>
                    <div class="card-body">
                        <form action="action.php" method="post" enctype="multipart/form-data">

                            <div class="row mb-3">
                                <label class="col-md-3"> Name</label>
                                <div class="col-md-9">
                                    <input type="text" required class="form-control" name="name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" required class="form-control" name="email">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" required class="form-control" name="password">
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label class="col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" required accept="image/*" class="form-control" name="image">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="register_btn" value="Register">
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
