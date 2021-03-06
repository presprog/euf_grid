<?php

/**
 * @package   EuF-Grid
 * @author    Sebastian Buck
 * @license   LGPL
 * @copyright Erdmann & Freunde
 */



class FormRowStart extends Widget
{

	/**
	 * Template
	 *
	 * @var string
	 */
	protected $strTemplate = 'form_rowStart';


	/**
	 * Do not validate
	 */
	public function validate()
	{
		return;
	}


	/**
	 * Parse the template file and return it as string
	 *
	 * @param array $arrAttributes An optional attributes array
	 *
	 * @return string The template markup
	 */
	public function parse($arrAttributes=null)
	{

		// Return a wildcard in the back end
		if (TL_MODE == 'BE')
		{
      $strCustomClasses = "";

      if($this->strClass) {
        $strCustomClasses .= ", ";
        $strCustomClasses .= str_replace(" ", ", ", $this->strClass);
      }

			/** @var \BackendTemplate|object $objTemplate */
			$objTemplate = new \BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### E&F GRID: ' . $GLOBALS['TL_LANG']['FFL']['rowStart'][0] . '  ###';
			$objTemplate->wildcard .= '<div class="tl_content_right tl_gray m12">('.$GLOBALS['EUF_GRID_SETTING']['row'].$strCustomClasses.')</div>';

			return $objTemplate->parse();

		}

		return parent::parse($arrAttributes);
	}


	/**
	 * Generate the widget and return it as string
	 *
	 * @return string The widget markup
	 */
	public function generate()
	{
    return "";
	}
}
