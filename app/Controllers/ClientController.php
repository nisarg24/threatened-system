<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class ClientController extends BaseController
{    
    /**
     * Index
     *
     * @return void
     */
    public function index(): void
    {
        $loadCss = $this->loadCss();
        $loadJs = $this->loadJs();
        require_once APP_ROOT . "\\resources\\views\\index.php";
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
            '<link rel="stylesheet" href="'.URL_ROOT.'/resources/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
            '<link rel="stylesheet" href="'.URL_ROOT.'/resources/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">',
            '<link rel="stylesheet" href="'.URL_ROOT.'/resources/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">',
            '<link rel="stylesheet" href="'.URL_ROOT.'/resources/assets/dist/css/adminlte.min.css">'
        ];
    }

    /**
     * Load Js file
     *
     * @return void
     */
    private function loadJs(): array
    {
        return [
            '<script src="'.URL_ROOT.'/resources/assets/plugins/jquery/jquery.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/plugins/datatables/jquery.dataTables.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/plugins/jszip/jszip.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/plugins/pdfmake/pdfmake.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/plugins/pdfmake/vfs_fonts.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/dist/js/adminlte.min.js"></script>',
            '<script src="'.URL_ROOT.'/resources/assets/dist/js/demo.js"></script>'
        ];
    }
}