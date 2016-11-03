<?php

namespace MarvinCaspar\CaptainHook;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Hooks
{
    public static function install(Event $event)
    {
        $composer = $event->getComposer();
        
        copy('vendor/mc388/captainhook/src/commit-msg', './.git/hooks/commit-msg');
        chmod('./.git/hooks/commit-msg', 0755);
        copy('vendor/mc388/captainhook/src/pre-commit', './.git/hooks/pre-commit');
        chmod('./.git/hooks/pre-commit', 0755);
    }
}
