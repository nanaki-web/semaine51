<?php

class Employe
{
    Private $_nom;
    Private $_prenom;
    Private $_dateEmbauche;
    Private $_fonction;
    Private $_salaire;
    Private $_service;
    
    

    // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    public function setNom($sNom) 
    {
    return $this->_nom = $sNom;
    }

    // Accesseur : renvoie la valeur d'un attribut  
    public function getNom() 
    {
        return $this->_nom;
    }

    // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    public function setPrenom($sPrenom) 
    {
    return $this->_prenom = $sPrenom;
    }

    // Accesseur : renvoie la valeur d'un attribut  
    public function getPrenom() 
    {
        return $this->_prenom;
    }

    // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    public function setDateEmbauche($sDateEmbauche) 
    {
         $this->_dateEmbauche = DateTime::createFromFormat('Y/m/d', $sDateEmbauche)->format('Y/m/d');
      
    }

    // Accesseur : renvoie la valeur d'un attribut  
    public function getDateEmbauche() 
    {

        return $this->_dateEmbauche;
    }

    // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    public function setFonction($sFonction) 
    {
    return $this->_fonction = $sFonction;
    }

    // Accesseur : renvoie la valeur d'un attribut  
    public function getFonction() 
    {
        return $this->_fonction;
    }

    // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    public function setSalaire($sSalaire) 
    {
    return $this->_salaire = $sSalaire;
    }

    // Accesseur : renvoie la valeur d'un attribut  
    public function getSalaire() 
    {
        return $this->_salaire;
    }

    // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    public function setService($sService) 
    {
    return $this->_service = $sService;
    }

    // Accesseur : renvoie la valeur d'un attribut  
    public function getService() 
    {
        return $this->_service;
    }

    function __construct($marque, $modele, $nbRoues, ) 
   {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_roues = $nbRoues;
   }
}