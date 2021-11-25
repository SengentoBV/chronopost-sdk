<?php

namespace SengentoBV\ChronopostSdk;

interface ChronoAuthenticationInterface
{
    /**
     * Get the account number.
     * @return int
     */
    public function getAccountNumber(): int;

    /**
     * Get the sub-account number.
     * @return int
     */
    public function getSubAccount(): ?int;

    /**
     * Get the password.
     * @return string
     */
    public function getPassword(): string;

    /**
     * Get the idEmit value.
     * @return string
     */
    public function getIdEmit(): string;
}