<!-- main body -->
<div class="container">
    <div class="col-md-12" style="margin: 8px 0">
        <h2>Our Products</h2>
        <hr>
        <?php
        $strJsonFileContents = file_get_contents("products.json");
        // Convert to array 
        $data = json_decode($strJsonFileContents, true);
        foreach ($data as $obj) {
            ?>
            <div class="col-md-2 products">
                <a href="/products">
                    <img src="<?php echo ($obj['image']); ?>">
                    <p><?php echo ($obj['name']); ?></p>
                </a>
            </div>
            <div class="col-md-1"></div>
        <?php
    }
    ?>
        <hr>
    </div>
</div>