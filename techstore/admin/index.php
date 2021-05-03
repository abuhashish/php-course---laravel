<?php

use TechStore\Classes\Models\Cat;
use TechStore\Classes\Models\Order;
use TechStore\Classes\Models\Product;

require_once("inc/header.php");
$pr = new Product;
$productCount = $pr->getCount();
$cat = new Cat;
$cattCount = $cat->getCount();
$order = new Order;
$orderCount = $order->getCount();
?>
<div class="container py-5">
    <div class="row">

        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Products</div>
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between align-items-center">
                        <h5><?= $productCount ?></h5>
                        <a href="<?= AURL ?>products.php" class="btn btn-light">Show</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between align-items-center">
                        <h5><?= $cattCount; ?></h5>
                        <a href="#" class="btn btn-light">Show</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Orders</div>
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between align-items-center">
                        <h5><?= $orderCount; ?></h5>
                        <a href="#" class="btn btn-light">Show</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php require_once("inc/footer.php"); ?>