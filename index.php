<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>MyDemo</title>
  <style>
    body{
      display:flex;
      justify-content: center;
      align-items:center;
      height:100vh;
      font-family: monospace;
      margin:0;
      
    }
    button{

    }


</style>
</head>

<html>
    <body>

      <h1>
      
        <?php

use PgSql\Lob;

        $myVar = "from new beginnings. ";
        $thisVar = "the end. ";
        $thisBool = false;


        $mySongs = ["Let It Go", "You're Gonna Go Far Kid", "Make A Man Out Of You"];
        $myBooks = [
          [
            'name' => 'Ulysses (1992)',
            'author' => 'James Joyce',
            'link' => 'https://en.wikipedia.org/wiki/Ulysses_(novel)'
          ],
          [
            'name' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'link' => 'http://en.wikipedia.org/wiki/The_Great_Gatsby'
          ]


        ];
        
        
        ?>




      </h1>
      
    

      <ul>
        <?php

        foreach ($myBooks as $book) : ?>
        <li> <?= $book['name']; ?><ul> <?= $book['author']; ?> </li></ul> </li>
        <?php endforeach ?>
      </ul>
      


    </body>
</html> 