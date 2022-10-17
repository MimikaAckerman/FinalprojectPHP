<?php
<<<<<<< HEAD

//Hace las peticiones para ver si estas logeado, si te quieres logear, si te quieres deslogear
//si te quieres crear un usuario.

require_once './models/db.php';

class loginModel {

	private $table = 'notes';
	private $conection;

	public function __construct() {
		
	}

	/* Set conection */
	public function getConection(){
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}

	/* Get all notes */
	public function getNotes(){
		$this->getConection();
		$sql = "SELECT * FROM ".$this->table;
		$stmt = $this->conection->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}

	/* Get note by id */
	public function getNoteById($id){
		if(is_null($id)) return false;
		$this->getConection();
		$sql = "SELECT * FROM ".$this->table. " WHERE id = ?";
		$stmt = $this->conection->prepare($sql);
		$stmt->execute([$id]);

		return $stmt->fetch();
	}

	

}

=======
    class LoginModel extends Model
    {
    
        function login($logged)
        {
            $emailU = $logged["user"];
            $passU = $logged["password"];
            $log = $this->db->connect()->prepare("SELECT e.email, e.password
            FROM users e
            WHERE e.email='" . $emailU . "' AND e.password='" . $passU . "';");
    
            try {
                $log->execute();
                $infoLog = $log->fetch();
                print_r($infoLog);
    
                if (isset($infoLog['email']) && isset($infoLog['password'])) {
    
                    $_SESSION['user'] = $infoLog['email'];
                } else {
                    session_destroy();
                }
            } catch (PDOException $error) {
                return [false, $error];
            }
        }
    }
>>>>>>> mimika
?>