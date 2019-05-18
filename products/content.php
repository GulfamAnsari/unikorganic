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