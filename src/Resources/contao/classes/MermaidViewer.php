<?php

class MermaidViewer extends \ContentElement
{
	protected $strTemplate = 'ce_mermaid';

	public function generate()
	{
		if (TL_MODE == 'BE')
		{

			$GLOBALS['TL_JAVASCRIPT'][] = 'bundles/jonnyspmermaid/mermaid.min.js';

			$objTemplate = new \BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '<pre class="mermaid">'.$this->mermaid.'</pre>';


			return $objTemplate->parse();	

		}
		return parent::generate();
	}//end generate



	protected function compile(){

		$GLOBALS['TL_JAVASCRIPT'][] = 'bundles/jonnyspmermaid/mermaid.min.js';
		
		$this->Template->mermaid = $this->mermaid;

	}//end compile

}//end class

