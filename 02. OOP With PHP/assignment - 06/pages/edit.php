<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">

                    <div class="card-header text-center">Update News</div>
                    <div class="card-body">
                        <form action="action.php" method="post" enctype="multipart/form-data">

                            <div class="row mb-3">
                                <label class="col-md-3">Category</label>
                                <div class="col-md-9">
                                    <input type="text"  required value="<?php echo $singleNews['category']?>" class="form-control" name="category">
                                    <input type="hidden" value="<?php echo $singleNews['id']?>" class="form-control" name="id">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">News Title</label>
                                <div class="col-md-9">
                                    <input type="text" required value="<?php echo $singleNews['title']?>" class="form-control" name="title">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file"  accept="image/*" class="form-control" name="image">
                                    <img src="<?php echo $singleNews['image']?>" alt="" height="100" width="100" >
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-3">Description</label>
                                <div class="col-md-9">
                                    <textarea type="text" required  name="description" class="form-control"><?php echo $singleNews['description']?></textarea>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="update_news_btn" value="Update">
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
