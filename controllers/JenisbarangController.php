<?php

namespace app\controllers;

use app\models\MJenisBarang;
use app\models\MJenisBarangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JenisbarangController implements the CRUD actions for MJenisBarang model.
 */
class JenisbarangController extends Controller
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
     * Lists all MJenisBarang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MJenisBarangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MJenisBarang model.
     * @param int $id_jenis_barang Id Jenis Barang
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_jenis_barang)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_jenis_barang),
        ]);
    }

    /**
     * Creates a new MJenisBarang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MJenisBarang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_jenis_barang' => $model->id_jenis_barang]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MJenisBarang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_jenis_barang Id Jenis Barang
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_jenis_barang)
    {
        $model = $this->findModel($id_jenis_barang);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_jenis_barang' => $model->id_jenis_barang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MJenisBarang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_jenis_barang Id Jenis Barang
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_jenis_barang)
    {
        $this->findModel($id_jenis_barang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MJenisBarang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_jenis_barang Id Jenis Barang
     * @return MJenisBarang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_jenis_barang)
    {
        if (($model = MJenisBarang::findOne(['id_jenis_barang' => $id_jenis_barang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
