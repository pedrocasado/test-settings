<?php

namespace App\Controller;

use App\Settings\AppSettings;
use Jbtronics\SettingsBundle\Manager\SettingsManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController {
    #[Route(path: '/', name: 'homepage')]
    public function homepage(
        SettingsManagerInterface $settingsManager,
    ): Response {
        /** @var AppSettings $settings */
        $settings = $settingsManager->get(AppSettings::class);

        echo $settings->myString;

        $settings->myString = 'pedro';
        $settingsManager->save($settings);

        exit;
    }
}