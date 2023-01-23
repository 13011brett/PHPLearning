
      
        <?php

        $config = require('config.php');
        $db = new Database($config['database']);



        $note = $db->query("select * from notes where id = ?", [$_GET['id']])->fetch(PDO::FETCH_ASSOC);

        //dd($notes);

        $heading = "Note# {$note['id']}";



        require 'views/note.view.php';

      
    

