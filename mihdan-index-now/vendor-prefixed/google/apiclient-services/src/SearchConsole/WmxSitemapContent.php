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
class WmxSitemapContent extends \Mihdan\IndexNow\Dependencies\Google\Model
{
    /**
     * @var string
     */
    public $indexed;
    /**
     * @var string
     */
    public $submitted;
    /**
     * @var string
     */
    public $type;
    /**
     * @param string
     */
    public function setIndexed($indexed)
    {
        $this->indexed = $indexed;
    }
    /**
     * @return string
     */
    public function getIndexed()
    {
        return $this->indexed;
    }
    /**
     * @param string
     */
    public function setSubmitted($submitted)
    {
        $this->submitted = $submitted;
    }
    /**
     * @return string
     */
    public function getSubmitted()
    {
        return $this->submitted;
    }
    /**
     * @param string
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(WmxSitemapContent::class, 'Mihdan\\IndexNow\\Dependencies\\Google_Service_SearchConsole_WmxSitemapContent');
