<?php

/**
 * カスタム投稿
 * ：資料ダウンロード
 * ：実績
 *
 */
function create_my_post_types()
{
  //  ダウンロード資料
	register_post_type(
		'downloads', //投稿タイプ名（識別子：半角英数字の小文字）
		array(
			'label' => 'ダウンロード資料',  //カスタム投稿タイプの名前（管理画面のメニューに表示される）
			'labels' => array(  //管理画面に表示されるラベルの文字を指定
				'add_new' => '新規資料追加',
				'edit_item' => '資料の編集',
				'view_item' => '資料を表示',
				'search_items' => '資料を検索',
				'not_found' => '資料は見つかりませんでした。',
				'not_found_in_trash' => 'ゴミ箱に資料はありませんでした。',
			),
			'public' => true,  // 管理画面に表示しサイト上にも表示する
			'hierarchicla' => false,  //コンテンツを階層構造にするかどうか
			'has_archive' => true,  //trueにすると投稿した記事の一覧ページを作成することができる
			'show_in_rest' => true,  //新エディタ Gutenberg を有効化（REST API を有効化）
			'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
				'title',  //タイトル
				'editor',  //本文の編集機能
				'thumbnail',  //アイキャッチ画像（add_theme_support('post-thumbnails')が必要）
				'excerpt',  //抜粋
				'custom-fields', //カスタムフィールド
				'revisions'  //リビジョンを保存
			),
			'menu_position' => 5, //「投稿」の下に追加
			'taxonomies' => array('news_cat')
		)
	);

	// 実績
	register_post_type(
    'works',//投稿タイプ名（識別子：半角英数字の小文字）
    array(
      'label' => '実績',  //カスタム投稿タイプの名前（管理画面のメニューに表示される）
      'labels' => array(  //管理画面に表示されるラベルの文字を指定
        'add_new' => '新規実績追加',
        'edit_item' => '実績の編集',
        'view_item' => '実績を表示',
        'search_items' => '実績を検索',
        'not_found' => '実績は見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱に実績はありませんでした。',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'hierarchicla' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => true,  //trueにすると投稿した記事の一覧ページを作成することができる
      'show_in_rest' => true,  //新エディタ Gutenberg を有効化（REST API を有効化）
      'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
        'title',  //タイトル
        'editor',  //本文の編集機能
        'thumbnail',  //アイキャッチ画像（add_theme_support('post-thumbnails')が必要）
        'excerpt',  //抜粋
        'custom-fields', //カスタムフィールド
        'revisions'  //リビジョンを保存
      ),
      'menu_position' => 5, //「投稿」の下に追加
      'taxonomies' => array('works_cat')
    )
  );
  register_taxonomy(
    'works_cat',
    'works',
    array(
      'hierarchical' => true,
      'label' => '実績のカテゴリ',
      'singular_label' => '実績のカテゴリ',
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array(
        'slug' => 'works_cat',       // URLパス
        'with_front' => false,       // 前に /category をつけない
        'hierarchical' => true       // /works_cat/aaa/bbb/ のような階層構造を許可
      ),
      'show_in_rest' => true,
    )
  );
  

}
//init アクションフックで登録
add_action('init', 'create_my_post_types');
