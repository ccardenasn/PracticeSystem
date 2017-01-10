<?php

class HelloWorldController extends CController
{
	
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','updateajax'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
    public function actionIndex()
    {
        $data = array();
        $data["myValue"] = "Content loaded";
		
 
        $this->render('index', $data);
    }
 
    /*public function actionUpdateAjax()
    {
        $data = array();
		 $cont2 = Yii::app()->request->getParam('vehId');
        $data["myValue"] = $cont2;
 
        $this->renderPartial('_ajaxContent', $data, false, true);
    }*/
	
	public function actionUpdateAjax()
    {
		
        $data = array();
		$cont2 = Yii::app()->request->getParam('vehId');
        //$data["myValue"] = $cont2;
		
		$arr = array();
		$result = array();	
		
		
		$con = mysql_connect("localhost","root","");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}
//select database
mysql_select_db("practicemanagementdatabase", $con);
		
		
		$sql = "select * from graph_data where idcentro = '".$cont2."';";
		//$query =Yii::app()->db->createCommand($sql)->queryAll();
				
		//foreach($query as $row){
		//	$arr['data'][] = array($row['nombrepractica'],$row['numero']);
		//}
		$q	 = mysql_query($sql);
		while($row = mysql_fetch_assoc($q)){
			$arr['data'][] = array($row['nombrepractica'],$row['numero']);
		}
				
		//array_push($result,$arr);
		$data["myValue"] = $arr;
	
		//CJSON::encode($result, JSON_NUMERIC_CHECK);
		
 
        $this->renderPartial('widget', $data, false, true);
    }
}