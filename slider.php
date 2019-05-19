<div id="carousel">
    <a class="prevarrow">
        < </a> <a class="nextarrow"> >
    </a>
    <ul>
        <?php
        $strJsonFileContents = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/products/products.json");
        // Convert to array 
        $data = json_decode($strJsonFileContents, true);
        $data = array_slice($data, 0, 4);
        foreach ($data as $obj) {
            ?>
            <li><a href="<?php echo ($obj['url']); ?>">
                <img  src="<?php  echo ($obj['image']);?>" border="0">
            </a></li>
        <?php
    }
    ?>
    </ul>
</div>