<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Forecast\Api\Model;

class UserCurrentUser
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int[]
     */
    protected $accountIds;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getAccountIds(): ?array
    {
        return $this->accountIds;
    }

    /**
     * @param int[] $accountIds
     *
     * @return self
     */
    public function setAccountIds(?array $accountIds): self
    {
        $this->accountIds = $accountIds;

        return $this;
    }
}
