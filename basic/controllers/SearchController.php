<?php
/**
 * Created by PhpStorm.
 * User: banshee
 * Date: 2018/7/9
 * Time: 下午6:02
 */
namespace app\controllers;

use app\models\SearchForm;
use app\helpers\AjaxResult;
use yii;

class SearchController extends BaseController {

    public function actionGetData(){
        $searchForm = new SearchForm();
        $searchForm->load(Yii::$app->request->post(),'');
        AjaxResult::json($searchForm->getData(),$searchForm->errorInfo);
    }

    public function actionLogin(){
        $searchForm = new SearchForm();
        $searchForm->load(Yii::$app->request->post(),'');
        AjaxResult::json($searchForm->login(),$searchForm->errorInfo);
    }
}