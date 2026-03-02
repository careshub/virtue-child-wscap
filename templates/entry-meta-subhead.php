<div class="subhead">
    <?php $post_category = get_the_category($post->ID); if ( $post_category==true ) { ?>  
    <span class="postedintop"><i class="icon-folder-open"></i> <?php esc_html_e('posted in:', 'virtue'); ?> <?php the_category(', ') ?></span> <?php }?>
</div>
