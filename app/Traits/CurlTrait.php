<?php

namespace App\Traits;

use Ixudra\Curl\Facades\Curl;


trait CurlTrait
{
    public function postApi($endpoint, $data, $headers = [])
    {
        return Curl::to(($endpoint))
            ->withHeaders(array_merge($headers, $this->mainHeaders()))
            ->withData($data)
            ->asJson()
            ->post();
    }

    /**
     * Initiate get request with cURL
     *
     * @param [type] $endpoint
     * @param array $headers
     * @return void
     */
    public function getApi($endpoint, $headers = []): string
    {
        return Curl::to(($endpoint))
            ->withHeaders(array_merge($headers, $this->mainHeaders()))
            ->get();
    }

    /**
     * set main headers for http request
     *
     * @return array
     */
    protected function mainHeaders(): array
    {
        $token = session('api_token') ?: null;
        return [
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json',
            "Cache-Control: no-cache",
        ];
    }
}
