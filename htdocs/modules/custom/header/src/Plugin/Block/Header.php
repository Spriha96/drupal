<?php 

namespace Drupal\header\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Header' Block.
 *
 * @Block(
 *   id = "header_block",
 *   admin_label = @Translation("Header block"),
 *   category = @Translation("Our example custom header block"),
 * )
 */
class Header extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->getHeader(),
    ];
  }

  /**
   * Private function for getting header section.
   */
  private function getHeader() {
    $header = '
      <div class="brightedge_header sticky" id="brightedge_header">
        <h2>My Header</h2>
      </div>
    ';
    return $header;
  }

}