<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('product_model');
    }
    
    public function index() {
        $data['products'] = $this->product_model->get_all();
        $data['title'] = 'Daftar Produk';
        
        $this->load->view('products/header', $data);
        $this->load->view('products/list', $data);
        $this->load->view('products/footer');
    }
    
    public function add() {
        $this->form_validation->set_rules('name', 'Nama Produk', 'required');
        $this->form_validation->set_rules('price', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('description', 'Deskripsi', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Tambah Produk';
            $this->load->view('products/header', $data);
            $this->load->view('products/add');
            $this->load->view('products/footer');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'description' => $this->input->post('description')
            );
            
            $this->product_model->insert($data);
            $this->session->set_flashdata('success', 'Produk berhasil ditambahkan');
            redirect('products');
        }
    }
    
    public function edit($id) {
        $this->form_validation->set_rules('name', 'Nama Produk', 'required');
        $this->form_validation->set_rules('price', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('description', 'Deskripsi', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $data['product'] = $this->product_model->get_by_id($id);
            $data['title'] = 'Edit Produk';
            
            $this->load->view('products/header', $data);
            $this->load->view('products/edit', $data);
            $this->load->view('products/footer');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'description' => $this->input->post('description')
            );
            
            $this->product_model->update($id, $data);
            $this->session->set_flashdata('success', 'Produk berhasil diupdate');
            redirect('products');
        }
    }
    
    public function delete($id) {
        $this->product_model->delete($id);
        $this->session->set_flashdata('success', 'Produk berhasil dihapus');
        redirect('products');
    }
}
