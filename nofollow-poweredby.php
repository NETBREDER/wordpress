function apprank_poweredby() {
	if ( is_front_page() ) {
		$html = '<div style="background:#fff;color:#000;font-size:13px;padding:5px;text-align:center;"><a style="color:#000;" href="https://apprank.com.br" target="_blank">Criação de sites por <strong>Apprank</strong></a></div>';
		echo $html;
	} else {
		$html = '<div style="background:#fff;color:#000;font-size:13px;padding:5px;text-align:center;"><a style="color:#000;" href="https://apprank.com.br" rel="nofollow" target="_blank">Criação de sites por <strong>Apprank</strong></a></div>';
		echo $html;
		}
   }
add_action('wp_footer', 'apprank_poweredby');
