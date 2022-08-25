<?php include 'header.php'; ?>

<section class="py-5 ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center">Login Form</div>
                    <div class="card-body">

                        <form action="action.php" method="post">


                            <div class="row">
                                <div class="row mb-3">
                                    <label class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" name="email" class=" form-control" />
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="row mb-3">
                                    <label class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="text" name="password" class=" form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="login_btn" class="btn btn-success" value="Submit" />
                                    </div>
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
