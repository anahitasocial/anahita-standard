<?php 

use Composer\Script\Event;

/**
 * Callback class 
 *
 */
class StandardScriptCallback
{
    /**
     * Post Update
     * 
     * @param Event $event
     * 
     * @return void
     */
    static public function postUpdate(Event $event)
    {
        if ( file_exists(__DIR__.'/www/configuration.php') )
        {
            $io = $event->getIO();
            //re-symlink
            passthru("./anahita site:init -n");
            //run-migration
            passthru("./anahita db:migrate:up");
        }
    }
    
    /**
     * Post create project
     * 
     * @param Event $event
     * 
     * @return void
     */
    static public function postCreatProject(Event $event)
    {
        passthru("./anahita site:init");
    }
}


?>
