<?php use Roots\Sage\Titles; ?>
<?php 
if ( !is_single('product') && has_post_thumbnail() ) {
the_post_thumbnail();
}  ?>
<div class="page-header">

  <h1><?= Titles\title(); ?></h1>
</div>
