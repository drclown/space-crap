<?php

namespace Homesoft\PlatformFilesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class FilesController extends Controller
{
    public function indexAction() {
        $remoteScanner = $this->container->get('homesoft_platform_files.remote_scanner');
        $remoteScanner->setPathRemote("\\media");
        $remotes = $remoteScanner->scanRemotes();
        return $this->render('HomesoftPlatformFilesBundle:Files:files.html.twig', array("remotes"=>$remotes));
    }

    // Retourne views Files with the remote selected
    public function viewAction($remote) {
        $remoteScanner = $this->container->get('homesoft_platform_files.remote_scanner');
        $remoteScanner->setPathRemote("\\media");
        $remotes = $remoteScanner->scanRemotes();
        return $this->render('HomesoftPlatformFilesBundle:Default:index.html.twig', array(
            "remotes"=>$remotes,
            "remote"=>$remote
        ));
    }


    // Retourne une reponse json de l'arborence Dossiers / Fichiers du chemin données
    public function getFilesAction($pathRemote) {
        $remoteScanner = $this->container->get('homesoft_platform_files.remote_scanner');
        $remoteScanner->setPathRemote("\\".$pathRemote);
        $tree = $remoteScanner->getTree();
        $response = new Response(json_encode($tree));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

}
