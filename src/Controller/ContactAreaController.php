<?php

namespace App\Controller;

use App\Entity\ContactArea;
use App\Form\ContactAreaType;
use App\Repository\ContactAreaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use \DateTimeZone;

#[Route('/')]
class ContactAreaController extends AbstractController
{
    #[Route('/', name: 'app_contact_area_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ContactAreaRepository $contactAreaRepository): Response
    {
        $contactArea = new ContactArea();
        $form = $this->createForm(ContactAreaType::class, $contactArea);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = $contactArea->getEmail();

            if ($contactAreaRepository->validateEmailByDay($email)) {
                $this->addFlash('error', 'Solo se permite enviar un correo electrónico por día.');
                return $this->redirectToRoute('app_contact_area_new');
            }

            $currentTime = new \DateTime('now', new DateTimeZone('America/Bogota'));
            $contactArea->setCreateAt($currentTime);
            $entityManager->persist($contactArea);
            $entityManager->flush();

            $this->addFlash('success', '¡El área de contacto se ha creado correctamente!');

            return $this->redirectToRoute('app_contact_area_new');
        }

        return $this->render('contact_area/addFormContact.html.twig', [
            'contact_area' => $contactArea,
            'form' => $form,
        ]);
    }
}
