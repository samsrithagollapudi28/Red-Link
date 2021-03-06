<?php
	
	/*---------------------------highlight color-------------------*/

	$vw_charity_ngo_first_color = get_theme_mod('vw_charity_ngo_first_color');

	$vw_charity_ngo_custom_css = '';

	if($vw_charity_ngo_first_color != false){
		$vw_charity_ngo_custom_css .='.custom-social-icons i:hover, .donate a, .more-btn a, #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, .scholarship-box, input[type="submit"], .sidebar input[type="submit"], .scrollup i, .woocommerce span.onsale, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, nav.woocommerce-MyAccount-navigation ul li, .date-monthwrap, .hvr-sweep-to-right:before, .pagination span, .pagination a,.sidebar .tagcloud a:hover, #comments a.comment-reply-link, .toggle-nav i, .footer .widget_price_filter .ui-slider .ui-slider-range, .footer .widget_price_filter .ui-slider .ui-slider-handle, .footer .woocommerce-product-search button, .sidebar .woocommerce-product-search button, .sidebar .widget_price_filter .ui-slider .ui-slider-range, .sidebar .widget_price_filter .ui-slider .ui-slider-handle, .footer a.custom_read_more, .sidebar a.custom_read_more, .nav-previous a, .nav-next a, .woocommerce nav.woocommerce-pagination ul li a{';
			$vw_charity_ngo_custom_css .='background-color: '.esc_html($vw_charity_ngo_first_color).';';
		$vw_charity_ngo_custom_css .='}';
	}
	if($vw_charity_ngo_first_color != false){
		$vw_charity_ngo_custom_css .='nav.woocommerce-MyAccount-navigation ul li, #comments input[type="submit"].submit{';
			$vw_charity_ngo_custom_css .='background-color: '.esc_html($vw_charity_ngo_first_color).'!important;';
		$vw_charity_ngo_custom_css .='}';
	}
	if($vw_charity_ngo_first_color != false){
		$vw_charity_ngo_custom_css .='a, #top-bar i, .donate a:hover, .more-btn a:hover, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, a.showcoupon, .woocommerce-message::before, .woocommerce .quantity .qty, .metabox span i, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title,.sidebar th,.sidebar td,.sidebar caption,.sidebar td#prev a, .footer li a:hover, .entry-content a, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, .sidebar a.custom_read_more:hover, .sidebar input[type="submit"]:hover, .footer a.custom_read_more:hover, .footer input[type="submit"]:hover{';
			$vw_charity_ngo_custom_css .='color: '.esc_html($vw_charity_ngo_first_color).';';
		$vw_charity_ngo_custom_css .='}';
	}
	if($vw_charity_ngo_first_color != false){
		$vw_charity_ngo_custom_css .='.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce .quantity .qty, .post-main-box:hover,.footer .tagcloud a:hover, .toggle-nav i{';
			$vw_charity_ngo_custom_css .='border-color: '.esc_html($vw_charity_ngo_first_color).'!important;';
		$vw_charity_ngo_custom_css .='}';
	}
	if($vw_charity_ngo_first_color != false){
		$vw_charity_ngo_custom_css .='hr.head-line, hr.title, hr.what_do, .woocommerce-message, .main-navigation ul ul{';
			$vw_charity_ngo_custom_css .='border-top-color: '.esc_html($vw_charity_ngo_first_color).';';
		$vw_charity_ngo_custom_css .='}';
	}
	if($vw_charity_ngo_first_color != false){
		$vw_charity_ngo_custom_css .='.woocommerce-message, .main-navigation ul ul, .header-fixed{';
			$vw_charity_ngo_custom_css .='border-bottom-color: '.esc_html($vw_charity_ngo_first_color).';';
		$vw_charity_ngo_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$vw_charity_ngo_theme_lay = get_theme_mod( 'vw_charity_ngo_width_option','Full Width');
    if($vw_charity_ngo_theme_lay == 'Boxed'){
		$vw_charity_ngo_custom_css .='body{';
			$vw_charity_ngo_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_charity_ngo_custom_css .='}';
		$vw_charity_ngo_custom_css .='.page-template-custom-home-page #header{';
			$vw_charity_ngo_custom_css .='width: 97.4%;';
		$vw_charity_ngo_custom_css .='}';
	}else if($vw_charity_ngo_theme_lay == 'Wide Width'){
		$vw_charity_ngo_custom_css .='body{';
			$vw_charity_ngo_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_charity_ngo_custom_css .='}';
		$vw_charity_ngo_custom_css .='.page-template-custom-home-page #header{';
			$vw_charity_ngo_custom_css .='width: 97.7%;';
		$vw_charity_ngo_custom_css .='}';
	}else if($vw_charity_ngo_theme_lay == 'Full Width'){
		$vw_charity_ngo_custom_css .='body{';
			$vw_charity_ngo_custom_css .='max-width: 100%;';
		$vw_charity_ngo_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_charity_ngo_theme_lay = get_theme_mod( 'vw_charity_ngo_slider_opacity_color','0.5');
	if($vw_charity_ngo_theme_lay == '0'){
		$vw_charity_ngo_custom_css .='#slider img{';
			$vw_charity_ngo_custom_css .='opacity:0';
		$vw_charity_ngo_custom_css .='}';
		}else if($vw_charity_ngo_theme_lay == '0.1'){
		$vw_charity_ngo_custom_css .='#slider img{';
			$vw_charity_ngo_custom_css .='opacity:0.1';
		$vw_charity_ngo_custom_css .='}';
		}else if($vw_charity_ngo_theme_lay == '0.2'){
		$vw_charity_ngo_custom_css .='#slider img{';
			$vw_charity_ngo_custom_css .='opacity:0.2';
		$vw_charity_ngo_custom_css .='}';
		}else if($vw_charity_ngo_theme_lay == '0.3'){
		$vw_charity_ngo_custom_css .='#slider img{';
			$vw_charity_ngo_custom_css .='opacity:0.3';
		$vw_charity_ngo_custom_css .='}';
		}else if($vw_charity_ngo_theme_lay == '0.4'){
		$vw_charity_ngo_custom_css .='#slider img{';
			$vw_charity_ngo_custom_css .='opacity:0.4';
		$vw_charity_ngo_custom_css .='}';
		}else if($vw_charity_ngo_theme_lay == '0.5'){
		$vw_charity_ngo_custom_css .='#slider img{';
			$vw_charity_ngo_custom_css .='opacity:0.5';
		$vw_charity_ngo_custom_css .='}';
		}else if($vw_charity_ngo_theme_lay == '0.6'){
		$vw_charity_ngo_custom_css .='#slider img{';
			$vw_charity_ngo_custom_css .='opacity:0.6';
		$vw_charity_ngo_custom_css .='}';
		}else if($vw_charity_ngo_theme_lay == '0.7'){
		$vw_charity_ngo_custom_css .='#slider img{';
			$vw_charity_ngo_custom_css .='opacity:0.7';
		$vw_charity_ngo_custom_css .='}';
		}else if($vw_charity_ngo_theme_lay == '0.8'){
		$vw_charity_ngo_custom_css .='#slider img{';
			$vw_charity_ngo_custom_css .='opacity:0.8';
		$vw_charity_ngo_custom_css .='}';
		}else if($vw_charity_ngo_theme_lay == '0.9'){
		$vw_charity_ngo_custom_css .='#slider img{';
			$vw_charity_ngo_custom_css .='opacity:0.9';
		$vw_charity_ngo_custom_css .='}';
		}

	/*---------------Slider Content Layout -------------------*/

	$vw_charity_ngo_theme_lay = get_theme_mod( 'vw_charity_ngo_slider_content_option','Left');
    if($vw_charity_ngo_theme_lay == 'Left'){
		$vw_charity_ngo_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_charity_ngo_custom_css .='text-align:left; left:16%; right:45%;';
		$vw_charity_ngo_custom_css .='}';
	}else if($vw_charity_ngo_theme_lay == 'Center'){
		$vw_charity_ngo_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_charity_ngo_custom_css .='text-align:center; left:20%; right:20%;';
		$vw_charity_ngo_custom_css .='}';
		$vw_charity_ngo_custom_css .='hr.head-line{';
			$vw_charity_ngo_custom_css .='left: 35%; position: absolute; margin: -2px 0px;';
		$vw_charity_ngo_custom_css .='}';
	}else if($vw_charity_ngo_theme_lay == 'Right'){
		$vw_charity_ngo_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_charity_ngo_custom_css .='text-align:right; left:45%; right:16%;';
		$vw_charity_ngo_custom_css .='}';
		$vw_charity_ngo_custom_css .='hr.head-line{';
			$vw_charity_ngo_custom_css .='right: 3%; position: absolute; margin: -2px 0px;';
		$vw_charity_ngo_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$vw_charity_ngo_slider_height = get_theme_mod('vw_charity_ngo_slider_height');
	if($vw_charity_ngo_slider_height != false){
		$vw_charity_ngo_custom_css .='#slider img{';
			$vw_charity_ngo_custom_css .='height: '.esc_html($vw_charity_ngo_slider_height).';';
		$vw_charity_ngo_custom_css .='}';
	}

	/*--------------------------- Slider -------------------*/

	$vw_charity_ngo_slider = get_theme_mod('vw_charity_ngo_slider_hide_show');
	if($vw_charity_ngo_slider == false){
		$vw_charity_ngo_custom_css .='.page-template-custom-home-page #header{';
			$vw_charity_ngo_custom_css .='position: static; padding: 40px 0px 20px;';
		$vw_charity_ngo_custom_css .='}';
		$vw_charity_ngo_custom_css .='#header{';
			$vw_charity_ngo_custom_css .='padding: 40px 0px 20px;';
		$vw_charity_ngo_custom_css .='}';
		$vw_charity_ngo_custom_css .='.scholarship-box{';
			$vw_charity_ngo_custom_css .='margin-top: 0; padding: 0px;';
		$vw_charity_ngo_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_charity_ngo_theme_lay = get_theme_mod( 'vw_charity_ngo_blog_layout_option','Default');
    if($vw_charity_ngo_theme_lay == 'Default'){
		$vw_charity_ngo_custom_css .='.post-main-box{';
			$vw_charity_ngo_custom_css .='';
		$vw_charity_ngo_custom_css .='}';
		$vw_charity_ngo_custom_css .='.post-main-box h2{';
			$vw_charity_ngo_custom_css .='padding:0;';
		$vw_charity_ngo_custom_css .='}';
		$vw_charity_ngo_custom_css .='.new-text p{';
			$vw_charity_ngo_custom_css .='margin-top:10px;';
		$vw_charity_ngo_custom_css .='}';
		$vw_charity_ngo_custom_css .='.blogbutton-small{';
			$vw_charity_ngo_custom_css .='margin: 0; display: inline-block;';
		$vw_charity_ngo_custom_css .='}';
	}else if($vw_charity_ngo_theme_lay == 'Center'){
		$vw_charity_ngo_custom_css .='.post-main-box, .post-main-box h2, .new-text p, .metabox, .content-bttn{';
			$vw_charity_ngo_custom_css .='text-align:center;';
		$vw_charity_ngo_custom_css .='}';
		$vw_charity_ngo_custom_css .='.new-text p{';
			$vw_charity_ngo_custom_css .='margin-top:10px;';
		$vw_charity_ngo_custom_css .='}';
		$vw_charity_ngo_custom_css .='.metabox{';
			$vw_charity_ngo_custom_css .='background: #eeeeee; padding: 10px; margin-bottom: 15px;';
		$vw_charity_ngo_custom_css .='}';
		$vw_charity_ngo_custom_css .='.blogbutton-small{';
			$vw_charity_ngo_custom_css .='margin: 0; display: inline-block;';
		$vw_charity_ngo_custom_css .='}';
		$vw_charity_ngo_custom_css .='.related-post .post-main-box h2{';
			$vw_charity_ngo_custom_css .='padding: 0px;';
		$vw_charity_ngo_custom_css .='}';
	}else if($vw_charity_ngo_theme_lay == 'Left'){
		$vw_charity_ngo_custom_css .='.post-main-box, .post-main-box h2, .new-text p, .content-bttn{';
			$vw_charity_ngo_custom_css .='text-align:Left;';
		$vw_charity_ngo_custom_css .='}';
		$vw_charity_ngo_custom_css .='.metabox{';
			$vw_charity_ngo_custom_css .='background: #eeeeee; padding: 10px; margin-bottom: 15px;';
		$vw_charity_ngo_custom_css .='}';
		$vw_charity_ngo_custom_css .='.related-post .post-main-box h2{';
			$vw_charity_ngo_custom_css .='padding: 0px;';
		$vw_charity_ngo_custom_css .='}';
	}

	/*--------------Responsive Media -----------------*/

	$vw_charity_ngo_resp_topbar = get_theme_mod( 'vw_charity_ngo_resp_topbar_hide_show',false);
    if($vw_charity_ngo_resp_topbar == true){
    	$vw_charity_ngo_custom_css .='@media screen and (max-width:575px) {';
		$vw_charity_ngo_custom_css .='#top-bar{';
			$vw_charity_ngo_custom_css .='display:block;';
		$vw_charity_ngo_custom_css .='} }';
	}else if($vw_charity_ngo_resp_topbar == false){
		$vw_charity_ngo_custom_css .='@media screen and (max-width:575px) {';
		$vw_charity_ngo_custom_css .='#top-bar{';
			$vw_charity_ngo_custom_css .='display:none;';
		$vw_charity_ngo_custom_css .='} }';
	}

	$vw_charity_ngo_resp_stickyheader = get_theme_mod( 'vw_charity_ngo_stickyheader_hide_show',false);
    if($vw_charity_ngo_resp_stickyheader == true){
    	$vw_charity_ngo_custom_css .='@media screen and (max-width:575px) {';
		$vw_charity_ngo_custom_css .='.header-fixed{';
			$vw_charity_ngo_custom_css .='display:block;';
		$vw_charity_ngo_custom_css .='} }';
	}else if($vw_charity_ngo_resp_stickyheader == false){
		$vw_charity_ngo_custom_css .='@media screen and (max-width:575px) {';
		$vw_charity_ngo_custom_css .='.header-fixed{';
			$vw_charity_ngo_custom_css .='display:none;';
		$vw_charity_ngo_custom_css .='} }';
	}

	$vw_charity_ngo_resp_slider = get_theme_mod( 'vw_charity_ngo_resp_slider_hide_show',false);
    if($vw_charity_ngo_resp_slider == true){
    	$vw_charity_ngo_custom_css .='@media screen and (max-width:575px) {';
		$vw_charity_ngo_custom_css .='#slider{';
			$vw_charity_ngo_custom_css .='display:block;';
		$vw_charity_ngo_custom_css .='} }';
	}else if($vw_charity_ngo_resp_slider == false){
		$vw_charity_ngo_custom_css .='@media screen and (max-width:575px) {';
		$vw_charity_ngo_custom_css .='#slider{';
			$vw_charity_ngo_custom_css .='display:none;';
		$vw_charity_ngo_custom_css .='} }';
	}

	$vw_charity_ngo_resp_metabox = get_theme_mod( 'vw_charity_ngo_metabox_hide_show',true);
    if($vw_charity_ngo_resp_metabox == true){
    	$vw_charity_ngo_custom_css .='@media screen and (max-width:575px) {';
		$vw_charity_ngo_custom_css .='.datebox, .metabox{';
			$vw_charity_ngo_custom_css .='display:block;';
		$vw_charity_ngo_custom_css .='} }';
	}else if($vw_charity_ngo_resp_metabox == false){
		$vw_charity_ngo_custom_css .='@media screen and (max-width:575px) {';
		$vw_charity_ngo_custom_css .='.datebox, .metabox{';
			$vw_charity_ngo_custom_css .='display:none;';
		$vw_charity_ngo_custom_css .='} }';
	}

	$vw_charity_ngo_resp_sidebar = get_theme_mod( 'vw_charity_ngo_sidebar_hide_show',true);
    if($vw_charity_ngo_resp_sidebar == true){
    	$vw_charity_ngo_custom_css .='@media screen and (max-width:575px) {';
		$vw_charity_ngo_custom_css .='.sidebar{';
			$vw_charity_ngo_custom_css .='display:block;';
		$vw_charity_ngo_custom_css .='} }';
	}else if($vw_charity_ngo_resp_sidebar == false){
		$vw_charity_ngo_custom_css .='@media screen and (max-width:575px) {';
		$vw_charity_ngo_custom_css .='.sidebar{';
			$vw_charity_ngo_custom_css .='display:none;';
		$vw_charity_ngo_custom_css .='} }';
	}

	$vw_charity_ngo_resp_scroll_top = get_theme_mod( 'vw_charity_ngo_resp_scroll_top_hide_show',true);
    if($vw_charity_ngo_resp_scroll_top == true){
    	$vw_charity_ngo_custom_css .='@media screen and (max-width:575px) {';
		$vw_charity_ngo_custom_css .='.scrollup i{';
			$vw_charity_ngo_custom_css .='display:block;';
		$vw_charity_ngo_custom_css .='} }';
	}else if($vw_charity_ngo_resp_scroll_top == false){
		$vw_charity_ngo_custom_css .='@media screen and (max-width:575px) {';
		$vw_charity_ngo_custom_css .='.scrollup i{';
			$vw_charity_ngo_custom_css .='display:none !important;';
		$vw_charity_ngo_custom_css .='} }';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_charity_ngo_topbar_padding_top_bottom = get_theme_mod('vw_charity_ngo_topbar_padding_top_bottom');
	if($vw_charity_ngo_topbar_padding_top_bottom != false){
		$vw_charity_ngo_custom_css .='#top-bar{';
			$vw_charity_ngo_custom_css .='padding-top: '.esc_html($vw_charity_ngo_topbar_padding_top_bottom).'; padding-bottom: '.esc_html($vw_charity_ngo_topbar_padding_top_bottom).';';
		$vw_charity_ngo_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$vw_charity_ngo_sticky_header_padding = get_theme_mod('vw_charity_ngo_sticky_header_padding');
	if($vw_charity_ngo_sticky_header_padding != false){
		$vw_charity_ngo_custom_css .='.header-fixed{';
			$vw_charity_ngo_custom_css .='padding: '.esc_html($vw_charity_ngo_sticky_header_padding).';';
		$vw_charity_ngo_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_charity_ngo_button_padding_top_bottom = get_theme_mod('vw_charity_ngo_button_padding_top_bottom');
	$vw_charity_ngo_button_padding_left_right = get_theme_mod('vw_charity_ngo_button_padding_left_right');
	if($vw_charity_ngo_button_padding_top_bottom != false || $vw_charity_ngo_button_padding_left_right != false){
		$vw_charity_ngo_custom_css .='.more-btn a, .blogbutton-small, #comments input[type="submit"].submit{';
			$vw_charity_ngo_custom_css .='padding-top: '.esc_html($vw_charity_ngo_button_padding_top_bottom).'; padding-bottom: '.esc_html($vw_charity_ngo_button_padding_top_bottom).';padding-left: '.esc_html($vw_charity_ngo_button_padding_left_right).';padding-right: '.esc_html($vw_charity_ngo_button_padding_left_right).';';
		$vw_charity_ngo_custom_css .='}';
	}

	$vw_charity_ngo_button_border_radius = get_theme_mod('vw_charity_ngo_button_border_radius');
	if($vw_charity_ngo_button_border_radius != false){
		$vw_charity_ngo_custom_css .='.more-btn a, .blogbutton-small, .hvr-sweep-to-right:before, #comments input[type="submit"].submit{';
			$vw_charity_ngo_custom_css .='border-radius: '.esc_html($vw_charity_ngo_button_border_radius).'px;';
		$vw_charity_ngo_custom_css .='}';
	}

	/*------------- Single Blog Page------------------*/

	$vw_charity_ngo_single_blog_post_navigation_show_hide = get_theme_mod('vw_charity_ngo_single_blog_post_navigation_show_hide',true);
	if($vw_charity_ngo_single_blog_post_navigation_show_hide != true){
		$vw_charity_ngo_custom_css .='.post-navigation{';
			$vw_charity_ngo_custom_css .='display: none;';
		$vw_charity_ngo_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_charity_ngo_copyright_alingment = get_theme_mod('vw_charity_ngo_copyright_alingment');
	if($vw_charity_ngo_copyright_alingment != false){
		$vw_charity_ngo_custom_css .='.copyright p{';
			$vw_charity_ngo_custom_css .='text-align: '.esc_html($vw_charity_ngo_copyright_alingment).';';
		$vw_charity_ngo_custom_css .='}';
	}

	$vw_charity_ngo_copyright_padding_top_bottom = get_theme_mod('vw_charity_ngo_copyright_padding_top_bottom');
	if($vw_charity_ngo_copyright_padding_top_bottom != false){
		$vw_charity_ngo_custom_css .='.footer-2{';
			$vw_charity_ngo_custom_css .='padding-top: '.esc_html($vw_charity_ngo_copyright_padding_top_bottom).'; padding-bottom: '.esc_html($vw_charity_ngo_copyright_padding_top_bottom).';';
		$vw_charity_ngo_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$vw_charity_ngo_scroll_to_top_font_size = get_theme_mod('vw_charity_ngo_scroll_to_top_font_size');
	if($vw_charity_ngo_scroll_to_top_font_size != false){
		$vw_charity_ngo_custom_css .='.scrollup i{';
			$vw_charity_ngo_custom_css .='font-size: '.esc_html($vw_charity_ngo_scroll_to_top_font_size).';';
		$vw_charity_ngo_custom_css .='}';
	}

	$vw_charity_ngo_scroll_to_top_padding = get_theme_mod('vw_charity_ngo_scroll_to_top_padding');
	$vw_charity_ngo_scroll_to_top_padding = get_theme_mod('vw_charity_ngo_scroll_to_top_padding');
	if($vw_charity_ngo_scroll_to_top_padding != false){
		$vw_charity_ngo_custom_css .='.scrollup i{';
			$vw_charity_ngo_custom_css .='padding-top: '.esc_html($vw_charity_ngo_scroll_to_top_padding).';padding-bottom: '.esc_html($vw_charity_ngo_scroll_to_top_padding).';';
		$vw_charity_ngo_custom_css .='}';
	}

	$vw_charity_ngo_scroll_to_top_width = get_theme_mod('vw_charity_ngo_scroll_to_top_width');
	if($vw_charity_ngo_scroll_to_top_width != false){
		$vw_charity_ngo_custom_css .='.scrollup i{';
			$vw_charity_ngo_custom_css .='width: '.esc_html($vw_charity_ngo_scroll_to_top_width).';';
		$vw_charity_ngo_custom_css .='}';
	}

	$vw_charity_ngo_scroll_to_top_height = get_theme_mod('vw_charity_ngo_scroll_to_top_height');
	if($vw_charity_ngo_scroll_to_top_height != false){
		$vw_charity_ngo_custom_css .='.scrollup i{';
			$vw_charity_ngo_custom_css .='height: '.esc_html($vw_charity_ngo_scroll_to_top_height).';';
		$vw_charity_ngo_custom_css .='}';
	}

	$vw_charity_ngo_scroll_to_top_border_radius = get_theme_mod('vw_charity_ngo_scroll_to_top_border_radius');
	if($vw_charity_ngo_scroll_to_top_border_radius != false){
		$vw_charity_ngo_custom_css .='.scrollup i{';
			$vw_charity_ngo_custom_css .='border-radius: '.esc_html($vw_charity_ngo_scroll_to_top_border_radius).'px;';
		$vw_charity_ngo_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_charity_ngo_social_icon_font_size = get_theme_mod('vw_charity_ngo_social_icon_font_size');
	if($vw_charity_ngo_social_icon_font_size != false){
		$vw_charity_ngo_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_charity_ngo_custom_css .='font-size: '.esc_html($vw_charity_ngo_social_icon_font_size).';';
		$vw_charity_ngo_custom_css .='}';
	}

	$vw_charity_ngo_social_icon_padding = get_theme_mod('vw_charity_ngo_social_icon_padding');
	if($vw_charity_ngo_social_icon_padding != false){
		$vw_charity_ngo_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_charity_ngo_custom_css .='padding: '.esc_html($vw_charity_ngo_social_icon_padding).'!important;';
		$vw_charity_ngo_custom_css .='}';
	}

	$vw_charity_ngo_social_icon_width = get_theme_mod('vw_charity_ngo_social_icon_width');
	if($vw_charity_ngo_social_icon_width != false){
		$vw_charity_ngo_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_charity_ngo_custom_css .='width: '.esc_html($vw_charity_ngo_social_icon_width).';';
		$vw_charity_ngo_custom_css .='}';
	}

	$vw_charity_ngo_social_icon_height = get_theme_mod('vw_charity_ngo_social_icon_height');
	if($vw_charity_ngo_social_icon_height != false){
		$vw_charity_ngo_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_charity_ngo_custom_css .='height: '.esc_html($vw_charity_ngo_social_icon_height).';';
		$vw_charity_ngo_custom_css .='}';
	}

	$vw_charity_ngo_social_icon_border_radius = get_theme_mod('vw_charity_ngo_social_icon_border_radius');
	if($vw_charity_ngo_social_icon_border_radius != false){
		$vw_charity_ngo_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_charity_ngo_custom_css .='border-radius: '.esc_html($vw_charity_ngo_social_icon_border_radius).'px;';
		$vw_charity_ngo_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$vw_charity_ngo_products_padding_top_bottom = get_theme_mod('vw_charity_ngo_products_padding_top_bottom');
	if($vw_charity_ngo_products_padding_top_bottom != false){
		$vw_charity_ngo_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_charity_ngo_custom_css .='padding-top: '.esc_html($vw_charity_ngo_products_padding_top_bottom).'!important; padding-bottom: '.esc_html($vw_charity_ngo_products_padding_top_bottom).'!important;';
		$vw_charity_ngo_custom_css .='}';
	}

	$vw_charity_ngo_products_padding_left_right = get_theme_mod('vw_charity_ngo_products_padding_left_right');
	if($vw_charity_ngo_products_padding_left_right != false){
		$vw_charity_ngo_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_charity_ngo_custom_css .='padding-left: '.esc_html($vw_charity_ngo_products_padding_left_right).'!important; padding-right: '.esc_html($vw_charity_ngo_products_padding_left_right).'!important;';
		$vw_charity_ngo_custom_css .='}';
	}

	$vw_charity_ngo_products_box_shadow = get_theme_mod('vw_charity_ngo_products_box_shadow');
	if($vw_charity_ngo_products_box_shadow != false){
		$vw_charity_ngo_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$vw_charity_ngo_custom_css .='box-shadow: '.esc_html($vw_charity_ngo_products_box_shadow).'px '.esc_html($vw_charity_ngo_products_box_shadow).'px '.esc_html($vw_charity_ngo_products_box_shadow).'px #ddd;';
		$vw_charity_ngo_custom_css .='}';
	}

	$vw_charity_ngo_products_border_radius = get_theme_mod('vw_charity_ngo_products_border_radius');
	if($vw_charity_ngo_products_border_radius != false){
		$vw_charity_ngo_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_charity_ngo_custom_css .='border-radius: '.esc_html($vw_charity_ngo_products_border_radius).'px;';
		$vw_charity_ngo_custom_css .='}';
	}