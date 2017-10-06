<?php
class FluidCache_Femanager_Edit_partial_Fields_Email_906a702b751722827c39e26c14f5be0a2ce51899 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div class="femanager_fieldset femanager_email control-group">
	<label for="femanager_field_email" class="control-label">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'tx_femanager_domain_model_user.email';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments3 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Validation\IsRequiredFieldViewHelper
$arguments4 = array();
$arguments4['fieldName'] = 'email';
$renderChildrenClosure5 = function() {return NULL;};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'In2code\Femanager\ViewHelpers\Validation\IsRequiredFieldViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper In2code\Femanager\ViewHelpers\Validation\IsRequiredFieldViewHelper
$arguments3['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper6->initializeArgumentsAndRender());
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<span>*</span>
		';
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure7, $renderingContext);

$output0 .= '
	</label>
	<div class="controls">
		';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Form\TextfieldViewHelper
$arguments8 = array();
$arguments8['id'] = 'femanager_field_email';
$arguments8['property'] = 'email';
$arguments8['class'] = 'input-block-level';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Validation\FormValidationDataViewHelper
$arguments9 = array();
$arguments9['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments9['fieldName'] = 'email';
$arguments9['additionalAttributes'] = array (
);
$renderChildrenClosure10 = function() {return NULL;};
$viewHelper11 = $self->getViewHelper('$viewHelper11', $renderingContext, 'In2code\Femanager\ViewHelpers\Validation\FormValidationDataViewHelper');
$viewHelper11->setArguments($arguments9);
$viewHelper11->setRenderingContext($renderingContext);
$viewHelper11->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper In2code\Femanager\ViewHelpers\Validation\FormValidationDataViewHelper
$arguments8['additionalAttributes'] = $viewHelper11->initializeArgumentsAndRender();
$arguments8['data'] = NULL;
$arguments8['required'] = false;
$arguments8['type'] = 'text';
$arguments8['name'] = NULL;
$arguments8['value'] = NULL;
$arguments8['autofocus'] = NULL;
$arguments8['disabled'] = NULL;
$arguments8['maxlength'] = NULL;
$arguments8['readonly'] = NULL;
$arguments8['size'] = NULL;
$arguments8['placeholder'] = NULL;
$arguments8['pattern'] = NULL;
$arguments8['errorClass'] = 'f3-form-error';
$arguments8['dir'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'In2code\Femanager\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper13->setArguments($arguments8);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper In2code\Femanager\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper13->initializeArgumentsAndRender();

$output0 .= '
	</div>
</div>
';


return $output0;
}


}
#1507232167    4955      