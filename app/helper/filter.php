<?php
    class Helper
    {
        public static function correctUser($id, $user_id){
          if(Auth::user()->id == $user_id){
            return true;
          }else{
            return false;
          }
        }
    }
?>