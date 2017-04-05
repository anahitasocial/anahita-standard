<?php

class ComHelloWorldDomainEntityComponent extends ComMediumDomainEntityComponent
{
	
	/**
     * {@inheritdoc}
     */
    protected function _setGadgets($actor, $gadgets, $mode)
    {
        if ($mode == 'profile') {
            $gadgets->insert('hello-world', array(
                    'title' => AnTranslator::_('COM-HELLOWORLD-GADGET-ACTOR-PROFILE'),
                    'url' => 'option=com_helloworld&view=helloworld&layout=gadget&oid='.$actor->id,
                    'action' => AnTranslator::_('LIB-AN-GADGET-VIEW-ALL'),
                    'action_url' => 'option=com_helloworld&view=helloworld&layout=list&oid='.$actor->id,
            ));
        } else {
            $gadgets->insert('hello-world', array(
                    'title' => AnTranslator::_('COM-HELLOWORLD-GADGET-ACTOR-DASHBOARD'),
                    'url' => 'option=com_helloworld&view=helloworld&layout=gadget&filter=leaders',
                    'action' => AnTranslator::_('LIB-AN-GADGET-VIEW-ALL'),
                    'action_url' => 'option=com_helloworld&view=helloworld&layout=list&filter=leaders',
            ));
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function _setComposers($actor, $composers, $mode)
    {
        $composers->insert('hello-world-composer', array(
                'title' => AnTranslator::_('COM-HELLOWORLD-COMPOSER-HELLOWORLD'),
                'placeholder' => AnTranslator::_('COM-HELLOWORLD-HELLOWORLD-ADD'),
                'url' => 'option=com_helloworld&view=helloworld&layout=composer&oid='.$actor->id,
        ));   
    }

    /**
     * {@inheritdoc}
     */
    protected function _setMenuLinks($actor, $menuItems)
    {
        $menuItems->insert('hello-world', array(
            'title' => AnTranslator::_('COM-HELLOWORLD-MENU-ITEM-HELLO-WORLD'),
            'url' => 'option=com_helloworld&view=helloworld&oid='.$actor->uniqueAlias,
        ));
    }
	
}