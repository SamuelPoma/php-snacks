<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $staff = [
        'teachers' => [
          [
            'name' => 'Fabio',
            'age' => 30
          ],
          [
            'name' => 'Michele',
            'age' => 29
          ],
        ],
        'pm' => [
          [
            'name' => 'Roberto',
            'age' => 34
          ],
          [
            'name' => 'Claudio',
            'age' => 42
          ],

        ]
      ];

      foreach($staff as $k => $roles) {
        // var_dump($k);s
          foreach($roles as $people) {
            // var_dump($people);
            if ($k == "teachers") { ?>

              <ul style = "background-color:lightgreen;">
                <li> <?php echo $people['name'] . " " . " age: " .  $people['age']; ?> </li>
              </ul>
              <?php
            }
              if ($k == "pm") {  ?>
              <ul style = "background-color:tomato;">
                <li> <?php echo $people['name'] . " " . " age: " .  $people['age']; ?> </li>
              </ul>
          <?php
            }
          }
        }
     ?>
  </body>
</html>
