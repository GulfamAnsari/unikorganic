<!-- slider -->
<!--CAROUSEL-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/slider.php'); ?>
<!-- #carousel-->

<!-- main body -->
<div class="container">
    <div class="col-md-9">
        <h2>Welcome To Unik Corporate Solutions Private Limited</h2>
        <p>Unik Corporate Solutions  Pvt Ltd is occupied in manufacturing a wide range of Foam Soap, Cleaning Product, Hand Wash, Liquid Polish, Scale Removers, Multi Purpose Cleaner, Dish Wash Gel and Bathroom Cleaners. Offered products are extremely employed in the market for their top features. Experts process these range in order to meet the universal industry guidelines. Our presented products are checked on numerous parameters to make sure that we supply only top series to patrons.</p>
        <p>Being a customer-conscious entity, we give full efforts to attain satisfaction of customersin proficient way. Furthermore, we work under the command of our mentor. Under his command our entity has archived a strong foothold in the market.</p>
    </div>
    <div class="col-md-3">
    </div>
</div>

<!-- main body -->
<div class="container">
    <div class="col-md-12" style="margin: 8px 0">
        <h2>Our Products</h2>
        <hr>
        <div class="all-products">
            <?php
            $strJsonFileContents = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/products/products.json");
            // Convert to array 
            $data = json_decode($strJsonFileContents, true);
            $data = array_slice($data, 0, 4);
            foreach ($data as $obj) {
                ?>
                <div class="products">
                    <a href="<?php echo ($obj['url']); ?>">
                        <img src="<?php if ($obj['image']) echo ($obj['image']);
                                    else echo "/images/placeholder-featured-image.png"; ?>">
                        <p><?php echo ($obj['name']); ?></p>
                    </a>
                </div>
            <?php
        }
        ?></div>
        <hr>
    </div>
</div>