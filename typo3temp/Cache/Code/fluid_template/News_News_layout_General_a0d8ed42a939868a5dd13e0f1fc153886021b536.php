<?php
class FluidCache_News_News_layout_General_a0d8ed42a939868a5dd13e0f1fc153886021b536 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '<div class="news" >
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['section'] = 'content';
$arguments1['partial'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</div>
';


return $output0;
}


}
#1507277042    1295      