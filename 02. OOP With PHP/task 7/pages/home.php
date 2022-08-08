<?php include 'header.php' ?>

    <section class="py-5">
        <div class="container">
            <div class="row">



                <div class="col-md-8 mx-auto">
                    <div class="card">


                        <div class="card-header">Full Name Program</div>


                        <div class="card-body">

<!--                        get data carry kore url diye (fast method - 256 character) -->
<!--                        post data carry hoy form er hidden e (slow method)-->
<!--                            action er kaj server er kache kpn rasta diye jabe-->
<!--                            input element er name array er index hoy-->
                            <form action="action.php" method="post">
                                <div class="row mb-3">
                                    <label class="col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="firstName"  class="form-control">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="lastName" class="form-control">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo isset($result)?$result:""; ?>"  class="form-control">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="fullNameButton" class="btn btn-success" value="Make Full Name">
                                    </div>
                                </div>

                            </form>
                        </div>


                    </div>
                </div>



            </div>
        </div>
    </section>

<?php include 'footer.php' ?>
