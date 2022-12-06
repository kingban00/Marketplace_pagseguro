<?php
include 'config/config.php';
if ($_POST['etapa'] == 'checkout'){
    comprar();
}

function comprar()
{
    global $mysqli;
    $id = intval($_POST['id']);
    // var_dump($_POST);exit;

    $result = $mysqli->query("SELECT * FROM produto WHERE id = $id");
    $item = mysqli_fetch_assoc($result);
    // var_dump($item);exit;

    if ($item)
        $checkout = checkout($item);

    return $checkout; //Verificar o que vai retornar
}

function checkout($item)
{
    $url = URL_PAGSEGURO . "?email=" . EMAIL_PAGSEGURO . "&token=" . TOKEN_PAGSEGURO;
    $postback = PAGSEGURO_POSTBACK;

    $curl = curl_init();

    $data = [
        "itemId1" => $item['id'],
        
        "itemDescription1" =>'2', //resolver isso dps

        "itemName1" => $item['nome'],
        "itemAmount1" => number_format($item['valor'], 2),
        "itemQuantity1" => 1,
        "itemWeight1" => 0,
        "currency" => "BRL",
        "shippingType" => 1,//verificar os abaixos
        "notificationURL" => $postback,
        "installmentQuantity" => 12,
    ];

    $checkout = [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/x-www-form-urlencoded'
        ],
    ];

    curl_setopt_array($curl, $checkout);
    
    $response = curl_exec($curl);
    // var_dump($response);exit;
    $erro = curl_error($curl);

    curl_close($curl);

    if ($erro) {
        echo $erro;
    } else {
        $xml = simplexml_load_string($response);
        $json = json_encode($xml);
        $codigo = json_decode($json, TRUE);
        // var_dump($codigo);
        echo $codigo['code'];
    }
}
