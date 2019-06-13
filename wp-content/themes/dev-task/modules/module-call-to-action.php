<?php
/*
 * Module: Call To Action
 */
$title = get_sub_field('title');
$copy  = get_sub_field('copy');
$link  = get_sub_field('link');
?>

    <div class="module module-call-to-action">
        <div class="module-inner row">
            <div class="col-md-8 col-md-offset-2">

                <?php if($title) { ?>
                <h1 class="module-title"><?php echo $title; ?></h1>
                <?php } ?>

                <?php if($copy) { ?>
                <p class="module-copy"><?php echo $copy; ?></p>
                <?php } ?>

                <?php if($link) { ?>
                <a href="<?php echo $link['url']; ?>" class="btn btn-primary"><?php echo $link['title']; ?></a>
                <?php } ?>

            </div>
        </div><!-- .module-inner -->
    </div><!-- .module-call-to-action -->

<?php
