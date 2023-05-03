<?php

$GLOBALS['TL_DCA']['tl_content']['palettes']['mermaid_viewer'] = '{type_legend},type;{mermaid_legend},mermaid;{expert_legend:hide},cssID,space';

$GLOBALS['TL_DCA']['tl_content']['fields']['mermaid'] = array (
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['mermaid_viewer'],
    'inputType'               => 'textarea',
    'eval'                    => array('mandatory'=>true, 'preserveTags'=>true, 'decodeEntities'=>true, 'class'=>'monospace', 'rte'=>'ace', 'helpwizard'=>false, 'tl_class'=>'clr'),
    'sql'                     => "text NULL"
);
