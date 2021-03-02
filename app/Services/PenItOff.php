<?php

namespace App\Services;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

/**
 * Class PenItOff
 * @package App\Services
 */
class PenItOff
{
    protected $baseUrl = 'https://penitoff.com/api/';

    /**
     * PenItOff constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function projects()
    {
        $response = $this->getIt('project/list');

        return json_decode($response->body())->package;
    }

    /**
     * @param $url
     * @return Response
     */
    private function getIt($url): Response
    {
        return Http::withHeaders($this->getHeaders())->get($this->baseUrl . $url);
    }

    /**
     * @return string[]
     */
    private function getHeaders(): array
    {
        return [
            'Authorization' => 'Bearer ' . config('penitoff.key')
        ];
    }
}
