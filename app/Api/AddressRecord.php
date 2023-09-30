<?php

namespace App\Api;

class AddressRecord
{
    public function __construct(protected array $apiData)
    {
    }

    public function getStreetName(): string
    {
        return $this->apiData['street_name'];
    }

    public function getCity(): string
    {
        return $this->apiData['city'];
    }

    public function getMunicipality(): string
    {
        return $this->apiData['municipality'];
    }

    public function getLat(): float
    {
        return $this->apiData['centroid']['latitude'];
    }

    public function getLng(): float
    {
        return $this->apiData['centroid']['longitude'];
    }
}
