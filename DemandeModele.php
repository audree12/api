<?php
class DemandeModele{
    private $db;

    public function __construct($db) {
        $this->db=$db;
    }

    public function ListeDemandeService(){
        $req="SELECT id_demande, id_client,description from demandeservice";
        $pre= $this->db->prepare($req);
        $pre->execute();
        
        return $pre;
    }
}