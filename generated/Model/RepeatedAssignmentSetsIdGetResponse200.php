<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Forecast\Api\Model;

class RepeatedAssignmentSetsIdGetResponse200
{
    /**
     * @var RepeatedAssignmentSet
     */
    protected $repeatedAssignmentSet;

    /**
     * @return RepeatedAssignmentSet
     */
    public function getRepeatedAssignmentSet(): ?RepeatedAssignmentSet
    {
        return $this->repeatedAssignmentSet;
    }

    /**
     * @param RepeatedAssignmentSet $repeatedAssignmentSet
     *
     * @return self
     */
    public function setRepeatedAssignmentSet(?RepeatedAssignmentSet $repeatedAssignmentSet): self
    {
        $this->repeatedAssignmentSet = $repeatedAssignmentSet;

        return $this;
    }
}
