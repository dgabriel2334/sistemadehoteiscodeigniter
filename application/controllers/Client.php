<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Client extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $dados = array(
            'titulo' => 'Página Inicial',
            'ativa' => 'home'
        );

        $this->load->view('client/default/header', $dados);
        $this->load->view('client/home/body');
        $this->load->view('client/default/footer');
    }

    /**
     * Index Page for this controller.
     */
    public function about()
    {
        $dados = array(
            'titulo' => 'Sobre nós',
            'ativa' => 'about'
        );

        $this->load->view('client/default/header', $dados);
        $this->load->view('client/about/body');
        $this->load->view('client/default/footer');
    }

    /**
     * Index Page for this controller.
     */
    public function accommodation()
    {
        $dados = array(
            'titulo' => 'Hospedagem',
            'ativa' => 'accommodation'
        );

        $this->load->view('client/default/header', $dados);
        $this->load->view('client/accommodation/body');
        $this->load->view('client/default/footer');
    }

    /**
     * Index Page for this controller.
     */
    public function location()
    {
        $dados = array(
            'titulo' => 'Localização',
            'ativa' => 'location'
        );

        $this->load->view('client/default/header', $dados);
        $this->load->view('client/location/body');
        $this->load->view('client/default/footer');
    }  
    
    /**
     * Index Page for this controller.
     */
    public function contact()
    {
        $dados = array(
            'titulo' => 'Contato',
            'ativa' => 'contact'
        );

        $this->load->view('client/default/header', $dados);
        $this->load->view('client/home/body');
        $this->load->view('client/default/footer');
    }
}

?>