<?php

namespace SengentoBV\ChronopostSdk;

class ChronoAuthentication implements ChronoAuthenticationInterface
{
    protected string $accountNumber;
    protected string $password;

    /**
     * @param string $accountNumber
     * @param string $password
     */
    public function __construct(string $accountNumber, string $password)
    {
        $this->accountNumber = $accountNumber;
        $this->password = $password;
    }

    /**
     * @inheritDoc
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    /**
     * @inheritDoc
     */
    public function getPassword(): string
    {
        return $this->password;
    }
}