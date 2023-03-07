<?php
class Admin extends CI_Controller{
public function index(){
$this->load->view('admin/dashboard');
}
public function manage_top_header(){
    $top_header_data = $this->Admin_model->get_manage_header_data();
    $data = array();
    $data['top_header_data'] = $top_header_data;
    $this->form_validation->set_rules('number','number','required');
    $this->form_validation->set_rules('email','email','required');
    $this->form_validation->set_rules('facebook','facebook');
    $this->form_validation->set_rules('twitter','twitter');
    $this->form_validation->set_rules('instagram','instagram');
    $this->form_validation->set_rules('linkedin','linkedin');

    if($this->form_validation->run() == false){
        $this->load->view('admin/manage_top_header',$data);
    }
    else{
        $update_top_header = array();
        $update_top_header['number'] = $this->input->post('number');
        $update_top_header['email'] = $this->input->post('email');
        $update_top_header['facebook'] = $this->input->post('facebook');
        $update_top_header['twitter'] = $this->input->post('twitter');
        $update_top_header['instagram'] = $this->input->post('instagram');
        $update_top_header['linkedin'] = $this->input->post('linkedin');
        $this->Admin_model->update_manage_header_data($update_top_header);
        $this->session->set_flashdata('success','Data Updated Successfully');
        Redirect(base_url('manage_top_header'));
    }

}
public function add_announcement(){
$this->form_validation->set_rules('announcement_name','announcement_name','Required');
$this->form_validation->set_rules('announcement_url','announcement_url','Required');

if($this->form_validation->run()==false)

   { $this->load->view('admin/add_announcement');

}
else{
 $add_announcement = array();
 $add_announcement['announcement_name'] = $this->input->post('announcement_name');
 $add_announcement['announcement_url'] = $this->input->post('announcement_url');
$this->Admin_model->add_announcement($add_announcement);
$this->session->set_flashdata('success','Data Updated Successfully');
        Redirect(base_url('admin/add_announcement'));
}

}
public function manage_announcement(){
  $display_announcement =  $this->Admin_model->display_announcement();
  $get_heading =  $this->Admin_model->get_heading();
  $data = array();
  $data['display_announcement'] = $display_announcement;
  $data['get_heading'] = $get_heading;
  $this->form_validation->set_rules('announcement_heading','announcement_heading','Required');



if($this->form_validation->run()==false)

   {
    $this->load->view('admin/manage_announcement',$data);
}
else{
 $update_announcement_heading = array();
 $update_announcement_heading['announcement_heading'] = $this->input->post('announcement_heading');
$this->Admin_model->update_announcement_heading($update_announcement_heading);
$this->session->set_flashdata('success','Data Updated Successfully');
        Redirect(base_url('admin/manage_announcement'));
}
  
    


}

public function manage_director_corner(){
    $get_manage_director_corner = $this->Admin_model->get_manage_director_corner();
    $data = array();
    $data['get_manage_director_corner'] = $get_manage_director_corner;
    $this->form_validation->set_rules('first_heading','first_heading','Required');
    $this->form_validation->set_rules('second_heading','second_heading','Required');
    $this->form_validation->set_rules('director_data','director_data','Required');
    $this->form_validation->set_rules('director_name','director_name','Required');
    $this->form_validation->set_rules('director_url','director_url','Required');

if($this->form_validation->run()==false)

   { 

    $this->load->view('admin/manage_director_corner',$data);

}
else{
 $update_manage_director_corner = array();
 $update_manage_director_corner['first_heading'] = $this->input->post('first_heading');
 $update_manage_director_corner['second_heading'] = $this->input->post('second_heading');
 $update_manage_director_corner['director_data'] = $this->input->post('director_data');
 $update_manage_director_corner['director_name'] = $this->input->post('director_name');
 $update_manage_director_corner['director_url'] = $this->input->post('director_url');
$this->Admin_model->update_manage_director_corner($update_manage_director_corner);
$this->session->set_flashdata('success','Data Updated Successfully');
        Redirect(base_url('admin/manage_director_corner'));
    
}
}
 public function edit_announcement($userid){
    $get_announcement = $this->Admin_model->get_announcement($userid);
    $data = array();
    $data['get_announcement'] = $get_announcement;
    $this->form_validation->set_rules('announcement_name','announcement_name','Required');
$this->form_validation->set_rules('announcement_url','announcement_url','Required');

if($this->form_validation->run()==false)

   { 
    $this->load->view('admin/edit_announcement',$data);

}
else{
 $update_announcement = array();
 $update_announcement['announcement_name'] = $this->input->post('announcement_name');
 $update_announcement['announcement_url'] = $this->input->post('announcement_url');
$this->Admin_model->update_announcement($userid,$update_announcement);
$this->session->set_flashdata('success','Data Updated Successfully');
        Redirect(base_url('admin/manage_announcement'));
}

    

}
public function edit_director(){
    if($this->input->post('submit')){
        $config['upload_path'] = './uploads/img/faculty/';
        $config['allowed_types'] = 'jpeg|gif|jpg|png';
        $config['max_size'] = 200000;
        $this->load->library('upload',$config);

        if(! $this->upload->do_upload('director_image')){
            $this->upload->display_errors('<p>','</p>');
        }
        else{
            $data = $this->upload->data();
            $image = $data['file_name'];
            $config['source_image'] = './uploads/img/faculty/'.$image;

            $this->load->library('image_lib',$config);
            $this->image_lib->resize();
            $this->Admin_model->add_director_image($image);
            redirect(base_url('admin/manage_director_corner'));
        }
    }
    $this->load->view('admin/edit_director');
}

public function delete_announcement($userid){
    $this->Admin_model->delete_announcement($userid);
    $this->session->set_flashdata('success','Data Deleted Successfully!');
        Redirect(base_url('admin/manage_announcement'));
}


public function manage_about(){
    
  $get_about =  $this->Admin_model->get_about();
  $data = array();
  
  $data['get_about'] = $get_about;
  $this->form_validation->set_rules('first_heading','first_heading','Required');
  $this->form_validation->set_rules('second_heading','second_heading','Required');
  $this->form_validation->set_rules('about_data','about_data','Required');
  $this->form_validation->set_rules('about_url','about_url','Required');


if($this->form_validation->run()==false)

   {
    $this->load->view('admin/manage_about',$data);
}
else{
 $update_about = array();
 $update_about['first_heading'] = $this->input->post('first_heading');
 $update_about['second_heading'] = $this->input->post('second_heading');
 $update_about['about_data'] = $this->input->post('about_data');
 $update_about['about_url'] = $this->input->post('about_url');
$this->Admin_model->update_about($update_about);
$this->session->set_flashdata('success','Data Updated Successfully');
        Redirect(base_url('admin/manage_about'));
}
    
   
}

//faq
public function add_faq(){
    $this->form_validation->set_rules('faq_heading','faq_heading','Required');
    $this->form_validation->set_rules('faq_data','faq_data','Required');


    if($this->form_validation->run()==false){
    $this->load->view('admin/add_faq');
    }
    else{
        
        $add_faq = array();
        $add_faq['faq_heading'] = $this->input->post('faq_heading');
        $add_faq['faq_data'] = $this->input->post('faq_data');
        $this->Admin_model->add_faq( $add_faq );
        $this->session->set_flashdata('success','Added successfully!');
        redirect(base_url('admin/add_faq'));


    }
}
 public function manage_faq(){
    $get_heading = $this->Admin_model->get_heading();
    $display_faq = $this->Admin_model->display_faq();
    $data = array();
    $data['get_heading'] = $get_heading;
    $data['display_faq'] = $display_faq;

    $this->form_validation->set_rules('faq_heading','faq_heading','Required');
    if($this->form_validation->run() ==false ){
        $this->load->view('admin/manage_faq', $data);  
    }
    else{
$update_faq_main_heading = array();
$update_faq_main_heading['faq_heading'] = $this->input->post('faq_heading');
$this->Admin_model->update_faq_main_heading($update_faq_main_heading);
$this->session->set_flashdata('success','Updated successfully!');
redirect(base_url('admin/manage_faq'));

    }


    
 }
  public function edit_faq($userid){
    $get_faq = $this->Admin_model->get_faq($userid);
    $data = array();
    $data['get_faq'] = $get_faq;
    $this->form_validation->set_rules('faq_heading','faq_heading','Required');
    $this->form_validation->set_rules('faq_data','faq_data','Required');


    if($this->form_validation->run()==false){
        $this->load->view('admin/edit_faq', $data);
    }
    else{
        
        $update_faq = array();
        $update_faq['faq_heading'] = $this->input->post('faq_heading');
        $update_faq['faq_data'] = $this->input->post('faq_data');
        $this->Admin_model->update_faq( $userid,$update_faq );
        $this->session->set_flashdata('success','updated successfully!');
        redirect(base_url('admin/manage_faq'));


    }

   
  }
 public function delete_faq($userid){
        $this->Admin_model->delete_faq($userid);
        $this->session->set_flashdata('success','deleted successfully!');
        redirect(base_url('admin/manage_faq'));
 }

