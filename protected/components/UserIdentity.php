<?php
include_once('siteFunctions.php');
/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	
    /*public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}*/
    
    public function findUser()
    {
        $result = array();
        $username=strtolower($this->username);
        
        $docentecoordinador=Docentecoordinadorpracticas::model()->find('LOWER(RutCoordinador)=?',array($username));
        $estudiante=Estudiante::model()->find('LOWER(RutEstudiante)=?',array($username));
        $directorcarrera=Directorcarrera::model()->find('LOWER(RutDirector)=?',array($username));
        $docenteresponsablepractica=Docenteresponsablepractica::model()->find('LOWER(RutResponsable)=?',array($username));
        
        if($docentecoordinador != null){
            $user=$docentecoordinador;
            $id=$user->RutCoordinador;
        }else{
            if($estudiante != null){
                $user=$estudiante;
                $id=$user->RutEstudiante;
            }else{
                if($directorcarrera !=null){
                    $user=$directorcarrera;
                    $id=$user->RutDirector;
                }else{
                    if($docenteresponsablepractica !=null){
                        $user=$docenteresponsablepractica;
                        $id=$user->RutResponsable;
                    }
                }
            }
        }
        $result[0]=$user;
        $result[1]=$id;
        
        return $result;
    }
    
    public function authenticate()
	{
        $existUser = checkMainUser($this->username);
        
        if($existUser == true){
            $arreglo=$this->findUser();
            $user=$arreglo[0];
            $id=$arreglo[1];
        }else{
            $user = null;
        }
        
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
			$this->username = $id;
			$this->errorCode=self::ERROR_NONE;
		}
		return $this->errorCode == self::ERROR_NONE;
	}
    
    public function getUser(){
        return $this->username;
    }
	
	public function isStudent(){
		$result = false;
		
		$user = Yii::app()->user->name;
		
		$existUser = containsStd($user);
		
		if($existUser != 0){
			$result = true;
		}
		
		return $result;
	}
	
	public function isAdmins(){
		$result = false;
		
		$user = Yii::app()->user->name;
		
		$existCoordinador = containsCoordinador($user);
		$existDirector = containsDirector($user);
		$existResponsable = containsResponsable($user);
		
		if($existCoordinador != 0 || $existDirector != 0 || $existResponsable != 0){
			$result = true;
		}
		
		return $result;
	}
    
    public function isDirector(){
        $result = false;
		
		$user = Yii::app()->user->name;
		
		$existDirector = containsDirector($user);
		
		if($existDirector != 0){
			$result = true;
		}
		
		return $result;
    }
	
	
}