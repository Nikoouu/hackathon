<?php
namespace bci1;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class bci1
{
    protected $api_key;
    protected $url_base = ' https://api.us.apiconnect.ibmcloud.com/portal-api-developers-desarrollo/sandbox/oauth2/authorize/';
    protected $url_request;
/**
 * Bci constructor.
 * @param $api_key
 */
    public function __construct($api_key)
    {
        $this->api_key = $api_key;
    }

    public function connection()
    {
        $client = new Client([
            'base_uri' => $this->url_base,
            'headers' => [
                'client_id',
                'scope',
                'resource-owner',
                'redirect_uri',
                'original-url',
                'dp-state',
                'dp-data',
                'accept' => 'text/html',
                'x-ibm-client-id' => $this->api_key,
                'content-type' => 'client_id','scope','resource-owner','redirect_uri','original-url','dp-state','dp-data',
            ]
        ]);

        return $client;
    }

}
