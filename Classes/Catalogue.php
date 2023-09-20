<?php

namespace Classes;

class Catalogue
{
    private array $catalogue = [];

    /**
     * @param array $catalogue
     */
    public function setCatalogue(array $catalogue): void
    {
        $this->catalogue = $catalogue;
    }

    /**
     * @return array
     */
    public function getCatalogue(): array
    {
        return $this->catalogue;
    }
}