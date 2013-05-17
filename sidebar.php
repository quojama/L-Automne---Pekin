<div class="menulist">

<!-- sidebar -->
<div id="sidebar">
<?php if ( is_active_sidebar( 'sidebar-1' ) ) :
dynamic_sidebar( 'sidebar-1' );
else: ?>
<div class="widget">
<h2>No Widget</h2>
<p>No Widget</p>
</div>
<?php endif; ?>
</div>
<!-- /sidebar -->

</div>


