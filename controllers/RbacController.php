<?php

namespace app\controllers;

use Yii;

class RbacController extends \yii\web\Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        $createCat = $auth->createPermission('createCategory');
        $createCat->description = 'Create a category product';
        $auth->add($createCat);

        $updateCat = $auth->createPermission('updateCategory');
        $updateCat->description = 'Update a category product';
        $auth->add($updateCat);

        $editor = $auth->createRole('editor');
        $auth->add($editor);
        $auth->addChild($editor, $createCat);

        $admin = $auth->createRole('administrator');
        $auth->add($admin);
        $auth->addChild($admin, $updateCat);
        $auth->addChild($admin, $editor);

        $auth->assign($admin, 1);
        $auth->assign($editor, 2);
    }
}
