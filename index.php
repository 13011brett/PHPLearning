
      
        <?php


        $myVar = "from new beginnings. ";
        $thisVar = "the end. ";
        $thisBool = false;
        $heading = 'Home';


        $mySongs = ["Let It Go", "You're Gonna Go Far Kid", "Make A Man Out Of You"];
        $myBooks = [
            [
                'name' => 'Ulysses (1992)',
                'author' => 'James Joyce',
                'link' => 'https://en.wikipedia.org/wiki/Ulysses_(novel)'
            ],
            [
                'name' => 'test',
                'author' => 'James Joyce',
                'link' => 'https://en.wikipedia.org/wiki/Ulysses_(novel)'
            ],
          [
            'name' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'link' => 'https://en.wikipedia.org/wiki/The_Great_Gatsby'
          ]


        ];
        
        function filter($array, $fn )
        {
            $myArray = [];
            foreach ($array as $book) {
                if ($fn($book)) {
                    $myArray[] = $book;
                }

            }
            return $myArray;
        }

        $filteredBooks = filter($myBooks, function($book){
            return ($book['name'] === 'test');
        });


        require "./functions.php";
        require "views/index.view.php";
        ?>
      
    

