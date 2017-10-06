<?php
class FluidCache_Standalone_template_file_DetailNotFound_9053281d363a2d697af2a5ee236ed43d19ea4fa7 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments0 = array();
$arguments0['extensionName'] = 'news';
$arguments0['key'] = 'newsNotFound';
$arguments0['id'] = NULL;
$arguments0['default'] = NULL;
$arguments0['htmlEscape'] = NULL;
$arguments0['arguments'] = NULL;
$renderChildrenClosure1 = function() {return NULL;};


return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments0, $renderChildrenClosure1, $renderingContext);
}


}
#1507237325    1277      