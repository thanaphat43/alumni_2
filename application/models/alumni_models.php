<?php defined('BASEPATH') OR exit('No direct script access allowed');
class alumni_models extends CI_Model {
		function __construct(){
            parent::__construct();
        }
        
		

        function alumni_insert($data){
			$this->db->insert('customer',$data);
		}
	}
?>
