<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class ContainersPruneResponse200
{
    /**
     * @var string[]
     */
    protected $containersDeleted;
    /**
     * @var int
     */
    protected $spaceReclaimed;

    /**
     * @return string[]
     */
    public function getContainersDeleted()
    {
        return $this->containersDeleted;
    }

    /**
     * @param string[] $containersDeleted
     *
     * @return self
     */
    public function setContainersDeleted(array $containersDeleted = null)
    {
        $this->containersDeleted = $containersDeleted;

        return $this;
    }

    /**
     * @return int
     */
    public function getSpaceReclaimed()
    {
        return $this->spaceReclaimed;
    }

    /**
     * @param int $spaceReclaimed
     *
     * @return self
     */
    public function setSpaceReclaimed($spaceReclaimed = null)
    {
        $this->spaceReclaimed = $spaceReclaimed;

        return $this;
    }
}
