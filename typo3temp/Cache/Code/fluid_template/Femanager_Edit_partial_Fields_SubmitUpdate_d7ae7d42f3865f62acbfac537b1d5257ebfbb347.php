<?php
class FluidCache_Femanager_Edit_partial_Fields_SubmitUpdate_d7ae7d42f3865f62acbfac537b1d5257ebfbb347 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="femanager_fieldset femanager_submit control-group">
	<div class="controls">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments1 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments2 = array();
$arguments2['key'] = 'submitEdit';
$arguments2['id'] = NULL;
$arguments2['default'] = NULL;
$arguments2['htmlEscape'] = NULL;
$arguments2['arguments'] = NULL;
$arguments2['extensionName'] = NULL;
$renderChildrenClosure3 = function() {return NULL;};
$arguments1['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);
$arguments1['id'] = 'femanager_field_submit';
$arguments1['class'] = 'btn btn-primary btn-large';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['name'] = NULL;
$arguments1['property'] = NULL;
$arguments1['disabled'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};
$viewHelper5 = $self->getViewHelper('$viewHelper5', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper5->setArguments($arguments1);
$viewHelper5->setRenderingContext($renderingContext);
$viewHelper5->setRenderChildrenClosure($renderChildrenClosure4);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output0 .= $viewHelper5->initializeArgumentsAndRender();

$output0 .= '
	</div>
</div>';


return $output0;
}


}
#1507232167    2499      