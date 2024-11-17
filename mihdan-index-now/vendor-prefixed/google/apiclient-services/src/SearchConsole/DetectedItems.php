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
class DetectedItems extends \Mihdan\IndexNow\Dependencies\Google\Collection
{
    protected $collection_key = 'items';
    protected $itemsType = Item::class;
    protected $itemsDataType = 'array';
    /**
     * @var string
     */
    public $richResultType;
    /**
     * @param Item[]
     */
    public function setItems($items)
    {
        $this->items = $items;
    }
    /**
     * @return Item[]
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * @param string
     */
    public function setRichResultType($richResultType)
    {
        $this->richResultType = $richResultType;
    }
    /**
     * @return string
     */
    public function getRichResultType()
    {
        return $this->richResultType;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(DetectedItems::class, 'Mihdan\\IndexNow\\Dependencies\\Google_Service_SearchConsole_DetectedItems');