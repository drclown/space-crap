<?php

namespace Homesoft\PlatformFilesBundle\Controller;

//namespace Homesoft\PlatformFilesBundle\services;

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

    // Retourne une reponse json de l'arborence Dossiers / Fichiers du chemin données
    public function getFilesAction($pathRemote) {
        $remoteScanner = $this->container->get('homesoft_platform_files.remote_scanner');
        $remoteScanner->setPathRemote("/".$pathRemote);
        $directoriesAndFiles = $remoteScanner->getDirectoriesAndFiles();
        $response = new Response(json_encode($directoriesAndFiles));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function formatPathFile($pathFile) {
        return str_replace(' ','\\ ', $pathFile);
    }

    public function playFileAction(Request $request) {
        $system = $this->container->get('homesoft_platform_files.system_scanner');
        $pathFile = $this->formatPathFile($request->request->get("pathFile"));
        $service = "";
        $system->scanMediaPlayer();
        switch($system->getMediaPlayer()) {
            case "omxplayer":
                $service = "omx_reader";
            break;
            case "cvlc":
                $service = "vlc_reader";
            break;
            case "":
                return new response("Vous n'avez aucun lecteur video compatible avec ce fichier ! Installez omxplayer ou vlc");
            break;
        }

        $mediaService = $this->container->get('homesoft_platform_files.'.$service);
        return new Response($mediaService->play($pathFile));
    }

    public function pauseFileAction(Request $request){
        $pathFile = $this->formatPathFile($request->request->get("pathFile"));
        $omxService = $this->container->get('homesoft_platform_files.omx_reader');
        return new Response($omxService->pause($pathFile));
    }

    public function stopFileAction() {
        $omxService = $this->container->get('homesoft_platform_files.omx_reader');
        return new Response($omxService->stop());
    }
    public function rewindFileAction() {
        $omxService = $this->container->get('homesoft_platform_files.omx_reader');
        return new Response($omxService->rewind());
    }
    public function advanceFileAction() {
        $omxService = $this->container->get('homesoft_platform_files.omx_reader');
        return new Response($omxService->advance());
    }
    public function increaseVolumeFileAction() {
        $omxService = $this->container->get('homesoft_platform_files.omx_reader');
        return new Response($omxService->increaseVolume());
    }
    public function decreaseVolumeFileAction() {
        $omxService = $this->container->get('homesoft_platform_files.omx_reader');
        return new Response($omxService->decreaseVolume());
    }
}
