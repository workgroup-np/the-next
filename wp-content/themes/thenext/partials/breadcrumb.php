<?php // Exit if accessed directly
if (!defined('ABSPATH')) {echo '<h3>Forbidden</h3>'; exit();} 
global $creativ_options;
$bc_image=get_template_directory_uri().'/assets/images/freelancer_header_04.png';
$pageid=get_the_ID();
$bc_style=0;$bc_style_theme=0;
$theme_bc_style=$creativ_options['breadcrumb_option'];
if(!empty($creativ_options['breadcrumb_image']['url'])):
    $bc_image=esc_url($creativ_options['breadcrumb_image']['url']);
endif;
$page_bc_option=get_post_meta( $pageid, 'creativ_breadcrumb_option',true);
$page_bc_image=get_post_meta( $pageid, 'creativ_breadcrumb_image',true); 
if(!empty($page_bc_image)):
    $bc_image=esc_url($page_bc_image);
endif;

$t_style=$creativ_options['breadcrumb_title'];
$t_flag=0;
$sec_class='';
if($t_style=='normal'):
    $t_id='page_header';
elseif($t_style=='boxed'):
    $t_id='page_header_boxed';
    $t_flag=1;
    $sec_class='max-height';
else:
    $t_id='page_header_alt';
endif;
?>
<?php
if($page_bc_option=='normal'):?>
    <section class="page-white bgpatttern clearfix">
        <div class="section-title">
            <?php if(isset($creativ_options['breadcrumb_nav']) && $creativ_options['breadcrumb_nav']==1):?>
                <div class="breadcrumb-container">
                    <ul class="breadcrumb">
                        <?php creativ_breadcrumb(); ?>
                    </ul>
                </div>
            <?php endif;?>
            <?php creativ_bc_title(3);?>
        </div>
    </section>
    <?php $bc_style=1;?>
<?php endif;?>

<?php
if($page_bc_option=='bg_image'):?>
    <section class="meta-wrapper <?php echo $sec_class;?> section-parallax" style="background-image: url('<?php echo $bc_image; ?>');" data-stellar-background-ratio="0.4" data-stellar-vertical-offset="0">
        <div id="<?php echo $t_id;?>">
                    
            <div class="container text-center">
                <?php if(isset($creativ_options['breadcrumb_nav']) && $creativ_options['breadcrumb_nav']==1):?>
                    <ul class="breadcrumb">
                        <?php creativ_breadcrumb();?>
                    </ul>     
                <?php endif;?>                     
                <?php if($t_flag==0):
                    creativ_bc_title(2);
                else:?>
                    <div id="large-header" class="large-header">
                        <canvas id="demo-canvas"></canvas>
                        <div class="message">
                        <?php creativ_bc_title(1);?>                        
                        </div>
                    </div>
                <?php endif;?>
            </div>
        </div><!-- end page_header -->
    </section><!-- end section -->
    <?php $bc_style=1;?>  
<?php endif;?>
<?php if($theme_bc_style=='normal' && $bc_style==0):?>
    <section class="page-white bgpatttern clearfix">
        <div class="section-title">
            <?php if(isset($creativ_options['breadcrumb_nav']) && $creativ_options['breadcrumb_nav']==1):?>
                <div class="breadcrumb-container">
                    <ul class="breadcrumb">
                        <?php creativ_breadcrumb(); ?>
                    </ul>
                </div>
            <?php endif;?>
            <?php creativ_bc_title(3);?>
        </div>
    </section>
<?php endif;?>
<?php if($theme_bc_style=='breadcrumb_bg' && $bc_style==0):?>
    <section class="meta-wrapper <?php echo $sec_class;?> section-parallax" style="background-image: url('<?php echo $bc_image; ?>');" data-stellar-background-ratio="0.4" data-stellar-vertical-offset="0">
        <div id="<?php echo $t_id;?>">
            <div class="container text-center">
                <?php if(isset($creativ_options['breadcrumb_nav']) && $creativ_options['breadcrumb_nav']==1):?>
                    <ul class="breadcrumb">
                        <?php creativ_breadcrumb();?>
                    </ul>     
                <?php endif;?>                     
                <?php if($t_flag==0):
                    creativ_bc_title(2);
                else:?>
                    <div id="large-header" class="large-header">
                        <canvas id="demo-canvas"></canvas>
                        <div class="message">
                        <?php creativ_bc_title(1);?>                        
                        </div>
                    </div>
                <?php endif;?>
            </div>
        </div><!-- end page_header -->
    </section><!-- end section -->
