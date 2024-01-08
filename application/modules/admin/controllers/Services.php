<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        verify_session('admin');

        $this->load->model('Services_model');
       
    }

    public function index()
    {
        $data['title'] = 'Kelola Data Layanan';
        $data['services'] = $this->Services_model->get();
        $this->load->view('header', $data);
        $this->load->view('services/layanan', $data);
        $this->load->View('footer', $data);
    }

    public function view($id = 0)
    {
        if ( $this->services->is_services_exist($id))
        {
            $data = $this->services->services_data($id);

            $params['title'] = 'Layanan '. $data->name;

            $services['services'] = $data;
            $services['flash'] = $this->session->flashdata('services_flash');

            $this->services->set_status($id, 2);

            $this->load->view('header', $params);
            $this->load->view('services/view', $services);
            $this->load->View('footer');
        }
        else
        {
            show_404();
        }
    }

    public function reply()
    {
        $id = $this->input->post('id');
        $sender = $this->input->post('email');
        $name = $this->input->post('name');
        $send_to = $this->input->post('to');
        $nama_hewan = $this->input->post('nama_hewan');
        $alamat = $this->input->post('alamat');

        $this->load->library('email');

        $this->email->from($sender, $name);
        $this->email->to($send_to);

        $this->email->nama_hewan($nama_hewan);
        $this->email->alamat($alamat);

        $this->email->send();
        $this->email->print_debugger(array('headers'));
    }

    public function api($action = '')
    {
        switch ($action)
        {
            case 'services' :
                $services['data'] = $this->services->get_all_services();

                $response = $services;
            break;
            case 'delete' :
                $id = $this->input->post('id');

                $this->customer->delete_customer($id);

                $response = array('code' => 204);
            break;
        }

        $response = json_encode($response);
        $this->output->set_content_type('application/json')
            ->set_output($response);
    }

}