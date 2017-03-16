<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class unit_test extends CI_Controller {
        public function __construct()
        {
            parent::__construct(); 
			$this->load->library("unit_test");	
			$this->load->model("torneoModel");
        }
		
		private function is_tourn(){
			$teams = $this->torneoModel->getTeams();
			$tourn = $this->torneoModel->createTourn($teams);
			if($tourn === $teams){
					return TRUE;
			}else{
					return FALSE;
			}
		}
		public function index(){
			echo "Unit Test 1 getTeams";	
			$teams = $this->torneoModel->getTeams();			
			$test_name = "Es arreglo";
			echo $this->unit->run($teams,'is_array',$test_name);
				
			echo "Unit Test 2 getTeams";				
			$test_name = "Esta vacio";
			echo $this->unit->run($teams,'is_null',$test_name);
			
			echo "Unit Test 1 createTourn";				
			$test_name = "Crea torneo";			
			echo $this->unit->run($this->is_tourn(),'is_false',$test_name);
			
			
		}
}