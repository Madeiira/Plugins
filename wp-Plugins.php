
<?php 

/*
Plugin Name: Plugins 
Plugin URI: 
Description: Foco em aprendizado
Version: 1.0
Author: Gabriel Madeira
Author URI: https://github.com/Madeiira
Text Domain: hW

*/

/* function wp_alert_wp_Hello_World(){


echo '<script> alert("Sou Fodas"); </script>';
}


add_action( 'login_head','wp_alert_wp_Hello_World' ); // especificar aonde você vai querer a ação
*/
//add_action();  // quando // carregamento // eventos // function
//add_filter(); // aonde  //              //         //  function


//testing advertising in content() // substitui todo o content do meu wp 
/*function add_advertising(){
 echo"<h1 id='ads-propaganda> Teste </h1>";

}
add_filter('the_content', 'add_advertising');
*/
// not workig yet


// ======================================================== // Criação // manipulação de plugins // Shortcodes // ========================================================================
function shortcode_Top_Blogueiros_Front_End(){
	$dados= get_users();
    echo"<h1 style='color:white'> List  </h1> ";
	echo"<p></p>";

	foreach ($dados as $dado){
		
		echo "<p style='color:white'>Nome:".$dado->user_nicename."</p>";
		echo "<p style='color:white'>Email:".$dado->user_email."</p>";
		if(empty($dado->user_url)){
			$dado->user_url = "Este usuario não possui site";
		}
		echo"<p style='color:white'>URL:".$dado->user_url."</p>";
		
	}



}


function shortcode_Top_Blogueiros_Register(){

    add_shortcode( 'topblogueiros','shortcode_Top_Blogueiros_Front_End'  );

}
add_action( 'init', 'shortcode_Top_Blogueiros_Register' );
  
 
/*function foobar_func ($atts) { //new test
	return "foo e bar";
}
add_shortcode ('foobar', 'foobar_func');
function bartag_func ($atts) {
	$a = shortcode_atts (array (
		'foo' => 'algo',
		'bar' => 'algo mais',
	), $atts);

	return "foo = {$a ['foo']}";
}
add_shortcode ('bartag', 'bartag_func');
*/
add_shortcode ('demo_shortcode', 'demo_shortcode_callback_function');



function demo_shortcode_callback_function ($atts) {
	echo"Bem-vindo ao WordPress";
}














?>
