<?php defined('KOOWA') or die() ?>

<p>
 Showing a translated text below :
</p>

<p>
    <?= @text('COM-HELLOWORLD') ?>
</p>

<?php if ( $viewer->guest() ) : ?>

I am a guest and I don't have a name.

<?php else : ?>

My name is <?= @name($viewer) ?>. Nice to meet you.

<?php endif;?>
