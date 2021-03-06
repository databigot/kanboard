<?php

namespace Core;

use Pimple\Container;

/**
 * Base class
 *
 * @package core
 * @author  Frederic Guillot
 *
 * @property \Core\Helper                  $helper
 * @property \Core\HttpClient              $httpClient
 * @property \Core\Paginator               $paginator
 * @property \Core\Request                 $request
 * @property \Core\Session                 $session
 * @property \Core\Template                $template
 * @property \Integration\BitbucketWebhook $bitbucketWebhook
 * @property \Integration\GithubWebhook    $githubWebhook
 * @property \Integration\GitlabWebhook    $gitlabWebhook
 * @property \Integration\HipchatWebhook   $hipchatWebhook
 * @property \Integration\Jabber           $jabber
 * @property \Integration\MailgunWebhook   $mailgunWebhook
 * @property \Integration\PostmarkWebhook  $postmarkWebhook
 * @property \Integration\SendgridWebhook  $sendgridWebhook
 * @property \Integration\SlackWebhook     $slackWebhook
 * @property \Model\Acl                    $acl
 * @property \Model\Action                 $action
 * @property \Model\Authentication         $authentication
 * @property \Model\Board                  $board
 * @property \Model\Budget                 $budget
 * @property \Model\Category               $category
 * @property \Model\Color                  $color
 * @property \Model\Comment                $comment
 * @property \Model\Config                 $config
 * @property \Model\Currency               $currency
 * @property \Model\DateParser             $dateParser
 * @property \Model\File                   $file
 * @property \Model\HourlyRate             $hourlyRate
 * @property \Model\LastLogin              $lastLogin
 * @property \Model\Link                   $link
 * @property \Model\Notification           $notification
 * @property \Model\Project                $project
 * @property \Model\ProjectActivity        $projectActivity
 * @property \Model\ProjectAnalytic        $projectAnalytic
 * @property \Model\ProjectDuplication     $projectDuplication
 * @property \Model\ProjectDailySummary    $projectDailySummary
 * @property \Model\ProjectIntegration     $projectIntegration
 * @property \Model\ProjectPermission      $projectPermission
 * @property \Model\Subtask                $subtask
 * @property \Model\SubtaskExport          $subtaskExport
 * @property \Model\SubtaskForecast        $subtaskForecast
 * @property \Model\SubtaskTimeTracking    $subtaskTimeTracking
 * @property \Model\Swimlane               $swimlane
 * @property \Model\Task                   $task
 * @property \Model\TaskCreation           $taskCreation
 * @property \Model\TaskDuplication        $taskDuplication
 * @property \Model\TaskExport             $taskExport
 * @property \Model\TaskFinder             $taskFinder
 * @property \Model\TaskFilter             $taskFilter
 * @property \Model\TaskLink               $taskLink
 * @property \Model\TaskModification       $taskModification
 * @property \Model\TaskPermission         $taskPermission
 * @property \Model\TaskPosition           $taskPosition
 * @property \Model\TaskStatus             $taskStatus
 * @property \Model\TaskValidator          $taskValidator
 * @property \Model\Timetable              $timetable
 * @property \Model\TimetableDay           $timetableDay
 * @property \Model\TimetableExtra         $timetableExtra
 * @property \Model\TimetableOff           $timetableOff
 * @property \Model\TimetableWeek          $timetableWeek
 * @property \Model\Transition             $transition
 * @property \Model\User                   $user
 * @property \Model\UserSession            $userSession
 * @property \Model\Webhook                $webhook
 */
abstract class Base
{
    /**
     * Container instance
     *
     * @access protected
     * @var \Pimple\Container
     */
    protected $container;

    /**
     * Constructor
     *
     * @access public
     * @param  \Pimple\Container   $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * Load automatically models
     *
     * @access public
     * @param  string $name Model name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->container[$name];
    }
}
