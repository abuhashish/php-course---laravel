<?php

use TechStore\Classes\Models\Product;

require_once("inc/header.php");

$pr = new Product;
$prods = $pr->selectAll("products.id AS prodId,products.name AS productName,
 cats.name AS catName,img,piecesNo,price,products.created_at AS productCreatedAt");
?>

<div class="container-fluid py-5">
    <div class="row">

        <div class="col-md-10 offset-md-1">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3>All Products</h3>
                <a href="#" class="btn btn-success">
                    Add new
                </a>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Pieces</th>
                        <th scope="col">Price</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($prods as  $index=>$prod) : ?>
                    <tr>
                        <th scope="row"><?= $index+1; ?></th>
                        <td><?= $prod['productName'] ?></td>
                        <td><?= $prod['catName']; ?></td>
                        <td>
                            <img src="<?= URL ?>/upload/<?= $prod['img'] ?>" alt="">
                        </td>
                        <td><?= $prod['piecesNo'] ?></td>
                        <td>$<?= $prod['price'] ?></td>
                        <td><?= $prod['productCreatedAt'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="#">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-info" href="#">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" href="#">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<?php require_once("inc/footer.php"); ?>