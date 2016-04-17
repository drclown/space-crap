<?php

namespace Homesoft\RemoteControlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    // Effectue la liaison entre le fichier video et le fichier fifo
    public function linkFileAction(Request $request) {
        $systemScanner = new SystemScanner();
        //$service = $systemScanner->getVideoService();
        $pathFile = $request->request->get("pathFile");
        $service = "omx_reader";
        $mediaService = $this->container->get('homesoft_remote_control.'.$service);
        return new Response($mediaService->link($pathFile));
    }

    /*  Récupere le service de lecture video adequate (omxReader, vlcReader etc...)
        puis executer une de ses methodes en fonction du parametre $cmd passer en GET */
    public function cmdCtrlFileAction($cmdCtrlVideo) {
        $service = "omx_reader";
        $mediaService = $this->container->get('homesoft_remote_control.'.$service);
        return new Response($mediaService->ctrlVideo($cmdCtrlVideo));
    }

    /*  Lit le fichier /tmp/logFile (par default ) afin de récuperer la video en train d'etre executé */
    public function getPlayingFileAction() {
        $service = "omx_reader";
        $mediaService = $this->container->get('homesoft_remote_control.'.$service);
        return new Response($mediaService->readLog());
    }
}
