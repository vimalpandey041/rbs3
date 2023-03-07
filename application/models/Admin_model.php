<?php
class Admin_model extends CI_Model{

    public function get_manage_header_data(){
       return $this->db->get('manage_top_header_data')->row_array();
    }
    public function update_manage_header_data($update_top_header){
       $this->db->update('manage_top_header_data',$update_top_header);
    }
    public function add_announcement($add_announcement){
       $this->db->insert('announcement',$add_announcement);
    }

    public function get_heading(){
       return $this->db->get('heading')->row_array();
    }
    public function display_announcement(){
       return $this->db->get('announcement')->result_array();
    }

    public function update_announcement_heading($update_announcement_heading){
      $this->db->update('heading',$update_announcement_heading);
   }
   public function get_manage_director_corner(){
      return $this->db->get('directors_block')->row_array();
   }
   public function update_manage_director_corner($update_manage_director_corner){
     $this->db->update('directors_block',$update_manage_director_corner);
   }
   public function add_director_image($image){
      $data = array();
      $data['director_image'] = $image;
      $this->db->update('directors_block',$data);
   }
   public function get_announcement($userid){
      $this->db->where('uid',$userid);
      return $this->db->get('announcement')->row_array();
   }
   public function update_announcement($userid,$update_announcement){
      $this->db->where('uid',$userid);
      $this->db->update('announcement',$update_announcement);
   }

   public function delete_announcement($userid)
   {
 $this->db->where('uid',$userid);
 $this->db->delete('announcement');
 
   }
   

//About section
   public function get_about(){
      return $this->db->get('about')->row_array();
   }
   
public function update_about($update_about){
   $this->db->update('about',$update_about);
}

//faq
public function add_faq( $add_faq ){
$this->db->insert('faq',$add_faq);
}


public function display_faq(){
return $this->db->get('faq')->result_array();

}

public function update_faq_main_heading($update_faq_main_heading){
$this->db->update('heading',$update_faq_main_heading);
}
public function get_faq($userid){
   $this->db->where('uid',$userid);
   return $this->db->get('faq')->row_array();
}
public function update_faq( $userid,$update_faq ){
   $this->db->where('uid',$userid);
   $this->db->update('faq',$update_faq);
}
 public function delete_faq($userid){
   $this->db->where('uid',$userid);
   $this->db->delete('faq');
   
 }
 public function add_news_events($add_news_events){
   $this->db->insert('news_events',$add_news_events);
}
 public function add_admissions($add_admissions){
   $this->db->insert('admissions',$add_admissions);
}
 public function add_notices($add_notices){
   $this->db->insert('notices',$add_notices);
}
public function display_news_events(){
   return $this->db->get('news_events')->result_array();
}

public function update_news_events_heading($update_news_events_heading){
  $this->db->update('heading',$update_news_events_heading);
}
public function display_notices(){
   return $this->db->get('notices')->result_array();
}

public function update_notices_heading($update_notices_heading){
  $this->db->update('heading',$update_notices_heading);
}
public function display_admissions(){
   return $this->db->get('admissions')->result_array();
}

public function update_admissions_heading($update_admissions_heading){
  $this->db->update('heading',$update_admissions_heading);
}
public function get_news_events($userid){
   $this->db->where('uid',$userid);
   return $this->db->get('news_events')->row_array();
}
public function update_news_events($userid,$update_news_events){
   $this->db->where('uid',$userid);
   $this->db->update('news_events',$update_news_events);
}

public function delete_news_events($userid)
{
$this->db->where('uid',$userid);
$this->db->delete('news_events');

}
public function get_notices($userid){
   $this->db->where('uid',$userid);
   return $this->db->get('notices')->row_array();
}
public function update_notices($userid,$update_notices){
   $this->db->where('uid',$userid);
   $this->db->update('notices',$update_notices);
}

public function delete_notices($userid)
{
$this->db->where('uid',$userid);
$this->db->delete('notices');

}
public function get_admissions($userid){
   $this->db->where('uid',$userid);
   return $this->db->get('admissions')->row_array();
}
public function update_admissions($userid,$update_admissions){
   $this->db->where('uid',$userid);
   $this->db->update('admissions',$update_admissions);
}

public function delete_admissions($userid)
{
$this->db->where('uid',$userid);
$this->db->delete('admissions');

}


//footer
public function add_footer_block_1($add_footer_block_1){
   $this->db->insert('footer_block_1',$add_footer_block_1);
}
public function add_footer_block_2($add_footer_block_2){
   $this->db->insert('footer_block_2',$add_footer_block_2);
}
   

public function display_footer_block_1(){
   return $this->db->get('footer_block_1')->result_array();
}
public function display_footer_block_2(){

   return $this->db->get('footer_block_2')->result_array();


}

public function update_manage_footer($update_manage_footer){
  
   $this->db->update('manage_footer',$update_manage_footer);

} 

public function get_manage_footer(){
   return $this->db->get('manage_footer')->row_array();

}
public function get_footer_block_1($userid){
   $this->db->where('uid',$userid);
   return $this->db->get('footer_block_1')->row_array();
}
public function update_footer_block_1($userid,$update_footer_block_1){
   $this->db->where('uid',$userid);
   $this->db->update('footer_block_1',$update_footer_block_1);
}

public function delete_footer_block_1($userid)
{
$this->db->where('uid',$userid);
$this->db->delete('footer_block_1');

}
public function get_footer_block_2($userid){
   $this->db->where('uid',$userid);
   return $this->db->get('footer_block_2')->row_array();
}
public function update_footer_block_2($userid,$update_footer_block_2){
   $this->db->where('uid',$userid);
   $this->db->update('footer_block_2',$update_footer_block_2);
}

public function delete_footer_block_2($userid)
{
$this->db->where('uid',$userid);
$this->db->delete('footer_block_2');

}
public function edit_footer_image($image){
   $data = array();
   $data['footer_image'] = $image;
   $this->db->update('manage_footer',$data);
}

// important person

public function add_person($image,$add_person_name,$add_person_post){
   $data = array();
   $data['person_image'] = $image;
   $data['person_name'] = $add_person_name;
   $data['person_post'] = $add_person_post;
   $this->db->insert('person_data',$data);
}

public function display_person_data(){
   return $this->db->get('person_data')->result_array();
}
public function get_person_data($userid){
   $this->db->where('uid',$userid);
   return $this->db->get('person_data')->row_array();
}

public function edit_person($user_id,$edit_person){
   $this->db->where('uid',$user_id);
   $this->db->update('person_data',$edit_person);
}
public function delete_person($user_id){
   $this->db->where('uid',$user_id);
   $this->db->delete('person_data');
}
public function get_person_data_image($user_id){
   $this->db->where('uid',$user_id);
   return $this->db->get('person_data')->row_array();
}
public function update_person_image($user_id,$image){
  
   $data = array();  
   $data['person_image'] = $image;
   $this->db->where('uid',$user_id);
   $this->db->insert('person_data',$data);
}
}



?>