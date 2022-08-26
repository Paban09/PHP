<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">

                    <div class="card-header text-center">Enter News</div>
                    <div class="card-body">
                        <form action="action.php" method="post" enctype="multipart/form-data">

                            <div class="row mb-3">
                                <label class="col-md-3">Category</label>
                                <div class="col-md-9">
                                    <input type="text" required class="form-control" name="category">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">News Title</label>
                                <div class="col-md-9">
                                    <input type="text" required class="form-control" name="title">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" required accept="image/*" class="form-control" name="image">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-3">Description</label>
                                <div class="col-md-9">
                                    <textarea type="text" required name="description" class="form-control"></textarea>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="enter_news_btn" value="Enter">
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
