<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Link extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function lern_reward()
    {
        $data = array(
            "title"     => NAMETITLE . " - Lern Get Reward",
            "content"   => "auth/landingpage/lern_reward",
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function translate()
    {
        $data = array(
            "title"     => NAMETITLE . " - Work with us",
            "content"   => "auth/landingpage/translate",
            // "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function utilities()
    {
        $utilities = base64_decode($_GET['utilities']);

        $data = array(
            "title"     => NAMETITLE . " - Work with us",
            "content"   => "auth/landingpage/utilities",
            "utilities"   => $utilities,
            // "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function service()
    {
        $service = base64_decode($_GET['service']);
        $data = array(
            "title"     => NAMETITLE . " - Work with us",
            "content"   => "auth/landingpage/service",
            "service"   => $service,
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function features()
    {
        $features = base64_decode($_GET['features']);

        $data = array(
            "title"     => NAMETITLE . " - Features",
            "content"   => "auth/landingpage/features",
            "features"   => $features,
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function lern_transparency()
    {
        $url = URLAPI . "/v1/trackless/currency/getAllCurrency";
        $currency   = apitrackless($url)->message;

        $data = array(
            "title"     => NAMETITLE . "",
            "content"   => "auth/landingpage/lern-transparency",
            "currency"   => $currency,
            // "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function price_currency()
    {
        $curr = $_GET['currency'];
        $url_cost = URLAPI . "/v1/admin/cost/getCost?currency=" . $curr;
        $url_fee = URLAPI . "/v1/admin/fee/getFee?currency=" . $curr;
        $url_curr = URLAPI . "/v1/trackless/currency/getAllCurrency";
        $cost   = apitrackless($url_cost);
        $fee   = apitrackless($url_fee);
        $currency   = apitrackless($url_curr)->message;

        $mdatacost = array();
        if (@$cost->code == 5052) {
            $mdatacost = array(
                "topup_circuit_fxd" => 0,
                "topup_circuit_pct" => 0,
                "topup_outside_fxd" => 0,
                "topup_outside_pct" => 0,
                "wallet_sender_fxd" => 0,
                "wallet_sender_pct" => 0,
                "wallet_receiver_fxd" => 0,
                "wallet_receiver_pct" => 0,
                "walletbank_circuit_fxd" => 0,
                "walletbank_circuit_pct" => 0,
                "walletbank_outside_fxd" => 0,
                "walletbank_outside_pct" => 0,
            );
        } else {
            $mdatacost = array(
                "topup_circuit_fxd" => $cost->message->topup_circuit_fxd,
                "topup_circuit_pct" => $cost->message->topup_circuit_pct * 100,
                "topup_outside_fxd" => $cost->message->topup_outside_fxd,
                "topup_outside_pct" => $cost->message->topup_outside_pct * 100,
                "wallet_sender_fxd" => $cost->message->wallet_sender_fxd,
                "wallet_sender_pct" => $cost->message->wallet_sender_pct * 100,
                "wallet_receiver_fxd" => $cost->message->wallet_receiver_fxd,
                "wallet_receiver_pct" => $cost->message->wallet_receiver_pct * 100,
                "walletbank_circuit_fxd" => $cost->message->walletbank_circuit_fxd,
                "walletbank_circuit_pct" => $cost->message->walletbank_circuit_pct * 100,
                "walletbank_outside_fxd" => $cost->message->walletbank_outside_fxd,
                "walletbank_outside_pct" => $cost->message->walletbank_outside_pct * 100,
            );
        }

        $mdatafee = array();
        if (@$fee->code == 5052) {
            $mdatafee = array(
                "topup_circuit_fxd" => 0,
                "topup_circuit_pct" => 0,
                "topup_outside_fxd" => 0,
                "topup_outside_pct" => 0,
                "wallet_sender_fxd" => 0,
                "wallet_sender_pct" => 0,
                "wallet_receiver_fxd" => 0,
                "wallet_receiver_pct" => 0,
                "walletbank_circuit_fxd" => 0,
                "walletbank_circuit_pct" => 0,
                "walletbank_outside_fxd" => 0,
                "walletbank_outside_pct" => 0,
                "referral_send_fxd" => 0,
                "referral_send_pct" => 0,
                "referral_receive_fxd" => 0,
                "referral_receive_pct" => 0,
                "referral_topup_fxd" => 0,
                "referral_topup_pct" => 0,
                "referral_bank_fxd" => 0,
                "referral_bank_pct" => 0,
            );
        } else {
            $mdatafee = array(
                "topup_circuit_fxd" => $fee->message->topup_circuit_fxd,
                "topup_circuit_pct" => $fee->message->topup_circuit_pct * 100,
                "topup_outside_fxd" => $fee->message->topup_outside_fxd,
                "topup_outside_pct" => $fee->message->topup_outside_pct * 100,
                "wallet_sender_fxd" => $fee->message->wallet_sender_fxd,
                "wallet_sender_pct" => $fee->message->wallet_sender_pct * 100,
                "wallet_receiver_fxd" => $fee->message->wallet_receiver_fxd,
                "wallet_receiver_pct" => $fee->message->wallet_receiver_pct * 100,
                "walletbank_circuit_fxd" => $fee->message->walletbank_circuit_fxd,
                "walletbank_circuit_pct" => $fee->message->walletbank_circuit_pct * 100,
                "walletbank_outside_fxd" => $fee->message->walletbank_outside_fxd,
                "walletbank_outside_pct" => $fee->message->walletbank_outside_pct * 100,
                "referral_send_fxd" => $fee->message->referral_send_fxd,
                "referral_send_pct" => $fee->message->referral_send_pct * 100,
                "referral_receive_fxd" => $fee->message->referral_receive_fxd,
                "referral_receive_pct" => $fee->message->referral_receive_pct * 100,
                "referral_topup_fxd" => $fee->message->referral_topup_fxd,
                "referral_topup_pct" => $fee->message->referral_topup_pct * 100,
                "referral_bank_fxd" => $fee->message->referral_bank_fxd,
                "referral_bank_pct" => $fee->message->referral_bank_pct * 100,
            );
        }

        $data = array(
            "title"     => NAMETITLE . "",
            "content"   => "auth/landingpage/currency-list-price",
            "getcurrency"   => $curr,
            "currency"   => $currency,
            "cost"   => $mdatacost,
            "fee"   => $mdatafee,
            // "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function mailproses()
    {
        // $this->form_validation->set_rules('email', 'Email', 'trim|required');

        // if ($this->form_validation->run() == FALSE) {
        //     $this->session->set_flashdata('failed', validation_errors());
        //     redirect(base_url('#contactus'));
        //     return;
        // }

        // $input        = $this->input;
        // $email   = $this->security->xss_clean($input->post("email"));

        // $result = $this->send_email($email);
        // if ($result) {
        //     $this->session->set_flashdata("success", "Message successfully sent!");
        //     redirect(base_url('#contactus'));
        //     return;
        // } else {
        //     $this->session->set_flashdata("failed", 'Message failed to send!');
        //     redirect(base_url('#contactus'));
        //     return;
        // }

        $this->form_validation->set_rules('ucode', 'Ucode', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('failed', validation_errors());
            redirect(base_url("#contactus"));
            return;
        }

        $input        = $this->input;
        $ucode   = $this->security->xss_clean($input->post("ucode"));
        $email   = $this->security->xss_clean($input->post("email"));
        $message   = $this->security->xss_clean($input->post("message"));

        $result = send_email($email, $message, $this->phpmailer_lib->load());
        if ($result) {
            $this->session->set_flashdata("success", "Message successfully sent!");
            redirect(base_url("#contactus"));
        } else {
            $this->session->set_flashdata("failed", 'Message failed to send!');
            redirect(base_url("#contactus"));
        }
    }
    
    public function send_message()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('failed', validation_errors());
            redirect(base_url('#contactus'));
            return;
        }
        
        $input        = $this->input;
        $email   = $this->security->xss_clean($input->post("email"));

        $data = array(
            "title"     => NAMETITLE . " - Send Message",
            "content"   => "auth/landingpage/message",
            "extra"     => "auth/landingpage/js/js_index",
            "email"     => $email,
        );

        $this->load->view('tamplate/wrapper', $data);
    }
    
    public function check_ucode()
    {
        $ucode = $_GET['ucode'];
        $url = URLAPI . "/v1/auth/getmember_byucode?ucode=" . $ucode;
        $result   = apitrackless($url);

        $mdata = array();
        if (@$result->code == 200) {
            $mdata = array(
                "type" => 'show',
                "url" => $url,
            );
        } else {
            $mdata = array(
                "type" => 'hide',
                "url" => $url
            );
        }

        echo json_encode($mdata);
    }

    public function about()
    {
        $data = array(
            "title"     => NAMETITLE . " - About Piggybank",
            "content"   => "auth/landingpage/aboutus",
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }
    public function soon()
    {
        $data = array(
            "title"     => NAMETITLE . " - Coming Soon",
            "content"   => "auth/landingpage/soon",
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }
}