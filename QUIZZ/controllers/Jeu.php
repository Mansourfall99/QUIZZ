<?php
   
  class Jeu extends Controller {

    public function __construct(){
        
      parent::__construct();
      
        $this->dirname="jeu"; 
        $this->layout="layout_joueur"; 
        $this->manager=new UserManager();
        $this->managerQ=new QuestionManager();
       
    }

    public function listerJoueur(){
       $this->layout="layout_admin";
       $this->views="listeJoueur";
       $this->render();
      
    }

    

    public function intJoueur(){
      $this->layout="layout_joueur";
       $this->views="intJoueur";
       $this->render();
      
    }
    public function selectReponse(){
        return null;
  
    }

    public function afficheScore(){
         return 0; 
    }

   }
