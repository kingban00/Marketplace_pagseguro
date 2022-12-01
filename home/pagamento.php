<?php
include 'config/config.php';

function comprar()
{
    global $mysqli;
    $result = $mysqli->query("SELECT * FROM produto WHERE id = _POST['id']");
    $item = mysqli_fetch_assoc($result);

    if ($item)
        $checkout = checkout($item);

    return $checkout; //Verificar o que vai retornar
}

function checkout($item)
{
    $url = URL_PAGSEGURO . "?email=" . EMAIL_PAGSEGURO . "&token=" . TOKEN_PAGSEGURO;

    $curl = curl_init();

    $data = [
        "itemId1" => $item['id'],
        "itemName1" => $item['nome'],
        "itemValue" => $item['valor'],
        "itemQuantity1" => 1,
        "itemWeight1" => 0,
        "currency" => "BRL",
    ];

    $checkout = [
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_HTTPHEADER => ['Content-Type: application/x-www-form-urlencoded'],
    ];

    curl_setopt_array($curl, $checkout);

    $response = curl_exec($curl);
    $erro = "Curl error: " . curl_error($curl);

    curl_close($curl);
    
    if ($erro) {
        return $erro;
    } else{
        $xml = simplexml_load_string($response);
        $json = json_encode($xml);
        $array = json_decode($json, TRUE);
        return $array;
    }
}
