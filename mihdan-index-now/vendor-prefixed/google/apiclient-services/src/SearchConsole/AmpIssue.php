<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace Mihdan\IndexNow\Dependencies\Google\Service\SearchConsole;

/** @internal */
class AmpIssue extends \Mihdan\IndexNow\Dependencies\Google\Model
{
    /**
     * @var string
     */
    public $issueMessage;
    /**
     * @var string
     */
    public $severity;
    /**
     * @param string
     */
    public function setIssueMessage($issueMessage)
    {
        $this->issueMessage = $issueMessage;
    }
    /**
     * @return string
     */
    public function getIssueMessage()
    {
        return $this->issueMessage;
    }
    /**
     * @param string
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
    }
    /**
     * @return string
     */
    public function getSeverity()
    {
        return $this->severity;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(AmpIssue::class, 'Mihdan\\IndexNow\\Dependencies\\Google_Service_SearchConsole_AmpIssue');
