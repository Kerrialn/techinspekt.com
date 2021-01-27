<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage(): Response
    {
        return $this->render('app/index.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('app/contact.html.twig');
    }


    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {
        return $this->render('app/about.html.twig');
    }

    /**
     * @Route("/building-defects-and-causes", name="building-defects-and-causes")
     */
    public function buildingDefectsAndCauses(): Response
    {
        return $this->render('app/building-defects-and-causes.html.twig');
    }

    /**
     * @Route("/service/property-condition-inspection", name="service.property-condition-inspection")
     */
    public function propertyConditionInspection(): Response
    {
        return $this->render('services/property-condition-inspection.html.twig');
    }

    /**
     * @Route("/service/building-defect-investigation", name="service.building-defect-investigation")
     */
    public function buildingDefectInvestigation(): Response
    {
        return $this->render('services/building-defect-investigation.html.twig');
    }

    /**
     * @Route("/service/construction-monitoring", name="service.construction-monitoring")
     */
    public function constructionMonitoring(): Response
    {
        return $this->render('services/construction-monitoring.html.twig');
    }



    /**
     * @Route("/notes-and-observations", name="notes-and-observations")
     */
    public function notesAndObservations(): Response
    {
        return $this->render('app/notes-and-observations.html.twig');
    }

    /**
     * @Route("/terms-and-conditions", name="terms-and-conditions")
     */
    public function termsAndConditions(): Response
    {
        return $this->render('app/terms-and-conditions.html.twig');
    }


}
