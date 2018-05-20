<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $partite = [
          [
            'squadraCasa' => 'Olimpia',
            'squadraOspite' => 'Chicago',
            'puntiCasa' => 74,
            'puntiOspite' => 44,
          ],
          [
            'squadraCasa' => 'Los Angeles',
            'squadraOspite' => 'Bullet',
            'puntiCasa' => 24,
            'puntiOspite' => 64,
          ],
          [
            'squadraCasa' => 'Fire',
            'squadraOspite' => 'Water',
            'puntiCasa' => null,
            'puntiOspite' => null,
          ],
        ];

              foreach ($partite as $partita) {
               ?>
                     <div>
                       <span class= "item"><?php echo $partita['squadraCasa']; ?></span>
                       <span class= "item"><?php echo $partita['squadraOspite']; ?></span>
                       <span class= "item "><?php echo (!empty($partita['puntiCasa'])) ?$partita['puntiCasa'] : '/'; ?></span>
                       <span class= "item "><?php echo (!empty($partita['puntiOspite'])) ?$partita['puntiOspite'] : '/'; ?></span>

                     </div>
              <?php
                }

              ?>

  </body>
</html>
