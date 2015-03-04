<?php
  class Contact
  {
    private $name;
    private $phone;
    private $email;

    function __construct($name, $phone, $email)
    {
      $this->name = $name;
      $this->phone = $phone;
      $this->email = $email;
    }
    function getName()
    {
      return $this->name;
    }
    function getPhone()
    {
      return $this->phone;
    }
    function getEmail()
    {
      return $this->email;
    }
    function setName($new_name)
    {
      $this->name = $new_name;
    }
    function setPhone($new_phone)
    {
      $this->phone = $new_phone;
    }
    function setEmail($new_email)
    {
      $this->email = $new_email;
    }
  }
  ?>
