<?php
?>
<div class="footer">
    <div class="container">
        <div class="row container">
            <div class="col-lg-3 col-sm-12 footer-col-1">
                <?php
                if (is_active_sidebar('footer-1')) { ?>
                    <?php dynamic_sidebar('footer-1'); ?>
                    <?php
                } ?>
            </div>
            <div class="col-lg-3 col-sm-12 footer-col-2">
                <?php

                if (is_active_sidebar('footer-2')) { ?>
                    <?php dynamic_sidebar('footer-2'); ?>
                    <?php
                } ?>
            </div>
            <div class="col-lg-3 col-sm-12 footer-col-3">
                <?php

                if (is_active_sidebar('footer-3')) { ?>
                    <?php dynamic_sidebar('footer-3'); ?>
                    <?php
                } ?> </div>
            <div class="col-lg-3 col-sm-12 footer-col-4">
                <?php
                if (is_active_sidebar('footer-4')) { ?>
                    <?php dynamic_sidebar('footer-4'); ?>
                    <?php
                } ?>

            </div>
            <?php wp_footer(); ?>
        </div>
    </div>
</div>
</body>
</html>
