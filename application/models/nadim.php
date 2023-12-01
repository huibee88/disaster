<?php

class Nadim extends CI_Model{


public function __construct()
	{
		parent::__construct();
		//echo 'constructor';
	}


function insertNewReport($data){

	$value = array(
			'location' => trim($data['plocation']),
			'disaster_type' => trim($data['pdisaster']),
			'description' => trim($data['pdesc']),
			'report_img' => trim($data['pImg']),
            'startDate' => trim(date('y-m-d'))
			);

			$this->db->insert('d_report', $value);
	}

function getLatestInfo(){
    $this->db->select('report_id as newsID,
                       disaster_type as warningType,
                       location as affectedArea,
                       description as messageRespond,
                       startDate as date
                       ');
            $this->db->from('d_report');
            $query = $this->db->get();
            if( $query->num_rows()>0){
                return  $query->result_array();
            }
            else{
                return false;
            }
	}

function checkCountKKF(){
        $this->db->select('COUNT(aArea) as maxarea');
        $this->db->from('d_notice');
        $this->db->where('aArea="Kota Kinabalu"');  
        $this->db->where('type="Floods"');       
        $data = $this->db->get();
        
        $result= array();
        
        foreach($data->result_array() as $row){
            array_push($result, array($row['maxarea']));
        }
        return $result;
    }
    function checkCountPTT(){
        $this->db->select('COUNT(aArea) as maxarea');
        $this->db->from('d_notice');
        $this->db->where('aArea="Putatan"');        
        $data = $this->db->get();
        
        $result= array();
        
        foreach($data->result_array() as $row){
            array_push($result, array($row['maxarea']));
        }

        return $result;
    }
    function checkCountTR(){
        $this->db->select('COUNT(aArea) as maxarea');
        $this->db->from('d_notice');
        $this->db->where('aArea="Tuaran"');        
        $data = $this->db->get();
        
        $result= array();
        
        foreach($data->result_array() as $row){
            array_push($result, array($row['maxarea']));
        }

        return $result;
    }
    function checkCountPP(){
        $this->db->select('COUNT(aArea) as maxarea');
        $this->db->from('d_notice');
        $this->db->where('aArea="Papar"');        
        $data = $this->db->get();
        
        $result= array();
        
        foreach($data->result_array() as $row){
            array_push($result, array($row['maxarea']));
        }

        return $result;
    }
    function checkCountTPR(){
        $this->db->select('COUNT(aArea) as maxarea');
        $this->db->from('d_notice');
        $this->db->where('aArea="Tampaluri"');        
        $data = $this->db->get();
        
        $result= array();
        
        foreach($data->result_array() as $row){
            array_push($result, array($row['maxarea']));
        }

        return $result;
    }
    function checkCountRN(){
        $this->db->select('COUNT(aArea) as maxarea');
        $this->db->from('d_notice');
        $this->db->where('aArea="Ranau"');        
        $data = $this->db->get();
        
        $result= array();
        
        foreach($data->result_array() as $row){
            array_push($result, array($row['maxarea']));
        }

        return $result;
    }

function getDisasterInfo(){
    $this->db->select('info_name, info_desc, info_pic');
    $this->db->from('d_info');
    
    $data = $this->db->get();

    $result = array();
            
    foreach($data->result_array() as $row){
				array_push($result, array('infoName'=>$row['info_name'], 'infoDesc' => $row['info_desc'], 'infoPic' => $row['info_pic']
			));
	}			
	return $result;
}

function insertNewVolunteer($data){

		if ($data) {
				$this->db->trans_begin(true);

				$value = array(
					'volunteer_name' => trim($data['vName']),
					'volunteer_age' => trim($data['vAge']),
					'volunteer_gender' => trim($data['vGender']),
					'volunteer_email' => trim($data['vEmail']),
					'volunteer_phone' => trim($data['vPhone']),
					'volunteer_img' => trim($data['vImg'])
					);

				$this->db->insert('d_volunteer', $value);


			if ($this->db->trans_status() === FALSE) {
				$this->db->trans_rollback();
				return false;
			}else{
				$this->db->trans_commit();
				return true;
			}
		}else{
			return false;
		}
	}

}
?>