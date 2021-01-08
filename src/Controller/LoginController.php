<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Repository\LoginRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\DpUsers;
use App\Entity\DpContacts;
use App\Entity\DpProjects;
use App\Entity\DpTaskLog;
use App\Entity\DpTasks;
use App\Entity\Heures;

class LoginController extends AbstractController
{
    /**
     * @Route("/", name="onepage")
     */
    public function index(Request $request)
    {
        {
        
            $error='';
            if ($request->get('btn')!=null){
            $user=$request->get('username');
            $pass=md5($request->get('pass'));
            echo '<h1> User '.$user.'  MDP '.$pass.'</h1>';
          $cnx=$this->getDoctrine()->getManager();
            $result=$cnx->getRepository(DpUsers::class)->findOneBy(array('userUsername'=>$user,'userPassword'=>$pass));
    
    
            if ($result!=null) {
                //pour demarrer session
                $contact=$result->getUserContact();
                echo 'Id contact '.$contact;
             
                $name=$cnx->getrepository(DpContacts::class)->find($contact);
               // echo '  first  '.$name->getContactFirstName();
                //echo '  last   '.$name->getContactLastName();
                $session=new Session();
                $session->set('DpUsers',$result);
                $session->set('contacter',$name);
                // dima fel rout nhouto name Route
               return $this->redirectToRoute('read');
            }

                else {
                      $error='<< Error le mot de passe incorrect >>' ;
    
            }
            }
            // dima el view fi e5er el function
            return $this->render('index.html.twig',array('msg'=>$error));
        }

       
    }
      /**
     * @Route("/deconnexion", name="deconnexion")
     */
    public function deconnexion(session $session)
    {
        $session->set('DpUsers',null);
        $session->set('contacter',null);
        if ($session!=null){
            //redirection à la nom de route
        return $this->redirectToRoute('onepage');
        }
    }
    
      /**
     * @Route("/read", name="read")
     */
    public function read()
    {
        
        $cnx=$this->getDoctrine()->getManager();
        $res=$cnx->getRepository(DpTaskLog::class)->findALL();
        $res2=$cnx->getRepository(DpProjects::class)->findALL();
        $users=$cnx->getRepository(DpUsers::class)->findALL();
        $heures=$cnx->getRepository(Heures::class)->findALL();
        
        return $this->render('layout.html.twig',array('res'=>$res,'heures'=>$heures,'users'=>$users,'res2'=>$res2));

    }

    
      /**
     * @Route("/find/{id}", name="find")
     */
    

    public function recherche(session $session,$id)
    {
        $cnx=$this->getDoctrine()->getManager();
       
        $detailProject=$cnx->getRepository(DpProjects::class)->find($id);
        $taches=$cnx->getRepository(DpTasks::class)->findBy(array('taskProject'=>$id));
        
        return $this->render('tache.html.twig',array('detailProject'=>$detailProject,'taches'=>$taches,'nbtache'=>count($taches)));
        
    }
    
      /**
     * @Route("/tab/{name}", name="tab")
     */
    public function tab($name)
    {
        
        $cnx=$this->getDoctrine()->getManager();
        $res=$cnx->getRepository(DpTaskLog::class)->findBy(array('taskLogName'=>$name));
       $detailTasks =$cnx->getRepository(DpTasks::class)->findOneBy(array('taskName'=>$name));
        $id_Projet=$detailTasks->getTaskProject();
        $nomProjet=$cnx->getRepository(DpProjects::class)->find($id_Projet);
        $totalHeure=0;
       foreach($res as $cle){
        $totalHeure=$totalHeure+$cle->getTaskLogHours() ; 
        
       }
      /* echo '<H1> Total Heure <u>'.$totalHeure.'</u><H1>';
       echo '<H1> Tache <u>'.$name.'</u><H1>';
       echo '<H1> Id Projet <u>'.$nomProjet->getProjectId().'</u><H1>';
       echo '<H1> Projet <u>'.$nomProjet->getProjectName().'</u><H1>';*/
       $ProjetHeures=$cnx->getRepository(Heures::class)->findOneBy(array('projet'=>$nomProjet->getProjectName()));
	   
       if(empty($ProjetHeures))
       {
       $hr=new Heures();
       $hr->setTache($name);
       $hr->setProjet($nomProjet->getProjectName());
       $hr->setHeure($totalHeure);
       $cnx->persist($hr);
      $cnx->flush();
       }
       else
       {
		   $tach=explode(',',$ProjetHeures->getTache());
		   $nbtest=0;
		   for($i=0;$i<count($tach);$i++){
			   if($tach[$i]==$name)
			   {
				  $nbtest=1; 
			   }
			  
		   }
		   //    echo '<h1>'.$nbtest.'</h1>';
		   if($nbtest==0)
		   {
	         $taches=$ProjetHeures->getTache().','.$name;
           $tot=$totalHeure+$ProjetHeures->getHeure();
				$q = $cnx->createQueryBuilder()
				->update(Heures::class, 'h')
				->set('h.heure', '?1')
				->set('h.tache', '?2')
				->where('h.projet = ?3')
				->setParameter(1, $tot)
				->setParameter(2, $taches)
				->setParameter(3, $ProjetHeures->getProjet())
				->getQuery();
			$p = $q->execute();
		   }
       }
        $users=$cnx->getRepository(DpUsers::class)->findALL(); 

        return $this->render('tableaux.html.twig',array('users'=>$users,'res'=>$res));

    }
    
}
