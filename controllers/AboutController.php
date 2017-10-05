<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\learn4dev\controllers;

use yii\helpers\Url;
use humhub\components\Controller;

/**
 * HomeController redirects to the home page
 *
 * @author luke
 * @since 1.2
 */
class AboutController extends Controller
{

    /**
     * Redirects to the learn index
     *
     * @return \yii\web\Response
     */
    public function actionIndex()
    {
        return $this->render('@humhub/modules/learn4dev/views/about/index', [
        ]);
    }

    /**
     * Redirects to the learn index
     *
     * @return \yii\web\Response
     */
    public function actionCoreGroup()
    {
        return $this->render('@humhub/modules/learn4dev/views/about/core-group', [
        ]);
    }

    /**
     * Redirects to the learn index
     *
     * @return \yii\web\Response
     */
    public function actionExpertGroups()
    {
        return $this->render('@humhub/modules/learn4dev/views/about/expert-groups', [
        ]);
    }

    /**
     * Redirects to the learn index
     *
     * @return \yii\web\Response
     */
    public function actionFocalPoints()
    {
        return $this->render('@humhub/modules/learn4dev/views/learn/focal-points', [
        ]);
    }

    /**
     * Redirects to the learn index
     *
     * @return \yii\web\Response
     */
    public function actionAnnualMeeting()
    {
        return $this->render('@humhub/modules/learn4dev/views/about/annual-meeting', [
        ]);
    }

}
