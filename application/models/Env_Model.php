<?php  
class Env_Model extends CI_Model
{	
 

    public function testsql()
    {

      $this->envdb = $this->load->database("envdb",true);

        if ($this->envdb) {
          return 1;
        }else{
          return 0;
        }
 

    }  





}

 ?>