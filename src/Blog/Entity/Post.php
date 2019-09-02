<?php

namespace Blog\Entity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;

/**
 * Blog Post Entity
 * 
 * @Entity
 * @Table( indexes={
 *      @index(name="publication_date_idx",
 *      column="publicationDate")
 * })
 */
class Post {
    /**
     * @var int
     * 
     * @id
     * @generatedValue
     * @column(type="integer")
     */
    protected $id;

    /**
     * @var string
     * 
     * @column(type="sring")
     */
    protected $title;

    /**
     * @var string
     * 
     * @column(type="text");
     */
}