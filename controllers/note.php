
      
        <?php

        $config = require('config.php');
        $db = new Database($config['database']);



        $note = $db->query("select * from notes where id = ?", [$_GET['id']])->fetchOrFail(PDO::FETCH_ASSOC);

        $heading = htmlspecialchars($note['subject']);
        $currentUserId = 1;


       authorize($note['user_id'] === $currentUserId);
        //dd($notes);




        require 'views/note.view.php';

      
    

