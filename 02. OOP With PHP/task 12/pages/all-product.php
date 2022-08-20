<?php include_once "header.php" ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header fw-bold text-center"> All Product</div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">

                            <thead>
                                <tr>
                                    <th>Product name</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Product Stock</th>
                                    <th>Description</th>
                                    <th>Task</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($products as $product){ ?>
                                    <tr>
                                        <td><?php echo $product["name"]?></td>
                                        <td>
                                            <img src="<?php echo $product['image']; ?>" alt="" height="50" width="80"/>
                                        </td>
                                        <td><?php echo $product["price"]?></td>
                                        <td><?php echo $product["stock"]?></td>
                                        <td><?php echo $product["description"]?></td>
                                        <td>
                                            <a href="action.php?page=edit&&id=<?php echo $product['id']; ?>" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="action.php?page=delete&&id=<?php echo $product['id']; ?>" class="btn btn-danger btn-sm">
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

<?php include_once "footer.php" ?>
