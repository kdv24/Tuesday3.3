<?php

    class JobOpening
    {
        public $title;
        public $description;
        public $contact_info;

        function __construct($title, $description, $contact_info)
        {
          $this->title = $title;
          $this->description = $description;
          $this ->contact_info = $contact_info;
        }

        function getTitle()
        {
          return $this->title;
        }

        function getDescription()
        {
          return $this->description;
        }

        function getContactInfo()
        {
          return $this->contact_info;
        }

        function setTitle($new_title)
        {
          $this->title = $new_title;
        }
        function setDescription($new_description)
        {
          $this->description = $new_description;
        }
        function setContactInfo($new_contact_info)
        {
          $this->contact_info = $new_contact_info;
        }
    }

?>