 public function add_news_events(){
    $this->form_validation->set_rules('news_events_name','news_events_name','Required');
    $this->form_validation->set_rules('news_events_url','news_events_url','Required');
    
    if($this->form_validation->run()==false)
    
       { $this->load->view('admin/add_news_events');
    
    }
    else{
     $add_news_events = array();
     $add_news_events['news_events_name'] = $this->input->post('news_events_name');
     $add_news_events['news_events_url'] = $this->input->post('news_events_url');
    $this->Admin_model->add_news_events($add_news_events);
    $this->session->set_flashdata('success','Data Updated Successfully');
            Redirect(base_url('admin/add_news_events'));
    }
    
    }
 public function add_admissions(){
    $this->form_validation->set_rules('admissions_name','admissions_name','Required');
    $this->form_validation->set_rules('admissions_url','admissions_url','Required');
    
    if($this->form_validation->run()==false)
    
       { $this->load->view('admin/add_admissions');
    
    }
    else{
     $add_admissions = array();
     $add_admissions['admissions_name'] = $this->input->post('admissions_name');
     $add_admissions['admissions_url'] = $this->input->post('admissions_url');
    $this->Admin_model->add_admissions($add_admissions);
    $this->session->set_flashdata('success','Data Updated Successfully');
            Redirect(base_url('admin/add_admissions'));
    }
    
    }
 public function add_notices(){
    $this->form_validation->set_rules('notices_name','notices_name','Required');
    $this->form_validation->set_rules('notices_url','notices_url','Required');
    
    if($this->form_validation->run()==false)
    
       { $this->load->view('admin/add_notices');
    
    }
    else{
     $add_notices = array();
     $add_notices['notices_name'] = $this->input->post('notices_name');
     $add_notices['notices_url'] = $this->input->post('notices_url');
    $this->Admin_model->add_notices($add_notices);
    $this->session->set_flashdata('success','Data Updated Successfully');
            Redirect(base_url('admin/add_notices'));
    }
    
    }
    public function manage_news_events(){
        $display_news_events =  $this->Admin_model->display_news_events();
        $get_heading =  $this->Admin_model->get_heading();
        $data = array();
        $data['display_news_events'] = $display_news_events;
        $data['get_heading'] = $get_heading;
        $this->form_validation->set_rules('news_events_heading','news_events_heading','Required');
      
      
      
      if($this->form_validation->run()==false)
      
         {
          $this->load->view('admin/manage_news_events',$data);
      }
      else{
       $update_news_events_heading = array();
       $update_news_events_heading['news_events_heading'] = $this->input->post('news_events_heading');
      $this->Admin_model->update_news_events_heading($update_news_events_heading);
      $this->session->set_flashdata('success','Data Updated Successfully');
              Redirect(base_url('admin/manage_news_events'));
      }
        
          
      
      
      }
    public function manage_notices(){
        $display_notices =  $this->Admin_model->display_notices();
        $get_heading =  $this->Admin_model->get_heading();
        $data = array();
        $data['display_notices'] = $display_notices;
        $data['get_heading'] = $get_heading;
        $this->form_validation->set_rules('notices_heading','notices_heading','Required');
      
      
      
      if($this->form_validation->run()==false)
      
         {
          $this->load->view('admin/manage_notices',$data);
      }
      else{
       $update_notices_heading = array();
       $update_notices_heading['notices_heading'] = $this->input->post('notices_heading');
      $this->Admin_model->update_notices_heading($update_notices_heading);
      $this->session->set_flashdata('success','Data Updated Successfully');
              Redirect(base_url('admin/manage_notices'));
      }
        
          
      
      
      }
    public function manage_admissions(){
        $display_admissions =  $this->Admin_model->display_admissions();
        $get_heading =  $this->Admin_model->get_heading();
        $data = array();
        $data['display_admissions'] = $display_admissions;
        $data['get_heading'] = $get_heading;
        $this->form_validation->set_rules('admissions_heading','admissions_heading','Required');
        $this->form_validation->set_rules('vimal','vimal','Required');
      
      
      
      if($this->form_validation->run()==false)
      
         {
          $this->load->view('admin/manage_admissions',$data);
      }
      else{
       $update_admissions_heading = array();
       $update_admissions_heading['admissions_heading'] = $this->input->post('admissions_heading');
       $update_admissions_heading['vimal'] = $this->input->post('vimal');
      $this->Admin_model->update_admissions_heading($update_admissions_heading);
      $this->session->set_flashdata('success','Data Updated Successfully');
              Redirect(base_url('admin/manage_admissions'));
      }
        
          
      
      
      }
      public function edit_news_events($userid){
        $get_news_events = $this->Admin_model->get_news_events($userid);
        $data = array();
        $data['get_news_events'] = $get_news_events;
        $this->form_validation->set_rules('news_events_name','news_events_name','Required');
    $this->form_validation->set_rules('news_events_url','news_events_url','Required');
    
    if($this->form_validation->run()==false)
    
       { 
        $this->load->view('admin/edit_news_events',$data);
    
    }
    else{
     $update_news_events = array();
     $update_news_events['news_events_name'] = $this->input->post('news_events_name');
     $update_news_events['news_events_url'] = $this->input->post('news_events_url');
    $this->Admin_model->update_news_events($userid,$update_news_events);
    $this->session->set_flashdata('success','Data Updated Successfully');
            Redirect(base_url('admin/manage_news_events'));
    }
    
        
    
    }
      public function edit_notices($userid){
        $get_notices = $this->Admin_model->get_notices($userid);
        $data = array();
        $data['get_notices'] = $get_notices;
        $this->form_validation->set_rules('notices_name','notices_name','Required');
    $this->form_validation->set_rules('notices_url','notices_url','Required');
    
    if($this->form_validation->run()==false)
    
       { 
        $this->load->view('admin/edit_notices',$data);
    
    }
    else{
     $update_notices = array();
     $update_notices['notices_name'] = $this->input->post('notices_name');
     $update_notices['notices_url'] = $this->input->post('notices_url');
    $this->Admin_model->update_notices($userid,$update_notices);
    $this->session->set_flashdata('success','Data Updated Successfully');
            Redirect(base_url('admin/manage_notices'));
    }
    
        
    
    }
      public function edit_admissions($userid){
        $get_admissions = $this->Admin_model->get_admissions($userid);
        $data = array();
        $data['get_admissions'] = $get_admissions;
        $this->form_validation->set_rules('admissions_name','admissions_name','Required');
    $this->form_validation->set_rules('admissions_url','admissions_url','Required');
    
    if($this->form_validation->run()==false)
    
       { 
        $this->load->view('admin/edit_admissions',$data);
    
    }
    else{
     $update_admissions = array();
     $update_admissions['admissions_name'] = $this->input->post('admissions_name');
     $update_admissions['admissions_url'] = $this->input->post('admissions_url');
    $this->Admin_model->update_admissions($userid,$update_admissions);
    $this->session->set_flashdata('success','Data Updated Successfully');
            Redirect(base_url('admin/manage_admissions'));
    }
    
        
    
    }
    public function delete_news_events($userid){
        $this->Admin_model->delete_news_events($userid);
        $this->session->set_flashdata('success','Data Deleted Successfully!');
            Redirect(base_url('admin/manage_news_events'));
    }
    public function delete_notices($userid){
        $this->Admin_model->delete_notices($userid);
        $this->session->set_flashdata('success','Data Deleted Successfully!');
            Redirect(base_url('admin/manage_notices'));
    }
    public function delete_admissions($userid){
        $this->Admin_model->delete_admissions($userid);
        $this->session->set_flashdata('success','Data Deleted Successfully!');
            Redirect(base_url('admin/manage_admissions'));
    }

// important persons

