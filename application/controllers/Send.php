<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Send extends CI_Controller
{

    public function mail()
    {
        $user = json_decode(file_get_contents('php://input'), true);

        $message = $this->formBody($user);
        // sendMail( $message);
        echo json_encode(array(
            'status' => 'success',
            'msg' => 'Mail Sent successfully',
            'mailBody' => $message,
        ));
        die();
    }

    private function formBody($data)
    {
        $html = '';
        foreach ($data as $key => $value) {
            $html .= $key . ' : ' . $value . '<br>';
        }
        return $html;
    }

    private function sendMail($message)
    {
        $this->load->library('email');
        $to = 'info@dlgtpl.com';
        $this->email->from('your@example.com', 'Your Name');
        $this->email->to($to);
        $this->email->subject('Email Test');
        $this->email->message($message);

        $this->email->send();
    }

    public function addOrder()
    {
        $order = json_decode(file_get_contents('php://input'), true);

        $message = json_encode($order);
        $this->load->library('email');
        $to = 'info@dlgtpl.com';
        $this->email->from('your@example.com', 'Your Name');
        $this->email->to($to);
        $this->email->subject('Email Test');
        $this->email->message($message);

        $this->email->send();
    }

}
