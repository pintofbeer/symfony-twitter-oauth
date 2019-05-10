<?php 

namespace Pintofbeer\SymfonyTwitterOAuthBundle\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
*  Controller Class
*
*  This controller should either be extended or included as a service
*
*  @author David Madelin
*/
class TestController extends AbstractController{

	//private $em;

	public function __construct(/*EntityManagerInterface $em*/){ 
		//$this->em = $em;
	}

	/**
     * @Route("/test", name="test_test_test", methods={"GET","POST"})
     */
	public function test(Request $request, SessionInterface $session){
		die("I AM TEST TEST TEST");
	}
}