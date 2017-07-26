<?php

#SESSION
define('SESSION_NAME', md5('SStore__'));
define('SESSION_ID', md5('SStore_'));
define('ADM_LOGIN', md5('pAdChange'));

#HEADER
define('MINI','class/Mini.php?src=');
define('SRC','http://127.0.0.1/webStore/');
define('IMAGES','images/');
define('LOGOS','images/logos/');
define('PRODUCTS','images/products/');


#DATABASE IDS
define('DEFAULT_ID', 'id_');
	#MAIN NAV IDENTIFIERS
	define('MAIN_NAV_TABLE','sstore_main_nav');
	define('MAIN_NAV_TYPE', 'type');
	define('MAIN_NAV_ORDER', 'order_');
	define('MAIN_NAV_HIDE', 'hide');
	define('MAIN_NAV_NAME', 'nav_name');
	define('MAIN_NAV_IMG_REF','img_ref');
	define('MAIN_NAV_TITLE', 'title');
	define('MAIN_NAV_DES', 'des');
	define('MAIN_NAV_MAIN_LINK', 'main_link');
	define('MAIN_NAV_LINK_ARRAY_ID', 'link_array_id_');
	
		#MAIN NAV ALINKS IDENTIFIERS
		define('MAIN_NAV_ALINKS_TABLE', 'sstore_main_nav_alink');
		define('MAIN_NAV_ALINKS_ARRAY_ID', 'array_id');
		define('MAIN_NAV_ALINKS_ORDER', 'order_');
		define('MAIN_NAV_ALINKS_LINK','array_link');
		define('MAIN_NAV_ALINKS_NAME','name');
		
	#HOME IDENTIFIERS
		#ASIDE AND VITRIN
		define('HOME_ASIDE_TABLE', 'sstore_product');
		define('HOME_ASIDE_NAME','name');
		define('HOME_ASIDE_HIDE', 'hide_');
		define('HOME_ASIDE_DESC', 'des');
		define('HOME_ASIDE_FID', 'internal_');
		define('HOME_ASIDE_CATEGORY', 'category');
		define('HOME_ASIDE_PRICE1', 'price');	
		define('HOME_ASIDE_PRICE2', 'price2');	
		define('HOME_ASIDE_PRICE3', 'price3');	
		define('HOME_ASIDE_PRICE4', 'price4');		
		define('HOME_ASIDE_IMG', 'img_ref');
		
		#SIDE CATEGORIES
		define('HOME_SIDE_CATEGORY_TABLE', 'sstore_side_category');
		define('HOME_SIDE_CATEGORY_NAME', 'main_name');
		define('HOME_SIDE_CATEGORY_HIDE', 'hide_');
		define('HOME_SIDE_CATEGORY_REF', 'ref_id');
		define('HOME_SIDE_CATEGORY_ORDER','order_');
		
		#SIDE SUBCATEGORIRES
		define('HOME_SIDE_CATEGORY_LINK', 'sstore_side_category_link');
		define('HOME_SIDE_CATEGORY_LINK_REF', 'refer');
		define('HOME_SIDE_CATEGORY_LINK_A', 'link');
		define('HOME_SIDE_CATEGORY_LINK_TITLE', 'title');
		
	#PRODUCT RATINGS IDENTIFIERS
	define('HOME_PROD_RAT_TABLE', 'sstore_product_ratings');
	define('HOME_PROD_RAT_ID', 'internal_');
	define('HOME_PROD_RAT_WE1', 'we1');
	define('HOME_PROD_RAT_WE2', 'we2');
	define('HOME_PROD_RAT_WE3', 'we3');
	define('HOME_PROD_RAT_WE4', 'we4');
	define('HOME_PROD_RAT_WE5', 'we5');
	define('HOME_PROD_RAT_GE1', 'geral1');
	define('HOME_PROD_RAT_GE2', 'geral2');
	define('HOME_PROD_RAT_GE3', 'geral3');
	define('HOME_PROD_RAT_GE4', 'geral4');
	define('HOME_PROD_RAT_GE5', 'geral5');
	
	#PRODUCT COMMENTS IDENTIFIERS
	define('HOME_PROD_COMMENT_TABLE', 'sstore_product_comments');
	define('HOME_PROD_COMMENT_PRODID', 'prod_id');
	define('HOME_PROD_COMMENT_BY', 'by_');
	define('HOME_PROD_COMMENT_SHORT', 'short_ass');
	define('HOME_PROD_COMMENT_RATING', 'rating');
	define('HOME_PROD_COMMENT_TITLE', 'title');
	define('HOME_PROD_COMMENT_COMMENT', 'comment');
	
	

	#LOGIN IDENTIFIERS
	define('TABLE_USERS','sstore_user');
	define('USERS_ID', 'id_');
	define('USERS_LEVEL', 'level');
	define('USERS_PASS', 'pass');
	define('USERS_EMAIL', 'email');