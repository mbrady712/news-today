<!---------------------
Name: Michael Brady
Intermediate Web Programming
Purpose: This web application uses the CodeIgniter framework to display and create news headlines and articles.
--------------------->  
<?php
class Ajax extends CI_Controller {

    public function processemail() {

        $to = "michael.brady3@g.austincc.edu";

        // make sure caller is an ajax request
        if ($this->input->is_ajax_request()){

            //Strip tags and trim data
            $name = strip_tags(trim($this->input->post('name')));
            $from = strip_tags(trim($this->input->post('email')));
            $subject = strip_tags(trim($this->input->post('subject')));
            $message = strip_tags(trim($this->input->post('message')));

            //Validate email
            $from = filter_var($from, FILTER_VALIDATE_EMAIL);
    
            //Send email
            if (!empty($name) && !empty($from) && !empty($subject) && !empty($message)) {
                
                $headers = "From: $from\r\n";
                $headers .= "Reply-To: $from\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

                if (mail($to,$subject,$message,$headers)) {
                    echo "okay";
                } else {
                    echo "error";
                }
            } else {
                echo "error";
            }
        } else {
            echo "";
        }
    }

    public function index() {
        echo "";
    }
}