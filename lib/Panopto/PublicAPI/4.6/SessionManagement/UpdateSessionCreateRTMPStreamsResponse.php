<?php

namespace Panopto\SessionManagement;

class UpdateSessionCreateRTMPStreamsResponse
{

    /**
     * @var ArrayOfstring $UpdateSessionCreateRTMPStreamsResult
     */
    protected $UpdateSessionCreateRTMPStreamsResult = null;

    /**
     * @param ArrayOfstring $UpdateSessionCreateRTMPStreamsResult
     */
    public function __construct($UpdateSessionCreateRTMPStreamsResult)
    {
      $this->UpdateSessionCreateRTMPStreamsResult = $UpdateSessionCreateRTMPStreamsResult;
    }

    /**
     * @return ArrayOfstring
     */
    public function getUpdateSessionCreateRTMPStreamsResult()
    {
      return $this->UpdateSessionCreateRTMPStreamsResult;
    }

    /**
     * @param ArrayOfstring $UpdateSessionCreateRTMPStreamsResult
     * @return \Panopto\SessionManagement\UpdateSessionCreateRTMPStreamsResponse
     */
    public function setUpdateSessionCreateRTMPStreamsResult($UpdateSessionCreateRTMPStreamsResult)
    {
      $this->UpdateSessionCreateRTMPStreamsResult = $UpdateSessionCreateRTMPStreamsResult;
      return $this;
    }

}
