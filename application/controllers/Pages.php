<?php
/*********************
Name: Michael Brady
Intermediate Web Programming
Purpose: This web application uses the CodeIgniter framework to display and create news headlines and articles.
**********************/
defined('BASEPATH') OR exit('Forbidden');
class Pages extends CI_Controller {

        public function view($page = 'home')
        {
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }

            $data['jQuery'] = '';
            $data['js'] = '';
            $data['api'] = '';
    
            if($page == 'home'){
                $data['title'] = 'News Today';
                $data['js'] = '<script src="../../../assets/js/map.js"></script>';
                $data['api'] = '<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIHq38iGwVT-R_jlJk2cLNJALidKwoIS0&callback=initMap" async defer></script>';
            }else if($page == 'contact'){
                $data['jQuery'] = '<script src="../../../assets/js/jquery.min.js"></script>';
                $data['js'] = '<script src="../../../assets/js/main.js"></script>';
                $data['title'] = ucfirst($page);
            }else{
                $data['title'] = ucfirst($page); // Capitalize the first letter
            }
            
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);
        }
}