<?php endif;?>

<?php function creativ_bc_title($h_id){
    
    global $creativ_options;
    $theme_bc_style=$creativ_options['breadcrumb_option'];
    $t_class='';$s_class='';
    if($creativ_options['breadcrumb_title']=='boxed' && $theme_bc_style=='breadcrumb_bg'): $t_class='main-title'; $s_class='mini-title-breadcrumb'; endif;
    $pageid=get_the_ID();
    $page_setting_title=get_post_meta( $pageid, 'creativ_pagetitle_title',true);
    $page_setting_subtitle=get_post_meta( $pageid, 'creativ_pagetitle_subtitle',true);
    if ( isset($page_setting_title) && $page_setting_title!='') :?>
        <h<?php echo $h_id;?> class="<?php echo $t_class;?>"><?php echo  wp_kses_post($page_setting_title); ?></h<?php echo $h_id;?>>
        <?php elseif (is_home()) :?>
        <h<?php echo $h_id;?> class="<?php echo $t_class;?>"><?php _e('BLOG', 'creativ'); ?></h<?php echo $h_id;?>>
        <?php elseif (is_single()) :?>
        <h<?php echo $h_id;?> class="<?php echo $t_class;?>"><?php echo get_the_title(); ?></h<?php echo $h_id;?>>
        <?php elseif (is_page()) : ?>
        <h<?php echo $h_id;?> class="<?php echo $t_class;?>"><?php echo get_the_title(); ?></h<?php echo $h_id;?>>
        <?php elseif (is_author()) : ?>
        <h<?php echo $h_id;?> class="<?php echo $t_class;?>"><?php _e('AUTHOR', 'creativ'); ?></h<?php echo $h_id;?>>
        <?php elseif (is_search()) : ?>
        <h<?php echo $h_id;?> class="<?php echo $t_class;?>"><?php _e('SEARCH', 'creativ'); ?></h<?php echo $h_id;?>>
        <?php elseif (is_category()) : ?>
        <h<?php echo $h_id;?> class="<?php echo $t_class;?>"><?php _e('CATEGORY', 'creativ'); ?></h<?php echo $h_id;?>>
        <?php elseif (is_tag()) : ?>
        <h<?php echo $h_id;?> class="<?php echo $t_class;?>"><?php _e('TAG', 'creativ'); ?></h<?php echo $h_id;?>>
        <?php elseif (is_archive()) : ?>
        <?php if (get_post_type() == 'product') : ?>
        <h<?php echo $h_id;?> class="<?php echo $t_class;?>"><?php _e('PRODUCTS', 'creativ'); ?></h<?php echo $h_id;?>>
        <?php elseif(is_tax( 'portfolio_filter')): ?>
        <h<?php echo $h_id;?> class="<?php echo $t_class;?>"><?php _e('Portfolio Filter', 'creativ'); ?></h<?php echo $h_id;?>>
        <?php else: ?>
        <h<?php echo $h_id;?> class="<?php echo $t_class;?>"><?php _e('ARCHIVE', 'creativ'); ?></h<?php echo $h_id;?>>
        <?php endif; ?>
        <?php elseif (get_post_type() == 'product') : ?>
        <h<?php echo $h_id;?> class="<?php echo $t_class;?>"><?php _e('PRODUCTS', 'creativ'); ?></h<?php echo $h_id;?>>
        <?php else : ?>
        <h<?php echo $h_id;?> class="<?php echo $t_class;?>"><?php _e('PAGE NOT FOUND', 'creativ'); ?></h<?php echo $h_id;?>>
        <?php endif; ?>
        <?php if(isset($creativ_options['breadcrumb_subtitle']) && $creativ_options['breadcrumb_subtitle']==1):?>
            <?php if ( isset($page_setting_subtitle) && $page_setting_subtitle!='') :?>
                <p class="<?php echo $s_class;?>"><?php echo wp_kses_post($page_setting_subtitle); ?></p>
            <?php else:?>
                <p class="<?php echo $s_class;?>"><?php echo wp_kses_post($creativ_options['subtitle_text']);?></p>
            <?php endif; ?>
        <?php endif;
}?>
<section id="banner-blog" class="banner-600 col-xs-12">
    <section class="container">
        <section class="col-sm-12 banner-title">
            <h1 class="title text-uppercase">blog</h1>
            <span>What We Write About</span>
        </section>

    </section>

    <section class="bread-crumb">
    <section class="container">
    <ul>
    <li><a href="#">home</a></li>
    <li>blog list</li>
    </ul>
    </section>
    </section>
</section>