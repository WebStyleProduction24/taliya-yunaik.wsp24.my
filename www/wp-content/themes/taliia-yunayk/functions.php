<?php

function enqueue_styles() {
	wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
	wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
	wp_enqueue_style( 'font-style');
	wp_register_style('reset', get_template_directory_uri().'/css/reset.css');	
	wp_enqueue_style( 'reset');
	wp_register_style( 'fonts', get_template_directory_uri().'/css/fonts.css');
	wp_enqueue_style( 'fonts');
	wp_register_style( 'icons', get_template_directory_uri().'/css/icons.css');
	wp_enqueue_style( 'icons');

	wp_register_style( 'old', get_template_directory_uri().'/css/old.css');
	wp_enqueue_style( 'old');
	wp_register_style( 'sequencejs-theme.sliding-horizontal-parallax', get_template_directory_uri().'/css/sequencejs-theme.sliding-horizontal-parallax.css');
	wp_enqueue_style( 'sequencejs-theme.sliding-horizontal-parallax');
	wp_register_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.css');
	wp_enqueue_style( 'font-awesome');
	wp_register_style( 'engine', get_template_directory_uri().'/css/engine.css');
	wp_enqueue_style( 'engine');
	wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style( 'bootstrap');
	wp_register_style( 'animate', get_template_directory_uri().'/css/animate.css');
	wp_enqueue_style( 'animate');
}


add_action('wp_enqueue_scripts', 'enqueue_styles');
/*
 * Функция создает дубликат поста в виде черновика и редиректит на его страницу редактирования
 */
function true_duplicate_post_as_draft(){
	global $wpdb;
	if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'true_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
		wp_die('Нечего дублировать!');
	}
 
	/*
	 * получаем ID оригинального поста
	 */
	$post_id = (isset($_GET['post']) ? $_GET['post'] : $_POST['post']);
	/*
	 * а затем и все его данные
	 */
	$post = get_post( $post_id );
 
	/*
	 * если вы не хотите, чтобы текущий автор был автором нового поста
	 * тогда замените следующие две строчки на: $new_post_author = $post->post_author;
	 * при замене этих строк автор будет копироваться из оригинального поста
	 */
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;
 
	/*
	 * если пост существует, создаем его дубликат
	 */
	if (isset( $post ) && $post != null) {
 
		/*
		 * массив данных нового поста
		 */
		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_name'      => $post->post_name,
			'post_parent'    => $post->post_parent,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft', // черновик, если хотите сразу публиковать - замените на publish
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);
 
		/*
		 * создаем пост при помощи функции wp_insert_post()
		 */
		$new_post_id = wp_insert_post( $args );
 
		/*
		 * присваиваем новому посту все элементы таксономий (рубрики, метки и т.д.) старого
		 */
		$taxonomies = get_object_taxonomies($post->post_type); // возвращает массив названий таксономий, используемых для указанного типа поста, например array("category", "post_tag");
		foreach ($taxonomies as $taxonomy) {
			$post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
			wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
		}
 
		/*
		 * дублируем все произвольные поля
		 */
		$post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
		if (count($post_meta_infos)!=0) {
			$sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
			foreach ($post_meta_infos as $meta_info) {
				$meta_key = $meta_info->meta_key;
				$meta_value = addslashes($meta_info->meta_value);
				$sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
			}
			$sql_query.= implode(" UNION ALL ", $sql_query_sel);
			$wpdb->query($sql_query);
		}
 
 
		/*
		 * и наконец, перенаправляем пользователя на страницу редактирования нового поста
		 */
		wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
		exit;
	} else {
		wp_die('Ошибка создания поста, не могу найти оригинальный пост с ID=: ' . $post_id);
	}
}
add_action( 'admin_action_true_duplicate_post_as_draft', 'true_duplicate_post_as_draft' );
 
/*
 * Добавляем ссылку дублирования поста для post_row_actions
 */
function true_duplicate_post_link( $actions, $post ) {
	if (current_user_can('edit_posts')) {
		$actions['duplicate'] = '<a href="admin.php?action=true_duplicate_post_as_draft&amp;post=' . $post->ID . '" title="Дублировать этот пост" rel="permalink">Дублировать</a>';
	}
	return $actions;
}
 
add_filter( 'post_row_actions', 'true_duplicate_post_link', 10, 2 );
?>