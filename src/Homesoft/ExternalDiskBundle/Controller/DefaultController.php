<?php

namespace Homesoft\ExternalDiskBundle\Controller;

use Homesoft\ExternalDiskBundle\Service\ExternalsDisksScanner;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HomesoftExternalDiskBundle:Default:index.html.twig');
    }

    public function SynchronizationExternalsDisksAction() {

        // Récuperation des disques externes
        $externalsDisksScanner = new ExternalsDisksScanner();
        $externalsDisks = $externalsDisksScanner->scanExternalDisk();
        
        foreach($externalsDisks AS $externalDisk) {
            $synchronizerExternalsDisks = new SynchronizerExternalDisk($externalDisk);
            $synchronizerExternalsDisks->synchronize();
        }
    }

    // Retourne en format json les disques externes trouvés dans le repertoire /media du serveur
    public function getExternalsDisksAction() {

        $externalsDisksScanner = new ExternalsDisksScanner();
        $jsonContent= "";

        // Récuperation des disques externes
        $externalsDisks = $externalsDisksScanner->scanExternalDisk();

        if($externalsDisks->count() > 0) {

            // On déclare les encoders
            $encoders = array(new XmlEncoder(), new JsonEncoder());
            $normalizers = array(new ObjectNormalizer());
            $serializer = new Serializer($normalizers, $encoders);

            // On converti le arrayCollection en json
            $jsonContent = $serializer->serialize($externalsDisks, 'json');
        }

        // Création de la reponse json
        $response = new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
