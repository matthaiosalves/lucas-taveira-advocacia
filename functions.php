<?php

/**
 * Lucas Taveira functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lucas_Taveira
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

function lucas_taveira_scripts()
{
	wp_enqueue_style('lucas-taveira-style', get_template_directory_uri() . '/style.css', array(), _S_VERSION);
	wp_enqueue_script('lucas-taveira-script', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'lucas_taveira_scripts');


add_filter('show_admin_bar', '__return_false');
add_filter('xmlrpc_enabled', '__return_false');

function redirecionar_para_home_on_404()
{
	if (is_404()) {
		wp_redirect(home_url());
		exit();
	}
}

add_action('template_redirect', 'redirecionar_para_home_on_404');

if (!function_exists('get_youtube_id')) :
	function get_youtube_id($url)
	{
		preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
		$youtube_id = $match[1];

		return $youtube_id;
	}
endif;



// add_action('admin_post_enviar_formulario', 'processar_envio_formulario');
// add_action('admin_post_nopriv_enviar_formulario', 'processar_envio_formulario');

// function processar_envio_formulario()
// {

// 	if (isset($_POST['_wpnonce']) && wp_verify_nonce($_POST['_wpnonce'], 'enviar_formulario_nonce')) {


// 		if (isset($_POST['enviar_formulario'])) {


// 			$nome = sanitize_text_field($_POST['nomeCompleto']);
// 			$celular = sanitize_text_field($_POST['Celular']);
// 			$email = sanitize_email($_POST['email']);
// 			$genero = sanitize_text_field($_POST['genero']);
// 			$mensagem = sanitize_textarea_field($_POST['mensagem']);


// 			$mail = new PHPMailer(true);

// 			try {
// 				$mail->isSMTP();
// 				$mail->Host       = 'smtp.example.com';
// 				$mail->SMTPAuth   = true;
// 				$mail->Username   = 'seu_usuario_smtp';
// 				$mail->Password   = 'sua_senha_smtp';
// 				$mail->SMTPSecure = 'tls';
// 				$mail->Port       = 587;


// 				$mail->setFrom($email, $nome);
// 				$mail->addAddress('destinatario@example.com', 'Nome do Destinatário');


// 				$mail->isHTML(true);
// 				$mail->Subject = 'Assunto do E-mail';
// 				$mail->Body    = "Nome: $nome<br>Celular: $celular<br>Email: $email<br>Gênero: $genero<br>Mensagem: $mensagem";


// 				$mail->send();


// 				wp_redirect(home_url('/envio-sucedido/'));
// 				exit;
// 			} catch (Exception $e) {
// 				wp_redirect(home_url('/erro-no-envio/'));
// 				exit;
// 			}
// 		}
// 	}
// }
