<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/JobOpening.php";
    require_once __DIR__."/../src/Contact.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return
        "<!DOCTYPE html>
        <html>
        <head>
          <title>Job Board</title>
          <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min/css'>
        </head>
        <body>
          <h2>Job Board Posting</h2>
          <div class='container'>
            <form action = '/job_posting'>
              <div class='form-group'>
                <label for = 'title'>Job title</label>
                <input id = 'title' name = 'title' class = 'form-control' type = 'text'>
              </div>
              <div class='form-group'>
                <label for = 'Description'>Job Description</label>
                <input id = 'Description' name = 'Description' class = 'form-control' type = 'text'>
              </div>
              <div class='form-group'>
                <label for = 'contact_info'>Contact Information</label>
                <input id = 'contact_info' name = 'contact_info' class = 'form-control' type = 'text'>
              </div>
              <button class='btn'>Go!</button>
          </div>
        </body>
        </html>";

    });

    $app->get("/job_posting", function() {
      return "Hi there, I haven't gotten around to doing this part yet!";
    });

    return $app;
?>
