<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;//pilo
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\User;

class LoadUsersData implements ORMFixtureInterface {


	public function load(ObjectManager $manager)
    {
    	$user = new User();
	    					
	    $user->setFirstName('Maria');
	    $user->setLastName('Vega');
	    $user->setPhone('7777');
	    $user->setIsActive(1);
	    $user->setEmail('mariavega@correo.com');

	    $encoder = $this->container->get('security.password_encoder');
	    // $encoder = $this->container->get('security.user_password_encoder.generic'); too doesnt work
	    $encoded = $encoder->encodePassword($user, 'maria');

	    $user->setPassword($encoded);
	    // $user->setPassword($request->request->get('password'));
	    $user->setProvince($request->request->get('province'));

	    
	    $manager->persist($user);

	    $manager->flush();
        
    }

    public function setContainer(ContainerInterface $container = null)
    {
    	$this->container = $container;
        
    }
}