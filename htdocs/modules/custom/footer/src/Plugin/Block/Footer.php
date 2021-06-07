<?php 

namespace Drupal\footer\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Footer' Block.
 *
 * @Block(
 *   id = "footer_block",
 *   admin_label = @Translation("Footer block"),
 *   category = @Translation("Our example custom Footer block"),
 * )
 */
class Footer extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->getFooter(),
    ];
  }

  /**
   * Private function for getting footer section.
   */
  private function getFooter() {
    $footer = '
      <div id="footer">
        <div class="row">
          <div class="col-sm-2">
            <div class="row">
              <p>About us<p>
            </div>
            <div class="row">
              <p>Careers<p>
            </div>
            <div class="row">
              <p>Contact<p>
            </div>
          </div>

          <div class="col-sm-2">
            <div class="row">
              <p>Investors<p>
            </div>
            <div class="row">
              <p>Partners<p>
            </div>
            <div class="row">
              <p>Press Releases<p>
            </div>
          </div>

          <div class="col-sm-2">
            <div class="row">
              <p>Blog<p>
            </div>
            <div class="row">
              <p>News<p>
            </div>
            <div class="row">
              <p>Office Locations<p>
            </div>
          </div>

          <div class="col-sm-2">
          </div>

          <div class="col-sm-2">
            <div class="row">
              <div class="col-sm-6"><img class="social_image"></div>
              <div class="col-sm-6"><img class="social_image"></div>
            </div>
            <div class="row">
              <div class="col-sm-6"><img class="social_image"></div>
              <div class="col-sm-6"><img class="social_image"></div>
            </div>
          </div>
        </div>
      </div>
    ';
    return $footer;
  }

}