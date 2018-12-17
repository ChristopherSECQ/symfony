<?php

# importation de l'autoload
use Symfony\Component\VarDumper\VarDumper;

require_once 'vendor/autoload.php';

# contenu de demonstration
class Contact {
    private $firstname,
            $lastname;

    /**
     * Contact constructor.
     * @param $firstname
     * @param $lastname
     */
    public function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

}

$unString   = "une chaine de Caractère";
$unArray    = ['Hugo', 'Momo', 'Farid', 'Seb'];
$unObjet    = new Contact('Hugo', 'LIEGEARD');

# Test de VarDumper
VarDumper::dump($unString);
VarDumper::dump($unArray);
VarDumper::dump($unObjet);
