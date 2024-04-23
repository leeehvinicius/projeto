<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_site extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');

        $this->load->model('home_model');
    }

	
	public function index()
	{
        
		$this->load->view('home');
	}

    public function categorias()
	{
        $data['categorias']=$this->home_model->listar();
		$this->load->view('categorias',$data);
	}

    public function listar()
	{
        $data['categorias']=$this->home_model->listar();
		$this->load->view('crud/listar',$data);
	}

    public function cadastrar()
    {
        // Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Verifica se o arquivo foi enviado corretamente
            if (!empty($_FILES["userfile"])) {
                // Configurações para o upload do arquivo
                $config['upload_path'] = 'assets/img'; // Caminho onde o arquivo será salvo
                $config['allowed_types'] = 'gif|jpg|png|jpeg'; // Tipos de arquivos permitidos
                $config['max_size'] = 1000000000000000; // Tamanho máximo do arquivo em bytes
    
                // Carrega a biblioteca de upload do CodeIgniter
                $this->load->library('upload', $config);
    
                // Tenta fazer o upload do arquivo
                if ($this->upload->do_upload('userfile')) {
                    // Informações sobre o arquivo enviado
                    $upload_data = $this->upload->data();
                    $nome = $upload_data['file_name']; // Nome do arquivo salvo
    
                    // Outros dados do formulário
                    $params = array(
                        'titulo_primario' => $this->input->post('titulo_primario'),
                        'titulo_secundario' => $this->input->post('titulo_secundario'),
                        'qtd_quartos' => $this->input->post('qtd_quartos'),
                        'qtd_banheiros' => $this->input->post('qtd_banheiros'),
                        'opcionais' => $this->input->post('opcionais'),
                        'qtd_hospedes' => $this->input->post('qtd_hospedes'),
                        'valor_diaria' => $this->input->post('valor_diaria'),
                        'link_img' => $nome
                    );
    
                    // Salva no banco de dados ou realiza outras operações necessárias
                    $this->home_model->salvar($params);
                    redirect('home_site/listar');
                } else {
                    // Se houver um erro no upload do arquivo, exibe os erros
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error); // Apenas para depuração, você pode exibir esses erros de forma mais amigável
                }
            } else {
                // Se nenhum arquivo foi enviado, exibe uma mensagem de erro
                echo "Nenhum arquivo enviado.";
            }
        }
    
        // Carrega a view do formulário
        $this->load->view('crud/cadastrar');
    }
    public function editar($id)
	{
           // Verifica se o formulário foi enviado
           if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Verifica se o arquivo foi enviado corretamente
            if (!empty($_FILES["userfile"])) {
                // Configurações para o upload do arquivo
                $config['upload_path'] = 'assets/img'; // Caminho onde o arquivo será salvo
                $config['allowed_types'] = 'gif|jpg|png|jpeg'; // Tipos de arquivos permitidos
                $config['max_size'] = 1000000000000000; // Tamanho máximo do arquivo em bytes
    
                // Carrega a biblioteca de upload do CodeIgniter
                $this->load->library('upload', $config);
    
                // Tenta fazer o upload do arquivo
                if ($this->upload->do_upload('userfile')) {
                    // Informações sobre o arquivo enviado
                    $upload_data = $this->upload->data();
                    $nome = $upload_data['file_name']; // Nome do arquivo salvo
    
                    // Outros dados do formulário
                    $params = array(
                        'titulo_primario' => $this->input->post('titulo_primario'),
                        'titulo_secundario' => $this->input->post('titulo_secundario'),
                        'qtd_quartos' => $this->input->post('qtd_quartos'),
                        'qtd_banheiros' => $this->input->post('qtd_banheiros'),
                        'opcionais' => $this->input->post('opcionais'),
                        'qtd_hospedes' => $this->input->post('qtd_hospedes'),
                        'valor_diaria' => $this->input->post('valor_diaria'),
                        'link_img' => $nome
                    );
    
                    // Salva no banco de dados ou realiza outras operações necessárias
                    $this->home_model->update($id,$params);
                    redirect('home_site/listar');
                } else {
                    // Se houver um erro no upload do arquivo, exibe os erros
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error); // Apenas para depuração, você pode exibir esses erros de forma mais amigável
                }
            } else {
                // Se nenhum arquivo foi enviado, exibe uma mensagem de erro
                echo "Nenhum arquivo enviado.";
            }
        }
        $data['categoria']=$this->home_model->listar_id($id);
		$this->load->view('crud/editar',$data);
	}
    public function delete($id)
	{
        $this->home_model->delete($id);
		redirect('home_site/listar');
	}







	
}