    public function add_person(){
        if($this->input->post('submit')){
            $add_person_name = $this->input->post('person_name');
            $add_person_post = $this->input->post('person_post');
            $config['upload_path'] = './uploads/img/important_persons/';
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_size'] = 200000;
            $this->load->library('upload',$config);
    
            if(! $this->upload->do_upload('person_image')){
                $this->upload->display_errors('<p>','</p>');
            }
            else{
                $data = $this->upload->data();
                $image = $data['file_name'];
                $config['source_image'] = './uploads/img/important_persons/'.$image;
    
                $this->load->library('image_lib',$config);
                $this->image_lib->resize();
                $this->Admin_model->add_person($image,$add_person_name,$add_person_post);
                $this->session->set_flashdata('success','Data Added Successfully!');
                redirect(base_url('admin/add_person'));
            }
        }
        $this->load->view('admin/add_person');
     
    }
    public function manage_persons(){
        $display_person_data =  $this->Admin_model->display_person_data();
        $data = array();
        $data['display_person_data'] = $display_person_data; 
        $this->load->view('admin/manage_persons',$data);
    }
    public function edit_person($user_id){
        $get_person_data =  $this->Admin_model->get_person_data($user_id);
        $data = array();
        $data['get_person_data'] = $get_person_data; 
        $this->form_validation->set_rules('person_name','person_name','required');
        $this->form_validation->set_rules('person_post','person_post','required');
        if($this->form_validation->run()== false){
            $this->load->view('admin/edit_person',$data);
        }
        else{
            $edit_person = array();
            $edit_person['person_name'] = $this->input->post('person_name');
            $edit_person['person_post'] = $this->input->post('person_post');
            $this->Admin_model->edit_person($user_id,$edit_person);
                $this->session->set_flashdata('success','Data Updated Successfully!');
                redirect(base_url('admin/manage_persons'));
        }
    }
    public function delete_person($user_id){
            $this->Admin_model->delete_person($user_id);
                $this->session->set_flashdata('success','Data deleted Successfully!');
                redirect(base_url('admin/manage_persons'));
       
     
    }
    public function edit_person_image($user_id){
        if($this->input->post('submit')){
            $config['upload_path'] = './uploads/img/important_persons/';
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_size'] = 200000;
            $this->load->library('upload',$config);
    
            if(! $this->upload->do_upload('person_image')){
                $this->upload->display_errors('<p>','</p>');
            }
            else{
                $data = $this->upload->data();
                $image = $data['file_name'];
                $config['source_image'] = './uploads/img/important_persons/'.$image;
    
                $this->load->library('image_lib',$config);
                $this->image_lib->resize();
                $this->Admin_model->update_person_image($user_id,$image);
                $this->session->set_flashdata('success','Data updated Successfully!');
                redirect(base_url('admin/manage_persons'));
            }
        }
        $this->load->view('admin/edit_person_image');
     
    }

