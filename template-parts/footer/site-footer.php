<?php
/**
 * Displays the site footer.
 *
 * @package Greenfire
 */
?>

<footer class="d-lg-flex py-3 px-5 row text-center text-lg-start">
    <?php get_template_part('template-parts/footer/footer-submit-date'); ?>
    <?php get_template_part('template-parts/footer/footer-icon-row'); ?>
</footer>
<?php wp_footer(); ?>
<?php get_template_part('template-parts/resume-modal'); ?>
</body>
</html>
