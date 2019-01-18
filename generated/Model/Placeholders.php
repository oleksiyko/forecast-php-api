<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Forecast\Api\Model;

class Placeholders
{
    /**
     * @var Placeholder[]
     */
    protected $placeholders;

    /**
     * @return Placeholder[]
     */
    public function getPlaceholders(): ?array
    {
        return $this->placeholders;
    }

    /**
     * @param Placeholder[] $placeholders
     *
     * @return self
     */
    public function setPlaceholders(?array $placeholders): self
    {
        $this->placeholders = $placeholders;

        return $this;
    }
}
