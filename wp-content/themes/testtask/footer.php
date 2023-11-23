<?php

if ( is_active_sidebar( 'footer-1' ) ) {  ?>
<?php dynamic_sidebar( 'footer-1' ); ?>
			<?php
		}?>
<?php

    if ( is_active_sidebar( 'footer-2' ) ) {  ?>
<?php dynamic_sidebar( 'footer-2' ); ?>
			<?php
		}?>
<?php

    if ( is_active_sidebar( 'footer-3' ) ) {  ?>
<?php dynamic_sidebar( 'footer-3' ); ?>
			<?php
		}?>
<?php
    if ( is_active_sidebar( 'footer-4' ) ) {  ?>
<?php dynamic_sidebar( 'footer-4' ); ?>
			<?php
		} ?>


<?php wp_footer(); ?>

</body>
</html>
