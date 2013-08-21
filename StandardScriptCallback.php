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
        $io = $event->getIO();
        if ( $io->askConfirmation('<info>Do you want to run database migrations ?</info>') ) {
            $io->write('<info>Running database migrations...</info>');
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
        
    }
}


?>