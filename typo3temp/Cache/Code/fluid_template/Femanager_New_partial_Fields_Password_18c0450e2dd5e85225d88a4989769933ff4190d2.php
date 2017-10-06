<?php
class FluidCache_Femanager_New_partial_Fields_Password_18c0450e2dd5e85225d88a4989769933ff4190d2 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div class="femanager_fieldset femanager_password control-group">
	<label for="femanager_field_password" class="control-label">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'tx_femanager_domain_model_user.password';
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
$arguments4['fieldName'] = 'password';
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper
$arguments8 = array();
$arguments8['id'] = 'femanager_field_password';
$arguments8['property'] = 'password';
$arguments8['class'] = 'input-block-level';
$arguments8['value'] = '';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Validation\FormValidationDataViewHelper
$arguments9 = array();
$arguments9['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments9['fieldName'] = 'password';
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
$arguments8['name'] = NULL;
$arguments8['disabled'] = NULL;
$arguments8['maxlength'] = NULL;
$arguments8['readonly'] = NULL;
$arguments8['size'] = NULL;
$arguments8['errorClass'] = 'f3-form-error';
$arguments8['dir'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper');
$viewHelper13->setArguments($arguments8);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper

$output0 .= $viewHelper13->initializeArgumentsAndRender();

$output0 .= '
	</div>
</div>

<div class="femanager_fieldset femanager_password_repeat control-group">
	<label for="femanager_field_password_repeat" class="control-label">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments14 = array();
$arguments14['key'] = 'passwordRepeat';
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['htmlEscape'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$renderChildrenClosure15 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments16 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Validation\IsRequiredFieldViewHelper
$arguments17 = array();
$arguments17['fieldName'] = 'password';
$renderChildrenClosure18 = function() {return NULL;};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'In2code\Femanager\ViewHelpers\Validation\IsRequiredFieldViewHelper');
$viewHelper19->setArguments($arguments17);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper In2code\Femanager\ViewHelpers\Validation\IsRequiredFieldViewHelper
$arguments16['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper19->initializeArgumentsAndRender());
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<span>*</span>
		';
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure20, $renderingContext);

$output0 .= '
	</label>
	<div class="controls">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper
$arguments21 = array();
$arguments21['id'] = 'femanager_field_password_repeat';
$arguments21['name'] = 'password_repeat';
$arguments21['class'] = 'input-block-level';
$arguments21['value'] = '';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Validation\FormValidationDataViewHelper
$arguments22 = array();
$arguments22['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments22['fieldName'] = 'password_repeat';
$arguments22['additionalAttributes'] = array (
);
$renderChildrenClosure23 = function() {return NULL;};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'In2code\Femanager\ViewHelpers\Validation\FormValidationDataViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper In2code\Femanager\ViewHelpers\Validation\FormValidationDataViewHelper
$arguments21['additionalAttributes'] = $viewHelper24->initializeArgumentsAndRender();
$arguments21['data'] = NULL;
$arguments21['property'] = NULL;
$arguments21['disabled'] = NULL;
$arguments21['maxlength'] = NULL;
$arguments21['readonly'] = NULL;
$arguments21['size'] = NULL;
$arguments21['errorClass'] = 'f3-form-error';
$arguments21['dir'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$renderChildrenClosure25 = function() {return NULL;};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper');
$viewHelper26->setArguments($arguments21);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper

$output0 .= $viewHelper26->initializeArgumentsAndRender();

$output0 .= '
	</div>
</div>
';


return $output0;
}


}
#1507281417    8825      