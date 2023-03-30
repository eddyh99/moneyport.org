<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('user_id'))) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $srcref = base_url() . 'qr/ref/' . $_SESSION["ucode"] . 'Thumbnail.png';
        if (@getimagesize($srcref) == FALSE) {
            $this->ciqrcode->createThumbnail($_SESSION["ucode"], 'qr/ref/');
        }

        $mdata = array(
            "userid" => $_SESSION["user_id"]
        );
        
        if (!isset($_SESSION["referral"])){
            $url = URLAPI . "/v1/auth/getmember_byucode?ucode=".$_SESSION["ucode"];
            $member   = apitrackless($url, json_encode($mdata))->message;
            $_SESSION["referral"]=$member->refcode;
        }
        
        $url = URLAPI . "/v1/member/currency/getActiveCurrency";
        $currency   = apitrackless($url, json_encode($mdata))->message;

        $data = array();
        foreach ($currency as $dt) {
            if ($dt->status == 'active') {
                $temp["currency"] = $dt->currency;
                $temp["symbol"] = $dt->symbol;
                $temp["status"] = $dt->status;
                $temp["balance"] = apitrackless(URLAPI . "/v1/member/wallet/getBalance?currency=" . $dt->currency . "&userid=" . $_SESSION["user_id"])->message->balance;
                array_push($data, (object) $temp);
            }
        }

        $dataobj = (object)$data;

        $data['title'] = NAMETITLE . " - Homepage";
        $footer["extra"]    = "member/js/js_index";
        $body["currency"] = $dataobj;


        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom-homepage', $data);
        $this->load->view('member/index', $body);
        $this->load->view('tamplate/footer', $footer);
    }

    public function crypto()
    {
        $data['title'] = NAMETITLE . " - Homepage";
        $footer["extra"]    = "member/js/js_index";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/crypto');
        $this->load->view('tamplate/footer', $footer);
    }

    public function setting_currency()
    {
        $mdata = array(
            "userid" => $_SESSION["user_id"]
        );

        $url = URLAPI . "/v1/member/currency/getActiveCurrency";
        $body["currency"]   = apitrackless($url, json_encode($mdata))->message;

        $footer["extra"]    = "member/js/js_currency";
        $data['title']      = NAMETITLE . " - Currency Setting";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/setting-currency', $body);
        $this->load->view('tamplate/footer', $footer);
    }

    public function wallet()
    {
        if (!empty($_GET["cur"])) {
            $url = URLAPI . "/v1/member/currency/getByCurrency?currency=" . $_GET["cur"] . "&userid=" . $_SESSION["user_id"];
            $result = apitrackless($url);
            if ($result->code == 200) {
                $_SESSION["currency"] = @$_GET["cur"];
                $_SESSION["symbol"] = $result->message->symbol;
            } else {
                $_SESSION["currency"] = "USD";
                $_SESSION["symbol"] = "&dollar;";
            }
        }

        $mdata = array(
            "userid" => $_SESSION["user_id"]
        );
        $url = URLAPI . "/v1/member/currency/getActiveCurrency";
        $body["currency"]   = apitrackless($url, json_encode($mdata))->message;
        $data['title'] = NAMETITLE . " - Homepage";
        $footer["extra"]    = "member/js/js_index";


        $this->load->view('tamplate/header', $data);
        $this->load->view('member/mywallet', $body);
        $this->load->view('tamplate/navbar-bottom-homepage', $data);
        $this->load->view('tamplate/footer', $footer);
    }

    public function setCurrency()
    {
        $currency = $_GET["currency"];
        $status = $_GET["status"];
        $url = URLAPI . "/v1/member/currency/setCurrency?status=" . $status . "&userid=" . $_SESSION["user_id"] . "&currency=" . $currency;
        $result = apitrackless($url);
        echo json_encode($result);
    }

    public function getHistory()
    {
        $this->form_validation->set_rules('tgl', 'Date', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            header("HTTP/1.1 500 Internal Server Error");
            $error = array(
                "token"     => $this->security->get_csrf_hash(),
                "message"   => validation_errors()
            );
            echo json_encode($error);
            return;
        }

        $input = $this->input;
        $tgl = explode("-", $this->security->xss_clean($input->post("tgl")));
        $awal = date_format(date_create($tgl[0]), "Y-m-d");
        $akhir = date_format(date_create($tgl[1]), "Y-m-d");

        $mdata = array(
            "userid"    => $_SESSION["user_id"],
            "currency"  => $_SESSION["currency"],
            "date_start" => $awal,
            "date_end"  => $akhir,
            "timezone"  => $_SESSION["time_location"]
        );
        $result = apitrackless(URLAPI . "/v1/member/history/getAll", json_encode($mdata));
        $data["history"] = $result->message;
        $response = array(
            "token"     => $this->security->get_csrf_hash(),
            "message"   => utf8_encode($this->load->view('member/history', $data, TRUE))
        );
        echo json_encode($response);
    }

    public function card()
    {   
        $_SESSION["currency"]   = 'EUR';
        $_SESSION["symbol"]     = '&euro;';
        $result = apitrackless(URLAPI . "/v1/member/card/check_card?userid=" . $_SESSION["user_id"]);
        if ($result->message->card=="unavailable"){
            // tampilkan untuk pendaftaran card baru
            
            $mfee = apitrackless(URLAPI . "/v1/admin/fee/getFee?currency=EUR");
            $mcost = apitrackless(URLAPI . "/v1/admin/cost/getCost?currency=EUR");
            $_SESSION["currency"]="EUR";
            
            $card_fee = @$mfee->message->card_fxd;
            $card_cost = @$mcost->message->card_fxd;

            $data=array(
                "title"         => NAMETITLE . " - Card",
                "basecard"      => 'homepage/requestcard',
                "price"         => money_format('%.2n',$card_fee+$card_cost),
                "requestcard"   => base64_decode("cmVxdWVzdGNhcmQ="),
                "extra"         => "member/js/js_index"
            );

            $this->load->view('tamplate/header', $data);
            $this->load->view('member/card/card-request', $data);
            $this->load->view('tamplate/navbar-bottom-back', $data);
            $this->load->view('tamplate/footer', $footer);

        }else{
            // history dan topup
            $data=array(
                "title"         => NAMETITLE . " - Card",
                "basecard"      => 'homepage/card',
                "requestcard"   => base64_decode(@$_GET['requestcard']),
                "extra"         => "member/js/js_index"
            );
            
            $this->load->view('tamplate/header', $data);
            $this->load->view('member/card/card', $data);
            $this->load->view('tamplate/navbar-bottom-back', $data);
            $this->load->view('tamplate/footer', $footer);

        }
        
    }

    public function requestcard()
    {   
        $mfee = apitrackless(URLAPI . "/v1/admin/fee/getFee?currency=EUR");
        $mcost = apitrackless(URLAPI . "/v1/admin/cost/getCost?currency=EUR");

        $card_fee = @$mfee->message->card_fxd;
        $card_cost = @$mcost->message->card_fxd;
        $fee = money_format('%.2n',$card_fee+$card_cost);
        
        $balance=balance($_SESSION["user_id"],'EUR');
        if ($balance<=$fee){
            $this->session->set_flashdata("failed","Insufficient EUR balance");
            redirect ("homepage/card?requestcard=cmVxdWVzdGNhcmQ=");
        }else{
            $data=array(
                "title"         => NAMETITLE . " - Card",
                "basecard"      => 'homepage/requestcard',
                "price"         => money_format('%.2n',$card_fee+$card_cost),
                "card"          => base64_decode($_GET['card']),
                "requestcard"   => base64_decode(@$_GET['requestcard']),
                "extra"         => "member/card/js/js_index"
            );

            $this->load->view('tamplate/header', $data);
            $this->load->view('member/card/card-request', $data);
            $this->load->view('tamplate/navbar-bottom-back', $data);
            $this->load->view('tamplate/footer', $footer);
        }
    }
    
    public function activecard(){
        $this->form_validation->set_rules('telp', 'Phone number', 'trim|required');
        $this->form_validation->set_rules('passwd', '3d secure password', 'trim|required');
        $this->form_validation->set_rules('confpasswd', 'Confirm 3d secure password', 'trim|required|matches[passwd]');
        
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata("failed",validation_errors());
            redirect ("homepage/card?requestcard=YWN0aXZlbm93");
        }
        $input      = $this->input;
        $telp       = $this->security->xss_clean($input->post("telp"));
        $passwd     = $this->security->xss_clean($input->post("passwd"));
        
        $mdata  = array(
            "userid"    => $_SESSION["user_id"],
            "ucode"     => $_SESSION["ucode"],
            "currency"  => 'EUR',
            "phone"     => $telp,
            "3dpass"    => $passwd
        );
        
        $result = apitrackless(URLAPI . "/v1/member/card/activate_card", json_encode($mdata));
        print_r($result);
        die;
        if (@$result->code != "200") {
            $this->session->set_flashdata('failed', $result->message);
            redirect ("homepage/card?requestcard=YWN0aXZlbm93");
            return;
        }    
        
        $data=array(
            "title"         => NAMETITLE . " - Card",
            "basecard"      => 'homepage/requestcard',
            "price"         => money_format('%.2n',$card_fee+$card_cost),
            "card"          => base64_decode($_GET['card']),
            "requestcard"   => 'detailcard',
            "extra"         => "member/card/js/js_index"
        );

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/card/card-request', $data);
        $this->load->view('tamplate/navbar-bottom-back', $data);
        $this->load->view('tamplate/footer', $footer);        
    }
}
