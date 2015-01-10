<?php


class Booking extends CI_Model {


    function __construct()
    {
        parent::__construct();
    }

    

    

     
    function get()
    {

      $q = $this
              ->db
              ->order_by('date','desc')
              ->get('booking');

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
              ->delete('booking');

          if($this->db->affected_rows() != 1){
            return false;
          }

          return true;
    }


    function getByName($name)
    {

      $q = $this
              ->db
              ->where('name',$name)
              ->limit(1)
              ->get('booking');

           if($q->num_rows >0){
              return $q->row();
           } 

           return false; 

    }


   function insert($params)
   {  

      $query = $this->db->insert_string('booking', $params);
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
              ->get('booking');

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
              ->update('booking',$params);

       if($this->db->affected_rows() != 1){
          return false;
        }

        return true;
     }


  
     

   




 

  
  

  
  


    
}


