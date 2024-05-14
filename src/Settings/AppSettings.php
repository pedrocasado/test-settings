<?php

namespace App\Settings;

use Jbtronics\SettingsBundle\Settings\Settings;
use Jbtronics\SettingsBundle\Settings\SettingsParameter;
use Jbtronics\SettingsBundle\Settings\SettingsTrait;
use Jbtronics\SettingsBundle\Storage\ORMStorageAdapter;
use Jbtronics\SettingsBundle\Metadata\EnvVarMode;

#[Settings(storageAdapter: ORMStorageAdapter::class, storageAdapterOptions: ['entity_class' => 'App\Entity\Settings'])]
class AppSettings
{
    use SettingsTrait; // Disable constructor and __clone methods

    #[SettingsParameter(envVar: 'MY_STRING', envVarMode: EnvVarMode::OVERWRITE)]
    public ?string $myString = null;

}
