<?php
define("BASE_URL", "/");

// Database
define("DATABASE_SERVER", "localhost");
define("DATABASE_USER", "root"); //institnG1VrTcigB
define("DATABASE_PASS", ""); // 65mBpc0CK1YUPSd
define("DATABASE_NAME", "pagseguro"); // 

// Versionamento
define("ASSETS_VERSION", "0.2.1");

// // Emails
// define("EMAIL_REMETENTE", "contato@institutoammo.com");
// define("EMAIL_REMETENTE_NOME", "Instituto AMMO");

// //site
// define("SITE", "https://institutoammo.org");

// Gateway
define("ID_GATEWAY", 8);

// Pagseguro
define("URL_BASE_PAGSEGURO", "https://pagseguro.uol.com.br");
define("URL_STC_PAGSEGURO", "https://stc.pagseguro.uol.com.br");
define("EMAIL_PAGSEGURO", "yann.gabriel1@hotmail.com");
define("PAGSEGURO_POSTBACK", "https://webhook.site/0f04d4db-78df-45a9-9161-bee86b9615ad");

$sandbox = true;

if ($sandbox) {
    define("URL_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v2/checkout/");
    define("SCRIPT_PAGSEGURO", "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js");
    define("TOKEN_PAGSEGURO", "A2A1BC415CB843B2BB6CFEEEB19410F0");
} else {
    define("TOKEN_PAGSEGURO", "");
    define("URL_PAGSEGURO", "https://ws.pagseguro.uol.com.br/v2/checkout/");
    define("SCRIPT_PAGSEGURO", "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js");
}
