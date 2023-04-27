<?php
// Defines
define('THEME_DIR', trailingslashit(get_template_directory()));
define('THEME_URI', trailingslashit(esc_url(get_template_directory_uri())));
define('THEME_FUN', THEME_DIR . 'src/php/');
define('THEME_IMG', THEME_URI . 'dist/images/');
define('THEME_VID', THEME_URI . 'dist/video/');
// Template Part
define('THEME_PRT', '/template-parts/theme');
// Component
define('THEME_CMP', '/components/theme');

require_once  "functions.daniel.php";

add_action('init', 'send_benefits_init');

function send_benefits_init()
{
    add_action('wp_ajax_nopriv_send_benefits', 'send_benefits');
    add_action('wp_ajax_send_benefits', 'send_benefits');
}

function send_benefits()
{
    $zasoby = $_POST["zasoby"];
    $obszar = $_POST["obszar"];
    $ilosc = $_POST["ilosc"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $firm = $_POST["firm"];
    $name = $_POST["name"];
    $l_name = $_POST["lName"];
    $func = $_POST["func"];


    $to = 'gps@signati.pl';
    $subject = 'Zapytanie z WWW';
    $body =
        "<h1>Nowe zgłoszenie o ofertę:</h1><br><hr><br>"
        . "<strong>Imię:</strong> " . $name . "<br>"
        . "<strong>Nazwisko:</strong> " . $l_name . "<br>"
        . "<strong>Telefon:</strong> " . $tel . "<br>"
        . "<strong>Email:</strong> " . $email . "<br>"
        . "<strong>Firma:</strong> " . $firm . "<br>"
        . "<strong>Zasoby:</strong> " . $zasoby . "<br>"
        . "<strong>Obszar:</strong> " . $obszar . "<br>"
        . "<strong>Ilość:</strong> " . $ilosc . "<br>"
        . "<strong>Funkcjonalności:</strong> " . $func . "<br>"

        . "";
    $headers = array('Content-Type: text/html; charset=UTF-8', 'From: Signati GPS <no-reply@signati.pl>');

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) echo $body;
    else echo "0";

    wp_die();
}