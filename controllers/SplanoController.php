<?php 
namespace app\controllers;

use Yii;

use yii\rest\ActiveController;
use app\models\Plano;
use app\models\DetPlanoTuberia;

class SplanoController extends ActiveController{
	public $modelClass = "app\models\Plano";

	/**
		servicio para obtener el plano a partir de la vivienda
	**/
	public function actionGetplano($idvivienda){
		$plano = null;
		$resultado = "-1";
		
		$plano = Plano::find()
						->where(["idVivienda" => $idvivienda])
						->asArray()
						->one();

		if(!is_null($plano)){
			$resultado = "ok";
		}

		$response = array('resultado' => $resultado, "data" => $plano);
		return $response;
	}

	/**
		servicio para obtener los puntos del plano
	**/
	public function actionGetdetalle($idplano){
		$detalle = null;
		$resultado = "-1";
		
		$detalle = DetPlanoTuberia::find()
						->where(["idPlano" => $idplano])
						->asArray()
						->all();

		if(count($detalle) > 0){
			$resultado = "ok";
		}

		$response = array('resultado' => $resultado, "data" => $detalle);
		
		return $response;
	}

	/**
	metodo que nos devuelve las viviendas que tienen planos
	**/
	public function actionGet_viviendas_plano(){
		$planos = null;
		$resultado = "-1";
		$planos =  Plano::find()
						->innerJoinWith('vivienda', false)						
						->all();
		
		$lista = array();

		foreach ($planos as $plano) {
			$lista[] = $plano->vivienda;
		}

		if(count($planos) > 0){
			$resultado = "ok";
		}

		$response = array('resultado' => $resultado, "data" => $lista);
		
		return $response;
	}

	public function actionPeticionpdf(){
		
	}
}
