
      
        <?php

        $config = require('config.php');
        $db = new Database($config['database']);



        $note = $db->query("select * from notes where id = ?", [$_GET['id']])->fetch(PDO::FETCH_ASSOC);

        if(!$note){

            abort(404);
        }

        if($note['user_id'] != 1){
            abort(403);
        }
        //dd($notes);

        $heading = "Note# {$note['id']}";



        require 'views/note.view.php';

      
    

