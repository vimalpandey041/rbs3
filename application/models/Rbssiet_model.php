<?php 

class Rbssiet_model extends CI_Model{
    public function get_manage_header_data(){
        return $this->db->get('manage_top_header_data')->row_array();
     } 
     public function get_heading(){
        return $this->db->get('heading')->row_array();
     }
     public function display_announcement(){
        return $this->db->get('announcement')->result_array();
     }

     public function get_about(){
        return $this->db->get('about')->row_array();
     }
     public function display_faq(){
      return $this->db->get('faq')->result_array();
      
      }
      public function get_manage_director_corner(){
         return $this->db->get('directors_block')->row_array();
      }
      public function display_admissions(){
         return $this->db->get('admissions')->result_array();
      }
      public function display_notices(){
         return $this->db->get('notices')->result_array();
      }
      public function display_news_events(){
         return $this->db->get('news_events')->result_array();
      }

      public function get_manage_footer(){
         return $this->db->get('manage_footer')->row_array();
      
}
public function display_footer_block_1(){
   return $this->db->get('footer_block_1')->result_array();
}
public function display_footer_block_2(){

   return $this->db->get('footer_block_2')->result_array();

   
}
public function display_person_data(){
   return $this->db->get('person_data')->result_array();
}
}
?>