<?php
// twitteroauth.phpを読み込む
require_once("twitteroauth/twitteroauth.php");

// Twitterのscreen_name
$screen_name = "sayaka_suzuki_"; // 207518933
// Consumer keyの値
$consumer_key = "A6ZIaTxxSqxDrucv4Mlw";
// Consumer secretの値
$consumer_secret = "Oix9qTpVDv6eXlUX0lRaXgkbPS840NJWMkpNljVs";
// Access Tokenの値
$access_token = "122253735-zy3kglOzbj3db7fvIF6wVOkL4ftd9Nw5SKDjoEdK";
// Access Token Secretの値
$access_token_secret = "ZQB5StO3xU8oadx3tPpGx3utL4fONgPnkF8b6U9PIjQ";

// OAuthオブジェクト生成
$to = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

// users/showの取得：TwitterからJSON形式が返ってくる
$users_req = $to -> OAuthRequest("https://api.twitter.com/1.1/users/show.json?screen_name=".$screen_name,"GET");
$users_result = json_decode($users_req);
$profile_image_normal_url = $users_result->profile_image_url;
$profile_image_bigger_url = str_replace("normal", "bigger", $profile_image_normal_url);

// user_timelineの取得：TwitterからJSON形式が返ってくる
$tweet_req = $to -> OAuthRequest("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$screen_name."&count=5&trim_user=true","GET");
$tweet_result = json_decode($tweet_req);

// htmlとして出力するやつ
$tweet_html = "<ul>";

// foreachでtweetの分だけループする
foreach ($tweet_result as $tweet_obj) {
	// tweetのidを取得
	$tweet_id = $tweet_obj->id;

	// tweetの原本（加工前の本文）を取得
	$row_text = $tweet_obj->text;

	// 本文内のリンクを取得
	$urls = $tweet_obj->entities->urls;
	// 本文中にリンクURLが入っていた時の処理
	if (count($urls) > 0) {
		foreach ($urls as $obj) {
			// urlに関する情報
			$url = $obj->url;
			$expanded_url = $obj->expanded_url;
			$display_url = $obj->display_url;

			// アンカーリンク化したurl
			$url_in_text = "<a href=\"".$expanded_url."\" target=\"_blank\">".$display_url."</a>";
		}
	}

	// tweetのリプライ情報を取得
	$reply_to_screen_name = $tweet_obj->in_reply_to_screen_name;
	// tweetがリプライだった場合の処理
	if (!(is_null($reply_to_screen_name))) {
		$name_of_mention = $reply_to_screen_name;
	}

	// tweetのメンション情報を取得
	$mentions = $tweet_obj->entities->user_mentions;
	// メンション情報が入っていた場合の処理
	if (count($mentions) > 0) {
		foreach ($mentions as $mention_obj) {
			// メンションに関する情報
			$screen_name_of_mention = $mention_obj->screen_name;

			// tweetがリプライじゃなかった時の処理
			if (is_null($reply_to_screen_name)) {
				$name_of_mention = $mention_obj->name;
			}

			// アンカーリンク化したurl
			$url_in_mention = "<a href=\"https://twitter.com/".$screen_name_of_mention."\" target=\"_blank\">".$name_of_mention."</a>";
		}
	}

	// 本文の中にあるリンク要素を置換する
	$replace_in_text = str_replace($url, $url_in_text, $row_text);
	$replace_in_mention = str_replace($screen_name_of_mention, $url_in_mention, $replace_in_text);

	// 最終的にhtmlとして挿入する文字列
	$text = $replace_in_mention;
	
	// htmlとして記述する
	$tweet_html .= "<li>" . $text . "</li>";
}

// htmlにulの閉じタグを追加する
$tweet_html .= "</ul>";

// ヘッダー内のTwitter表示エリアのhtml
$html_with_outer = "<div id=\"TW\"><a href=\"http://twitter.com/".$screen_name."\" target=\"_blank\"><img src=\"".$profile_image_bigger_url."\" width=\"73\" height=\"73\" alt=\"Twitter Icon\" /></a><div id=\"tweet\">TWEET_HERE</div></div>";

// tweet_htmlをhtml内に挿入する（文字列を置換する）
$html = str_replace("TWEET_HERE", $tweet_html, $html_with_outer);

// ▼デバッグ用ダンプ文
// $html = var_dump($tweet_result[4]);
// $html = var_dump($tweet_html);

// htmlの出力
echo $html;

?>