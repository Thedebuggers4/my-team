<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Kelas basis untuk semua Controller pada aplikasi ini
 * yang berfungsi untuk mendeklarasikan properti umum
 * dan mencegah peringatan creation of dynamic property di PHP 8.1+
 */
class MY_Controller extends CI_Controller {
    // Mendeklarasikan semua properti yang mungkin digunakan controller
    public $db;
    public $session;
    public $form_validation;
    public $m_data;
    public $load;
    public $input;
    public $benchmark;
    public $hooks;
    public $config;
    public $log;
    public $utf8;
    public $uri;
    public $exceptions;
    public $router;
    public $output;
    public $security;
    public $lang;
    
    // Properti tambahan untuk model spesifik
    public $m_peserta;
    public $m_soal;
    public $m_hasil;
    public $m_reset;
    public $dbutil;
    public $mypdf;

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        
        // Preload model yang umum digunakan
        if (!isset($this->m_peserta) && file_exists(APPPATH . 'models/M_peserta.php')) {
            $this->load->model('m_peserta');
        }
        
        if (!isset($this->m_soal) && file_exists(APPPATH . 'models/M_soal.php')) {
            $this->load->model('m_soal');
        }
        
        if (!isset($this->m_hasil) && file_exists(APPPATH . 'models/M_hasil.php')) {
            $this->load->model('m_hasil');
        }
        
        if (!isset($this->m_reset) && file_exists(APPPATH . 'models/M_reset.php')) {
            $this->load->model('m_reset');
        }
        
        // Preload library
        if (!isset($this->mypdf) && file_exists(APPPATH . 'libraries/Mypdf.php')) {
            $this->load->library('mypdf');
        }
        
        if (!isset($this->dbutil)) {
            $this->load->dbutil();
        }
    }
} 