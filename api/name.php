<?php
  $klein->respond('GET', '/name', function ($request, $response) {
    $response->json(
      array(
        "name" => array(
          "first"=>"Carson", 
          "last"=>"Wright",
          "fullName"=>"Carson Wright"
        )
      )
    );
  });
?>