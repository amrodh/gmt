<?php


class Category extends CI_Model {


    function __construct()
    {
        parent::__construct();
    }

    

    

     
    function get()
    {

      $q = $this
              ->db
              ->get('category');

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
              ->delete('category');

          if($this->db->affected_rows() != 1){
            return false;
          }

          return true;
    }


    function getCategoryBySub($id)
    {
      $q = $this
              ->db
              ->where('id',$id)
              ->limit(1)
              ->get('sub_category');

           if($q->num_rows >0){
              return $q->row();
           } 

           return false; 
    }


    function getCategoryByName($name)
    {

      $q = $this
              ->db
              ->where('name',$name)
              ->limit(1)
              ->get('category');

           if($q->num_rows >0){
              return $q->row();
           } 

           return false; 

    }


   function insert($params)
   {  

      $query = $this->db->insert_string('category', $params);
      $query = $this->db->query($query);

      if($this->db->affected_rows() != 1){
          return false;
        }

        return true;

   }



   function insertPackageImage($params)
   {  

      $query = $this->db->insert_string('package_image', $params);
      $query = $this->db->query($query);

      if($this->db->affected_rows() != 1){
          return false;
        }

        return true;

   }



   function getStat()
   {  
      $output = array();

      $q = $this
              ->db
              ->select('count(id) as category')
              ->get('category');
      $output['category'] = $q->row()->category;

      $q = $this
              ->db
              ->select('count(id) as package')
              ->get('package');
      $output['package'] = $q->row()->package;

      $q = $this
              ->db
              ->select('count(id) as user')
              ->get('user');
      $output['user'] = $q->row()->user;

       $q = $this
              ->db
              ->select('count(id) as booking')
              ->get('booking');
      $output['booking'] = $q->row()->booking;

      return $output;
   }

   function getMaxPackageImages()
   {
     $q = $this
              ->db
              ->select_max('id')
              ->get('package_image');

           if($q->num_rows >0){
              return $q->row();
           } 

           return false; 
   }



   function insertPackage($params)
   {  

      $query = $this->db->insert_string('package', $params);
      $query = $this->db->query($query);

      if($this->db->affected_rows() != 1){
          return false;
        }

        return true;

   }


    function insertSubCategory($params)
   {  

      $query = $this->db->insert_string('sub_category', $params);
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
              ->get('category');

           if($q->num_rows >0){
              return $q->row();
           } 

           return false; 

    }


    function getPackageByID($id)
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


    function getPackageImages($id)
    {
      $q = $this
              ->db
              ->where('package_id',$id)
              ->get('package_image');

           if($q->num_rows >0){
              return $q->result();
           } 

           return false;
    }


     function getNames()
    {
      $q = $this
              ->db
              ->select('name,id')
              ->order_by('id','asc')
              ->get('category');

           if($q->num_rows >0){
              return $q->result();
           } 

           return false;
    }



    function getSub($id)
    {
      $q = $this
              ->db
              ->where('id',$id)
              ->limit(1)
              ->get('sub_category');

           if($q->num_rows >0){
              return $q->row();
           } 

           return false;
    }

    function getSubPackages($id)
    {
      $q = $this
              ->db
              ->where('sub_category',$id)
              ->order_by('creation_date','desc')
              ->get('package');

           if($q->num_rows >0){
              return $q->result();
           } 

           return false;
    }

    function getSubCategories($id)
    {
      $q = $this
              ->db
              ->where('category_id',$id)
              ->order_by('type','asc')
              ->get('sub_category');

           if($q->num_rows >0){
              return $q->result();
           } 

           return false;
    }

     


     function update($id,$params)
     {
         $q = $this
              ->db
              ->where('id',$id)
              ->update('category',$params);

       if($this->db->affected_rows() != 1){
          return false;
        }

        return true;
     }


  
     

   




 

  
  

  
  


    
}


