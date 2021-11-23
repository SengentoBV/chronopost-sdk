<?php

namespace SengentoBV\ChronopostSdk;

interface ChronoAuthenticationInterface
{
    /**
     * Get the account number.
     * @return string
     */
    public function getAccountNumber(): string;

    /**
     * Get the password.
     */
    public function getPassword(): string;
}