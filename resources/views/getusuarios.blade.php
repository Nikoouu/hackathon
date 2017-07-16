@extends('layouts.app')

@section('content')
<?php
$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.us.apiconnect.ibmcloud.com/portal-api-developers-desarrollo/sandbox/clientes/$ing_rut",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
"accept: application/json",
"x-ibm-client-id: ed5bfed1-096a-4493-b9ec-3982b1f19dd7"
),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
echo "cURL Error #:" . $err;
} else {
echo $response;
}
@endsection