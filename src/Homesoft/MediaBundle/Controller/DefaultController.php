<?php

namespace Homesoft\MediaBundle\Controller;

use Homesoft\ExternalDiskBundle\Entity\ExternalDisk;
use Homesoft\MediaBundle\Service\ApiTmdb;
use Homesoft\MediaBundle\Service\MediasResearcher;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller {

    public function scanFilesAction(Request $request){
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

    public function getFilesToSynchronizeAction(ExternalDisk $id) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("HomesoftMediaBundle:File");
        $files = $repository->findAllWithoutMediaByIdExternalDisk($id);
        $jsonContent = json_encode($files);
        $response = new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function getMediaAction($title) {

        $apiTmdb = new ApiTmdb();
        $apiTmdb->getMedia($title);
        $response = new Response();
        return $response;
    }
}
