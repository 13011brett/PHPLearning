
      
        <?php

        $config = require('config.php');
        $db = new Database($config['database']);



        $note = $db->query("select * from notes where id = ?", [$_GET['id']])->fetch(PDO::FETCH_ASSOC);

        $heading = "Note# {$note['id']}";
        $currentUserId = 1;

        if(!$note){

            abort(404);
        }
        if($note['user_id'] != $currentUserId){
            abort(Response::FORIBDDEN);
        }
        //dd($notes);




        require 'views/note.view.php';

      
    

