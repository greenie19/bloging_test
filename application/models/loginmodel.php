<?php
class loginmodel extends CI_Model{
   public function isvalidate($username,$password){
        $q = $this->db->where(['username' => $username, 'password' => $password])
            ->get('users');

              if($q->num_rows()){
                return $q->row()->id;
              }else{
                 return false;
                    }
              } 
    public function articlelist(){
      $id=$this->session->userdata('id');
      $q=$this->db->select('article_title')
                  ->from('articles')
                  ->where(['user_id'=>$id])
                  ->get();
                  return $q->result();
    }
  public function add_articles($array)
  {
    return $this->db->insert('articles', $array);
  }
  public function add_user($array)
  {
    
    return $this->db->insert('users',$array);
  }   
}
?>