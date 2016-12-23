<?php

namespace Panopto\SessionManagement;

class UpdateSessionsAvailabilityStartSettingsResponse
{

    /**
     * @var boolean $UpdateSessionsAvailabilityStartSettingsResult
     */
    protected $UpdateSessionsAvailabilityStartSettingsResult = null;

    /**
     * @param boolean $UpdateSessionsAvailabilityStartSettingsResult
     */
    public function __construct($UpdateSessionsAvailabilityStartSettingsResult)
    {
      $this->UpdateSessionsAvailabilityStartSettingsResult = $UpdateSessionsAvailabilityStartSettingsResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateSessionsAvailabilityStartSettingsResult()
    {
      return $this->UpdateSessionsAvailabilityStartSettingsResult;
    }

    /**
     * @param boolean $UpdateSessionsAvailabilityStartSettingsResult
     * @return \Panopto\SessionManagement\UpdateSessionsAvailabilityStartSettingsResponse
     */
    public function setUpdateSessionsAvailabilityStartSettingsResult($UpdateSessionsAvailabilityStartSettingsResult)
    {
      $this->UpdateSessionsAvailabilityStartSettingsResult = $UpdateSessionsAvailabilityStartSettingsResult;
      return $this;
    }

}