    //manage footer
    public function add_footer_block_1(){
        $this->form_validation->set_rules('footer_block_1_name','footer_block_1_name','Required');
        $this->form_validation->set_rules('footer_block_1_url','footer_block_1_url','Required');
        
        if($this->form_validation->run()==false)
        
           { $this->load->view('admin/add_footer_block_1');
        
        }
        else{
         $add_footer_block_1 = array();
         $add_footer_block_1['footer_block_1_name'] = $this->input->post('footer_block_1_name');
         $add_footer_block_1['footer_block_1_url'] = $this->input->post('footer_block_1_url');
        $this->Admin_model->add_footer_block_1($add_footer_block_1);
        $this->session->set_flashdata('success','Data Updated Successfully');
                Redirect(base_url('admin/add_footer_block_1'));
        }
        
        }
    public function add_footer_block_2(){
        $this->form_validation->set_rules('footer_block_2_name','footer_block_2_name','Required');
        $this->form_validation->set_rules('footer_block_2_url','footer_block_2_url','Required');
        
        if($this->form_validation->run()==false)
        
           { $this->load->view('admin/add_footer_block_2');
        
        }
        else{
         $add_footer_block_2 = array();
         $add_footer_block_2['footer_block_2_name'] = $this->input->post('footer_block_2_name');
         $add_footer_block_2['footer_block_2_url'] = $this->input->post('footer_block_2_url');
        $this->Admin_model->add_footer_block_2($add_footer_block_2);
        $this->session->set_flashdata('success','Data Updated Successfully');
                Redirect(base_url('admin/add_footer_block_2'));
        }
        
        }
        public function manage_footer(){
  $display_footer_block_1 =  $this->Admin_model->display_footer_block_1();
  $display_footer_block_2 =  $this->Admin_model->display_footer_block_2();
  $get_manage_footer =  $this->Admin_model->get_manage_footer();
  $data = array();
  $data['display_footer_block_1'] = $display_footer_block_1;
  $data['display_footer_block_2'] = $display_footer_block_2;
  $data['get_manage_footer'] = $get_manage_footer;

  $this->form_validation->set_rules('name','name','Required');
  $this->form_validation->set_rules('number','number','Required');
  $this->form_validation->set_rules('email','email','Required');
  $this->form_validation->set_rules('block_1_heading','block_1_heading','Required');
  $this->form_validation->set_rules('block_2_heading','block_2_heading','Required');
  $this->form_validation->set_rules('facebook','facebook');
  $this->form_validation->set_rules('twitter','twitter');
  $this->form_validation->set_rules('instagram','instagram');
  $this->form_validation->set_rules('linkedin','linkedin');



if($this->form_validation->run()==false)

   {
    $this->load->view('admin/manage_footer',$data);
}
else{
 $update_manage_footer = array();
 $update_manage_footer['name'] = $this->input->post('name');
 $update_manage_footer['number'] = $this->input->post('number');
 $update_manage_footer['email'] = $this->input->post('email');
 $update_manage_footer['block_1_heading'] = $this->input->post('block_1_heading');
 $update_manage_footer['block_2_heading'] = $this->input->post('block_2_heading');
 $update_manage_footer['facebook'] = $this->input->post('facebook');
 $update_manage_footer['twitter'] = $this->input->post('twitter');
 $update_manage_footer['instagram'] = $this->input->post('instagram');
 $update_manage_footer['linkedin'] = $this->input->post('linkedin');
$this->Admin_model->update_manage_footer($update_manage_footer);
$this->session->set_flashdata('success','Data Updated Successfully');
        Redirect(base_url('admin/manage_footer'));
}
  
    


}
public function edit_footer_block_1($userid){
    $get_footer_block_1 = $this->Admin_model->get_footer_block_1($userid);
    $data = array();
    $data['get_footer_block_1'] = $get_footer_block_1;
    $this->form_validation->set_rules('footer_block_1_name','footer_block_1_name','Required');
$this->form_validation->set_rules('footer_block_1_url','footer_block_1_url','Required');

if($this->form_validation->run()==false)

   { 
    $this->load->view('admin/edit_footer_block_1',$data);

}
else{
 $update_footer_block_1 = array();
 $update_footer_block_1['footer_block_1_name'] = $this->input->post('footer_block_1_name');
 $update_footer_block_1['footer_block_1_url'] = $this->input->post('footer_block_1_url');
$this->Admin_model->update_footer_block_1($userid,$update_footer_block_1);
$this->session->set_flashdata('success','Data Updated Successfully');
        Redirect(base_url('admin/manage_footer'));
}

    

}
public function edit_footer_block_2($userid){
    $get_footer_block_2 = $this->Admin_model->get_footer_block_2($userid);
    $data = array();
    $data['get_footer_block_2'] = $get_footer_block_2;
    $this->form_validation->set_rules('footer_block_2_name','footer_block_2_name','Required');
$this->form_validation->set_rules('footer_block_2_url','footer_block_2_url','Required');

if($this->form_validation->run()==false)

   { 
    $this->load->view('admin/edit_footer_block_2',$data);

}
else{
 $update_footer_block_2 = array();
 $update_footer_block_2['footer_block_2_name'] = $this->input->post('footer_block_2_name');
 $update_footer_block_2['footer_block_2_url'] = $this->input->post('footer_block_2_url');
$this->Admin_model->update_footer_block_2($userid,$update_footer_block_2);
$this->session->set_flashdata('success','Data Updated Successfully');
        Redirect(base_url('admin/manage_footer'));
}

    

}

public function delete_footer_block_1($userid){
    $this->Admin_model->delete_footer_block_1($userid);
    $this->session->set_flashdata('success','Data Deleted Successfully!');
        Redirect(base_url('admin/manage_footer'));
}
public function delete_footer_block_2($userid){
    $this->Admin_model->delete_footer_block_2($userid);
    $this->session->set_flashdata('success','Data Deleted Successfully!');
        Redirect(base_url('admin/manage_footer'));
}
public function edit_footer_image(){
    if($this->input->post('submit')){
        $config['upload_path'] = './uploads/img/';
        $config['allowed_types'] = 'jpeg|gif|jpg|png';
        $config['max_size'] = 200000;
        $this->load->library('upload',$config);
        if(! $this->upload->do_upload('footer_image')){
            $this->upload->display_errors('<p>','</p>');
        }
        else{
            $data = $this->upload->data();
            $image = $data['file_name'];
            $config['source_image'] = './uploads/img/'.$image;

            $this->load->library('image_lib',$config);
            $this->image_lib->resize();
            $this->Admin_model->edit_footer_image($image);
            redirect(base_url('admin/manage_footer'));
        }
    }
    $this->load->view('admin/edit_footer_image');
}

   
}



?>
