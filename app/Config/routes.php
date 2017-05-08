<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::parseExtensions('html', 'rss');
	Router::connect('/', array('controller' => 'products', 'action' => 'home', 'admin' => false));
	Router::connect('/lien-he', array('controller' => 'contacts', 'action' => 'index', 'admin' => false));
	Router::connect('/gioi_thieu', array('controller' => 'introduces', 'action' => 'index', 'admin' => false));

	Router::connect('/tin-tuc-va-su-kien/:cate_slug-:id', array('controller' => 'posts', 'action' => 'list_new', 'admin' => false),
		array(
			'pass' => array('cate_slug', 'id'),
			'id' => '[0-9]+'
		)
	);

	Router::connect('/san-pham/:cate_slug-:id', array('controller' => 'products', 'action' => 'list_product', 'admin' => false),
		array(
			'pass' => array('cate_slug', 'id'),
			'id' => '[0-9]+'
		)
	);
	Router::connect('/tin-tuc-va-su-kien/:slug_cat/:slug_post-:id',
		array('controller' => 'posts', 'action' => 'view', 'admin' => false),
		array(
			'pass' => array('slug_cat' ,'slug_post','id'),
			'id' => '[0-9]+'
		)
	);
	Router::connect('/san-pham/:slug_cat/:slug_post-:id',
		array('controller' => 'products', 'action' => 'view', 'admin' => false),
		array(
			'pass' => array('slug_cat' ,'slug_post','id'),
			'id' => '[0-9]+'
		)
	);
	Router::connect('/search', array('controller' => 'products', 'action' => 'search'));



	Router::connect('/admin', array('controller' => 'products', 'action' => 'index', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/category_post', array('controller' => 'categories', 'action' => 'category_post', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/list_category_post', array('controller' => 'categories', 'action' => 'list_category_post', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/post_add', array('controller' => 'posts', 'action' => 'post_add', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/list_post', array('controller' => 'posts', 'action' => 'list_post', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/post_edit/:id', array('controller' => 'posts', 'action' => 'post_edit', 'admin' => true,'prefix' => 'admin'));
	
	Router::connect('/admin/post_delete/:id', array('controller' => 'posts', 'action' => 'post_delete', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/category_post_edit/:id', array('controller' => 'posts', 'action' => 'category_post_edit', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/category_post_delete/:id', array('controller' => 'posts', 'action' => 'category_post_delete', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/contact', array('controller' => 'contacts', 'action' => 'contact', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/sent_email', array('controller' => 'contacts', 'action' => 'sent_email', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/logout', array('controller' => 'users', 'action' => 'logout', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/delete/:id', array('controller' => 'contacts', 'action' => 'delete', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/list_category_product', array('controller' => 'categories', 'action' => 'list_category_product', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/category_product', array('controller' => 'categories', 'action' => 'category_product', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/list_product', array('controller' => 'products', 'action' => 'list_product', 'admin' => true,'prefix' => 'admin'));

	Router::connect('/admin/bussinesses/home', array('controller' => 'bussinesses', 'action' => 'home', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/bussinesses/introduce', array('controller' => 'bussinesses', 'action' => 'introduce', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/bussinesses/product', array('controller' => 'bussinesses', 'action' => 'product', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/bussinesses/contact', array('controller' => 'bussinesses', 'action' => 'contact', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/bussinesses/detail_product', array('controller' => 'bussinesses', 'action' => 'detail_product', 'admin' => true,'prefix' => 'admin'));
	Router::connect('/admin/forget_password', array('controller' => 'users', 'action' => 'forget_password', 'admin' => true));
	Router::connect('/admin/user', array('controller' => 'users', 'action' => 'index', 'admin' => true));
	Router::connect('/admin/user/add', array('controller' => 'users', 'action' => 'add', 'admin' => true));
	//Router::connect('/admin/re_password/:code', array('controller' => 'users', 'action' => 'reset_password', 'admin' => true));
	//Router::connect('/login', array('controller' => 'users', 'action' => 'login', 'admin' => true));
	//Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
