<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Detail_model');
    }

    function convert($digit)
    {
        if (empty($digit))
            return '٠';

        $ar_digit = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩', '-' => '', '.' => '.');

        $arabic_digit = '';

        $length = strlen($digit);

        for ($i = 0; $i < $length; $i++) {

            if (isset($ar_digit[$digit[$i]]))

                $arabic_digit .= $ar_digit[$digit[$i]];
        }
        return $arabic_digit;
    }


    public function index()
    {
        if (isset($_GET['id'])) {
            $data['title'] = "TheHafiz - Detail Ayat";
            $data['detail'] = $this->Detail_model->getDetail($this->input->get('id'));
            $data['num'] = $this->convert(strrev($data['detail']->verseID));
            $this->load->view('templates/header', $data);
            $this->load->view('detail/index', $data);
            $this->load->view('templates/footer');
        }
    }
}
