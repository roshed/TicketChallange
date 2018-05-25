<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ticket;
use AppBundle\Entity\Reservation;
use AppBundle\Form\ReservationType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TicketController extends Controller
{
    /**
     * @Route("/ticket", name="ticket_page")
     */
    public function indexAction(Request $request)
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();


            $reservation->getName();
            $reservation->getEmail();
            $reservation->getAdult();
            
            if($reservation->getChild()>=4 && $reservation->getAdult()==0){
                return $this->render("ticket/reservationForm.html.twig",
                array(
                    'form' => $form->createView(),
                    'error' => 'For 4> child min 1 adult'
                ));
            }
            $reservation->getEventId()->getId();
            
            

            

            $uniq = uniqid();
            $reservation->setUnique($uniq);

            $em->persist($reservation);
            $em->flush();
            return $this->redirectToRoute('reservation_confirm', array('uniqueId' => $uniq));
        }
        return $this->render("ticket/reservationForm.html.twig",
            array(
                'form' => $form->createView()
            ));
    }

    /**
     * @Route("/reservation/{uniqueId}", name="reservation_confirm")
     */
    public function ReservationAction($uniqueId)
    {
        return $this->render("ticket/booking.html.twig",
        array(
            'uniqueId' => $uniqueId
        ));
    }
}
