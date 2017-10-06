<?php
class FluidCache_Femanager_Edit_action_edit_f9474f6600f4c0667e65459127b81bd3a85c99c5 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['partial'] = 'Misc/FlashMessages';
$arguments1['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments1['section'] = NULL;
$arguments1['optional'] = false;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments3 = array();
$arguments3['partial'] = 'Misc/FormErrors';
// Rendering Array
$array4 = array();
$array4['object'] = $currentVariableContainer->getOrNull('User');
$arguments3['arguments'] = $array4;
$arguments3['section'] = NULL;
$arguments3['optional'] = false;
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure5, $renderingContext);

$output0 .= '

		<div class="femanager_edit">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments6 = array();
// Rendering Boolean node
$arguments6['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('user'));
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output8 = '';

$output8 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments9 = array();
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments12 = array();
$arguments12['name'] = 'user';
$arguments12['object'] = $currentVariableContainer->getOrNull('user');
$arguments12['action'] = 'update';
$output13 = '';

$output13 .= 'form-horizontal ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments14 = array();
// Rendering Boolean node
$arguments14['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'edit.validation._enable.client', $renderingContext));
$arguments14['then'] = 'feManagerValidation';
$arguments14['else'] = '';
$renderChildrenClosure15 = function() {return NULL;};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
$arguments12['class'] = $output13;
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['controller'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['pluginName'] = NULL;
$arguments12['pageUid'] = NULL;
$arguments12['pageType'] = 0;
$arguments12['noCache'] = false;
$arguments12['noCacheHash'] = false;
$arguments12['section'] = '';
$arguments12['format'] = '';
$arguments12['additionalParams'] = array (
);
$arguments12['absolute'] = false;
$arguments12['addQueryString'] = false;
$arguments12['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments12['fieldNamePrefix'] = NULL;
$arguments12['actionUri'] = NULL;
$arguments12['objectName'] = NULL;
$arguments12['hiddenFieldClassName'] = NULL;
$arguments12['addQueryStringMethod'] = '';
$arguments12['enctype'] = NULL;
$arguments12['method'] = NULL;
$arguments12['onreset'] = NULL;
$arguments12['onsubmit'] = NULL;
$arguments12['target'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
						<fieldset>
							<legend>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments18 = array();
$arguments18['key'] = 'titleUpdateProfile';
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
							</legend>

							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments20 = array();
// Rendering Boolean node
$arguments20['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'edit.fields', $renderingContext));
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '

								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments23 = array();
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments26 = array();
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										If some fields are selected in the flexform
									';
};

$output25 .= '';

$output25 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments28 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments29 = array();
$arguments29['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'edit.fields', $renderingContext);
$arguments29['separator'] = ',';
$arguments29['trim'] = true;
$renderChildrenClosure30 = function() {return NULL;};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper');
$viewHelper31->setArguments($arguments29);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments28['each'] = $viewHelper31->initializeArgumentsAndRender();
$arguments28['as'] = 'field';
$arguments28['key'] = '';
$arguments28['reverse'] = false;
$arguments28['iteration'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output33 = '';

$output33 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments34 = array();
$output35 = '';

$output35 .= 'Fields/';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$arguments36 = array();
$arguments36['string'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure37 = function() {return NULL;};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\UpperViewHelper');
$viewHelper38->setArguments($arguments36);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper

$output35 .= $viewHelper38->initializeArgumentsAndRender();
$arguments34['partial'] = $output35;
$arguments34['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments34['section'] = NULL;
$arguments34['optional'] = false;
$renderChildrenClosure39 = function() {return NULL;};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure39, $renderingContext);

$output33 .= '
									';
return $output33;
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments28, $renderChildrenClosure32, $renderingContext);

$output25 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments40 = array();
$arguments40['partial'] = 'Fields/SubmitUpdate';
$arguments40['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments40['section'] = NULL;
$arguments40['optional'] = false;
$renderChildrenClosure41 = function() {return NULL;};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output25 .= '
								';
return $output25;
};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '

								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments42 = array();
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments45 = array();
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										If no fields are selected in the flexform => show all
									';
};

$output44 .= '';

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments47 = array();
$arguments47['partial'] = 'Fields/Username';
$arguments47['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments47['section'] = NULL;
$arguments47['optional'] = false;
$renderChildrenClosure48 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments49 = array();
$arguments49['partial'] = 'Fields/Password';
$arguments49['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments49['section'] = NULL;
$arguments49['optional'] = false;
$renderChildrenClosure50 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments51 = array();
$arguments51['partial'] = 'Fields/Title';
$arguments51['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments51['section'] = NULL;
$arguments51['optional'] = false;
$renderChildrenClosure52 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments53 = array();
$arguments53['partial'] = 'Fields/Name';
$arguments53['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments53['section'] = NULL;
$arguments53['optional'] = false;
$renderChildrenClosure54 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments55 = array();
$arguments55['partial'] = 'Fields/FirstName';
$arguments55['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments55['section'] = NULL;
$arguments55['optional'] = false;
$renderChildrenClosure56 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments57 = array();
$arguments57['partial'] = 'Fields/MiddleName';
$arguments57['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments57['section'] = NULL;
$arguments57['optional'] = false;
$renderChildrenClosure58 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments59 = array();
$arguments59['partial'] = 'Fields/LastName';
$arguments59['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments59['section'] = NULL;
$arguments59['optional'] = false;
$renderChildrenClosure60 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments61 = array();
$arguments61['partial'] = 'Fields/Gender';
$arguments61['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments61['section'] = NULL;
$arguments61['optional'] = false;
$renderChildrenClosure62 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments63 = array();
$arguments63['partial'] = 'Fields/DateOfBirth';
$arguments63['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments63['section'] = NULL;
$arguments63['optional'] = false;
$renderChildrenClosure64 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments65 = array();
$arguments65['partial'] = 'Fields/Company';
$arguments65['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments65['section'] = NULL;
$arguments65['optional'] = false;
$renderChildrenClosure66 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments67 = array();
$arguments67['partial'] = 'Fields/Www';
$arguments67['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments67['section'] = NULL;
$arguments67['optional'] = false;
$renderChildrenClosure68 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments69 = array();
$arguments69['partial'] = 'Fields/Email';
$arguments69['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments69['section'] = NULL;
$arguments69['optional'] = false;
$renderChildrenClosure70 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments71 = array();
$arguments71['partial'] = 'Fields/Telephone';
$arguments71['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments71['section'] = NULL;
$arguments71['optional'] = false;
$renderChildrenClosure72 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments73 = array();
$arguments73['partial'] = 'Fields/Fax';
$arguments73['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments73['section'] = NULL;
$arguments73['optional'] = false;
$renderChildrenClosure74 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments75 = array();
$arguments75['partial'] = 'Fields/Address';
$arguments75['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments75['section'] = NULL;
$arguments75['optional'] = false;
$renderChildrenClosure76 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments77 = array();
$arguments77['partial'] = 'Fields/Zip';
$arguments77['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments77['section'] = NULL;
$arguments77['optional'] = false;
$renderChildrenClosure78 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments79 = array();
$arguments79['partial'] = 'Fields/City';
$arguments79['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments79['section'] = NULL;
$arguments79['optional'] = false;
$renderChildrenClosure80 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments81 = array();
$arguments81['partial'] = 'Fields/Country';
$arguments81['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments81['section'] = NULL;
$arguments81['optional'] = false;
$renderChildrenClosure82 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments83 = array();
$arguments83['partial'] = 'Fields/Image';
$arguments83['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments83['section'] = NULL;
$arguments83['optional'] = false;
$renderChildrenClosure84 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments85 = array();
$arguments85['partial'] = 'Fields/Usergroup';
$arguments85['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments85['section'] = NULL;
$arguments85['optional'] = false;
$renderChildrenClosure86 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output44 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments87 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments88 = array();
$arguments88['settings'] = $currentVariableContainer->getOrNull('settings');
$renderChildrenClosure89 = function() {return NULL;};
$viewHelper90 = $self->getViewHelper('$viewHelper90', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper');
$viewHelper90->setArguments($arguments88);
$viewHelper90->setRenderingContext($renderingContext);
$viewHelper90->setRenderChildrenClosure($renderChildrenClosure89);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments87['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper90->initializeArgumentsAndRender());
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments93 = array();
$arguments93['partial'] = 'Fields/Captcha';
$arguments93['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments93['section'] = NULL;
$arguments93['optional'] = false;
$renderChildrenClosure94 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
									';
return $output92;
};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure91, $renderingContext);

$output44 .= '

									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments95 = array();
$arguments95['partial'] = 'Fields/SubmitUpdate';
$arguments95['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments95['section'] = NULL;
$arguments95['optional'] = false;
$renderChildrenClosure96 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output44 .= '
								';
return $output44;
};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output22 .= '

							';
return $output22;
};
$arguments20['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';

$output97 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments98 = array();
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										If some fields are selected in the flexform
									';
};

$output97 .= '';

$output97 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments100 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments101 = array();
$arguments101['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'edit.fields', $renderingContext);
$arguments101['separator'] = ',';
$arguments101['trim'] = true;
$renderChildrenClosure102 = function() {return NULL;};
$viewHelper103 = $self->getViewHelper('$viewHelper103', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper');
$viewHelper103->setArguments($arguments101);
$viewHelper103->setRenderingContext($renderingContext);
$viewHelper103->setRenderChildrenClosure($renderChildrenClosure102);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments100['each'] = $viewHelper103->initializeArgumentsAndRender();
$arguments100['as'] = 'field';
$arguments100['key'] = '';
$arguments100['reverse'] = false;
$arguments100['iteration'] = NULL;
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output105 = '';

$output105 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments106 = array();
$output107 = '';

$output107 .= 'Fields/';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$arguments108 = array();
$arguments108['string'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure109 = function() {return NULL;};
$viewHelper110 = $self->getViewHelper('$viewHelper110', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\UpperViewHelper');
$viewHelper110->setArguments($arguments108);
$viewHelper110->setRenderingContext($renderingContext);
$viewHelper110->setRenderChildrenClosure($renderChildrenClosure109);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper

$output107 .= $viewHelper110->initializeArgumentsAndRender();
$arguments106['partial'] = $output107;
$arguments106['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments106['section'] = NULL;
$arguments106['optional'] = false;
$renderChildrenClosure111 = function() {return NULL;};

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments106, $renderChildrenClosure111, $renderingContext);

$output105 .= '
									';
return $output105;
};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments100, $renderChildrenClosure104, $renderingContext);

$output97 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments112 = array();
$arguments112['partial'] = 'Fields/SubmitUpdate';
$arguments112['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments112['section'] = NULL;
$arguments112['optional'] = false;
$renderChildrenClosure113 = function() {return NULL;};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output97 .= '
								';
return $output97;
};
$arguments20['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output114 = '';

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments115 = array();
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										If no fields are selected in the flexform => show all
									';
};

$output114 .= '';

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments117 = array();
$arguments117['partial'] = 'Fields/Username';
$arguments117['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments117['section'] = NULL;
$arguments117['optional'] = false;
$renderChildrenClosure118 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments119 = array();
$arguments119['partial'] = 'Fields/Password';
$arguments119['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments119['section'] = NULL;
$arguments119['optional'] = false;
$renderChildrenClosure120 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments121 = array();
$arguments121['partial'] = 'Fields/Title';
$arguments121['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments121['section'] = NULL;
$arguments121['optional'] = false;
$renderChildrenClosure122 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments123 = array();
$arguments123['partial'] = 'Fields/Name';
$arguments123['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments123['section'] = NULL;
$arguments123['optional'] = false;
$renderChildrenClosure124 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments125 = array();
$arguments125['partial'] = 'Fields/FirstName';
$arguments125['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments125['section'] = NULL;
$arguments125['optional'] = false;
$renderChildrenClosure126 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments127 = array();
$arguments127['partial'] = 'Fields/MiddleName';
$arguments127['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments127['section'] = NULL;
$arguments127['optional'] = false;
$renderChildrenClosure128 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments129 = array();
$arguments129['partial'] = 'Fields/LastName';
$arguments129['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments129['section'] = NULL;
$arguments129['optional'] = false;
$renderChildrenClosure130 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments131 = array();
$arguments131['partial'] = 'Fields/Gender';
$arguments131['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments131['section'] = NULL;
$arguments131['optional'] = false;
$renderChildrenClosure132 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments133 = array();
$arguments133['partial'] = 'Fields/DateOfBirth';
$arguments133['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments133['section'] = NULL;
$arguments133['optional'] = false;
$renderChildrenClosure134 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments135 = array();
$arguments135['partial'] = 'Fields/Company';
$arguments135['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments135['section'] = NULL;
$arguments135['optional'] = false;
$renderChildrenClosure136 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments137 = array();
$arguments137['partial'] = 'Fields/Www';
$arguments137['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments137['section'] = NULL;
$arguments137['optional'] = false;
$renderChildrenClosure138 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments139 = array();
$arguments139['partial'] = 'Fields/Email';
$arguments139['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments139['section'] = NULL;
$arguments139['optional'] = false;
$renderChildrenClosure140 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments141 = array();
$arguments141['partial'] = 'Fields/Telephone';
$arguments141['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments141['section'] = NULL;
$arguments141['optional'] = false;
$renderChildrenClosure142 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments143 = array();
$arguments143['partial'] = 'Fields/Fax';
$arguments143['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments143['section'] = NULL;
$arguments143['optional'] = false;
$renderChildrenClosure144 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments145 = array();
$arguments145['partial'] = 'Fields/Address';
$arguments145['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments145['section'] = NULL;
$arguments145['optional'] = false;
$renderChildrenClosure146 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments147 = array();
$arguments147['partial'] = 'Fields/Zip';
$arguments147['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments147['section'] = NULL;
$arguments147['optional'] = false;
$renderChildrenClosure148 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments149 = array();
$arguments149['partial'] = 'Fields/City';
$arguments149['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments149['section'] = NULL;
$arguments149['optional'] = false;
$renderChildrenClosure150 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments151 = array();
$arguments151['partial'] = 'Fields/Country';
$arguments151['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments151['section'] = NULL;
$arguments151['optional'] = false;
$renderChildrenClosure152 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments153 = array();
$arguments153['partial'] = 'Fields/Image';
$arguments153['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments153['section'] = NULL;
$arguments153['optional'] = false;
$renderChildrenClosure154 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments155 = array();
$arguments155['partial'] = 'Fields/Usergroup';
$arguments155['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments155['section'] = NULL;
$arguments155['optional'] = false;
$renderChildrenClosure156 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output114 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments157 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments158 = array();
$arguments158['settings'] = $currentVariableContainer->getOrNull('settings');
$renderChildrenClosure159 = function() {return NULL;};
$viewHelper160 = $self->getViewHelper('$viewHelper160', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper');
$viewHelper160->setArguments($arguments158);
$viewHelper160->setRenderingContext($renderingContext);
$viewHelper160->setRenderChildrenClosure($renderChildrenClosure159);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments157['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper160->initializeArgumentsAndRender());
$arguments157['then'] = NULL;
$arguments157['else'] = NULL;
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output162 = '';

$output162 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments163 = array();
$arguments163['partial'] = 'Fields/Captcha';
$arguments163['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments163['section'] = NULL;
$arguments163['optional'] = false;
$renderChildrenClosure164 = function() {return NULL;};

$output162 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output162 .= '
									';
return $output162;
};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments157, $renderChildrenClosure161, $renderingContext);

$output114 .= '

									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments165 = array();
$arguments165['partial'] = 'Fields/SubmitUpdate';
$arguments165['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments165['section'] = NULL;
$arguments165['optional'] = false;
$renderChildrenClosure166 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output114 .= '
								';
return $output114;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output17 .= '

						</fieldset>

						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments167 = array();
$arguments167['partial'] = 'Misc/DeleteLink';
$arguments167['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments167['section'] = NULL;
$arguments167['optional'] = false;
$renderChildrenClosure168 = function() {return NULL;};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output17 .= '
					';
return $output17;
};
$viewHelper169 = $self->getViewHelper('$viewHelper169', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper169->setArguments($arguments12);
$viewHelper169->setRenderingContext($renderingContext);
$viewHelper169->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output11 .= $viewHelper169->initializeArgumentsAndRender();

$output11 .= '
				';
return $output11;
};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments170 = array();
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output172 = '';

$output172 .= '
					<div class="femanager_note">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments173 = array();
$arguments173['key'] = 'notLoggedIn';
$arguments173['id'] = NULL;
$arguments173['default'] = NULL;
$arguments173['htmlEscape'] = NULL;
$arguments173['arguments'] = NULL;
$arguments173['extensionName'] = NULL;
$renderChildrenClosure174 = function() {return NULL;};

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output172 .= '
					</div>
				';
return $output172;
};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output8 .= '
			';
return $output8;
};
$arguments6['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output175 = '';

$output175 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments176 = array();
$arguments176['name'] = 'user';
$arguments176['object'] = $currentVariableContainer->getOrNull('user');
$arguments176['action'] = 'update';
$output177 = '';

$output177 .= 'form-horizontal ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments178 = array();
// Rendering Boolean node
$arguments178['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'edit.validation._enable.client', $renderingContext));
$arguments178['then'] = 'feManagerValidation';
$arguments178['else'] = '';
$renderChildrenClosure179 = function() {return NULL;};

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);
$arguments176['class'] = $output177;
$arguments176['additionalAttributes'] = NULL;
$arguments176['data'] = NULL;
$arguments176['arguments'] = array (
);
$arguments176['controller'] = NULL;
$arguments176['extensionName'] = NULL;
$arguments176['pluginName'] = NULL;
$arguments176['pageUid'] = NULL;
$arguments176['pageType'] = 0;
$arguments176['noCache'] = false;
$arguments176['noCacheHash'] = false;
$arguments176['section'] = '';
$arguments176['format'] = '';
$arguments176['additionalParams'] = array (
);
$arguments176['absolute'] = false;
$arguments176['addQueryString'] = false;
$arguments176['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments176['fieldNamePrefix'] = NULL;
$arguments176['actionUri'] = NULL;
$arguments176['objectName'] = NULL;
$arguments176['hiddenFieldClassName'] = NULL;
$arguments176['addQueryStringMethod'] = '';
$arguments176['enctype'] = NULL;
$arguments176['method'] = NULL;
$arguments176['onreset'] = NULL;
$arguments176['onsubmit'] = NULL;
$arguments176['target'] = NULL;
$arguments176['dir'] = NULL;
$arguments176['id'] = NULL;
$arguments176['lang'] = NULL;
$arguments176['style'] = NULL;
$arguments176['title'] = NULL;
$arguments176['accesskey'] = NULL;
$arguments176['tabindex'] = NULL;
$arguments176['onclick'] = NULL;
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output181 = '';

$output181 .= '
						<fieldset>
							<legend>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments182 = array();
$arguments182['key'] = 'titleUpdateProfile';
$arguments182['id'] = NULL;
$arguments182['default'] = NULL;
$arguments182['htmlEscape'] = NULL;
$arguments182['arguments'] = NULL;
$arguments182['extensionName'] = NULL;
$renderChildrenClosure183 = function() {return NULL;};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '
							</legend>

							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments184 = array();
// Rendering Boolean node
$arguments184['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'edit.fields', $renderingContext));
$arguments184['then'] = NULL;
$arguments184['else'] = NULL;
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output186 = '';

$output186 .= '

								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments187 = array();
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output189 = '';

$output189 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments190 = array();
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										If some fields are selected in the flexform
									';
};

$output189 .= '';

$output189 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments192 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments193 = array();
$arguments193['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'edit.fields', $renderingContext);
$arguments193['separator'] = ',';
$arguments193['trim'] = true;
$renderChildrenClosure194 = function() {return NULL;};
$viewHelper195 = $self->getViewHelper('$viewHelper195', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper');
$viewHelper195->setArguments($arguments193);
$viewHelper195->setRenderingContext($renderingContext);
$viewHelper195->setRenderChildrenClosure($renderChildrenClosure194);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments192['each'] = $viewHelper195->initializeArgumentsAndRender();
$arguments192['as'] = 'field';
$arguments192['key'] = '';
$arguments192['reverse'] = false;
$arguments192['iteration'] = NULL;
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output197 = '';

$output197 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments198 = array();
$output199 = '';

$output199 .= 'Fields/';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$arguments200 = array();
$arguments200['string'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure201 = function() {return NULL;};
$viewHelper202 = $self->getViewHelper('$viewHelper202', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\UpperViewHelper');
$viewHelper202->setArguments($arguments200);
$viewHelper202->setRenderingContext($renderingContext);
$viewHelper202->setRenderChildrenClosure($renderChildrenClosure201);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper

$output199 .= $viewHelper202->initializeArgumentsAndRender();
$arguments198['partial'] = $output199;
$arguments198['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments198['section'] = NULL;
$arguments198['optional'] = false;
$renderChildrenClosure203 = function() {return NULL;};

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments198, $renderChildrenClosure203, $renderingContext);

$output197 .= '
									';
return $output197;
};

$output189 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments192, $renderChildrenClosure196, $renderingContext);

$output189 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments204 = array();
$arguments204['partial'] = 'Fields/SubmitUpdate';
$arguments204['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments204['section'] = NULL;
$arguments204['optional'] = false;
$renderChildrenClosure205 = function() {return NULL;};

$output189 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output189 .= '
								';
return $output189;
};

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output186 .= '

								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments206 = array();
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output208 = '';

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments209 = array();
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										If no fields are selected in the flexform => show all
									';
};

$output208 .= '';

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments211 = array();
$arguments211['partial'] = 'Fields/Username';
$arguments211['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments211['section'] = NULL;
$arguments211['optional'] = false;
$renderChildrenClosure212 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments213 = array();
$arguments213['partial'] = 'Fields/Password';
$arguments213['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments213['section'] = NULL;
$arguments213['optional'] = false;
$renderChildrenClosure214 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments215 = array();
$arguments215['partial'] = 'Fields/Title';
$arguments215['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments215['section'] = NULL;
$arguments215['optional'] = false;
$renderChildrenClosure216 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments217 = array();
$arguments217['partial'] = 'Fields/Name';
$arguments217['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments217['section'] = NULL;
$arguments217['optional'] = false;
$renderChildrenClosure218 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments219 = array();
$arguments219['partial'] = 'Fields/FirstName';
$arguments219['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments219['section'] = NULL;
$arguments219['optional'] = false;
$renderChildrenClosure220 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments221 = array();
$arguments221['partial'] = 'Fields/MiddleName';
$arguments221['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments221['section'] = NULL;
$arguments221['optional'] = false;
$renderChildrenClosure222 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments223 = array();
$arguments223['partial'] = 'Fields/LastName';
$arguments223['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments223['section'] = NULL;
$arguments223['optional'] = false;
$renderChildrenClosure224 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments225 = array();
$arguments225['partial'] = 'Fields/Gender';
$arguments225['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments225['section'] = NULL;
$arguments225['optional'] = false;
$renderChildrenClosure226 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments227 = array();
$arguments227['partial'] = 'Fields/DateOfBirth';
$arguments227['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments227['section'] = NULL;
$arguments227['optional'] = false;
$renderChildrenClosure228 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments229 = array();
$arguments229['partial'] = 'Fields/Company';
$arguments229['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments229['section'] = NULL;
$arguments229['optional'] = false;
$renderChildrenClosure230 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments231 = array();
$arguments231['partial'] = 'Fields/Www';
$arguments231['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments231['section'] = NULL;
$arguments231['optional'] = false;
$renderChildrenClosure232 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments233 = array();
$arguments233['partial'] = 'Fields/Email';
$arguments233['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments233['section'] = NULL;
$arguments233['optional'] = false;
$renderChildrenClosure234 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments235 = array();
$arguments235['partial'] = 'Fields/Telephone';
$arguments235['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments235['section'] = NULL;
$arguments235['optional'] = false;
$renderChildrenClosure236 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments237 = array();
$arguments237['partial'] = 'Fields/Fax';
$arguments237['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments237['section'] = NULL;
$arguments237['optional'] = false;
$renderChildrenClosure238 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments239 = array();
$arguments239['partial'] = 'Fields/Address';
$arguments239['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments239['section'] = NULL;
$arguments239['optional'] = false;
$renderChildrenClosure240 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments241 = array();
$arguments241['partial'] = 'Fields/Zip';
$arguments241['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments241['section'] = NULL;
$arguments241['optional'] = false;
$renderChildrenClosure242 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments243 = array();
$arguments243['partial'] = 'Fields/City';
$arguments243['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments243['section'] = NULL;
$arguments243['optional'] = false;
$renderChildrenClosure244 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments245 = array();
$arguments245['partial'] = 'Fields/Country';
$arguments245['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments245['section'] = NULL;
$arguments245['optional'] = false;
$renderChildrenClosure246 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments247 = array();
$arguments247['partial'] = 'Fields/Image';
$arguments247['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments247['section'] = NULL;
$arguments247['optional'] = false;
$renderChildrenClosure248 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments249 = array();
$arguments249['partial'] = 'Fields/Usergroup';
$arguments249['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments249['section'] = NULL;
$arguments249['optional'] = false;
$renderChildrenClosure250 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output208 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments251 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments252 = array();
$arguments252['settings'] = $currentVariableContainer->getOrNull('settings');
$renderChildrenClosure253 = function() {return NULL;};
$viewHelper254 = $self->getViewHelper('$viewHelper254', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper');
$viewHelper254->setArguments($arguments252);
$viewHelper254->setRenderingContext($renderingContext);
$viewHelper254->setRenderChildrenClosure($renderChildrenClosure253);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments251['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper254->initializeArgumentsAndRender());
$arguments251['then'] = NULL;
$arguments251['else'] = NULL;
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output256 = '';

$output256 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments257 = array();
$arguments257['partial'] = 'Fields/Captcha';
$arguments257['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments257['section'] = NULL;
$arguments257['optional'] = false;
$renderChildrenClosure258 = function() {return NULL;};

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output256 .= '
									';
return $output256;
};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments251, $renderChildrenClosure255, $renderingContext);

$output208 .= '

									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments259 = array();
$arguments259['partial'] = 'Fields/SubmitUpdate';
$arguments259['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments259['section'] = NULL;
$arguments259['optional'] = false;
$renderChildrenClosure260 = function() {return NULL;};

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output208 .= '
								';
return $output208;
};

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output186 .= '

							';
return $output186;
};
$arguments184['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output261 = '';

$output261 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments262 = array();
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										If some fields are selected in the flexform
									';
};

$output261 .= '';

$output261 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments264 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments265 = array();
$arguments265['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'edit.fields', $renderingContext);
$arguments265['separator'] = ',';
$arguments265['trim'] = true;
$renderChildrenClosure266 = function() {return NULL;};
$viewHelper267 = $self->getViewHelper('$viewHelper267', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper');
$viewHelper267->setArguments($arguments265);
$viewHelper267->setRenderingContext($renderingContext);
$viewHelper267->setRenderChildrenClosure($renderChildrenClosure266);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments264['each'] = $viewHelper267->initializeArgumentsAndRender();
$arguments264['as'] = 'field';
$arguments264['key'] = '';
$arguments264['reverse'] = false;
$arguments264['iteration'] = NULL;
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output269 = '';

$output269 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments270 = array();
$output271 = '';

$output271 .= 'Fields/';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$arguments272 = array();
$arguments272['string'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure273 = function() {return NULL;};
$viewHelper274 = $self->getViewHelper('$viewHelper274', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\UpperViewHelper');
$viewHelper274->setArguments($arguments272);
$viewHelper274->setRenderingContext($renderingContext);
$viewHelper274->setRenderChildrenClosure($renderChildrenClosure273);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper

$output271 .= $viewHelper274->initializeArgumentsAndRender();
$arguments270['partial'] = $output271;
$arguments270['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments270['section'] = NULL;
$arguments270['optional'] = false;
$renderChildrenClosure275 = function() {return NULL;};

$output269 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments270, $renderChildrenClosure275, $renderingContext);

$output269 .= '
									';
return $output269;
};

$output261 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments264, $renderChildrenClosure268, $renderingContext);

$output261 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments276 = array();
$arguments276['partial'] = 'Fields/SubmitUpdate';
$arguments276['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments276['section'] = NULL;
$arguments276['optional'] = false;
$renderChildrenClosure277 = function() {return NULL;};

$output261 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output261 .= '
								';
return $output261;
};
$arguments184['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output278 = '';

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments279 = array();
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										If no fields are selected in the flexform => show all
									';
};

$output278 .= '';

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments281 = array();
$arguments281['partial'] = 'Fields/Username';
$arguments281['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments281['section'] = NULL;
$arguments281['optional'] = false;
$renderChildrenClosure282 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments283 = array();
$arguments283['partial'] = 'Fields/Password';
$arguments283['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments283['section'] = NULL;
$arguments283['optional'] = false;
$renderChildrenClosure284 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments285 = array();
$arguments285['partial'] = 'Fields/Title';
$arguments285['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments285['section'] = NULL;
$arguments285['optional'] = false;
$renderChildrenClosure286 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments287 = array();
$arguments287['partial'] = 'Fields/Name';
$arguments287['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments287['section'] = NULL;
$arguments287['optional'] = false;
$renderChildrenClosure288 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments289 = array();
$arguments289['partial'] = 'Fields/FirstName';
$arguments289['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments289['section'] = NULL;
$arguments289['optional'] = false;
$renderChildrenClosure290 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments291 = array();
$arguments291['partial'] = 'Fields/MiddleName';
$arguments291['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments291['section'] = NULL;
$arguments291['optional'] = false;
$renderChildrenClosure292 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments293 = array();
$arguments293['partial'] = 'Fields/LastName';
$arguments293['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments293['section'] = NULL;
$arguments293['optional'] = false;
$renderChildrenClosure294 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments295 = array();
$arguments295['partial'] = 'Fields/Gender';
$arguments295['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments295['section'] = NULL;
$arguments295['optional'] = false;
$renderChildrenClosure296 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments297 = array();
$arguments297['partial'] = 'Fields/DateOfBirth';
$arguments297['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments297['section'] = NULL;
$arguments297['optional'] = false;
$renderChildrenClosure298 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments299 = array();
$arguments299['partial'] = 'Fields/Company';
$arguments299['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments299['section'] = NULL;
$arguments299['optional'] = false;
$renderChildrenClosure300 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments301 = array();
$arguments301['partial'] = 'Fields/Www';
$arguments301['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments301['section'] = NULL;
$arguments301['optional'] = false;
$renderChildrenClosure302 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments303 = array();
$arguments303['partial'] = 'Fields/Email';
$arguments303['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments303['section'] = NULL;
$arguments303['optional'] = false;
$renderChildrenClosure304 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments305 = array();
$arguments305['partial'] = 'Fields/Telephone';
$arguments305['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments305['section'] = NULL;
$arguments305['optional'] = false;
$renderChildrenClosure306 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments307 = array();
$arguments307['partial'] = 'Fields/Fax';
$arguments307['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments307['section'] = NULL;
$arguments307['optional'] = false;
$renderChildrenClosure308 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments309 = array();
$arguments309['partial'] = 'Fields/Address';
$arguments309['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments309['section'] = NULL;
$arguments309['optional'] = false;
$renderChildrenClosure310 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments311 = array();
$arguments311['partial'] = 'Fields/Zip';
$arguments311['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments311['section'] = NULL;
$arguments311['optional'] = false;
$renderChildrenClosure312 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments313 = array();
$arguments313['partial'] = 'Fields/City';
$arguments313['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments313['section'] = NULL;
$arguments313['optional'] = false;
$renderChildrenClosure314 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments315 = array();
$arguments315['partial'] = 'Fields/Country';
$arguments315['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments315['section'] = NULL;
$arguments315['optional'] = false;
$renderChildrenClosure316 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments317 = array();
$arguments317['partial'] = 'Fields/Image';
$arguments317['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments317['section'] = NULL;
$arguments317['optional'] = false;
$renderChildrenClosure318 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments319 = array();
$arguments319['partial'] = 'Fields/Usergroup';
$arguments319['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments319['section'] = NULL;
$arguments319['optional'] = false;
$renderChildrenClosure320 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);

$output278 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments321 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments322 = array();
$arguments322['settings'] = $currentVariableContainer->getOrNull('settings');
$renderChildrenClosure323 = function() {return NULL;};
$viewHelper324 = $self->getViewHelper('$viewHelper324', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper');
$viewHelper324->setArguments($arguments322);
$viewHelper324->setRenderingContext($renderingContext);
$viewHelper324->setRenderChildrenClosure($renderChildrenClosure323);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments321['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper324->initializeArgumentsAndRender());
$arguments321['then'] = NULL;
$arguments321['else'] = NULL;
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output326 = '';

$output326 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments327 = array();
$arguments327['partial'] = 'Fields/Captcha';
$arguments327['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments327['section'] = NULL;
$arguments327['optional'] = false;
$renderChildrenClosure328 = function() {return NULL;};

$output326 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);

$output326 .= '
									';
return $output326;
};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments321, $renderChildrenClosure325, $renderingContext);

$output278 .= '

									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments329 = array();
$arguments329['partial'] = 'Fields/SubmitUpdate';
$arguments329['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments329['section'] = NULL;
$arguments329['optional'] = false;
$renderChildrenClosure330 = function() {return NULL;};

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output278 .= '
								';
return $output278;
};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output181 .= '

						</fieldset>

						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments331 = array();
$arguments331['partial'] = 'Misc/DeleteLink';
$arguments331['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments331['section'] = NULL;
$arguments331['optional'] = false;
$renderChildrenClosure332 = function() {return NULL;};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);

$output181 .= '
					';
return $output181;
};
$viewHelper333 = $self->getViewHelper('$viewHelper333', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper333->setArguments($arguments176);
$viewHelper333->setRenderingContext($renderingContext);
$viewHelper333->setRenderChildrenClosure($renderChildrenClosure180);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output175 .= $viewHelper333->initializeArgumentsAndRender();

$output175 .= '
				';
return $output175;
};
$arguments6['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output334 = '';

$output334 .= '
					<div class="femanager_note">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments335 = array();
$arguments335['key'] = 'notLoggedIn';
$arguments335['id'] = NULL;
$arguments335['default'] = NULL;
$arguments335['htmlEscape'] = NULL;
$arguments335['arguments'] = NULL;
$arguments335['extensionName'] = NULL;
$renderChildrenClosure336 = function() {return NULL;};

$output334 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output334 .= '
					</div>
				';
return $output334;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
		</div>
	';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output337 = '';

$output337 .= '
<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments338 = array();
$arguments338['name'] = 'Default';
$renderChildrenClosure339 = function() {return NULL;};
$viewHelper340 = $self->getViewHelper('$viewHelper340', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper340->setArguments($arguments338);
$viewHelper340->setRenderingContext($renderingContext);
$viewHelper340->setRenderChildrenClosure($renderChildrenClosure339);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output337 .= $viewHelper340->initializeArgumentsAndRender();

$output337 .= '

	User / Edit
	Available variables:
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments341 = array();
$arguments341['value'] = $currentVariableContainer->getOrNull('user');
$arguments341['keepQuotes'] = false;
$arguments341['encoding'] = NULL;
$arguments341['doubleEncode'] = true;
$renderChildrenClosure342 = function() {return NULL;};
$value343 = ($arguments341['value'] !== NULL ? $arguments341['value'] : $renderChildrenClosure342());

$output337 .= (!is_string($value343) ? $value343 : htmlspecialchars($value343, ($arguments341['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments341['encoding'] !== NULL ? $arguments341['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments341['doubleEncode']));

$output337 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments344 = array();
$arguments344['value'] = $currentVariableContainer->getOrNull('allUserGroups');
$arguments344['keepQuotes'] = false;
$arguments344['encoding'] = NULL;
$arguments344['doubleEncode'] = true;
$renderChildrenClosure345 = function() {return NULL;};
$value346 = ($arguments344['value'] !== NULL ? $arguments344['value'] : $renderChildrenClosure345());

$output337 .= (!is_string($value346) ? $value346 : htmlspecialchars($value346, ($arguments344['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments344['encoding'] !== NULL ? $arguments344['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments344['doubleEncode']));

$output337 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments347 = array();
$arguments347['name'] = 'main';
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output349 = '';

$output349 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments350 = array();
$arguments350['partial'] = 'Misc/FlashMessages';
$arguments350['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments350['section'] = NULL;
$arguments350['optional'] = false;
$renderChildrenClosure351 = function() {return NULL;};

$output349 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext);

$output349 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments352 = array();
$arguments352['partial'] = 'Misc/FormErrors';
// Rendering Array
$array353 = array();
$array353['object'] = $currentVariableContainer->getOrNull('User');
$arguments352['arguments'] = $array353;
$arguments352['section'] = NULL;
$arguments352['optional'] = false;
$renderChildrenClosure354 = function() {return NULL;};

$output349 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments352, $renderChildrenClosure354, $renderingContext);

$output349 .= '

		<div class="femanager_edit">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments355 = array();
// Rendering Boolean node
$arguments355['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('user'));
$arguments355['then'] = NULL;
$arguments355['else'] = NULL;
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output357 = '';

$output357 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments358 = array();
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output360 = '';

$output360 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments361 = array();
$arguments361['name'] = 'user';
$arguments361['object'] = $currentVariableContainer->getOrNull('user');
$arguments361['action'] = 'update';
$output362 = '';

$output362 .= 'form-horizontal ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments363 = array();
// Rendering Boolean node
$arguments363['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'edit.validation._enable.client', $renderingContext));
$arguments363['then'] = 'feManagerValidation';
$arguments363['else'] = '';
$renderChildrenClosure364 = function() {return NULL;};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext);
$arguments361['class'] = $output362;
$arguments361['additionalAttributes'] = NULL;
$arguments361['data'] = NULL;
$arguments361['arguments'] = array (
);
$arguments361['controller'] = NULL;
$arguments361['extensionName'] = NULL;
$arguments361['pluginName'] = NULL;
$arguments361['pageUid'] = NULL;
$arguments361['pageType'] = 0;
$arguments361['noCache'] = false;
$arguments361['noCacheHash'] = false;
$arguments361['section'] = '';
$arguments361['format'] = '';
$arguments361['additionalParams'] = array (
);
$arguments361['absolute'] = false;
$arguments361['addQueryString'] = false;
$arguments361['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments361['fieldNamePrefix'] = NULL;
$arguments361['actionUri'] = NULL;
$arguments361['objectName'] = NULL;
$arguments361['hiddenFieldClassName'] = NULL;
$arguments361['addQueryStringMethod'] = '';
$arguments361['enctype'] = NULL;
$arguments361['method'] = NULL;
$arguments361['onreset'] = NULL;
$arguments361['onsubmit'] = NULL;
$arguments361['target'] = NULL;
$arguments361['dir'] = NULL;
$arguments361['id'] = NULL;
$arguments361['lang'] = NULL;
$arguments361['style'] = NULL;
$arguments361['title'] = NULL;
$arguments361['accesskey'] = NULL;
$arguments361['tabindex'] = NULL;
$arguments361['onclick'] = NULL;
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output366 = '';

$output366 .= '
						<fieldset>
							<legend>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments367 = array();
$arguments367['key'] = 'titleUpdateProfile';
$arguments367['id'] = NULL;
$arguments367['default'] = NULL;
$arguments367['htmlEscape'] = NULL;
$arguments367['arguments'] = NULL;
$arguments367['extensionName'] = NULL;
$renderChildrenClosure368 = function() {return NULL;};

$output366 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);

$output366 .= '
							</legend>

							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments369 = array();
// Rendering Boolean node
$arguments369['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'edit.fields', $renderingContext));
$arguments369['then'] = NULL;
$arguments369['else'] = NULL;
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output371 = '';

$output371 .= '

								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments372 = array();
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output374 = '';

$output374 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments375 = array();
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										If some fields are selected in the flexform
									';
};

$output374 .= '';

$output374 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments377 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments378 = array();
$arguments378['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'edit.fields', $renderingContext);
$arguments378['separator'] = ',';
$arguments378['trim'] = true;
$renderChildrenClosure379 = function() {return NULL;};
$viewHelper380 = $self->getViewHelper('$viewHelper380', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper');
$viewHelper380->setArguments($arguments378);
$viewHelper380->setRenderingContext($renderingContext);
$viewHelper380->setRenderChildrenClosure($renderChildrenClosure379);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments377['each'] = $viewHelper380->initializeArgumentsAndRender();
$arguments377['as'] = 'field';
$arguments377['key'] = '';
$arguments377['reverse'] = false;
$arguments377['iteration'] = NULL;
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output382 = '';

$output382 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments383 = array();
$output384 = '';

$output384 .= 'Fields/';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$arguments385 = array();
$arguments385['string'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure386 = function() {return NULL;};
$viewHelper387 = $self->getViewHelper('$viewHelper387', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\UpperViewHelper');
$viewHelper387->setArguments($arguments385);
$viewHelper387->setRenderingContext($renderingContext);
$viewHelper387->setRenderChildrenClosure($renderChildrenClosure386);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper

$output384 .= $viewHelper387->initializeArgumentsAndRender();
$arguments383['partial'] = $output384;
$arguments383['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments383['section'] = NULL;
$arguments383['optional'] = false;
$renderChildrenClosure388 = function() {return NULL;};

$output382 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments383, $renderChildrenClosure388, $renderingContext);

$output382 .= '
									';
return $output382;
};

$output374 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments377, $renderChildrenClosure381, $renderingContext);

$output374 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments389 = array();
$arguments389['partial'] = 'Fields/SubmitUpdate';
$arguments389['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments389['section'] = NULL;
$arguments389['optional'] = false;
$renderChildrenClosure390 = function() {return NULL;};

$output374 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output374 .= '
								';
return $output374;
};

$output371 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext);

$output371 .= '

								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments391 = array();
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output393 = '';

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments394 = array();
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										If no fields are selected in the flexform => show all
									';
};

$output393 .= '';

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments396 = array();
$arguments396['partial'] = 'Fields/Username';
$arguments396['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments396['section'] = NULL;
$arguments396['optional'] = false;
$renderChildrenClosure397 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments398 = array();
$arguments398['partial'] = 'Fields/Password';
$arguments398['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments398['section'] = NULL;
$arguments398['optional'] = false;
$renderChildrenClosure399 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments400 = array();
$arguments400['partial'] = 'Fields/Title';
$arguments400['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments400['section'] = NULL;
$arguments400['optional'] = false;
$renderChildrenClosure401 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments402 = array();
$arguments402['partial'] = 'Fields/Name';
$arguments402['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments402['section'] = NULL;
$arguments402['optional'] = false;
$renderChildrenClosure403 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments404 = array();
$arguments404['partial'] = 'Fields/FirstName';
$arguments404['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments404['section'] = NULL;
$arguments404['optional'] = false;
$renderChildrenClosure405 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments406 = array();
$arguments406['partial'] = 'Fields/MiddleName';
$arguments406['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments406['section'] = NULL;
$arguments406['optional'] = false;
$renderChildrenClosure407 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments408 = array();
$arguments408['partial'] = 'Fields/LastName';
$arguments408['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments408['section'] = NULL;
$arguments408['optional'] = false;
$renderChildrenClosure409 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments410 = array();
$arguments410['partial'] = 'Fields/Gender';
$arguments410['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments410['section'] = NULL;
$arguments410['optional'] = false;
$renderChildrenClosure411 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments412 = array();
$arguments412['partial'] = 'Fields/DateOfBirth';
$arguments412['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments412['section'] = NULL;
$arguments412['optional'] = false;
$renderChildrenClosure413 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments414 = array();
$arguments414['partial'] = 'Fields/Company';
$arguments414['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments414['section'] = NULL;
$arguments414['optional'] = false;
$renderChildrenClosure415 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments416 = array();
$arguments416['partial'] = 'Fields/Www';
$arguments416['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments416['section'] = NULL;
$arguments416['optional'] = false;
$renderChildrenClosure417 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments416, $renderChildrenClosure417, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments418 = array();
$arguments418['partial'] = 'Fields/Email';
$arguments418['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments418['section'] = NULL;
$arguments418['optional'] = false;
$renderChildrenClosure419 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments420 = array();
$arguments420['partial'] = 'Fields/Telephone';
$arguments420['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments420['section'] = NULL;
$arguments420['optional'] = false;
$renderChildrenClosure421 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments422 = array();
$arguments422['partial'] = 'Fields/Fax';
$arguments422['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments422['section'] = NULL;
$arguments422['optional'] = false;
$renderChildrenClosure423 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments424 = array();
$arguments424['partial'] = 'Fields/Address';
$arguments424['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments424['section'] = NULL;
$arguments424['optional'] = false;
$renderChildrenClosure425 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments424, $renderChildrenClosure425, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments426 = array();
$arguments426['partial'] = 'Fields/Zip';
$arguments426['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments426['section'] = NULL;
$arguments426['optional'] = false;
$renderChildrenClosure427 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments428 = array();
$arguments428['partial'] = 'Fields/City';
$arguments428['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments428['section'] = NULL;
$arguments428['optional'] = false;
$renderChildrenClosure429 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments428, $renderChildrenClosure429, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments430 = array();
$arguments430['partial'] = 'Fields/Country';
$arguments430['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments430['section'] = NULL;
$arguments430['optional'] = false;
$renderChildrenClosure431 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments432 = array();
$arguments432['partial'] = 'Fields/Image';
$arguments432['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments432['section'] = NULL;
$arguments432['optional'] = false;
$renderChildrenClosure433 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments434 = array();
$arguments434['partial'] = 'Fields/Usergroup';
$arguments434['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments434['section'] = NULL;
$arguments434['optional'] = false;
$renderChildrenClosure435 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext);

$output393 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments436 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments437 = array();
$arguments437['settings'] = $currentVariableContainer->getOrNull('settings');
$renderChildrenClosure438 = function() {return NULL;};
$viewHelper439 = $self->getViewHelper('$viewHelper439', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper');
$viewHelper439->setArguments($arguments437);
$viewHelper439->setRenderingContext($renderingContext);
$viewHelper439->setRenderChildrenClosure($renderChildrenClosure438);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments436['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper439->initializeArgumentsAndRender());
$arguments436['then'] = NULL;
$arguments436['else'] = NULL;
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output441 = '';

$output441 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments442 = array();
$arguments442['partial'] = 'Fields/Captcha';
$arguments442['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments442['section'] = NULL;
$arguments442['optional'] = false;
$renderChildrenClosure443 = function() {return NULL;};

$output441 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);

$output441 .= '
									';
return $output441;
};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments436, $renderChildrenClosure440, $renderingContext);

$output393 .= '

									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments444 = array();
$arguments444['partial'] = 'Fields/SubmitUpdate';
$arguments444['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments444['section'] = NULL;
$arguments444['optional'] = false;
$renderChildrenClosure445 = function() {return NULL;};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext);

$output393 .= '
								';
return $output393;
};

$output371 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext);

$output371 .= '

							';
return $output371;
};
$arguments369['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output446 = '';

$output446 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments447 = array();
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										If some fields are selected in the flexform
									';
};

$output446 .= '';

$output446 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments449 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments450 = array();
$arguments450['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'edit.fields', $renderingContext);
$arguments450['separator'] = ',';
$arguments450['trim'] = true;
$renderChildrenClosure451 = function() {return NULL;};
$viewHelper452 = $self->getViewHelper('$viewHelper452', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper');
$viewHelper452->setArguments($arguments450);
$viewHelper452->setRenderingContext($renderingContext);
$viewHelper452->setRenderChildrenClosure($renderChildrenClosure451);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments449['each'] = $viewHelper452->initializeArgumentsAndRender();
$arguments449['as'] = 'field';
$arguments449['key'] = '';
$arguments449['reverse'] = false;
$arguments449['iteration'] = NULL;
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output454 = '';

$output454 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments455 = array();
$output456 = '';

$output456 .= 'Fields/';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$arguments457 = array();
$arguments457['string'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure458 = function() {return NULL;};
$viewHelper459 = $self->getViewHelper('$viewHelper459', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\UpperViewHelper');
$viewHelper459->setArguments($arguments457);
$viewHelper459->setRenderingContext($renderingContext);
$viewHelper459->setRenderChildrenClosure($renderChildrenClosure458);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper

$output456 .= $viewHelper459->initializeArgumentsAndRender();
$arguments455['partial'] = $output456;
$arguments455['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments455['section'] = NULL;
$arguments455['optional'] = false;
$renderChildrenClosure460 = function() {return NULL;};

$output454 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments455, $renderChildrenClosure460, $renderingContext);

$output454 .= '
									';
return $output454;
};

$output446 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments449, $renderChildrenClosure453, $renderingContext);

$output446 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments461 = array();
$arguments461['partial'] = 'Fields/SubmitUpdate';
$arguments461['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments461['section'] = NULL;
$arguments461['optional'] = false;
$renderChildrenClosure462 = function() {return NULL;};

$output446 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments461, $renderChildrenClosure462, $renderingContext);

$output446 .= '
								';
return $output446;
};
$arguments369['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output463 = '';

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments464 = array();
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										If no fields are selected in the flexform => show all
									';
};

$output463 .= '';

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments466 = array();
$arguments466['partial'] = 'Fields/Username';
$arguments466['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments466['section'] = NULL;
$arguments466['optional'] = false;
$renderChildrenClosure467 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments468 = array();
$arguments468['partial'] = 'Fields/Password';
$arguments468['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments468['section'] = NULL;
$arguments468['optional'] = false;
$renderChildrenClosure469 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments470 = array();
$arguments470['partial'] = 'Fields/Title';
$arguments470['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments470['section'] = NULL;
$arguments470['optional'] = false;
$renderChildrenClosure471 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments472 = array();
$arguments472['partial'] = 'Fields/Name';
$arguments472['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments472['section'] = NULL;
$arguments472['optional'] = false;
$renderChildrenClosure473 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments474 = array();
$arguments474['partial'] = 'Fields/FirstName';
$arguments474['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments474['section'] = NULL;
$arguments474['optional'] = false;
$renderChildrenClosure475 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments476 = array();
$arguments476['partial'] = 'Fields/MiddleName';
$arguments476['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments476['section'] = NULL;
$arguments476['optional'] = false;
$renderChildrenClosure477 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments478 = array();
$arguments478['partial'] = 'Fields/LastName';
$arguments478['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments478['section'] = NULL;
$arguments478['optional'] = false;
$renderChildrenClosure479 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments480 = array();
$arguments480['partial'] = 'Fields/Gender';
$arguments480['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments480['section'] = NULL;
$arguments480['optional'] = false;
$renderChildrenClosure481 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments482 = array();
$arguments482['partial'] = 'Fields/DateOfBirth';
$arguments482['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments482['section'] = NULL;
$arguments482['optional'] = false;
$renderChildrenClosure483 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments482, $renderChildrenClosure483, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments484 = array();
$arguments484['partial'] = 'Fields/Company';
$arguments484['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments484['section'] = NULL;
$arguments484['optional'] = false;
$renderChildrenClosure485 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments486 = array();
$arguments486['partial'] = 'Fields/Www';
$arguments486['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments486['section'] = NULL;
$arguments486['optional'] = false;
$renderChildrenClosure487 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments488 = array();
$arguments488['partial'] = 'Fields/Email';
$arguments488['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments488['section'] = NULL;
$arguments488['optional'] = false;
$renderChildrenClosure489 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments488, $renderChildrenClosure489, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments490 = array();
$arguments490['partial'] = 'Fields/Telephone';
$arguments490['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments490['section'] = NULL;
$arguments490['optional'] = false;
$renderChildrenClosure491 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments492 = array();
$arguments492['partial'] = 'Fields/Fax';
$arguments492['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments492['section'] = NULL;
$arguments492['optional'] = false;
$renderChildrenClosure493 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments492, $renderChildrenClosure493, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments494 = array();
$arguments494['partial'] = 'Fields/Address';
$arguments494['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments494['section'] = NULL;
$arguments494['optional'] = false;
$renderChildrenClosure495 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments494, $renderChildrenClosure495, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments496 = array();
$arguments496['partial'] = 'Fields/Zip';
$arguments496['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments496['section'] = NULL;
$arguments496['optional'] = false;
$renderChildrenClosure497 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments498 = array();
$arguments498['partial'] = 'Fields/City';
$arguments498['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments498['section'] = NULL;
$arguments498['optional'] = false;
$renderChildrenClosure499 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments500 = array();
$arguments500['partial'] = 'Fields/Country';
$arguments500['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments500['section'] = NULL;
$arguments500['optional'] = false;
$renderChildrenClosure501 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments502 = array();
$arguments502['partial'] = 'Fields/Image';
$arguments502['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments502['section'] = NULL;
$arguments502['optional'] = false;
$renderChildrenClosure503 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments502, $renderChildrenClosure503, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments504 = array();
$arguments504['partial'] = 'Fields/Usergroup';
$arguments504['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments504['section'] = NULL;
$arguments504['optional'] = false;
$renderChildrenClosure505 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext);

$output463 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments506 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments507 = array();
$arguments507['settings'] = $currentVariableContainer->getOrNull('settings');
$renderChildrenClosure508 = function() {return NULL;};
$viewHelper509 = $self->getViewHelper('$viewHelper509', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper');
$viewHelper509->setArguments($arguments507);
$viewHelper509->setRenderingContext($renderingContext);
$viewHelper509->setRenderChildrenClosure($renderChildrenClosure508);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments506['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper509->initializeArgumentsAndRender());
$arguments506['then'] = NULL;
$arguments506['else'] = NULL;
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output511 = '';

$output511 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments512 = array();
$arguments512['partial'] = 'Fields/Captcha';
$arguments512['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments512['section'] = NULL;
$arguments512['optional'] = false;
$renderChildrenClosure513 = function() {return NULL;};

$output511 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext);

$output511 .= '
									';
return $output511;
};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments506, $renderChildrenClosure510, $renderingContext);

$output463 .= '

									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments514 = array();
$arguments514['partial'] = 'Fields/SubmitUpdate';
$arguments514['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments514['section'] = NULL;
$arguments514['optional'] = false;
$renderChildrenClosure515 = function() {return NULL;};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext);

$output463 .= '
								';
return $output463;
};

$output366 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);

$output366 .= '

						</fieldset>

						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments516 = array();
$arguments516['partial'] = 'Misc/DeleteLink';
$arguments516['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments516['section'] = NULL;
$arguments516['optional'] = false;
$renderChildrenClosure517 = function() {return NULL;};

$output366 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments516, $renderChildrenClosure517, $renderingContext);

$output366 .= '
					';
return $output366;
};
$viewHelper518 = $self->getViewHelper('$viewHelper518', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper518->setArguments($arguments361);
$viewHelper518->setRenderingContext($renderingContext);
$viewHelper518->setRenderChildrenClosure($renderChildrenClosure365);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output360 .= $viewHelper518->initializeArgumentsAndRender();

$output360 .= '
				';
return $output360;
};

$output357 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output357 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments519 = array();
$renderChildrenClosure520 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output521 = '';

$output521 .= '
					<div class="femanager_note">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments522 = array();
$arguments522['key'] = 'notLoggedIn';
$arguments522['id'] = NULL;
$arguments522['default'] = NULL;
$arguments522['htmlEscape'] = NULL;
$arguments522['arguments'] = NULL;
$arguments522['extensionName'] = NULL;
$renderChildrenClosure523 = function() {return NULL;};

$output521 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments522, $renderChildrenClosure523, $renderingContext);

$output521 .= '
					</div>
				';
return $output521;
};

$output357 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments519, $renderChildrenClosure520, $renderingContext);

$output357 .= '
			';
return $output357;
};
$arguments355['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output524 = '';

$output524 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments525 = array();
$arguments525['name'] = 'user';
$arguments525['object'] = $currentVariableContainer->getOrNull('user');
$arguments525['action'] = 'update';
$output526 = '';

$output526 .= 'form-horizontal ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments527 = array();
// Rendering Boolean node
$arguments527['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'edit.validation._enable.client', $renderingContext));
$arguments527['then'] = 'feManagerValidation';
$arguments527['else'] = '';
$renderChildrenClosure528 = function() {return NULL;};

$output526 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments527, $renderChildrenClosure528, $renderingContext);
$arguments525['class'] = $output526;
$arguments525['additionalAttributes'] = NULL;
$arguments525['data'] = NULL;
$arguments525['arguments'] = array (
);
$arguments525['controller'] = NULL;
$arguments525['extensionName'] = NULL;
$arguments525['pluginName'] = NULL;
$arguments525['pageUid'] = NULL;
$arguments525['pageType'] = 0;
$arguments525['noCache'] = false;
$arguments525['noCacheHash'] = false;
$arguments525['section'] = '';
$arguments525['format'] = '';
$arguments525['additionalParams'] = array (
);
$arguments525['absolute'] = false;
$arguments525['addQueryString'] = false;
$arguments525['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments525['fieldNamePrefix'] = NULL;
$arguments525['actionUri'] = NULL;
$arguments525['objectName'] = NULL;
$arguments525['hiddenFieldClassName'] = NULL;
$arguments525['addQueryStringMethod'] = '';
$arguments525['enctype'] = NULL;
$arguments525['method'] = NULL;
$arguments525['onreset'] = NULL;
$arguments525['onsubmit'] = NULL;
$arguments525['target'] = NULL;
$arguments525['dir'] = NULL;
$arguments525['id'] = NULL;
$arguments525['lang'] = NULL;
$arguments525['style'] = NULL;
$arguments525['title'] = NULL;
$arguments525['accesskey'] = NULL;
$arguments525['tabindex'] = NULL;
$arguments525['onclick'] = NULL;
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output530 = '';

$output530 .= '
						<fieldset>
							<legend>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments531 = array();
$arguments531['key'] = 'titleUpdateProfile';
$arguments531['id'] = NULL;
$arguments531['default'] = NULL;
$arguments531['htmlEscape'] = NULL;
$arguments531['arguments'] = NULL;
$arguments531['extensionName'] = NULL;
$renderChildrenClosure532 = function() {return NULL;};

$output530 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments531, $renderChildrenClosure532, $renderingContext);

$output530 .= '
							</legend>

							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments533 = array();
// Rendering Boolean node
$arguments533['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'edit.fields', $renderingContext));
$arguments533['then'] = NULL;
$arguments533['else'] = NULL;
$renderChildrenClosure534 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output535 = '';

$output535 .= '

								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments536 = array();
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output538 = '';

$output538 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments539 = array();
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										If some fields are selected in the flexform
									';
};

$output538 .= '';

$output538 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments541 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments542 = array();
$arguments542['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'edit.fields', $renderingContext);
$arguments542['separator'] = ',';
$arguments542['trim'] = true;
$renderChildrenClosure543 = function() {return NULL;};
$viewHelper544 = $self->getViewHelper('$viewHelper544', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper');
$viewHelper544->setArguments($arguments542);
$viewHelper544->setRenderingContext($renderingContext);
$viewHelper544->setRenderChildrenClosure($renderChildrenClosure543);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments541['each'] = $viewHelper544->initializeArgumentsAndRender();
$arguments541['as'] = 'field';
$arguments541['key'] = '';
$arguments541['reverse'] = false;
$arguments541['iteration'] = NULL;
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output546 = '';

$output546 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments547 = array();
$output548 = '';

$output548 .= 'Fields/';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$arguments549 = array();
$arguments549['string'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure550 = function() {return NULL;};
$viewHelper551 = $self->getViewHelper('$viewHelper551', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\UpperViewHelper');
$viewHelper551->setArguments($arguments549);
$viewHelper551->setRenderingContext($renderingContext);
$viewHelper551->setRenderChildrenClosure($renderChildrenClosure550);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper

$output548 .= $viewHelper551->initializeArgumentsAndRender();
$arguments547['partial'] = $output548;
$arguments547['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments547['section'] = NULL;
$arguments547['optional'] = false;
$renderChildrenClosure552 = function() {return NULL;};

$output546 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments547, $renderChildrenClosure552, $renderingContext);

$output546 .= '
									';
return $output546;
};

$output538 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments541, $renderChildrenClosure545, $renderingContext);

$output538 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments553 = array();
$arguments553['partial'] = 'Fields/SubmitUpdate';
$arguments553['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments553['section'] = NULL;
$arguments553['optional'] = false;
$renderChildrenClosure554 = function() {return NULL;};

$output538 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext);

$output538 .= '
								';
return $output538;
};

$output535 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext);

$output535 .= '

								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments555 = array();
$renderChildrenClosure556 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output557 = '';

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments558 = array();
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										If no fields are selected in the flexform => show all
									';
};

$output557 .= '';

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments560 = array();
$arguments560['partial'] = 'Fields/Username';
$arguments560['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments560['section'] = NULL;
$arguments560['optional'] = false;
$renderChildrenClosure561 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments560, $renderChildrenClosure561, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments562 = array();
$arguments562['partial'] = 'Fields/Password';
$arguments562['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments562['section'] = NULL;
$arguments562['optional'] = false;
$renderChildrenClosure563 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments564 = array();
$arguments564['partial'] = 'Fields/Title';
$arguments564['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments564['section'] = NULL;
$arguments564['optional'] = false;
$renderChildrenClosure565 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments564, $renderChildrenClosure565, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments566 = array();
$arguments566['partial'] = 'Fields/Name';
$arguments566['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments566['section'] = NULL;
$arguments566['optional'] = false;
$renderChildrenClosure567 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments566, $renderChildrenClosure567, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments568 = array();
$arguments568['partial'] = 'Fields/FirstName';
$arguments568['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments568['section'] = NULL;
$arguments568['optional'] = false;
$renderChildrenClosure569 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments568, $renderChildrenClosure569, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments570 = array();
$arguments570['partial'] = 'Fields/MiddleName';
$arguments570['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments570['section'] = NULL;
$arguments570['optional'] = false;
$renderChildrenClosure571 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments572 = array();
$arguments572['partial'] = 'Fields/LastName';
$arguments572['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments572['section'] = NULL;
$arguments572['optional'] = false;
$renderChildrenClosure573 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments572, $renderChildrenClosure573, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments574 = array();
$arguments574['partial'] = 'Fields/Gender';
$arguments574['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments574['section'] = NULL;
$arguments574['optional'] = false;
$renderChildrenClosure575 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments574, $renderChildrenClosure575, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments576 = array();
$arguments576['partial'] = 'Fields/DateOfBirth';
$arguments576['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments576['section'] = NULL;
$arguments576['optional'] = false;
$renderChildrenClosure577 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments576, $renderChildrenClosure577, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments578 = array();
$arguments578['partial'] = 'Fields/Company';
$arguments578['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments578['section'] = NULL;
$arguments578['optional'] = false;
$renderChildrenClosure579 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments578, $renderChildrenClosure579, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments580 = array();
$arguments580['partial'] = 'Fields/Www';
$arguments580['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments580['section'] = NULL;
$arguments580['optional'] = false;
$renderChildrenClosure581 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments580, $renderChildrenClosure581, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments582 = array();
$arguments582['partial'] = 'Fields/Email';
$arguments582['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments582['section'] = NULL;
$arguments582['optional'] = false;
$renderChildrenClosure583 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments582, $renderChildrenClosure583, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments584 = array();
$arguments584['partial'] = 'Fields/Telephone';
$arguments584['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments584['section'] = NULL;
$arguments584['optional'] = false;
$renderChildrenClosure585 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments584, $renderChildrenClosure585, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments586 = array();
$arguments586['partial'] = 'Fields/Fax';
$arguments586['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments586['section'] = NULL;
$arguments586['optional'] = false;
$renderChildrenClosure587 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments588 = array();
$arguments588['partial'] = 'Fields/Address';
$arguments588['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments588['section'] = NULL;
$arguments588['optional'] = false;
$renderChildrenClosure589 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments588, $renderChildrenClosure589, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments590 = array();
$arguments590['partial'] = 'Fields/Zip';
$arguments590['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments590['section'] = NULL;
$arguments590['optional'] = false;
$renderChildrenClosure591 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments590, $renderChildrenClosure591, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments592 = array();
$arguments592['partial'] = 'Fields/City';
$arguments592['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments592['section'] = NULL;
$arguments592['optional'] = false;
$renderChildrenClosure593 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments594 = array();
$arguments594['partial'] = 'Fields/Country';
$arguments594['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments594['section'] = NULL;
$arguments594['optional'] = false;
$renderChildrenClosure595 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments594, $renderChildrenClosure595, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments596 = array();
$arguments596['partial'] = 'Fields/Image';
$arguments596['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments596['section'] = NULL;
$arguments596['optional'] = false;
$renderChildrenClosure597 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments596, $renderChildrenClosure597, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments598 = array();
$arguments598['partial'] = 'Fields/Usergroup';
$arguments598['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments598['section'] = NULL;
$arguments598['optional'] = false;
$renderChildrenClosure599 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments598, $renderChildrenClosure599, $renderingContext);

$output557 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments600 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments601 = array();
$arguments601['settings'] = $currentVariableContainer->getOrNull('settings');
$renderChildrenClosure602 = function() {return NULL;};
$viewHelper603 = $self->getViewHelper('$viewHelper603', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper');
$viewHelper603->setArguments($arguments601);
$viewHelper603->setRenderingContext($renderingContext);
$viewHelper603->setRenderChildrenClosure($renderChildrenClosure602);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments600['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper603->initializeArgumentsAndRender());
$arguments600['then'] = NULL;
$arguments600['else'] = NULL;
$renderChildrenClosure604 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output605 = '';

$output605 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments606 = array();
$arguments606['partial'] = 'Fields/Captcha';
$arguments606['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments606['section'] = NULL;
$arguments606['optional'] = false;
$renderChildrenClosure607 = function() {return NULL;};

$output605 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments606, $renderChildrenClosure607, $renderingContext);

$output605 .= '
									';
return $output605;
};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments600, $renderChildrenClosure604, $renderingContext);

$output557 .= '

									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments608 = array();
$arguments608['partial'] = 'Fields/SubmitUpdate';
$arguments608['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments608['section'] = NULL;
$arguments608['optional'] = false;
$renderChildrenClosure609 = function() {return NULL;};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments608, $renderChildrenClosure609, $renderingContext);

$output557 .= '
								';
return $output557;
};

$output535 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments555, $renderChildrenClosure556, $renderingContext);

$output535 .= '

							';
return $output535;
};
$arguments533['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output610 = '';

$output610 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments611 = array();
$renderChildrenClosure612 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										If some fields are selected in the flexform
									';
};

$output610 .= '';

$output610 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments613 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments614 = array();
$arguments614['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'edit.fields', $renderingContext);
$arguments614['separator'] = ',';
$arguments614['trim'] = true;
$renderChildrenClosure615 = function() {return NULL;};
$viewHelper616 = $self->getViewHelper('$viewHelper616', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper');
$viewHelper616->setArguments($arguments614);
$viewHelper616->setRenderingContext($renderingContext);
$viewHelper616->setRenderChildrenClosure($renderChildrenClosure615);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments613['each'] = $viewHelper616->initializeArgumentsAndRender();
$arguments613['as'] = 'field';
$arguments613['key'] = '';
$arguments613['reverse'] = false;
$arguments613['iteration'] = NULL;
$renderChildrenClosure617 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output618 = '';

$output618 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments619 = array();
$output620 = '';

$output620 .= 'Fields/';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$arguments621 = array();
$arguments621['string'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure622 = function() {return NULL;};
$viewHelper623 = $self->getViewHelper('$viewHelper623', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\UpperViewHelper');
$viewHelper623->setArguments($arguments621);
$viewHelper623->setRenderingContext($renderingContext);
$viewHelper623->setRenderChildrenClosure($renderChildrenClosure622);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper

$output620 .= $viewHelper623->initializeArgumentsAndRender();
$arguments619['partial'] = $output620;
$arguments619['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments619['section'] = NULL;
$arguments619['optional'] = false;
$renderChildrenClosure624 = function() {return NULL;};

$output618 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments619, $renderChildrenClosure624, $renderingContext);

$output618 .= '
									';
return $output618;
};

$output610 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments613, $renderChildrenClosure617, $renderingContext);

$output610 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments625 = array();
$arguments625['partial'] = 'Fields/SubmitUpdate';
$arguments625['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments625['section'] = NULL;
$arguments625['optional'] = false;
$renderChildrenClosure626 = function() {return NULL;};

$output610 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments625, $renderChildrenClosure626, $renderingContext);

$output610 .= '
								';
return $output610;
};
$arguments533['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output627 = '';

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments628 = array();
$renderChildrenClosure629 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
										If no fields are selected in the flexform => show all
									';
};

$output627 .= '';

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments630 = array();
$arguments630['partial'] = 'Fields/Username';
$arguments630['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments630['section'] = NULL;
$arguments630['optional'] = false;
$renderChildrenClosure631 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments630, $renderChildrenClosure631, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments632 = array();
$arguments632['partial'] = 'Fields/Password';
$arguments632['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments632['section'] = NULL;
$arguments632['optional'] = false;
$renderChildrenClosure633 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments632, $renderChildrenClosure633, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments634 = array();
$arguments634['partial'] = 'Fields/Title';
$arguments634['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments634['section'] = NULL;
$arguments634['optional'] = false;
$renderChildrenClosure635 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments634, $renderChildrenClosure635, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments636 = array();
$arguments636['partial'] = 'Fields/Name';
$arguments636['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments636['section'] = NULL;
$arguments636['optional'] = false;
$renderChildrenClosure637 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments636, $renderChildrenClosure637, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments638 = array();
$arguments638['partial'] = 'Fields/FirstName';
$arguments638['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments638['section'] = NULL;
$arguments638['optional'] = false;
$renderChildrenClosure639 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments638, $renderChildrenClosure639, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments640 = array();
$arguments640['partial'] = 'Fields/MiddleName';
$arguments640['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments640['section'] = NULL;
$arguments640['optional'] = false;
$renderChildrenClosure641 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments640, $renderChildrenClosure641, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments642 = array();
$arguments642['partial'] = 'Fields/LastName';
$arguments642['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments642['section'] = NULL;
$arguments642['optional'] = false;
$renderChildrenClosure643 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments642, $renderChildrenClosure643, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments644 = array();
$arguments644['partial'] = 'Fields/Gender';
$arguments644['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments644['section'] = NULL;
$arguments644['optional'] = false;
$renderChildrenClosure645 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments644, $renderChildrenClosure645, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments646 = array();
$arguments646['partial'] = 'Fields/DateOfBirth';
$arguments646['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments646['section'] = NULL;
$arguments646['optional'] = false;
$renderChildrenClosure647 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments646, $renderChildrenClosure647, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments648 = array();
$arguments648['partial'] = 'Fields/Company';
$arguments648['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments648['section'] = NULL;
$arguments648['optional'] = false;
$renderChildrenClosure649 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments648, $renderChildrenClosure649, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments650 = array();
$arguments650['partial'] = 'Fields/Www';
$arguments650['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments650['section'] = NULL;
$arguments650['optional'] = false;
$renderChildrenClosure651 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments650, $renderChildrenClosure651, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments652 = array();
$arguments652['partial'] = 'Fields/Email';
$arguments652['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments652['section'] = NULL;
$arguments652['optional'] = false;
$renderChildrenClosure653 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments652, $renderChildrenClosure653, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments654 = array();
$arguments654['partial'] = 'Fields/Telephone';
$arguments654['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments654['section'] = NULL;
$arguments654['optional'] = false;
$renderChildrenClosure655 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments654, $renderChildrenClosure655, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments656 = array();
$arguments656['partial'] = 'Fields/Fax';
$arguments656['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments656['section'] = NULL;
$arguments656['optional'] = false;
$renderChildrenClosure657 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments656, $renderChildrenClosure657, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments658 = array();
$arguments658['partial'] = 'Fields/Address';
$arguments658['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments658['section'] = NULL;
$arguments658['optional'] = false;
$renderChildrenClosure659 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments658, $renderChildrenClosure659, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments660 = array();
$arguments660['partial'] = 'Fields/Zip';
$arguments660['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments660['section'] = NULL;
$arguments660['optional'] = false;
$renderChildrenClosure661 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments660, $renderChildrenClosure661, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments662 = array();
$arguments662['partial'] = 'Fields/City';
$arguments662['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments662['section'] = NULL;
$arguments662['optional'] = false;
$renderChildrenClosure663 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments662, $renderChildrenClosure663, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments664 = array();
$arguments664['partial'] = 'Fields/Country';
$arguments664['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments664['section'] = NULL;
$arguments664['optional'] = false;
$renderChildrenClosure665 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments664, $renderChildrenClosure665, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments666 = array();
$arguments666['partial'] = 'Fields/Image';
$arguments666['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments666['section'] = NULL;
$arguments666['optional'] = false;
$renderChildrenClosure667 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments666, $renderChildrenClosure667, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments668 = array();
$arguments668['partial'] = 'Fields/Usergroup';
$arguments668['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments668['section'] = NULL;
$arguments668['optional'] = false;
$renderChildrenClosure669 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments668, $renderChildrenClosure669, $renderingContext);

$output627 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments670 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments671 = array();
$arguments671['settings'] = $currentVariableContainer->getOrNull('settings');
$renderChildrenClosure672 = function() {return NULL;};
$viewHelper673 = $self->getViewHelper('$viewHelper673', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper');
$viewHelper673->setArguments($arguments671);
$viewHelper673->setRenderingContext($renderingContext);
$viewHelper673->setRenderChildrenClosure($renderChildrenClosure672);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments670['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper673->initializeArgumentsAndRender());
$arguments670['then'] = NULL;
$arguments670['else'] = NULL;
$renderChildrenClosure674 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output675 = '';

$output675 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments676 = array();
$arguments676['partial'] = 'Fields/Captcha';
$arguments676['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments676['section'] = NULL;
$arguments676['optional'] = false;
$renderChildrenClosure677 = function() {return NULL;};

$output675 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments676, $renderChildrenClosure677, $renderingContext);

$output675 .= '
									';
return $output675;
};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments670, $renderChildrenClosure674, $renderingContext);

$output627 .= '

									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments678 = array();
$arguments678['partial'] = 'Fields/SubmitUpdate';
$arguments678['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments678['section'] = NULL;
$arguments678['optional'] = false;
$renderChildrenClosure679 = function() {return NULL;};

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments678, $renderChildrenClosure679, $renderingContext);

$output627 .= '
								';
return $output627;
};

$output530 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments533, $renderChildrenClosure534, $renderingContext);

$output530 .= '

						</fieldset>

						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments680 = array();
$arguments680['partial'] = 'Misc/DeleteLink';
$arguments680['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments680['section'] = NULL;
$arguments680['optional'] = false;
$renderChildrenClosure681 = function() {return NULL;};

$output530 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments680, $renderChildrenClosure681, $renderingContext);

$output530 .= '
					';
return $output530;
};
$viewHelper682 = $self->getViewHelper('$viewHelper682', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper682->setArguments($arguments525);
$viewHelper682->setRenderingContext($renderingContext);
$viewHelper682->setRenderChildrenClosure($renderChildrenClosure529);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output524 .= $viewHelper682->initializeArgumentsAndRender();

$output524 .= '
				';
return $output524;
};
$arguments355['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output683 = '';

$output683 .= '
					<div class="femanager_note">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments684 = array();
$arguments684['key'] = 'notLoggedIn';
$arguments684['id'] = NULL;
$arguments684['default'] = NULL;
$arguments684['htmlEscape'] = NULL;
$arguments684['arguments'] = NULL;
$arguments684['extensionName'] = NULL;
$renderChildrenClosure685 = function() {return NULL;};

$output683 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments684, $renderChildrenClosure685, $renderingContext);

$output683 .= '
					</div>
				';
return $output683;
};

$output349 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);

$output349 .= '
		</div>
	';
return $output349;
};

$output337 .= '';

$output337 .= '

</div>
';


return $output337;
}


}
#1507232167    167044    