<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class ProfileController extends BaseController
{    
    /**
     * view
     *
     * @return void
     */
    public function view(): void
    {
        $loadCss = $this->loadCss();
        $loadJs = $this->loadJs();

        $clientInfo = $this->getClientInfo();
        $threatenedInfo = $this->getThreatenedInfo();
        $segregatedThreat = $this->getSegregatedThreat();

        $saverityClass = $this->setTextClass(trim($clientInfo['severity']));
        require_once APP_ROOT . "\\resources\\views\\profile.php";
    }
    
    /**
     * Load css file
     *
     * @return array
     */
    private function loadCss(): array
    {
        return [
            '<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">',
            '<link rel="stylesheet" href="'.URL_ROOT.'/resources/assets/plugins/fontawesome-free/css/all.min.css">',
            '<link rel="stylesheet" href="'.URL_ROOT.'/resources/assets/dist/css/adminlte.min.css">'
        ];
    }
    
    /**
     * Load Js file
     *
     * @return array
     */
    private function loadJs(): array
    {
        return [
            '<script src="'.URL_ROOT.'/resources/assets/plugins/jquery/jquery.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/plugins/chart.js/Chart.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/plugins/jqvmap/jquery.vmap.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/dist/js/adminlte.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/dist/js/demo.js"></script>',
        ];
    }
}