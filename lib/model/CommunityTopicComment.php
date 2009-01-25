<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

class CommunityTopicComment extends BaseCommunityTopicComment
{
  public function isDeletable($memberId)
  {
    return ($this->getMemberId() === $memberId || $this->getCommunityTopic()->isEditable($memberId));
  }
}
