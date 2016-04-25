<?php

namespace Homesoft\MediaBundle\Controller;

use Homesoft\MediaBundle\Service\MediasResearcher;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HomesoftMediaBundle:Default:index.html.twig');
    }

    public function SynchronizationMoviesAction(Request $request) {
        $id = $request->request->get("idExternalDisk");
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('HomesoftExternalDiskBundle:ExternalDisk')
        ;
        $externalDisk = $repository->find($id);


    }
    public function SynchronizationSeries(Request $request) {
        $moviesPath = $request->request->get("id");
    }

    public function getMoviesFilesAction(Request $request){
        $moviesPath = $request->request->get("moviesPath");
        $mediaResearcher = new MediasResearcher();
        $jsonContent = "";

        $movies = $mediaResearcher->getAllMovies($moviesPath);

        if($movies->count() > 0){

            // On déclare les encoders
            $encoders = array(new XmlEncoder(), new JsonEncoder());
            $normalizers = array(new ObjectNormalizer());
            $serializer = new Serializer($normalizers, $encoders);

            $jsonContent = $serializer->serialize($movies, 'json');
        }

        // Création de la reponse json
        $response = new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }
}
