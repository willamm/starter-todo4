<?php
use PHPUnit\Framework\TestCase;
// Extend from the entity
 class TaskTest extends TestCase
  {
    private $CI;
    public function setUp()
    {
      // Load CI instance normally
      $this->CI = &get_instance();
    }
    public function testGetPost()
    {
      $_SERVER['REQUEST_METHOD'] = 'GET';
      $_GET['foo'] = 'bar';
      $this->assertEquals('bar', $this->CI->input->get_post('foo'));
    }
  }