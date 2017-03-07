<div class="alert alert-info alert-block">
	<p>This is the composer for the Hello Worlds app. By default, the composer
	and profile gadgets only show up after an app has been added to a user's profile.
	For simplicities sake, the Hello World app has been assigned to all actor profiles
	automatically during installation.</p>

	<p>Generally, the composer would be a form that allows users to create entities
	in the social app. This layout can be edited at <strong style="word-wrap:break-word"><?= realpath($this->getPath()) ?></strong>.
	The layout and view that is used for the composer is set in the component entity's
	<strong>_setComposers</strong> method (See: <strong style="word-wrap:break-word"><?= realpath(dirname($this->getPath()).'/../../../domains/entities/component.php') ?></strong>).</p>

	<p>Next, click on the viewer drop down in the top right of the menu and 
	click on Hello World.</p>
</div>