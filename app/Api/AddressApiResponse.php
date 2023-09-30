<?php

namespace App\Api;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class AddressApiResponse
{
    protected array $data = [];

    public function __construct(protected Response $apiResponse)
    {
        $this->data = $this->apiResponse->json();
    }

    public function hasSucceeded(): bool
    {
        return $this->data['status'] === 'ok';
    }

    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return Collection<AddressRecord>
     */
    public function getResults(): Collection
    {
        return collect($this->data['results'])
            ->mapInto(AddressRecord::class);
    }
}
