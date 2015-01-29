</section>

<footer id="site-footer">
    <div class="row">
	<?php do_action('foundationPress_before_footer'); ?>
	<?php dynamic_sidebar("footer-widgets"); ?>
        </div>
    <div class="row">
        <hr />
        <div class="large-12 columns">
        <p>2014 &copy; Malibu Hot Tubs</p>
        </div>
        
	<?php do_action('foundationPress_after_footer'); ?>
    </div>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
