<?php
require FCPATH . 'vendor/autoload.php';
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("UserModel");
    }

    public function load_view($view_name)
    {
        $data['users'] = $this->UserModel->showUsers();
        $this->load->view($view_name, $data);
    }

    public function index()
    {
        $data['title'] = 'Crud Users';

        $data['users'] = $this->UserModel->showUsers();

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('layouts/footer');
    }

    public function edit()
    {
        $id = $this->input->post("id");
        $data['user'] = $this->UserModel->getUser($id);

        $this->load->view('editUserView', $data);
    }

    public function testMpdf()
    {
        $mpdf = new \Mpdf\Mpdf();
        echo "mPDF está cargado correctamente";
    }

    public function generatePdf()
    {
        $data['users'] = $this->UserModel->showUsers();
        $html = $this->load->view('pdfUserView', $data, true);

        try {
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->WriteHTML($html);
            $mpdf->Output('users.pdf', 'D');
        } catch (\Mpdf\MpdfException $e) {
            // Manejar errores de mPDF
            log_message('error', $e->getMessage());
            show_error('Error al generar el PDF.');
        }
    }
}
