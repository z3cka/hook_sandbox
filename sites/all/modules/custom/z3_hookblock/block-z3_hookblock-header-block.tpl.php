<?php

/**
 * @file block-z3_hookblock-header-block.tpl.php
 *
 * Theme implementation to display a custom block.
 *
 * Available variables:
 * - $section: this block's content
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 */
?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?>">
<?php if ($block->subject): ?>
  <h2><?php print $block->subject ?></h2>
<?php endif;?>
	<h1>I'm printed from a template from within a module!</h1>
  <div class="content">
    <?php print $block->content ?>
		<?php print $section ?>
  </div>
</div>
