<?php 

class Rbssiet extends CI_Controller{

    public function index(){
      $display_top_header  = $this->Rbssiet_model->get_manage_header_data();
      $get_heading  = $this->Rbssiet_model->get_heading();
      $get_about  = $this->Rbssiet_model->get_about();
      $display_announcement  = $this->Rbssiet_model->display_announcement();
      $display_faq  = $this->Rbssiet_model->display_faq();
      $get_manage_director_corner  = $this->Rbssiet_model->get_manage_director_corner();
      $display_admissions  = $this->Rbssiet_model->display_admissions();
      $display_notices  = $this->Rbssiet_model->display_notices();
      $display_news_events  = $this->Rbssiet_model->display_news_events();
      $get_manage_footer  = $this->Rbssiet_model->get_manage_footer();
      $display_footer_block_1  = $this->Rbssiet_model->display_footer_block_1();
      $display_footer_block_2  = $this->Rbssiet_model->display_footer_block_2();
      $display_person_data  = $this->Rbssiet_model->display_person_data();
      $data = array();
      $data['display_top_header'] = $display_top_header;
      $data['get_heading'] = $get_heading;
      $data['get_about'] = $get_about;
      $data['display_announcement'] = $display_announcement;
      $data['display_faq'] = $display_faq;
      $data['get_manage_director_corner'] = $get_manage_director_corner;
      $data['display_admissions'] = $display_admissions;
      $data['display_notices'] = $display_notices;
      $data['display_news_events'] = $display_news_events;
      $data['get_manage_footer'] = $get_manage_footer;
      $data['display_footer_block_1'] = $display_footer_block_1;
      $data['display_footer_block_2'] = $display_footer_block_2;
      $data['display_person_data'] = $display_person_data;

        $this->load->view('inc/header',$data);
        $this->load->view('index',$data);
        $this->load->view('inc/footer',$data);
    }
}
?>