<?php

namespace Drupal\Tests\lightning_layout\ExistingSite;

use Drupal\Core\Url;
use weitzman\DrupalTestTraits\ExistingSiteBase;

/**
 * @group lightning
 * @group lightning_layout
 */
class PanelizerTest extends ExistingSiteBase {

  /**
   * Tests that default layouts have expected blocks available.
   */
  public function testAvailableBlocks() {
    $account = $this->createUser(['administer panelizer']);
    $this->drupalLogin($account);

    $machine_name = 'node__landing_page__full__default';

    // Initialize the tempstore.
    $url = Url::fromRoute('panelizer.wizard.edit', [
      'machine_name' => $machine_name,
    ]);
    $this->drupalGet($url);
    $this->assertSession()->statusCodeEquals(200);

    // View the list of available blocks.
    $this->drupalGet('/admin/structure/panels/panelizer.wizard/node__landing_page__full__default/select_block');
    $url = Url::fromRoute('panels.select_block', [
      'tempstore_id' => 'panelizer.wizard',
      'machine_name' => $machine_name,
    ]);
    $this->drupalGet($url);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->linkExists('Authored by');
  }

}
