<?php
namespace Craft;

/**
 * Class EasyPost_ShippingFieldType
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2015, Pixel & Tonic, Inc.
 * @license   https://craftcommerce.com/license Craft Commerce License Agreement
 * @see       https://craftcommerce.com
 * @package   craft.plugins.easypost.fieldtypes
 * @since     1.0
 */
class EasyPost_ShippingFieldType extends BaseFieldType
{
	// Properties
	// =========================================================================

	/**
	 * @inheritDoc IComponentType::getName()
	 *
	 * @return string
	 */
	public function getName()
	{
		return Craft::t('Easy Post Shipping');
	}

	/**
	 * @inheritDoc IFieldType::onBeforeSave()
	 *
	 * @return null
	 */
	public function onBeforeSave()
	{
		parent::onBeforeSave(); // TODO: Change the autogenerated stub
	}

	/**
	 * @inheritDoc IFieldType::onAfterSave()
	 *
	 * @return null
	 */
	public function onAfterSave()
	{
		parent::onAfterSave(); // TODO: Change the autogenerated stub
	}

	/**
	 * @inheritDoc IFieldType::onBeforeDelete()
	 *
	 * @return null
	 */
	public function onBeforeDelete()
	{
		parent::onBeforeDelete(); // TODO: Change the autogenerated stub
	}

	/**
	 * @inheritDoc IFieldType::onAfterDelete()
	 *
	 * @return null
	 */
	public function onAfterDelete()
	{
		parent::onAfterDelete(); // TODO: Change the autogenerated stub
	}

	/**
	 * @inheritDoc IFieldType::getInputHtml()
	 *
	 * @param string $name
	 * @param mixed  $value
	 *
	 * @return string
	 */
	public function getInputHtml($name, $value)
	{
		return parent::getInputHtml($name, $value); // TODO: Change the autogenerated stub
	}

	/**
	 * @inheritDoc IFieldType::getStaticHtml()
	 *
	 * @param mixed $value
	 *
	 * @return string
	 */
	public function getStaticHtml($value)
	{
		return parent::getStaticHtml($value); // TODO: Change the autogenerated stub
	}

	/**
	 * @inheritDoc IFieldType::prepValueFromPost()
	 *
	 * @param mixed $value
	 *
	 * @return mixed
	 */
	public function prepValueFromPost($value)
	{
		return parent::prepValueFromPost($value); // TODO: Change the autogenerated stub
	}

	/**
	 * @inheritDoc IFieldType::validate()
	 *
	 * @param mixed $value
	 *
	 * @return true|string|array
	 */
	public function validate($value)
	{
		return parent::validate($value); // TODO: Change the autogenerated stub
	}

	/**
	 * @inheritDoc IFieldType::onAfterElementSave()
	 *
	 * @return null
	 */
	public function onAfterElementSave()
	{
		parent::onAfterElementSave(); // TODO: Change the autogenerated stub
	}

	/**
	 * @inheritDoc IFieldType::getSearchKeywords()
	 *
	 * @param mixed $value
	 *
	 * @return string
	 */
	public function getSearchKeywords($value)
	{
		return parent::getSearchKeywords($value); // TODO: Change the autogenerated stub
	}

	/**
	 * @inheritDoc IPreviewableFieldType::getTableAttributeHtml()
	 *
	 * @param mixed $value
	 *
	 * @return string
	 */
	public function getTableAttributeHtml($value)
	{
		return parent::getTableAttributeHtml($value); // TODO: Change the autogenerated stub
	}

	/**
	 * @inheritDoc IFieldType::prepValue()
	 *
	 * @param mixed $value
	 *
	 * @return mixed
	 */
	public function prepValue($value)
	{
		return parent::prepValue($value); // TODO: Change the autogenerated stub
	}

	/**
	 * @inheritDoc IFieldType::modifyElementsQuery()
	 *
	 * @param DbCommand $query
	 * @param mixed     $value
	 *
	 * @return null|false
	 */
	public function modifyElementsQuery(DbCommand $query, $value)
	{
		return parent::modifyElementsQuery($query, $value); // TODO: Change the autogenerated stub
	}

	/**
	 * Sets whether the field is fresh.
	 *
	 * @param bool|null $isFresh
	 *
	 * @return null
	 */
	public function setIsFresh($isFresh)
	{
		parent::setIsFresh($isFresh); // TODO: Change the autogenerated stub
	}

	/**
	 * Returns the location in POST that this field's content was pulled from.
	 *
	 * @return string|null
	 */
	protected function getContentPostLocation()
	{
		return parent::getContentPostLocation(); // TODO: Change the autogenerated stub
	}

	/**
	 * Returns whether this is the first time the element's content has been edited.
	 *
	 * @return bool
	 */
	protected function isFresh()
	{
		return parent::isFresh(); // TODO: Change the autogenerated stub
	}
}