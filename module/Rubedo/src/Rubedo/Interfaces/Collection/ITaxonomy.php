<?php
/**
 * Rubedo -- ECM solution
 * Copyright (c) 2013, WebTales (http://www.webtales.fr/).
 * All rights reserved.
 * licensing@webtales.fr
 *
 * Open Source License
 * ------------------------------------------------------------------------------------------
 * Rubedo is licensed under the terms of the Open Source GPL 3.0 license. 
 *
 * @category   Rubedo
 * @package    Rubedo
 * @copyright  Copyright (c) 2012-2013 WebTales (http://www.webtales.fr)
 * @license    http://www.gnu.org/licenses/gpl.html Open Source GPL 3.0 license
 */
namespace Rubedo\Interfaces\Collection;

/**
 * Interface of service handling Taxonomy
 *
 *
 * @author jbourdin
 * @category Rubedo
 * @package Rubedo
 */
interface ITaxonomy extends IAbstractCollection
{

    /**
     * Allow to find taxonomies associated to the content type id
     *
     * @param string $contentTypeId
     *            Id of the content type
     * @return array Array of results
     */
    public function findByContentTypeID ($contentTypeId);
}
