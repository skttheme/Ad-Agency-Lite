<?php
//about theme info
add_action( 'admin_menu', 'ad_agency_lite_abouttheme' );
function ad_agency_lite_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'ad-agency-lite'), esc_html__('About Theme', 'ad-agency-lite'), 'edit_theme_options', 'ad_agency_lite_guide', 'ad_agency_lite_mostrar_guide');   
} 
//guidline for about theme
function ad_agency_lite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'ad-agency-lite'); ?>
		   </div>
          <p><?php esc_html_e('Ad Agency WordPress theme is suitable for ad agency, advertising firm, marketing agency, creative firm, ad and advertising company, firm, branding, promotion, consultancy, media. Similarly it can also be applied for SEO, search engine optimization, marketing, SEO services, strategy, organic search optimization, ranking, website optimization, on-page, off-page, digital promotion, online, PPC, paid ads. promotional ad campaigns. Fast loading and SEO friendly template for organic traffic. Call to action CTA friendly. Also can be used for corporate, startups, online agencies, portfolios, freelancers, E-commerce. Simple, scalable and flexible to use.','ad-agency-lite'); ?></p>
          <a href="<?php echo esc_url(AD_AGENCY_LITE_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(AD_AGENCY_LITE_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'ad-agency-lite'); ?></a> | 
				<a href="<?php echo esc_url(AD_AGENCY_LITE_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'ad-agency-lite'); ?></a> | 
				<a href="<?php echo esc_url(AD_AGENCY_LITE_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'ad-agency-lite'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(AD_AGENCY_LITE_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>