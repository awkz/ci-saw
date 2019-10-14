<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("kriteria_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
        $data = array();
        $data['custom_js'] = "<script>
            $(document).ready(function () {
                $('#datatable-responsive').DataTable();
            });
		</script>";
        $data["kriterias"] = $this->kriteria_model->getAll();
		$this->template->set_layout('backend');
		$this->template->title('Data Kriteria');
		$this->template->set_partial('menu', 'partials/menu');
		$this->template->build('kriteria/index',$data);
	}
}
