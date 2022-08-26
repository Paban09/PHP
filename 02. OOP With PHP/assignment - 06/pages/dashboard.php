<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">


        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header fw-bold text-center"> Control Panel </div>

                            <div class="card-body">
                                <div class="py-1"><a href="action.php?page=enter-news" class="btn btn-success">Enter News</a></div>
                                <table class="table table-bordered table-hover">

                                    <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Task</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php foreach ($allNews as $news){ ?>
                                        <tr>
                                            <td><?php echo $news["category"]?></td>
                                            <td><?php echo $news["title"]?></td>
                                            <td>
                                                <img src="<?php echo $news['image']; ?>" alt="" height="50" width="80"/>
                                            </td>
                                            <td><?php echo $news["description"]?></td>
                                            <td>
                                                <a href="action.php?page=edit&&id=<?php echo $news['id']; ?>" class="btn btn-success btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="action.php?page=delete&&id=<?php echo $news['id']; ?>" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<?php include 'footer.php'; ?>
