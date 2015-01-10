<?php


class Banner extends CI_Model {


    function __construct()
    {
        parent::__construct();
    }

    

    

     
    function get()
    {

      $q = $this
              ->db
              ->get('banner');

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
              ->delete('banner');

          if($this->db->affected_rows() != 1){
            return false;
          }

          return true;
    }


    function getByPage($name)
    {

      $q = $this
              ->db
              ->where('page',$name)
              ->limit(1)
              ->get('banner');

           if($q->num_rows >0){
              return $q->row();
           } 

           return false; 

    }


   function insert($params)
   {  

      $query = $this->db->insert_string('banner', $params);
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
              ->get('banner');

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
              ->update('banner',$params);

       if($this->db->affected_rows() != 1){
          return false;
        }

        return true;
     }


  
     

   




 

  
  

  
  


    
}


