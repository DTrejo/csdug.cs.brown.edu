<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
));
?>

<?php // for sidebar.php if needed (remove the // below the if() statement) ?>
<?php // if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : endif; ?>