<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('home', ["TitleForm" => 'Lorem ipsum dolor']);
    }

    public function store()
    {
        
        $this->load->library('form_validation');
        $this->load->model('ContactMessageModel');
        $this->load->database();
        $this->form_validation->set_data($this->input->post());
        $this->form_validation->set_rules('c_fullname', 'fullname', 'required');
        $this->form_validation->set_rules('c_telephone', 'telephone', 'required|numeric');
        $this->form_validation->set_rules('c_comments', 'comments', 'required');
        $this->form_validation->set_rules('c_email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == FALSE) {
            http_response_code(422);
            echo json_encode([
                'status'=>false,
                'message'=>'incorrect data check and resubmit.',
                'error'=>$this->form_validation->error_array()
            ]); 
            return; 
        } 
            $data = [
                'fullname' => $this->input->post('c_fullname'),
                'email' => $this->input->post('c_email'),
                'telephone' => $this->input->post('c_telephone'),
                'comments' => $this->input->post('c_comments'),
            ];
            $contact=new ContactMessageModel();
            $result=$contact->store($data);
            if($result>0){
                echo json_encode([
                    'status'=>true,
                    'message'=>'send message successfull.'
                ]);
                return;
            }
            http_response_code(400);
                echo json_encode([
                'status'=>false,
                'message'=>'the message could not be sent.',
                'errror'=>[]
            ]);
        
    } 
}
