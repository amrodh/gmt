<?php


class Package extends CI_Model {


    function __construct()
    {
        parent::__construct();
    }

    

    

     
    function get()
    {

      $q = $this
              ->db
              ->order_by('creation_date','desc')
              ->get('package');

           if($q->num_rows >0){
              return $q->result();
           } 

           return false; 

    }

    function get_3()
    {

      $q = $this
              ->db
              ->where('sub_category',-1)
              ->order_by('creation_date','desc')
              ->get('package');

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
              ->delete('package');

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
              ->get('package');

           if($q->num_rows >0){
              return $q->row();
           } 

           return false; 

    }


   function insert($params)
   {  

      $query = $this->db->insert_string('package', $params);
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
              ->get('package');

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
              ->update('package',$params);

       if($this->db->affected_rows() != 1){
          return false;
        }

        return true;
     }


  
     

   




 

  
  

  
  


    
}


