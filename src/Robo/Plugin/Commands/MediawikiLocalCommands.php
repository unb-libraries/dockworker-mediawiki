<?php

namespace Dockworker\Robo\Plugin\Commands;

use Dockworker\Robo\Plugin\Commands\DockworkerLocalCommands;

/**
 * Defines the commands used to interact with a local Mediawiki application.
 */
class MediawikiLocalCommands extends DockworkerLocalCommands {

  /**
   * Provides log checker with ignored log exception items for local Mediawiki.
   *
   * @hook on-event dockworker-local-log-error-exceptions
   */
  public function getErrorLogExceptions() {
    return [];
  }

}
