<?php

namespace App\Settings;

use Jbtronics\SettingsBundle\Settings\Settings;
use Jbtronics\SettingsBundle\Settings\SettingsParameter;
use Jbtronics\SettingsBundle\Settings\SettingsTrait;
use Jbtronics\SettingsBundle\Storage\ORMStorageAdapter;

#[Settings(storageAdapter: ORMStorageAdapter::class, storageAdapterOptions: ['entity_class' => 'App\Entity\Settings'])]
class AppSettings
{
    use SettingsTrait; // Disable constructor and __clone methods

    #[SettingsParameter()]
    public string $myString = 'default value'; // The default value can be set right here in most cases

}
