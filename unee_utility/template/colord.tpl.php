<div class="colors-theme-wrapper">
<div class="colors-theme-image sidebar-left">
<img src="<?php echo $output['image']; ?>" alt="colors"/>
<?php //echo $js_location = variable_get('lightbox2_js_location', 'header'); ?>
</div>
<div class="colors-theme-form sidebar-right">
<?php
print render($output['form']); 
?>
</div>
</div>