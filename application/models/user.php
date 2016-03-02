<?php
Class User extends CI_Model
{
 function login($user, $password)
 {
   $this -> db -> select('id, user, password');
   $this -> db -> from('users');
   //$this -> db -> where('user', $user);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>