<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Forecast\Api\Model;

class Client
{
    /**
     * Is this client archived?
     *
     * @var bool
     */
    protected $archived;
    /**
     * id of this client in Harvest.
     *
     * @var int
     */
    protected $harvestId;
    /**
     * id of this client.
     *
     * @var int
     */
    protected $id;
    /**
     * Name of the client.
     *
     * @var string
     */
    protected $name;
    /**
     * date when the client was last updated.
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * id of the user who last updated this client.
     *
     * @var int
     */
    protected $updatedById;

    /**
     * Is this client archived?
     *
     * @return bool
     */
    public function getArchived(): ?bool
    {
        return $this->archived;
    }

    /**
     * Is this client archived?
     *
     * @param bool $archived
     *
     * @return self
     */
    public function setArchived(?bool $archived): self
    {
        $this->archived = $archived;

        return $this;
    }

    /**
     * id of this client in Harvest.
     *
     * @return int
     */
    public function getHarvestId(): ?int
    {
        return $this->harvestId;
    }

    /**
     * id of this client in Harvest.
     *
     * @param int $harvestId
     *
     * @return self
     */
    public function setHarvestId(?int $harvestId): self
    {
        $this->harvestId = $harvestId;

        return $this;
    }

    /**
     * id of this client.
     *
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * id of this client.
     *
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
     * Name of the client.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the client.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * date when the client was last updated.
     *
     * @return string
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * date when the client was last updated.
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * id of the user who last updated this client.
     *
     * @return int
     */
    public function getUpdatedById(): ?int
    {
        return $this->updatedById;
    }

    /**
     * id of the user who last updated this client.
     *
     * @param int $updatedById
     *
     * @return self
     */
    public function setUpdatedById(?int $updatedById): self
    {
        $this->updatedById = $updatedById;

        return $this;
    }
}
