<?php
    $acf_class_prefix = 'acf-media-field';
    $field = array_merge($this->defaults, $field);
    $key = $field->key;
    $name = $field->name;
    $_name = $field->_name;
    $instructions = $field->instructions;
    $url = $this->settings['url'];
?>
<div class="<?php echo $acf_class_prefix; ?>">
    <p class="<?php echo $acf_class_prefix; ?>-instructions"><?php echo $instructions; ?></p>
    <div class="<?php echo $acf_class_prefix; ?>-meadia-box">

        <?php $limit = 12; for( $i=0; $i < $limit; $i++ ){ ?>
            <div class="<?php echo $acf_class_prefix; ?>-grid-box">
                <div class="<?php echo $acf_class_prefix; ?>-edit-platte">
                    <ul>
                        <Li><a href="#" title="Edit"><span class="dashicons dashicons-edit"></span></a></Li>
                        <Li><a href="#" title="Delete"><span class="dashicons dashicons-trash"></span></a></Li>
                    </ul>
                </div>
                <img src="<?php echo $url; ?>/assets/images/59280071-pdf-icon-flat.jpg"/>
            </div>
        <?php } ?>
    
    </div>
    <div class="<?php echo $acf_class_prefix; ?>-add-new">
        <input type="button" name="submit" id="submit" class="button button-primary" value="Add New">
    </div>
</div>