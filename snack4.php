<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $articoli = [

          '10/05/2017' => [
              [
                  'post' => 'ciao bla bla bla',
                  'author' => 'Marco'
              ],
              [
                  'post' => 'bla bla',
                  'author' => 'Daniele'
              ],

            ],
            '19/09/2017' => [
                [
                    'post' => 'ciao udhsdh shusd dhud',
                    'author' => 'Silvio'
                ],
             ],
             '29/11/2012' => [
                 [
                     'post' => 'dfhudhdhufhudfuhdf vnv vnv vnv vn ',
                     'author' => 'Letizia'
                 ],
              ],

            ];

            foreach ($articoli as $k => $date ) {
               echo($k);
               foreach($date as $post) {
                 echo($post['post']);
                 echo($post['author']);
               }
             }


     ?>
  </body>
</html>
