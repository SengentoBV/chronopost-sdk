<?php

namespace SengentoBV\ChronopostSdk;

class ChronoAuthentication implements ChronoAuthenticationInterface
{
    protected int $accountNumber;
    protected string $password;
    protected ?int $subAccount;
    protected string $idEmit;

    /**
     * @param ?int $accountNumber
     * @param string $password
     * @param ?int $subAccount
     * @param string $idEmit
     */
    public function __construct(int $accountNumber, string $password, ?int $subAccount = null, string $idEmit = 'CHRFR')
    {
        $this->accountNumber = $accountNumber;
        $this->password = $password;
        $this->subAccount = $subAccount;
        $this->idEmit = $idEmit;
    }

    /**
     * @inheritDoc
     */
    public function getAccountNumber(): int
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

    /**
     * @inheritDoc
     */
    public function getIdEmit(): string
    {
        return $this->idEmit;
    }

    /**
     * @inheritDoc
     */
    public function getSubAccount(): ?int
    {
        return $this->subAccount;
    }
}