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
        return $this->render('HomesoftPlatformFilesBundle:Files:files.html.twig', array("remotes"=>$remotes));
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

    public function formatPathFile($pathFile) {
        $pathFile = str_replace(' ','\\ ', $pathFile);
        $pathFile = str_replace(')','\\)', $pathFile);
        return  str_replace('(','\\(', $pathFile);
    }

    //  Execute la video aprés avoir determiné quel est le lecteur video installé
    public function playFileAction(Request $request) {
        $systemScanner = new SystemScanner();
        $pathFile = $this->formatPathFile($request->request->get("pathFile"));
        //$service = $systemScanner->getVideoService();
        $service = "omx_reader";
        $mediaService = $this->container->get('homesoft_platform_files.'.$service);
        return new Response($mediaService->play($pathFile));
    }

    public function linkFileAction(Request $request) {
        $systemScanner = new SystemScanner();
        //$service = $systemScanner->getVideoService();
        $pathFile = $this->formatPathFile($request->request->get("pathFile"));
        $service = "omx_reader";
        $mediaService = $this->container->get('homesoft_platform_files.'.$service);
        return new Response($mediaService->link($pathFile));
    }

    public function pauseFileAction(){
        $systemScanner = new SystemScanner();
        //$service = $systemScanner->getVideoService();
        $service = "omx_reader";
        $mediaService = $this->container->get('homesoft_platform_files.'.$service);
        return new Response($mediaService->pause());
    }

    public function stopFileAction() {
        $omxService = $this->container->get('homesoft_platform_files.omx_reader');
        return new Response($omxService->stop());
    }

    public function rewindFileAction() {
        $omxService = $this->container->get('homesoft_platform_files.omx_reader');
        return new Response($omxService->rewind());
    }

    public function forwardFileAction() {
        $omxService = $this->container->get('homesoft_platform_files.omx_reader');
        return new Response($omxService->forward());
    }

    public function loadSubtitleFileAction() {
        $omxService = $this->container->get('homesoft_platform_files.omx_reader');
        return new Response($omxService->loadSubtitle());
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
