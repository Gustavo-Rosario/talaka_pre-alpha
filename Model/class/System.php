<?php
    session_start();
    include_once("Connection.php");
    
    class System{

        private $con;
        
        public function __construct($type){
            $this->con = Connection::getCon("localhost","talaka","talaka","TalakaPA",3306);
        }
        
        public function __call($met,$arg){
            return json_encode(array('stats' => 'fail', 'data' => 'metodo "'.$met .'" nao encontrado na classe System'));
            http_response_code(404);
        }
        
        //Insert para todos
        public function inserir($table,$obj){
            //Prepara o sql
            $type = "";
            $param = "";
            $vls = array();
            $query = "INSERT INTO ".$table."(";
            $var = (array)$obj;
            foreach ($var as $colum => $value) {
                $query .= $colum.",";
                $param .= "?,";
                $type  .= gettype($value)[0];
                $vls[] = &$var[$colum];
            }
            $param = substr($param, 0, -1);
            $query = substr($query, 0, -1) . ") VALUES (". $param .")";
            $stm = $this->con->prepare($query) or die("Erro 1".$this->con->error.http_response_code(405));
            call_user_func_array(array($stm,"bind_param"),array_merge(array($type), $vls))or die("Erro 2".$stm->error.http_response_code(405));
            $stm->execute() or die("Erro 3".$stm->error.http_response_code(405));
            $stm->close();
            return true;
        }
        //Update para todos
        public function alterar($table,$obj,$where){
            //Prepara o sql
            $type = "";
            $vls = array();
            $query = "UPDATE ".$table." SET ";
            $var = (array)$obj;
            foreach ($var as $colum => $value) {
                $query .= $colum." = ?,";
                $type  .= gettype($value)[0];
                $vls[] = &$var[$colum];
            }
            $query = substr($query, 0, -1) . " WHERE";
            foreach ($where as $col => $val) {
                $query .= " ".$col." = ? AND";
                $type  .= gettype($val)[0];
                $vls[] = &$where[$col];
            }
            $query = substr($query, 0, -3);
            $stm = $this->con->prepare($query) or die("Erro 1".$con->error.http_response_code(405));
            call_user_func_array(array($stm,"bind_param"),array_merge(array($type), $vls))or die("Erro 2".$stm->error.http_response_code(405));
            $stm->execute() or die("Erro 3".$stm->error.http_response_code(405));
            $stm->close();
            return true;
        }
        
        public function consultarUser($id){
            $stm = $this->con->prepare("SELECT u.ds_login, u.ds_path_img, u.nm_user, u.ds_biography, u.ds_img_back, (
            SELECT COUNT( p.cd_project ) 
            FROM User AS u, Project AS p
            WHERE p.cd_user = u.cd_user
            AND u.cd_user = ?
            ) AS projects, (
            
            SELECT COUNT( DISTINCT f.cd_project ) 
            FROM User AS u,Project AS p, Financing AS f
            WHERE f.cd_user = u.cd_user
            AND f.cd_project = p.cd_project
            AND u.cd_user = ?
            ) AS finan
            FROM User AS u, Project AS p, Financing AS f
            WHERE u.cd_user = ?
            GROUP BY u.ds_login") or die("Erro 1".$con->error.http_response_code(405));
            $stm->bind_param("iii",$id,$id,$id) or die("Erro 2".$stm->error.http_response_code(405));
            $stm->execute()or die("Erro 3".$stm->error.http_response_code(405));
            $stm->bind_result($login,$img,$nome,$biography,$cover,$projects,$finances);
            $stm->fetch();
            $stm->close();
            return json_encode(array("id" => $id, "login" => $login, "img" => $img, "nome" => $nome, "biography" => $biography, "cover" => $cover, "projects" => $projects, "finances" => $finances ));
        }
        
        public function checkUser($obj){
            $obj->pwd = hash("ripemd160" , $obj->pwd);
            $stm = $this->con->prepare("SELECT cd_user, nm_user, ds_path_img FROM User WHERE ds_login = ? and ds_pwd = ?") or die("Erro 1 ".$this->con->error.http_response_code(405));
            $stm->bind_param("ss", $obj->login, $obj->pwd) or die("Erro 2 ".$stm->error.http_response_code(405));
            $stm->execute();
            $stm->bind_result($cdU,$nmU,$imgU);
            $stm->fetch();
            if ($cdU === "" || $cdU === null){
                return json_encode(array("stats"=>"fail", "data"=> "Login ou senha Incorretos"));
            } else {
                $_SESSION["cdUser"]=$cdU;
                $_SESSION["nmUser"]=$nmU;
                $_SESSION["imgUser"]=$imgU;
                return json_encode(array("stats"=>"success", "data"=>"login efetuado"));
            }
            $stm->close();
            return true;
        }
        
        public function consultarProject($id){
            $stm = $this->con->prepare("SELECT p.nm_title,p.ds_project,p.ds_path_img,p.ds_img_back,p.vl_meta,p.vl_collected,p.dt_begin,p.dt_final,u.nm_user,p.cd_user,u.ds_path_img,p.qt_visitation,count(f.cd_user) total,u.cd_user,p.ds_resume 
            FROM Project as p, User as u, Financing as f
            WHERE p.cd_user = u.cd_user
            AND p.cd_project = f.cd_project
            AND p.cd_project = ?") or die("Erro 1".$this->con->error.http_response_code(405));
            $stm->bind_param("i",intval($id)) or die("Erro 2".$stm->error.http_response_code(405));
            $stm->execute()or die("Erro 3".$stm->error.http_response_code(405));
            $stm->bind_result($title,$ds,$img,$cover,$vlM,$vlC,$dtB,$dtF,$creator,$creID,$imgU,$visit,$total,$usuario,$resume)or die("Erro 4");
            $stm->fetch();
            $resp = json_encode(array("id"=>$id,"title"=>$title,"ds"=>utf8_encode($ds),"img"=>$img,"cover"=>$cover,"meta"=>$vlM,"collected"=>$vlC,"dtB"=>$dtB,"dtF"=>$dtF,"creator"=>$creator,"creID"=>$creID,"imgU"=>$imgU,"visit"=>$visit,"total"=>$total,"usuario"=>$usuario,"resume"=>$resume))or die("Erro no json mesmo");
            $stm->close();
            return $resp;
        }
        
        public function listProject($num){
            $stm = $this->con->prepare("SELECT p.cd_project, p.nm_title, p.ds_project, p.ds_path_img, p.vl_meta, p.vl_collected, p.dt_begin, p.dt_final, u.nm_user, p.ds_img_back, u.ds_path_img, p.cd_category, ((p.vl_collected*100) / p.vl_meta) dif, u.cd_user
            FROM Project AS p, User AS u
            WHERE p.cd_user = u.cd_user
            ORDER BY dif DESC 
            LIMIT ?") or die("Erro 1".$this->con->error.http_response_code(405));
            $stm->bind_param("i",intval($num));
            $stm->execute()or die("Erro 2".$stm->error.http_response_code(405));
            $stm->bind_result($id,$title,$ds,$img,$vlM,$vlC,$dtB,$dtF,$creator,$imgB,$imgU,$idC,$percent,$user);
            $r = array();
            $i = 1;
            while($stm->fetch()){
                $r["d".$i] = array("id"=>$id,"title"=>$title,"ds"=>utf8_encode($ds),"img"=>$img,"meta"=>$vlM,"collected"=>$vlC,"dtB"=>$dtB,"dtF"=>$dtF,"creator"=>$creator,"imgB"=>$imgB,"imgU"=>$imgU,"idC"=>$idC,"percent"=>$percent,"user"=>$user) or die("Erro no json");
                $i++;
            }
            $stm->close();
            return json_encode($r);
        }
        
        public function listMyProjects($id){
            $stm = $this->con->prepare("SELECT p.cd_project, p.nm_title, p.ds_project, p.ds_path_img, p.vl_meta, p.vl_collected, p.dt_begin, p.dt_final, p.ds_img_back, p.cd_category, ((p.vl_collected*100) / p.vl_meta) dif
            FROM Project AS p, User AS u
            WHERE p.cd_user = u.cd_user
            AND u.cd_user = ?
            ORDER BY dif DESC ") or die("Erro 1".$this->con->error.http_response_code(405));
            $stm->bind_param("i",intval($id));
            $stm->execute()or die("Erro 2".$stm->error.http_response_code(405));
            $stm->bind_result($id,$title,$ds,$img,$vlM,$vlC,$dtB,$dtF,$imgB,$idC,$percent);
            $r = array();
            $i = 1;
            while($stm->fetch()){
                $r["d".$i] = array("id"=>$id,"title"=>$title,"ds"=>utf8_encode($ds),"img"=>$img,"meta"=>$vlM,"collected"=>$vlC,"dtB"=>$dtB,"dtF"=>$dtF,"imgB"=>$imgB,"idC"=>$idC,"percent"=>$percent) or die("Erro no json");
                $i++;
            }
            $stm->close();
            return json_encode($r);
        }
        
        public function listMyFinances($id){
            $stm = $this->con->prepare("SELECT p.cd_project, p.nm_title, p.ds_project, p.ds_path_img, p.vl_meta, p.vl_collected, p.dt_begin, p.dt_final, p.ds_img_back, p.cd_category, ((p.vl_collected*100) / p.vl_meta) dif
            FROM Project AS p, User AS u, Financing AS f
            WHERE p.cd_project = f.cd_project
            AND f.cd_user = u.cd_user
            AND u.cd_user = ?
            GROUP BY p.cd_project
            ORDER BY dif DESC ") or die("Erro 1".$this->con->error.http_response_code(405));
            $stm->bind_param("i",intval($id));
            $stm->execute()or die("Erro 2".$stm->error.http_response_code(405));
            $stm->bind_result($id,$title,$ds,$img,$vlM,$vlC,$dtB,$dtF,$imgB,$idC,$percent);
            $r = array();
            $i = 1;
            while($stm->fetch()){
                $r["d".$i] = array("id"=>$id,"title"=>$title,"ds"=>utf8_encode($ds),"img"=>$img,"meta"=>$vlM,"collected"=>$vlC,"dtB"=>$dtB,"dtF"=>$dtF,"imgB"=>$imgB,"idC"=>$idC,"percent"=>$percent) or die("Erro no json");
                $i++;
            }
            $stm->close();
            return json_encode($r);
        }
        
        public function pesqCat($num,$pag){
            $max = (($pag - 1) == 0)? 0 : (($pag - 1) * 5) + 1;
            $stm = $this->con->prepare("SELECT p.cd_project, p.nm_title, p.ds_project, p.ds_path_img, p.vl_meta, p.vl_collected, p.dt_begin, p.dt_final, u.nm_user, p.ds_path_img, u.ds_path_img
            FROM Project AS p, User AS u
            WHERE p.cd_category = ?
			AND u.cd_user = p.cd_user
            ORDER BY p.nm_title DESC
            LIMIT 6 
            OFFSET ? ") or die("Erro 1".$this->con->error.http_response_code(405));
            $stm->bind_param("ii",intval($num),$max);
            $stm->execute()or die("Erro 2".$stm->error.http_response_code(405));
            $stm->bind_result($id,$title,$ds,$img,$vlM,$vlC,$dtB,$dtF,$creator,$imgB,$imgU);
            $r = array();
            $i = 0;
            while($stm->fetch()){
                $r["d".$i] = array("id"=>$id,"title"=>$title,"ds"=>utf8_encode($ds),"img"=>$img,"meta"=>$vlM,"collected"=>$vlC,"dt"=>$dtF,"creator"=>$creator,"img"=>$img,"imgU"=>$imgU,"idC"=>$num) or die("Erro no json");
                $i++;
            }
            $r['total'] = $i;
            $r["atual"] = $pag;
            $stm->close();
            return json_encode($r);
        }
        
        
        public function pesqProject($termo,$pag){
            $max = (($pag - 1) == 0)? 0 : (($pag - 1) * 5) + 1;
            $name = "%".$termo."%";
            $stm = $this->con->prepare("SELECT p.cd_project, p.nm_title, p.ds_project, p.vl_meta, p.vl_collected, p.dt_final, p.ds_path_img, p.cd_category, u.ds_path_img
            FROM Project as p, User as u
            WHERE p.nm_title LIKE ?
            AND u.cd_user = p.cd_user
            LIMIT 6 
            OFFSET ? ") or die("Erro 1".$this->con->error.http_response_code(405));
            $stm->bind_param("si",$name,$max)or die("Erro 2".$stm->error.http_response_code(405));
            $stm->execute()or die("Erro 3".$stm->error.http_response_code(405));
            $stm->bind_result($id,$title,$ds,$vlM,$vlC,$dt,$img,$idC,$imgU)or die("Erro 4");
            $r = array();
            $i = 0;
            while($stm->fetch()){
                $r["d".$i] = array("id" => $id, "title" => $title, "ds" => utf8_encode($ds), "meta" => $vlM,"collected" => $vlC, "img"=>$img, "dt"=>$dt,"idC"=>$idC,"imgU"=>$imgU);
                $i++;
            }
            $stm->close();
            $stmt = $this->con->prepare("call Num_results( ? )")or die("Erro 1".$this->con->error.http_response_code(405));
            $stmt->bind_param("s",$termo)or die("Erro 2".$stmt->error.http_response_code(405));
            $stmt->execute()or die("Erro 3".$stmt->error.http_response_code(405));
            $stmt->bind_result($result)or die("Erro 4");
            $stmt->fetch();
            $r["total"] = $result;
            $r["termo"] = 'Termo procurado : "'.$termo.'"';
            $r["atual"] = $pag;
            $stmt->close();
            return json_encode($r);
        }
        
        public function dataProject($id){
            $stm = $this->con->prepare("call get_xy( ? ) ")or die("Erro 1".$this->con->error.http_response_code(405));
            $stm->bind_param("i",$id)or die("Erro 2".$stm->error.http_response_code(405));
            $stm->execute()or die("Erro 3".$stm->error.http_response_code(405));
            $stm->bind_result($y,$x,$nome)or die("Erro 4");
            $r = array();
            $i = 0;
            while($stm->fetch()){
                $r["d".$i] = array("x" => $x, "y" => $y, "index" => $nome);
                $i++;
            }
            $r["total"] = $i;
            $stm->close();
            $resp = json_decode($this->consultarProject($id));
            $r['qt'] = $resp->visit;
            $r['collected'] = $resp->collected;
            return json_encode($r);
        }
        
        //---------------------------------------------------------------------------------------------------//
        //-------------------------------------ESPECIAIS-----------------------------------------------------//
        //---------------------------------------------------------------------------------------------------//
        public static function getCategory($id){
            //Para não sobrecarregar a $this->con
            $num = intval($id);
            $con = Connection::getCon("localhost","talaka","talaka","TalakaPA",3306);
            $stmt = $con->prepare("SELECT nm_category FROM Category Where cd_category = ? ") or die("Erro 1".$con->error.http_response_code(405));
            $stmt->bind_param("i",$num)or die("Erro 2".$con->error.http_response_code(405));
            $stmt->execute()or die("Erro 3".$con->error.http_response_code(405));
            $stmt->bind_result($nmC)or die("Erro 4".$con->error.http_response_code(405));
            $stmt->fetch()or die("Erro 5".$con->error.http_response_code(405));
            $stmt->close();
            return $nmC;
        }
        
        public function firstFinancing($id){
            $stm = $this->con->prepare("SELECT cd_project FROM Project Where cd_user = ? ORDER BY cd_project DESC LIMIT 1 ") or die("Erro 1".$this->con->error.http_response_code(405));
            $stm->bind_param("i",$id)or die("Erro 2".$this->con->error.http_response_code(405));
            $stm->execute()or die("Erro 3".$stm->error.http_response_code(405));
            $stm->bind_result($proj)or die("Erro 4".$stm->error.http_response_code(405));
            $stm->fetch()or die("Erro 5".$con->error.http_response_code(405));
            $idP = $proj;
            $stm->close();
            $this->inserir("Financing",array("cd_project"=>$idP,"cd_user"=>3,"vl_financing"=>10));
        }
        
    }
    
?>