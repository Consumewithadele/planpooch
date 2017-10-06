<?php
class FluidCache_Femanager_Edit_partial_Fields_LastName_498ffddccf0463db0ea18b104721ff750c8182c8 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '
<div class="femanager_fieldset femanager_lastname control-group">
	<label for="femanager_field_lastName" class="control-label">
		Last name
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Validation\IsRequiredFieldViewHelper
$arguments2 = array();
$arguments2['fieldName'] = 'lastName';
$renderChildrenClosure3 = function() {return NULL;};
$viewHelper4 = $self->getViewHelper('$viewHelper4', $renderingContext, 'In2code\Femanager\ViewHelpers\Validation\IsRequiredFieldViewHelper');
$viewHelper4->setArguments($arguments2);
$viewHelper4->setRenderingContext($renderingContext);
$viewHelper4->setRenderChildrenClosure($renderChildrenClosure3);
// End of ViewHelper In2code\Femanager\ViewHelpers\Validation\IsRequiredFieldViewHelper
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper4->initializeArgumentsAndRender());
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<span>*</span>
		';
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure5, $renderingContext);

$output0 .= '
	</label>
	<div class="controls">
		';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Form\TextfieldViewHelper
$arguments6 = array();
$arguments6['id'] = 'femanager_field_lastName';
$arguments6['property'] = 'lastName';
$arguments6['class'] = 'input-block-level';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Validation\FormValidationDataViewHelper
$arguments7 = array();
$arguments7['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments7['fieldName'] = 'lastName';
$arguments7['additionalAttributes'] = array (
);
$renderChildrenClosure8 = function() {return NULL;};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'In2code\Femanager\ViewHelpers\Validation\FormValidationDataViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper In2code\Femanager\ViewHelpers\Validation\FormValidationDataViewHelper
$arguments6['additionalAttributes'] = $viewHelper9->initializeArgumentsAndRender();
$arguments6['data'] = NULL;
$arguments6['required'] = false;
$arguments6['type'] = 'text';
$arguments6['name'] = NULL;
$arguments6['value'] = NULL;
$arguments6['autofocus'] = NULL;
$arguments6['disabled'] = NULL;
$arguments6['maxlength'] = NULL;
$arguments6['readonly'] = NULL;
$arguments6['size'] = NULL;
$arguments6['placeholder'] = NULL;
$arguments6['pattern'] = NULL;
$arguments6['errorClass'] = 'f3-form-error';
$arguments6['dir'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$renderChildrenClosure10 = function() {return NULL;};
$viewHelper11 = $self->getViewHelper('$viewHelper11', $renderingContext, 'In2code\Femanager\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper11->setArguments($arguments6);
$viewHelper11->setRenderingContext($renderingContext);
$viewHelper11->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper In2code\Femanager\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper11->initializeArgumentsAndRender();

$output0 .= '
	</div>
</div>
';


return $output0;
}


}
#1507232167    4457      