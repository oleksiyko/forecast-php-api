<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Forecast\Api\Model;

class RolesIdGetResponse200
{
    /**
     * @var Role
     */
    protected $role;

    /**
     * @return Role
     */
    public function getRole(): ?Role
    {
        return $this->role;
    }

    /**
     * @param Role $role
     *
     * @return self
     */
    public function setRole(?Role $role): self
    {
        $this->role = $role;

        return $this;
    }
}
