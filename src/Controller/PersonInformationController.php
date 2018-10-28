<?php

namespace App\Controller;


use App\Entity\PersonInformation;
use App\Form\UploadType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PersonInformationController extends Controller
{

	/**
	 * @Route("/", name="homepage")
	 */
	public function indexAction(Request $request)
	{
		$personInformation = new PersonInformation();
		$form = $this->createForm(UploadType::class, $personInformation);

		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			/**
			 * @var UploadedFile $file
			 */
			$file = $personInformation->getFileName();

			if ($file->getError() == 0) {
				$fileName = md5(uniqid()).'.'.($file->guessExtension() == null ? '':$file->guessExtension() );

				$file->move($this->getParameter('upload_directory'), $fileName);

				$personInformation->setFileName($fileName);

				$em = $this->getDoctrine()->getManager();
				$em->persist($personInformation);
				$em->flush();

				$this->addFlash(
					'notice',
					'Your data were saved!'
				);
			}
			else {
				$msgError = $file->getErrorMessage();

				$this->addFlash(
					'error',
					$msgError
				);
			}

			return $this->redirectToRoute('homepage');
		}

		return $this->render("personInformation/index.html.twig", [
			'form' => $form->createView(),
		]);
	}

	/**
	 * @Route("/get", name="getPersonInfo")
	 */
	public function getPersonInformationAction()
	{
		$persons= $this->getDoctrine()->getRepository(PersonInformation::class)->findAll();

		return $this->render("personInformation/getPerson.html.twig", [
			'persons' => $persons
		]);
	}
}
