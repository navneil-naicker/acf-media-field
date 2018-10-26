<?php
    if (!empty($field)) {
        $id = $field['id'];
        $key = $field['key'];
        $label = $field['label'];
        $name = $field['name'];
        $prefix = $field['prefix'];
        $type = $field['type'];
        $prefix = str_replace('_', '-', $type);
        $value = $field['value'];
        $instructions = $field['instructions'];
        $_name = $field['_name'];
?>
<div class="acf-media-gallery-wrapper <?php echo $name; ?> <?php echo $_name; ?>">
    <?php if (!empty($instructions)) { ?><p><?php echo $instructions; ?></p><?php } ?>
    <ul>
        <li class="<?php echo $prefix; ?>-add-new">
            <a href="#">
                <span class="dashicons dashicons-plus-alt"></span>
            </a>
        </li>
        <li class="<?php echo $prefix; ?>-container">
            <a href="#">
                <div class="hoverboard"><span class="dashicons dashicons-admin-generic"></span></div>
                <img src="http://localhost/plugins/wp-content/uploads/2018/06/pexels-photo-176400-1-150x150.jpeg" alt="">
            </a>
        </li>
    </ul>
</div>











<?php } ?>