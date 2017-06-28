<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		//$this->render('index');
         if(Yii::app()->user->isGuest){
             $this->redirect(array('login'));
         }else{
             $this->render('index');
         }          
	}
    
    

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
				//$this->redirect(Yii::app()->user->returnUrl);
                $rut=Yii::app()->user->name;
                
                $profilelogged = $this->findProfileURL($rut);
                
                $studentData=Estudiante::model()->find('RutEstudiante=?',array($rut));
                
                if($studentData != null){
                    if($studentData->Estado == '0'){
                        $this->redirect(array('estudiantelogin/update','id'=>Yii::app()->user->name));
                    }else{
                        $this->redirect(array($profilelogged));
                    }
                }else{
                    $this->redirect(array($profilelogged));
                }   
            }
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}
    
    public function findProfileURL($rut)
    {
        $querya = Yii::app()->db->createCommand("select count(*) from estudiante where RutEstudiante = '".$rut."'")->queryScalar();
                
        $queryb = Yii::app()->db->createCommand("select count(*) from directorcarrera where RutDirector = '".$rut."'")->queryScalar();
                
        $queryc = Yii::app()->db->createCommand("select count(*) from docentecoordinadorpracticas where RutCoordinador = '".$rut."'")->queryScalar();
                
        $queryd = Yii::app()->db->createCommand("select count(*) from docenteresponsablepractica where RutResponsable = '".$rut."'")->queryScalar();
        
        $profileURL='';
        
        if($querya == 1){
            $profileURL='perfilestudiante/view&id='.$rut.'';
        }else{
            if($queryb == 1){
                $profileURL='perfildirectorcarrera/view&id='.$rut.'';
            }else{
                if($queryc == 1){
                    $profileURL='perfildocentecoordinadorpracticas/view&id='.$rut.'';
                }else{
                    if($queryd == 1){
                        $profileURL='perfildocenteresponsablepractica/view&id='.$rut.'';
                    }
                }
            }
        }
        
        return $profileURL;
    }

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	
	public function actionPage() {
    
        $this->render('pages/about');
	}
}