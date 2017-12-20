<?php

namespace Panopto\SessionManagement;

class UpdateSessionSetRTMPBroadcastResponse
{

    /**
     * @var ArrayOfstring $UpdateSessionSetRTMPBroadcastResult
     */
    protected $UpdateSessionSetRTMPBroadcastResult = null;

    /**
     * @param ArrayOfstring $UpdateSessionSetRTMPBroadcastResult
     */
    public function __construct($UpdateSessionSetRTMPBroadcastResult)
    {
      $this->UpdateSessionSetRTMPBroadcastResult = $UpdateSessionSetRTMPBroadcastResult;
    }

    /**
     * @return ArrayOfstring
     */
    public function getUpdateSessionSetRTMPBroadcastResult()
    {
      return $this->UpdateSessionSetRTMPBroadcastResult;
    }

    /**
     * @param ArrayOfstring $UpdateSessionSetRTMPBroadcastResult
     * @return \Panopto\SessionManagement\UpdateSessionSetRTMPBroadcastResponse
     */
    public function setUpdateSessionSetRTMPBroadcastResult($UpdateSessionSetRTMPBroadcastResult)
    {
      $this->UpdateSessionSetRTMPBroadcastResult = $UpdateSessionSetRTMPBroadcastResult;
      return $this;
    }

}
