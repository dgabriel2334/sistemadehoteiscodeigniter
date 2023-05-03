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
        $this->load->model('rooms_model');

        $quartos = $this->rooms_model->getRoomSizes();

        $dados = array(
            'titulo' => 'Hospedagem',
            'ativa' => 'accommodation',
            'quartos' => $quartos
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
    public function bookingInfo()
    {
        $this->load->model('booking_model', "booking");

        $dados = array(
            'titulo' => 'Hospedagem',
            'ativa' => 'accommodation',
        );

        $bookingData = $this->booking->returnBookingByUuid($this->input->get('uuid'));

        $this->load->view('client/default/header', $dados);

        if (!$this->input->get('uuid') || empty($bookingData)) {
            $this->load->view('client/bookingInfo/404');
        } else {
            $bookingData[0]->uuid = $this->input->get('uuid');
            $this->load->view('client/bookingInfo/body', $bookingData[0]);
        }
        
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
        $this->load->view('client/contact/body');
        $this->load->view('client/default/footer');
    }


    function addNewCustomer()
    {
        $this->load->model('customer_model', 'customer');

        $customerInfo['customerName'] = $this->input->post()['customerName'];
        $customerInfo['customerEmail'] = $this->input->post()['customerEmail'];
        $customerInfo['customerPhone'] = $this->input->post()['customerPhone'];
        $customerInfo['customerAddress'] = $this->input->post()['customerAddress'];

        $result = $this->customer->addNewCustomer($customerInfo);
        echo $result;
    }


    function addNewBooking()
    {
        $this->load->library('ciqrcode');
        $this->load->model('booking_model', "booking");
        $startDate = $this->security->xss_clean($this->input->post('startDate'));
        $endDate = $this->security->xss_clean($this->input->post('endDate'));
        $roomId = $this->input->post('roomId');
        $floorId = $this->input->post('floorId') ? $this->input->post('floorId') : '1';
        $roomSizeId = $this->input->post('roomSizeId');
        $comments = $this->security->xss_clean($this->input->post('comments'));
        $customerId = $this->security->xss_clean($this->input->post('customerId'));
        $uuid = uniqid();

        $params['data'] = base_url()."/bookingInfo?uuid=".$uuid;
		$params['savename'] = 'assets/images/'.$uuid.'.png';
   
		$this->ciqrcode->generate($params);
		$imagedata = file_get_contents($params['savename']);
		$base64 = base64_encode($imagedata);
		unlink($params['savename']);
        
        $bookingInfo = array(
            'uuid' => $uuid,
            'bookStartDate'=>$startDate, 
            'bookEndDate'=>$endDate, 
            'roomId'=>$roomId, 
            'floorId'=>$floorId, 
            'roomSizeId'=>$roomSizeId,
            'customerId'=>$customerId,
            'bookingDtm'=>date('Y-m-d H:i:sa'),
            'bookingComments'=>$comments,
            'createdBy'=> 1, 
            'createdDtm'=>date('Y-m-d H:i:sa'),
            'qrCodeBase64' => $base64 
        );

        $result = $this->booking->addedNewBooking($bookingInfo);

        if ($result > 0) {
            echo json_encode($bookingInfo);
        }
    }

    /**
     * Index Page for this controller.
     */
    public function newBooking()
    {
        $this->load->model('booking_model');
        $bookingData = $this->input->get();
        $bookingData['roomName'] = $this->booking_model->getSizeRoomData($bookingData['roomSizeId'])->sizeTitle;
        $bookingData['picture'] = $this->booking_model->getSizeRoomData($bookingData['roomSizeId'])->picture;

        $dados = array(
            'titulo' => 'Hospedagem',
            'ativa' => 'accommodation',
            'bookingData' => $bookingData
        );

        $this->load->view('client/default/header', $dados);
        $this->load->view('client/newBooking/body');
        $this->load->view('client/default/footer');
    }
}

?>