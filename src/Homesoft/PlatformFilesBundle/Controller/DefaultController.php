<?php

namespace Homesoft\PlatformFilesBundle\Controller;

use Homesoft\PlatformFilesBundle\Entity\Image;
use Homesoft\PlatformFilesBundle\services;
use Homesoft\PlatformFilesBundle\services\RemoteScanner;
use Homesoft\PlatformFilesBundle\services\SystemScanner;
use Homesoft\PlatformFilesBundle\services\TmdbAPI;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    // retourne les disques externes branchés au serveur (/media/*)
    public function indexAction() {
        return $this->render('HomesoftPlatformFilesBundle:Files:files.html.twig');
    }

    // retourne en format json les disques externes branchés au serveur (/media/*)
    public function getRemotesAction() {
        $remoteScanner = new RemoteScanner("/media");

        $remotes = $remoteScanner->scanRemotes();

        $response = new Response(json_encode($remotes->getJson()));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    // Retourne une reponse json de l'arborence Dossiers / Fichiers du chemin données
    public function getFilesAction(Request $request) {
        $mediaDirectory = $request->request->get("mediaDirectory");

        $key = $this->container->getParameter('tmdb_key');

        $remoteScanner = new RemoteScanner($mediaDirectory);
        $medias = $remoteScanner->getMedias($mediaDirectory);

        $response = new Response(json_encode($medias->getJson()));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


}
