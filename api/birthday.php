<?php
  $klein->respond('GET', '/birthday', function ($request, $response) {
    $response->json(array("birthdays" =>
        array(
          array("birthday"=>"January 16 1987"),
          array("birthday"=>"January 16 1989")
        )
    ));
  });
?>