<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use AppBundle\Entity\User;
use AppBundle\Entity\TipoUsuario;

class UserController extends Controller
{

	public function propertyExist(Request $request){

		$field = $request->request->get('field');    	
    	$value = $request->request->get('q');

    	switch ($field) {
		    case 'identification':		    
		        $user = $this->getDoctrine()->getRepository(User::class)
    				->findOneBy(['identification'=>$value]);
				if($user)
					return new Response('fail'); 

		        break;
		    case 'email':		    
		        $user = $this->getDoctrine()->getRepository(User::class)
		        		->findOneBy(['email'=>$value]);
    				if($user)
    					return new Response('fail'); 
		        break;
		}

		return new Response('ok'); 
	}
    
    public function getOptionsLocationAction(Request $request)
    {

    	$type = $request->request->get('type');    	
    	$id = $request->request->get('id');
    	
    	// $id = $request->request->get('id');
    	// $type = $request->request->get('type');

    	//emulate DB Searches :D
    	$departments = array(
    		0 => array(0 =>"Antioquia", 1 => "Boyaca"),//Colombia
    		1 => array(2 =>"San Rafael", 3 => "Río Chico")//Argentina
    	);

    	$provinces = array(
    		0 => array(0 =>"Medellin", 1 => "Manizales", 2 => "Bello"),//Antioquia
    		1 => array(3 =>"Cucavita", 4 => "Tunja", 5 =>"Paipa"),//Boyaca
    		2 => array(6 =>"El Sosneado", 7 => "La Llave" ,8 =>"Villa Atuel"),//San Rafael
    		3 => array(9 =>"Lago Cardiel", 10 => "Los Manantiales", 11=>"Tamel Aike")//Rio Chico
    	);

    	$strResponse = '<option value="">Seleccione</option>';
    	$equalText = '';
    	if($type == 'country')
    		$dataLoad = $departments;
    	if($type == 'department')
    		$dataLoad = $provinces;

		foreach ($dataLoad as $key => $value) {
			foreach ($value as $keyJ => $valuej) {
				if($key == $id){
					$strResponse.='<option value="'.$keyJ.'">'.$valuej.'</option>';
				}
			}
		}


        return new Response(
            $strResponse
        );
    }


    public function index(){
    	$em = $this->getDoctrine()->getManager();
	    $users = $em->getRepository(User::class)->findAll();
	    return $this->render('/index.html.twig', array('users'=>$users));
	    // return $this->redirectToRoute('index');
    }

	/**
     * @Route("/edit/{id}", name="edit", requirements={"id": "\d+"})
     */

	public function editAction(Request $request, UserPasswordEncoderInterface $encoder)
	{

		$id = $request->query->get('id');
	    if (is_null($id) || $id == 'NULL') {
			$user = new User();
			$tipoUsuario = $this->getDoctrine()->getRepository(TipoUsuario::class)->find(1);
			$user->setTipoUsuarioId($tipoUsuario);
	    }else{
	    	$user = $this->getDoctrine()
		        ->getRepository(User::class)
		        ->find($id);

	    }
	    					
	    $user->setFirstName($request->request->get('firstName'));
	    $user->setLastName($request->request->get('lastName'));
	    $user->setPhone($request->request->get('phone'));
	    $user->setIsActive($request->request->get('isActive'));
	    $user->setEmail($request->request->get('email'));


	    $plainPassword = $request->request->get('password');
	    $encoded = $encoder->encodePassword($user, $plainPassword);

	    $user->setPassword($encoded);
	    // $user->setPassword($request->request->get('password'));
	    $user->setIdentification($request->request->get('identification'));

	    $em = $this->getDoctrine()->getManager();

	    // tells Doctrine you want to (eventually) save the user (no queries yet)
	    $em->persist($user);

	    // actually executes the queries (i.e. the INSERT query)
	    $em->flush();
	    
	    $arrData = ['ok' => 'ok'];
        return new JsonResponse($arrData);

	}


	public function deleteAction(Request $request)
	{

		$id = $request->query->get('id');
	    if (!is_null($id) && $id != 'NULL') {
	    	
	    	$user = $this->getDoctrine()
		        ->getRepository(User::class)
		        ->find($id);

		    $em = $this->getDoctrine()->getManager();
		    $em->remove($user);
            $em->flush();

	    }	    
	    $arrData = ['ok' => 'ok'];
        return new JsonResponse($arrData);

	}

}	