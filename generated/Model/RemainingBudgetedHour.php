<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Forecast\Api\Model;

class RemainingBudgetedHour
{
    /**
     * @var string
     */
    protected $budgetBy;
    /**
     * @var bool
     */
    protected $budgetIsMonthly;
    /**
     * @var int
     */
    protected $hours;
    /**
     * @var int
     */
    protected $projectId;
    /**
     * @var int
     */
    protected $responseCode;

    /**
     * @return string
     */
    public function getBudgetBy(): ?string
    {
        return $this->budgetBy;
    }

    /**
     * @param string $budgetBy
     *
     * @return self
     */
    public function setBudgetBy(?string $budgetBy): self
    {
        $this->budgetBy = $budgetBy;

        return $this;
    }

    /**
     * @return bool
     */
    public function getBudgetIsMonthly(): ?bool
    {
        return $this->budgetIsMonthly;
    }

    /**
     * @param bool $budgetIsMonthly
     *
     * @return self
     */
    public function setBudgetIsMonthly(?bool $budgetIsMonthly): self
    {
        $this->budgetIsMonthly = $budgetIsMonthly;

        return $this;
    }

    /**
     * @return int
     */
    public function getHours(): ?int
    {
        return $this->hours;
    }

    /**
     * @param int $hours
     *
     * @return self
     */
    public function setHours(?int $hours): self
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * @return int
     */
    public function getResponseCode(): ?int
    {
        return $this->responseCode;
    }

    /**
     * @param int $responseCode
     *
     * @return self
     */
    public function setResponseCode(?int $responseCode): self
    {
        $this->responseCode = $responseCode;

        return $this;
    }
}
