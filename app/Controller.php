<?php

abstract class Controller
{
    public function render(string $fichier, array $data = [])
    {
        extract($data);

        // On démarre le buffer de sortie
        ob_start();

        // On génère la vue
        require_once(ROOT.'views/'.$fichier.'.php');

        // On stocke le contenu dans $content
        $content = ob_get_clean();

        // On fabrique le "template"
        require_once(ROOT.'views/layout/default.php');
    }
}
