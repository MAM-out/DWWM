<?php
    // si le BTN envoyer est cliqué
    if (isset($_POST['submit'])) {
        // fichiers acceptés
        $aMimeTypes = array('image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png', 'image/tiff');
        
           // info recherchée  
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
          // type MIME du fichier 
        $mimetype = finfo_file($finfo, $_FILES['file']['tmp_name']);
        finfo_close($finfo);
         //si le type de fichier est correct
        if (in_array($mimetype, $aMimeTypes)) {
            // récupération de l'extension du fichier et stockage dans une variable
            $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
           // stockage du chemein de destintaion dans une variable
            $upload_dir = '../assets/img/';
            // renommage du fichier, facultatif, selon le besoin
            $_FILES['file']['name'] = 1;
            // indication du chemin + nom de fichier pour le déplacement
            $upload_file = $upload_dir . $_FILES['file']['name'] . '.' . $extension;
               // autaorisation pour l'écriture
               chmod($_FILES['file']['tmp_name'], 0750);
               //déplacement du fichier
               move_uploaded_file($_FILES['file']['tmp_name'], $upload_file);
               // message de confirmation
 } else {
            // Le type n'est pas autorisé, donc ERREUR
            <p>Type de fichier non autorisé</p>
        }
    } else {
    }
