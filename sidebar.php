<?php if ( is_sidebar_active('primary_widget_area') ) : ?>
        <div id="primary" class="widget-area">
            <ul class="xoxo">
                <?php dynamic_sidebar('primary_widget_area'); ?>

                <li>
                <h3 class="widget-title">Join The HYPE</h3>
                <div class="social-icons">
                    <a href="" class="discord">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/HH_discord.png" width="100" alt="" />
                    </a>
                    <a href="https://twitter.com/heroeshype" class="twitter">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/HH_twitter.png" width="100" alt="" />
                    </a>
                    <a href="http://www.youtube.com/channel/UCCbK25SKDju7Nfe0P6ctEiQ" class="youtube">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/HH_youtube.png" width="100" alt="" />
                    </a>
                </div>
                </li>

            </ul>
        </div><!-- #primary .widget-area -->
<?php endif; ?>       
 
<?php if ( is_sidebar_active('secondary_widget_area') ) : ?>
        <div id="secondary" class="widget-area">
            <ul class="xoxo">
                <?php dynamic_sidebar('secondary_widget_area'); ?>
            </ul>
        </div><!-- #secondary .widget-area -->
<?php endif; ?>