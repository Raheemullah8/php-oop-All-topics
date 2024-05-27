<?php
class database{
  
    private $db_server = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "testing";
    private $conn = false;
    //mysqli ya jo  ha ya connection ka var ha our es ka hum object bana ke use kar te hain
    private $mysqli = "";
    //ya jo result name ka private var ha es ma hum all record save kar te hain
    // insert ka update ka delete ka select ka  our jitne be result ain ge 
    //wo hum result name ke var ma show kar waden ge
    private $result = array();

    public function __construct(){
        if(!$this->conn){
            $this->mysqli = new mysqli($this->db_server,$this->db_user,$this->db_pass,$this->db_name);
            $this->conn = true;
            if($this->mysqli->connect_error){
                array_push($this->result,$this->mysqli->connect_error);
                return false;
            }

        }else{
            return true;
        }
      
    }
    
    // public function insert($table,$param=array()){
    //     // jab be hum data base ma data insert karte hain hame 2 chezu ki need hoti ha
    // //table ka name our table ki value inset ma hum user sa as a parameter user sa 
    // // 2 cheze get karen ge  table ka name our os table ki value
    // if($this->tableExist($table)){
    //     $table_coloam = implode(',',array_keys($param));
    //     $table_value = implode("','",$param);
    //     print_r($param);
    //    echo $sql = "INSERT INTO $table($table_coloam)VALUE($table_value)";
    //    if($this->mysqli->query($sql)){
    //     array_push($this->result,$this->mysqli->insert_id);
    //     return true;
    //    }else{
    //     array_push($this->result,$this->mysqli->error);
    //     return false;
    //    }
    // }else{

    // }


    // }
   
    public function select(){
        
    }
    public function delete(){
        
    }
    public function update(){
        
    }
    // private function tableExist($table){
    //     //es function ma hum ya dhak rahe hain ke jo user na table name send 
    //     // kia ha wo theek ba he ke nahi
    //     // ya kam hame sare method ma karna par ta es liya alg sa 1 method bana ke 
    //     // sab method ma call kar denge
    //   $sql = "SHOW TABLES FORM $this->db_name LIKE '$table'";
    //   $tabelinDB = $this->mysqli->query($sql);
    //   if($tabelinDB){
    //     if($tabelinDB->num_rows == 1){
    //         return true;
    //     }
    //   }else{
    //     array_push($this->result,$table."does not exist in this data base");
    //       return false;
    //   }
    // }
    private function tableExist($table){
        // Check if the table exists in the database
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
        $tableInDB = $this->mysqli->query($sql);
    
        if($tableInDB){
            if($tableInDB->num_rows == 1){
                return true;
            } else {
                array_push($this->result, "$table does not exist in this database");
                return false;
            }
        } else {
            array_push($this->result, "Error checking table existence: " . $this->mysqli->error);
            return false;
        }
    }
    public function getResult(){
        $var = $this->result;
        $this->result = array();
        return $var;
    }
    public function __destruct(){
        if($this->conn){
           if( $this->mysqli->close()){
             $this->conn = false;
             return true;
           }
            

        }else{
            return false;
        }
        
    }
}

?>
<!-- 
    private function tableExist($table){
    // Check if the table exists in the database
    $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
    $tableInDB = $this->mysqli->query($sql);

    if($tableInDB){
        if($tableInDB->num_rows == 1){
            return true;
        } else {
            array_push($this->result, "$table does not exist in this database");
            return false;
        }
    } else {
        array_push($this->result, "Error checking table existence: " . $this->mysqli->error);
        return false;
    }
}

public function insert($table, $param = array()){
    // Check if the table exists
    if($this->tableExist($table)){
        $tableColumns = implode(',', array_keys($param));
        $tableValues = array_map(array($this->mysqli, 'real_escape_string'), array_values($param));
        $tableValues = implode("','", $tableValues);

        $sql = "INSERT INTO $table($tableColumns) VALUES('$tableValues')";

        if($this->mysqli->query($sql)){
            array_push($this->result, $this->mysqli->insert_id);
            return true;
        } else {
            array_push($this->result, $this->mysqli->error);
            return false;
        }
    } else {
        return false; // Table does not exist
    }
}

 -->