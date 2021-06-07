<?php 

namespace Drupal\servic\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Servic' Block.
 *
 * @Block(
 *   id = "servic_block",
 *   admin_label = @Translation("Servic block"),
 *   category = @Translation("Our example custom servic block"),
 * )
 */
class Servic extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->getServic(),
    ];
  }

  /**
   * Private function for getting servic section.
   */
  private function getServic() {
    $intro = '
        <div class="container-fluid" id="servic">
          <div id="servic-intro">
            <h1>Engage Customers Across the Entire Customer Journey</h1>
            <h3>Discover how the BrightEdge platform reveals the intent behind search queries, exposes competitors for each content topic, prioritizes efforts by forecasting business impact, guides content creation and optimization, and monitors content performance at any granularity.</h3>
          </div>
          <div id="servic-services">
            <div class="row">
              <div class="col-sm-1">
              </div>
              <div class="col-sm-2">
                <div class="servic_card">
                  <div class="servic_container">
                    <img class="service_pic">
                    <h4><b>Search</b></h4> 
                    <p>Discover what customers are searching and get there before competitors</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="servic_card">
                  <div class="servic_container">
                    <img class="service_pic">
                    <h4><b>Content</b></h4> 
                    <p>Create a content marketing strategy that targets, performs, and delights</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="servic_card">
                  <div class="servic_container">
                    <img class="service_pic">
                    <h4><b>Social</b></h4> 
                    <p>Boost the performance of your Facebook and Twitter social campaigns</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="servic_card">
                  <div class="servic_container">
                    <img class="service_pic">
                    <h4><b>Local</b></h4> 
                    <p>Bridge gap between digital and physical locations with intelligent content</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="servic_card">
                  <div class="servic_container">
                    <img class="service_pic">
                    <h4><b>Mobile</b></h4> 
                    <p>Win micro-moments by putting mobile consumers at the center</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-1">
              </div>
            </div>
          </div>
        </div>
    ';
    return $intro;
  }

}