<div class="alert alert-info alert-block">
	<p>Welcome to the gadget for the Hello World app. A gadget is 
	automatically added to the Dashboard whenever a social app is installed.
	The content displayed here is defined in the gadget layout for the Hello 
	World view. You can edit this file at <strong style="word-wrap:break-word"><?= realpath($this->getPath()) ?></strong>.</p>

	<p>The view and layout that's used for the gadget is defined in the 
	component entity's <strong>_setGadgets</strong> method. There are two 
	default modes: profile and dashboard. The settings for the profile mode 
	are used on actor profiles and the other settings are used for the dashboard
	(See: <strong style="word-wrap:break-word"><?= realpath(dirname($this->getPath()).'/../../../domains/entities/component.php') ?></strong>).</p>

	<p>Next check out the composer layout, by clicking on Stories and 
	selecting Hello World in the Composer drop down.</p>
</div>