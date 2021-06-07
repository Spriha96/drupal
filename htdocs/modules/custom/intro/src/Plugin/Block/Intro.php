<?php 

namespace Drupal\intro\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Intro' Block.
 *
 * @Block(
 *   id = "intro_block",
 *   admin_label = @Translation("Intro block"),
 *   category = @Translation("Our example custom intro block"),
 * )
 */
class Intro extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->getIntro(),
    ];
  }

  /**
   * Private function for getting intro section.
   */
  private function getIntro() {
    $intro = '
        <div class="container-fluid" id="intro">
          <div id="intro-styles">
            <h3>BRIGHTEDGE INNOVATIONS</h3>
            <h1>SEO at the Speed of Search</h1>
            <p>The industrys first and only SEO solution to give marketers real-time research, recommendations, and rankings–everything an SEO needs all in a unified platform.</p>
            <form><input type="submit" class="button" value="Learn More"></form>
          </div>
        </div>
    ';
    return $intro;
  }

}