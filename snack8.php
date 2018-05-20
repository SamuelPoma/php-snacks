<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $students = [
        'st1' => [
          'name' => 'Marco',
          'surname' => 'Rosso',
          'votes' => [9,8,7,10,8]
        ],
        'st2' =>[
          'name' => 'Paolo',
          'surname' => 'Bianco',
          'votes' => [6,8,8,10,8]
        ],
        'st3' =>[
          'name' => 'Stefano',
          'surname' => 'Verde',
          'votes' => [6,6,6,10,10]
        ]
      ];

      foreach ($students as $k => $student) {
        var_dump($student['name'] . " " . $student['surname']);
        //  calcolo la media voti
        $sumVotes = array_sum($student['votes']);
        $numberVotes = count($student['votes']);
        // var_dump($numberVotes);
        var_dump( "Media voti: " . $sumVotes / $numberVotes);
      }
     ?>
  </body>
</html>
