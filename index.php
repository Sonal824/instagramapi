<?php
file_get_contents('https://api.instagram.com/oauth/authorize/?client_id=CLIENTID&redirect_uri=REDIRECT-URI&response_type=code&scope=SCOPE');

//https://api.instagram.com/oauth/authorize/?client_id=b45943998b184935CSa4204cddb2efc8da&redirect_uri=https://ex.com/gridviewtv/instagram/index.php&response_type=code&scope=public_content

 if($_GET['code']) {
    $curl = curl_init( "https://api.instagram.com/oauth/access_token" );
    curl_setopt( $curl, CURLOPT_POST, true );
    curl_setopt( $curl, CURLOPT_POSTFIELDS, array(
        'client_id' => 'b45943998b184935CSa4204cddb2efc8da',
        'redirect_uri' => 'https://ex.com/gridviewtv/instagram/index.php',
        'client_secret' => '048d87965c524CS63b91641a90144c6783',
        'code' => $_GET['code'],
        'grant_type' => 'authorization_code'
    ) );
    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1);
    $auth = curl_exec( $curl );
    $secret = json_decode($auth);
    echo '<pre>'; print_r($secret);
}
?>