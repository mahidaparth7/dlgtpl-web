<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->template('home');
    }
    public function cableTV()
    {
        $this->load->template('television/cable-tv');
    }
    public function dlgtplChannels()
    {
        $this->load->template('television/dlgtpl-channels');
    }
    public function packages()
    {
        $this->load->template('television/packages');
    }
    public function faqs()
    {
        $this->load->template('television/faq');
    }
    public function broadbandPlans()
    {
        $this->load->template('broadband/view-plans');
    }
    public function broadbandPlanOffer()
    {
        $this->load->template('broadband/offer');
    }
    public function aboutUs()
    {
        $this->load->template('know-us/about-us');
    }
    public function partners()
    {
        $this->load->template('know-us/partners');
    }
    public function bod()
    {
        $this->load->template('know-us/board-of-directors');
    }
    public function registerQuery()
    {
        $this->load->template('support/register-query');
    }
    public function grievanceRedressal()
    {
        $this->load->template('support/grievance-redressal');
    }
    public function careers()
    {
        $this->load->template('careers');
    }
    public function contactUs()
    {
        $this->load->template('contact-us');
    }
    public function termsAndCondition()
    {
        $this->load->template('terms-and-conditions');
    }
    public function privacyPolicy()
    {
        $this->load->template('privacy-policy');
    }
    public function compliance()
    {
        $this->load->template('compliance');
    }
    private function sendMail()
    {
        $this->load->library('email');
        $to = 'info@dlgtpl.com';
        $this->email->from('your@example.com', 'Your Name');
        $this->email->to($to);
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();
    }
}
