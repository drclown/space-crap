<?php

namespace Homesoft\PlatformFilesBundle\Controller;

use Homesoft\PlatformFilesBundle\services;
use Homesoft\PlatformFilesBundle\services\RemoteScanner;
use Homesoft\PlatformFilesBundle\services\SystemScanner;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class FilesController extends Controller {

    // retourne les disques externes branchés au serveur (/media/*)
    public function indexAction() {
        $remoteScanner = new RemoteScanner("/media");
        $remotes = $remoteScanner->scanRemotes();
        $remotes = $remoteScanner->findSeriesFilmsPaths($remotes);
        $service = "omx_reader";
        $mediaService = $this->container->get('homesoft_platform_files.'.$service);
        //$playingFile = $mediaService->readLog();
        $playingFile = "";
        return $this->render('HomesoftPlatformFilesBundle:Files:files.html.twig', array(
            "remotes"       => $remotes,
            "playingFile"   => $playingFile
        ));
    }

    // Retourne une reponse json de l'arborence Dossiers / Fichiers du chemin données
    public function getFilesAction(Request $request) {
        $pathRemote = $request->request->get("pathRemote");
        $remoteScanner = new RemoteScanner($pathRemote);
        $directoriesAndFiles = $remoteScanner->getDirectoriesAndFiles();
        $response = new Response(json_encode($directoriesAndFiles));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    // Effectue la liaison entre le fichier video et le fichier fifo
    public function linkFileAction(Request $request) {
        $systemScanner = new SystemScanner();
        //$service = $systemScanner->getVideoService();
        $pathFile = $request->request->get("pathFile");
        $service = "omx_reader";
        $mediaService = $this->container->get('homesoft_platform_files.'.$service);
        return new Response($mediaService->link($pathFile));
    }

    /*  Récupere le service de lecture video adequate (omxReader, vlcReader etc...)
        puis executer une de ses methodes en fonction du parametre $cmd passer en GET */
    public function cmdCtrlFileAction($cmdCtrlVideo) {
        $systemScanner = new SystemScanner();
        //$service = $systemScanner->getVideoService();
        $service = "omx_reader";
        $mediaService = $this->container->get('homesoft_platform_files.'.$service);
        return new Response($mediaService->ctrlVideo($cmdCtrlVideo));
    }

    /*  Lit le fichier /tmp/logFile (par default ) afin de récuperer la video en train d'etre executé */
    public function getPlayingFileAction() {
        $service = "omx_reader";
        $mediaService = $this->container->get('homesoft_platform_files.'.$service);
        return new Response($mediaService->readLog());
    }
}
