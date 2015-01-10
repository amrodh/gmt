<?php


class Contact extends CI_Model {


    function __construct()
    {
        parent::__construct();
    }

     
    function get()
    {

      $q = $this
              ->db
              ->get('contact');

           if($q->num_rows >0){
              return $q->result();
           } 

           return false; 

    }



    function delete($id)
    {
      $q = $this
              ->db
              ->where('id',$id)
              ->delete('contact');

          if($this->db->affected_rows() != 1){
            return false;
          }

          return true;
    }


   


   function insert($params)
   {  

      $query = $this->db->insert_string('contact', $params);
      $query = $this->db->query($query);

      if($this->db->affected_rows() != 1){
          return false;
        }

        return true;

   }


    function getByID($id)
    {

      $q = $this
              ->db
              ->where('id',$id)
              ->limit(1)
              ->get('contact');

           if($q->num_rows >0){
              return $q->row();
           } 

           return false; 

    }



   

     


     function update($id,$params)
     {
         $q = $this
              ->db
              ->where('id',$id)
              ->update('contact',$params);

       if($this->db->affected_rows() != 1){
          return false;
        }

        return true;
     }


  
     

   




 

  
  

  
  


    
}


