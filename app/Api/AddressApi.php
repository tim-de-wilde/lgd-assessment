<?php

namespace App\Api;

use App\Exceptions\AddressApiException;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class AddressApi
{
    protected const ENDPOINT = 'https://api.spikkl.nl/geo/nld/lookup.json';

    protected static ?self $instance = null;

    protected string $apiKey;

    protected function __construct()
    {
        $apiKey = config('api.address_api_key');

        if (empty($apiKey)) {
            throw new AddressApiException('Address api key is not set');
        }

        $this->apiKey = $apiKey;
    }

    public static function getInstance(): self
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    protected function getApiResponse(
        string $postalCode,
        string $houseNumber,
    ): Response {
        return Http::get(self::ENDPOINT, [
            'key' => $this->apiKey,
            'postal_code' => $postalCode,
            'street_number' => $houseNumber,
        ]);
    }

    public static function getResponse(
        string $postalCode,
        string $houseNumber,
    ): AddressApiResponse {
        $instance = self::getInstance();
        $apiResponse = $instance->getApiResponse($postalCode, $houseNumber);
        return new AddressApiResponse($apiResponse);
    }
}
