<?php defined('KOOWA') or die() ?>

 <!-- Translated Text example -->
<h1><?= @text('COM-HELLOWORLD') ?></h1>

<p>Hello <?= $viewer->guest() ? 'Guest' : @name($viewer) ?>, welcome to the 
default view of the Hello World app.</p>

<p>When a view or layout isn't defined in the URL, eg. 
?view=items&amp;?layout=list, the default is used. The default view is the 
view matching a component's name. So for the Hello World app, the default 
view is helloworld and the default layout is default.php 
(See: <strong style="word-wrap:break-word"><?= realpath($this->getPath()) ?></strong>).</p>

<p>The menu item is added to the viewer drop down in the <strong>_setMenuLinks</strong> 
method in the component entity (See: 
<strong style="word-wrap:break-word"><?= realpath(dirname($this->getPath()).'/../../../domains/entities/component.php') ?></strong>).</p>

<p>If you have any questions, please head on over to 
<a target="_blank" href="https://www.getanahita.com/groups/107732-tribe-support">Tribe Support</a> for help and support.</p>