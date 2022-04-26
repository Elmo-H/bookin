<?php
/**
 * Setup: core/quote block
 *
 * @package axio
 */

/**
 * Allow block
 */
add_filter('allowed_block_types_all', function($blocks, $block_editor_context) {

  $blocks[] = 'core/quote';
  return $blocks;

}, 11, 2);
