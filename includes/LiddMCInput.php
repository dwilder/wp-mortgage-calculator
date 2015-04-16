<?php
/**
 * A class to define inputs
 *
 * @package Lidd's Mortgage Calculator
 * @since 2.0.0
 */
class LiddMCInput
{	

	/**
	 * Store the name
	 *
	 * @var string
	 */
	protected $name;
	
	/**
	 * Store the input label
	 *
	 * @var string|null
	 */
	protected $label = null;

	/**
	 * Store the placeholder
	 *
	 * @var string|null
	 */
	protected $placeholder = null;

	/**
	 * Store the class
	 *
	 * @var string|null
	 */
	protected $class = null;

	/**
	 * Store the value.
	 *
	 * @var string|null
	 */
	protected $value = null;

	/**
	 * Store CSS theme option.
	 *
	 * @var string|null
	 */
	protected $theme = null;

	/**
	 * Store CSS layout option.
	 *
	 * @var int|null
	 */
	protected $css_layout = null;
	
	/**
	 * Set the label.
	 *
	 * @param  string   $label   The input label.
	 */
	public function setLabel( $label )
	{
		$this->label = $label;
	}
	
	/**
	 * Set placeholder.
	 *
	 * @param  string   $placeholder   The input placeholder.
	 */
	public function setPlaceholder( $placeholder )
	{
		$this->placeholder = $placeholder;
	}
	
	/**
	 * Set the input class.
	 *
	 * @param  string   $class   The input class.
	 */
	public function setClass( $class )
	{
		$this->class = $class;
	}
	
	/**
	 * Set the input value.
	 *
	 * @param  string   $value   The input value.
	 */
	public function setValue( $value )
	{
		$this->value = $value;
	}
	
	/**
	 * Get the error span for display.
	 *
	 * @return  string   The HTML for the error display span.
	 */
	protected function getError()
	{
		return '<span id="' . esc_attr( $this->name ) . '-error"></span>';
	}
	
}
