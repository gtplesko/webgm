<?php
namespace WebGM\Table;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table (name="user_content_tables")
 */
class Table 
{
  /**
   * @Id @Column
   * @GeneratedValue
   */
  protected $id;

  /**
   * The Displayable title of the Table
   *
   * @Column
   */
  public $title;

  /**
   * A short description of the table for display.
   *
   * @Column
   */
  public $description;

  /**
   * The Machine name for the table for use in 
   * table imports and other references of the table
   *
   * @Column (unique=true)
   */
  public $machine_name;

  /**
   * A Collection of the entries in a Table
   *
   * @OneToMany (targetEntity="WebGM\Table\Entry", mappedBy="table")
   */
  public $entries;

  /**
   * @OneToMany (targetEntity="WebGM\Table\Table", mappedBy="parent")
   */
  public $children;

  /**
   * @ManyToOne ((targetEntity="WebGM\Table\Table", inversedBy="children")
   */
  public $parent;

  public function __construct() {
    $this->entries = new ArrayCollection();
  }
}
