<?php

namespace app\controllers;

use app\models\TDebitur;
use app\models\TDebiturSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TDebiturController implements the CRUD actions for TDebitur model.
 */
class TdebiturController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all TDebitur models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TDebiturSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TDebitur model.
     * @param string $id_debitur Id Debitur
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_debitur)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_debitur),
        ]);
    }

    /**
     * Creates a new TDebitur model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TDebitur();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_debitur' => $model->id_debitur]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TDebitur model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_debitur Id Debitur
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_debitur)
    {
        $model = $this->findModel($id_debitur);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_debitur' => $model->id_debitur]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TDebitur model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_debitur Id Debitur
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_debitur)
    {
        $this->findModel($id_debitur)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TDebitur model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_debitur Id Debitur
     * @return TDebitur the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_debitur)
    {
        if (($model = TDebitur::findOne(['id_debitur' => $id_debitur])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
