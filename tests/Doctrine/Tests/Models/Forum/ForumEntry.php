<?php

namespace Doctrine\Tests\Models\Forum;

/**
 * @DoctrineEntity
 */
class ForumEntry
{
    /**
     * @DoctrineId
     * @DoctrineColumn(type="integer")
     * @DoctrineIdGenerator("auto")
     */
    public $id;
    /**
     * @DoctrineColumn(type="varchar", length=50)
     */
    public $topic;
}
