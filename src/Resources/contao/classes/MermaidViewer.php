<?php
use Contao\ContentElement;
use Contao\System;

class MermaidViewer extends ContentElement
{
	protected $strTemplate = 'ce_mermaid';

	public function generate()
	{
		$request = System::getContainer()->get('request_stack')->getCurrentRequest();
		if ($request && System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest($request))
		{
			return '<pre class="mermaid">'.$this->mermaid.'</pre>';	
		}

		return parent::generate();
	}//end generate


	protected function compile(){
		$this->Template->mermaid = $this->mermaid;
	}//end compile

}//end class

