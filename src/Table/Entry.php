<?php
namespace WebGM\Table;

/**
 * @Entity
 * @Table (name="user_content_table_entries")
 */
class Entry
{
  /**
   * @Id @Column
   * @GeneratedValue
   */
  protected $id;

  /**
   * The string value of the entry in a table.
   *
   * @Column
   */
  public $value;
  
  /**
   * @ManyToOne (targetEntity="WebGM\Table\Table", inversedBy="entries")
   * @JoinColumn (name="table_id", referencedColumnName="id")
   */
  public $table
}
