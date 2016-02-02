<?php

namespace Homesoft\PlatformFilesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class FilesController extends Controller {
    public function indexAction() {
        $remoteScanner = $this->container->get('homesoft_platform_files.remote_scanner');
        $remoteScanner->setPathRemote("/media");
        $remotes = $remoteScanner->scanRemotes();
        return $this->render('HomesoftPlatformFilesBundle:Files:files.html.twig', array("remotes"=>$remotes));
    }

    // Retourne l'arborescences des fichiers à partir du path données en parametres
    public function viewAction($remote) {
        $remoteScanner = $this->container->get('homesoft_platform_files.remote_scanner');
        $remoteScanner->setPathRemote("/media");
        $remotes = $remoteScanner->scanRemotes();
        return $this->render('HomesoftPlatformFilesBundle:Default:index.html.twig', array(
            "remotes"=>$remotes,
            "remote"=>$remote
        ));
    }

    // Retourne une reponse json de l'arborence Dossiers / Fichiers du chemin donn�es
    public function getFilesAction($pathRemote) {
        $remoteScanner = $this->container->get('homesoft_platform_files.remote_scanner');
        $remoteScanner->setPathRemote("/".$pathRemote);
        $tree = $remoteScanner->getTree();
        $response = new Response(json_encode($tree));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function playFileAction(Request $request) {
        $pathFile = escapeshellcmd($request->request->get("pathFile"));
        $yo = exec("omxplayer ".$pathFile);
        $response = new Response($yo);
        return $response;
    }

    public function stopFileAction() {
        $yo = exec("sudo killall omxplayer.bin");
        $response = new Response($yo);
        return $response;
    }
}
