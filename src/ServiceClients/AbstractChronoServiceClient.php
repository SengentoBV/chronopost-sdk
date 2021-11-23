<?php

namespace SengentoBV\ChronopostSdk\ServiceClients;

use SengentoBV\ChronopostSdk\ChronoApiClient;

abstract class AbstractChronoServiceClient
{
    /**
     * @var ChronoApiClient
     */
    private ChronoApiClient $apiClient;

    public function __construct(ChronoApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function getApiClient() : ChronoApiClient
    {
        return $this->apiClient;
    }
}
