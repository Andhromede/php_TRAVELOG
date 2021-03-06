<?php

// LIAISON AVEC LES AUTRES COUCHES //
include_once("../dao/utilisateurMysqliDAO.php");

// GESTION DES ERREURS //
include_once("ServiceException.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


class UtilisateurService {

    public function __construct(){
        $this->utilisateurDao = new UtilisateurMysqliDao;
    }

    public function connexion() {
        try {
            $mysqli = $this->utilisateurDao->connexion();
            return $mysqli;
        } catch (DaoException $a){
            throw new ServiceException($a->getMessage(),$a->getCode());
        }
    }

    public function ajoutUtilisateur($pseudo,$mail, $password) { 
        try {
            $this->utilisateurDao->ajoutUtilisateur($pseudo,$mail,$password);
        } catch (DaoException $b){
            throw new ServiceException($b->getMessage(),$b->getCode());
        }
    }

    public function chercherUtilisateurParMail($mail) : ?array {
        try {
            $data = $this->utilisateurDao->chercherUtilisateurParMail($mail);
            return $data;
        } catch (DaoException $c){
            throw new ServiceException($c->getMessage(),$c->getCode());
        }
    }

    public function chercherUtilisateurParPseudo($pseudo) : ?array {
        try {
            $info = $this->utilisateurDao->chercherUtilisateurParPseudo($pseudo);
            return $info;
        } catch (DaoException $d){
            throw new ServiceException($d->getMessage(),$d->getCode());
        }
    }

    public function chercherUtilisateurParId(int $id) : ?array {
        try {
            $user = $this->utilisateurDao->chercherUtilisateurParId($id);
            return $user;
        } catch (DaoException $e){
            throw new ServiceException($e->getMessage(),$e->getCode());
        }
    }

    public function chercherPhotoProfilUtilisateur($photoProfil) : ?array {
        try {
            $data = $this->utilisateurDao->chercherPhotoProfilUtilisateur($photoProfil);
            return $data;
        } catch (DaoException $f){
            throw new ServiceException($f->getMessage(),$f->getCode());
        }
    }

    public function compterNotifications(int $id) {
        try {
            $data = $this->utilisateurDao->compterNotifications($id);
            return $data;
        } catch (DaoException $g){
            throw new ServiceException($g->getMessage(),$g->getCode());
        }
    }

    public function afficherNotifications(int $id) {
        try {
            $rs = $this->utilisateurDao->afficherNotifications($id);
            return $rs;
        } catch (DaoException $h){
            throw new ServiceException($h->getMessage(),$h->getCode());
        }
    }

    public function compterDemandesAmi(int $id) {
        try {
            $data = $this->utilisateurDao->compterDemandesAmi($id);
            return $data;
        } catch (DaoException $i){
            throw new ServiceException($i->getMessage(),$i->getCode());
        }
    }

    public function afficherDemandesAmi(int $id) {
        try {
            $rs = $this->utilisateurDao->afficherDemandesAmi($id);
            return $rs;
        } catch (DaoException $j){
            throw new ServiceException($j->getMessage(),$j->getCode());
        }
    }

    public function afficherPseudoDepuisIdAmi(int $idAmi){
        try {
            $donnee = $this->utilisateurDao->afficherPseudoDepuisIdAmi($idAmi);
            return $donnee;
        } catch (DaoException $k){
            throw new ServiceException($k->getMessage(),$k->getCode());
        }
    }

    public function afficherPseudoDepuisId(int $id){
        try {
            $donnee = $this->utilisateurDao->afficherPseudoDepuisId($id);
            return $donnee;
        } catch (DaoException $l){
            throw new ServiceException($l->getMessage(),$l->getCode());
        }
    }

    public function filtreBarreRecherche(){
        try {
            $filtre = $this->utilisateurDao->filtreBarreRecherche();
            return $filtre;
        } catch (DaoException $m){
            throw new ServiceException($m->getMessage(),$m->getCode());
        }
    }

    public function passwordHash($password) {
        try {
            $newPassword=password_hash($password,PASSWORD_DEFAULT);
            return $newPassword;
        } catch (DaoException $n){
            throw new ServiceException($n->getMessage(),$n->getCode());
        }
    }

    public function passwordVerify($password, $data) {
        try {
            $passwordOk = password_verify($password,$data["password"]);
            return $passwordOk;
        } catch (DaoException $o){
            throw new ServiceException($o->getMessage(),$o->getCode());
        }
    }

    public function nbAmisUtilisateur($id){
        try{
            $nbAmis = $this->utilisateurDao->nbAmisUtilisateur($id);
            return $nbAmis;
        }catch(DaoException $p){
            throw new ServiceException($p->getMessage(),$p->getCode());
        }
    }

    public function nbDemandesAmisUtilisateur($id){
        try{
            $nbAmis = $this->utilisateurDao->nbDemandesAmisUtilisateur($id);
            return $nbAmis;
        }catch(DaoException $p){
            throw new ServiceException($p->getMessage(),$p->getCode());
        }
    }

    public function ajouterAmi($idAmi, $id){
        try{
            $this->utilisateurDao->ajouterAmi($idAmi, $id);
        }catch(DaoException $q){
            throw new ServiceException($q->getMessage(),$q->getCode());
        }
    }

    public function listeAmis(int $id) {
        try {
            $rs = $this->utilisateurDao->listeAmis($id);
            return $rs;
        } catch (DaoException $r){
            throw new ServiceException($r->getMessage(),$r->getCode());
        }
    }

    public function demandesAmis(int $id) {
        try {
            $rs = $this->utilisateurDao->demandesAmis($id);
            return $rs;
        } catch (DaoException $r){
            throw new ServiceException($r->getMessage(),$r->getCode());
        }
    }

    public function confirmerDemandeAmis(int $id, $idAmi) {
        try {
            $rs = $this->utilisateurDao->confirmerDemandeAmis($id, $idAmi);
            return $rs;
        } catch (DaoException $r){
            throw new ServiceException($r->getMessage(),$r->getCode());
        }
    }

    public function supprimerAmi($idAmi, $id){
        try{
            $this->utilisateurDao->supprimerAmi($idAmi, $id);
        }catch(DaoException $s){
            throw new ServiceException($s->getMessage(),$s->getCode());
        }
    }

    public function afficherDonnesDepuisIdAmi(int $idAmi){
        try {
            $donnees = $this->utilisateurDao->afficherDonneesDepuisIdAmi($idAmi);
            return $donnees;
        } catch (DaoException $t){
            throw new ServiceException($t->getMessage(),$t->getCode());
        }
    }

    public function afficherDonnesDepuisIdAmi1(int $idAmi){
        try {
            $donnees = $this->utilisateurDao->afficherDonneesDepuisIdAmi1($idAmi);
            return $donnees;
        } catch (DaoException $t){
            throw new ServiceException($t->getMessage(),$t->getCode());
        }
    }

    public function dejaAmis($idAmi, $id){
        try{
            $nbAmis = $this->utilisateurDao->dejaAmis($idAmi, $id);
            return $nbAmis;
        }catch(DaoException $q){
            throw new ServiceException($q->getMessage(),$q->getCode());
        }
    }

    public function afficherRowAmi(int $id) : ?array {
        $detailAmi = $this->utilisateurDao ->afficherRowAmi($id);
        return $detailAmi;
    }


    public function modifierUtilisateur($utilisateur) {
        try{
            $modifUtilisateur = $this->utilisateurDao->modifierUtilisateur($utilisateur);
        }catch(DaoException $s){
            throw new ServiceException($s->getMessage(),$s->getCode());
        }
    }


    public function modifPhoto($imgContent, $pseudo) {
        try{
            $modifUtilisateur = $this->utilisateurDao->modifPhoto($imgContent, $pseudo);
        }catch(DaoException $s){
            throw new ServiceException($s->getMessage(),$s->getCode());
        }
    }

    public function calculAge($pseudo) {
        try{
            $age = $this->utilisateurDao->calculAge($pseudo);
        }catch(DaoException $s){
            throw new ServiceException($s->getMessage(),$s->getCode());
        }finally{
            return $age;
        }
    }
    

}

?>