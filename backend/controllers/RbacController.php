<?php

namespace backend\controllers;

/**
 *
 */
class RbacController extends \yii\web\Controller
{
    public function actionIndex()
    {

    }
    public function actionMake()
    {
        $auth = \Yii::$app->authManager;
        $auth->removeAll();
        //permissions list

        $mainIndex = $auth->createPermission('main-index');
        $mainIndex->description = 'Main List';
        $auth->add($mainIndex);
        // permission example : module-controller-action
        //user controller
        $userIndex = $auth->createPermission('user-index');
        $userIndex->description = 'User List';
        $auth->add($userIndex);

        $userView = $auth->createPermission('user-view');
        $userView->description = 'User View';
        $auth->add($userView);

        $userCreate = $auth->createPermission('user-create');
        $userCreate->description = 'User Create';
        $auth->add($userCreate);

        $userUpdate = $auth->createPermission('user-update');
        $userUpdate->description = 'User Update';
        $auth->add($userUpdate);

        $userDelete = $auth->createPermission('user-delete');
        $userDelete->description = 'User Delete';
        $auth->add($userDelete);
        $userResetKey = $auth->createPermission('user-reset-key');
        $userResetKey->description = 'user reset key';
        $auth->add($userResetKey);
        $userSetStatus = $auth->createPermission('user-set-status');
        $userSetStatus->description = 'user set status';
        $auth->add($userSetStatus);
        $userALlDown = $auth->createPermission('user-all-down');
        $userALlDown->description = 'user all down';
        $auth->add($userALlDown);
        $userAllUp = $auth->createPermission('user-all-up');
        $userAllUp->description = 'user all up';
        $auth->add($userAllUp);
        //end user controller

        //lesson controller
        $lessonIndex = $auth->createPermission('learn-lesson-index');
        $lessonIndex->description = 'lesson List';
        $auth->add($lessonIndex);

        $lessonView = $auth->createPermission('learn-lesson-view');
        $lessonView->description = 'lesson View';
        $auth->add($lessonView);

        $lessonCreate = $auth->createPermission('learn-lesson-create');
        $lessonCreate->description = 'lesson Create';
        $auth->add($lessonCreate);

        $lessonUpdate = $auth->createPermission('learn-lesson-update');
        $lessonUpdate->description = 'lesson Update';
        $auth->add($lessonUpdate);

        $lessonDelete = $auth->createPermission('learn-lesson-delete');
        $lessonDelete->description = 'lesson Delete';
        $auth->add($lessonDelete);
        //end lesson controller

        //upload controller
        $upload = $auth->createPermission('upload-file');
        $upload->description = 'upload file';
        $auth->add($upload);

        //book controller
        $bookIndex = $auth->createPermission('learn-book-index');
        $bookIndex->description = 'book List';
        $auth->add($bookIndex);
        $bookView = $auth->createPermission('learn-book-view');
        $bookView->description = 'book View';
        $auth->add($bookView);
        $bookCreate = $auth->createPermission('learn-book-create');
        $bookCreate->description = 'book Create';
        $auth->add($bookCreate);
        $bookUpdate = $auth->createPermission('learn-book-update');
        $bookUpdate->description = 'book Update';
        $auth->add($bookUpdate);
        $bookDelete = $auth->createPermission('learn-book-delete');
        $bookDelete->description = 'book Delete';
        $auth->add($bookDelete);
        //end book controller
        //grade
        $gradeIndex = $auth->createPermission('learn-grade-index');
        $gradeIndex->description = 'grade List';
        $auth->add($gradeIndex);

        $admin = $auth->createRole('admin');
        $auth->add($admin);

        //main
        $auth->addChild($admin, $mainIndex);
        //user controller
        $auth->addChild($admin, $userIndex);
        $auth->addChild($admin, $userView);
        $auth->addChild($admin, $userCreate);
        $auth->addChild($admin, $userUpdate);
        $auth->addChild($admin, $userDelete);
        $auth->addChild($admin, $userResetKey);
        $auth->addChild($admin, $userSetStatus);
        $auth->addChild($admin, $userALlDown);
        $auth->addChild($admin, $userAllUp);

        //lesson
        $auth->addChild($admin, $lessonIndex);
        $auth->addChild($admin, $lessonView);
        $auth->addChild($admin, $lessonCreate);
        $auth->addChild($admin, $lessonUpdate);
        $auth->addChild($admin, $lessonDelete);
        //end lesson controller

        //book
        $auth->addChild($admin, $bookIndex);
        $auth->addChild($admin, $bookView);
        $auth->addChild($admin, $bookCreate);
        $auth->addChild($admin, $bookUpdate);
        $auth->addChild($admin, $bookDelete);
        //end book controller

        //grade
        $auth->addChild($admin, $gradeIndex);

        //upload
        $auth->addChild($admin, $upload);
        //end upload controller

        $auth->assign($admin, 1);
    }
}
