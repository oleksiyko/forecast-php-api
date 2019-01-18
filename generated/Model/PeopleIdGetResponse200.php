<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Forecast\Api\Model;

class PeopleIdGetResponse200
{
    /**
     * @var Person
     */
    protected $person;

    /**
     * @return Person
     */
    public function getPerson(): ?Person
    {
        return $this->person;
    }

    /**
     * @param Person $person
     *
     * @return self
     */
    public function setPerson(?Person $person): self
    {
        $this->person = $person;

        return $this;
    }
}
