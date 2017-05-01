<?php
namespace WebGM\Test\Table;

use WebGM\Test\TestCase;

use WebGM\Table\Table;

class TableTest extends TestCase 
{
  /**
   * @test
   */
  public function testFullMachineName() {
    $table = new Table();
    $table->parent = new Table(); 
    $table->parent->parent = new Table();
    $table->machine_name = 'table';
    $table->parent->machine_name = 'category';
    $table->parent->parent->machine_name = 'username';

    $this->assertEquals('username.category.table', $table->fullMachineName());
  }
}
