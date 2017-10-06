<?php
class FluidCache_Femanager_New_action_new_6b2b689ee3b5ba2e82d4d24d89d72643f887c78e extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

	<div class="femanager_new">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments6 = array();
$arguments6['name'] = 'user';
$arguments6['object'] = $currentVariableContainer->getOrNull('user');
$arguments6['action'] = 'create';
$output7 = '';

$output7 .= 'form-horizontal ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments8 = array();
// Rendering Boolean node
$arguments8['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'new.validation._enable.client', $renderingContext));
$arguments8['then'] = 'feManagerValidation';
$arguments8['else'] = '';
$renderChildrenClosure9 = function() {return NULL;};

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
$arguments6['class'] = $output7;
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['arguments'] = array (
);
$arguments6['controller'] = NULL;
$arguments6['extensionName'] = NULL;
$arguments6['pluginName'] = NULL;
$arguments6['pageUid'] = NULL;
$arguments6['pageType'] = 0;
$arguments6['noCache'] = false;
$arguments6['noCacheHash'] = false;
$arguments6['section'] = '';
$arguments6['format'] = '';
$arguments6['additionalParams'] = array (
);
$arguments6['absolute'] = false;
$arguments6['addQueryString'] = false;
$arguments6['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments6['fieldNamePrefix'] = NULL;
$arguments6['actionUri'] = NULL;
$arguments6['objectName'] = NULL;
$arguments6['hiddenFieldClassName'] = NULL;
$arguments6['addQueryStringMethod'] = '';
$arguments6['enctype'] = NULL;
$arguments6['method'] = NULL;
$arguments6['onreset'] = NULL;
$arguments6['onsubmit'] = NULL;
$arguments6['target'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
			<fieldset>
				<legend>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments12 = array();
$arguments12['key'] = 'titleCreateProfile';
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['htmlEscape'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$renderChildrenClosure13 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
				</legend>

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments14 = array();
// Rendering Boolean node
$arguments14['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'new.fields', $renderingContext));
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output16 = '';

$output16 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments17 = array();
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments20 = array();
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
							If some fields are selected in the flexform
						';
};

$output19 .= '';

$output19 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments22 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments23 = array();
$arguments23['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'new.fields', $renderingContext);
$arguments23['separator'] = ',';
$arguments23['trim'] = true;
$renderChildrenClosure24 = function() {return NULL;};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper');
$viewHelper25->setArguments($arguments23);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments22['each'] = $viewHelper25->initializeArgumentsAndRender();
$arguments22['as'] = 'field';
$arguments22['key'] = '';
$arguments22['reverse'] = false;
$arguments22['iteration'] = NULL;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output27 = '';

$output27 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments28 = array();
$output29 = '';

$output29 .= 'Fields/';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$arguments30 = array();
$arguments30['string'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure31 = function() {return NULL;};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\UpperViewHelper');
$viewHelper32->setArguments($arguments30);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper

$output29 .= $viewHelper32->initializeArgumentsAndRender();
$arguments28['partial'] = $output29;
$arguments28['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments28['section'] = NULL;
$arguments28['optional'] = false;
$renderChildrenClosure33 = function() {return NULL;};

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure33, $renderingContext);

$output27 .= '
						';
return $output27;
};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments22, $renderChildrenClosure26, $renderingContext);

$output19 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments34 = array();
$arguments34['partial'] = 'Fields/SubmitCreate';
$arguments34['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments34['section'] = NULL;
$arguments34['optional'] = false;
$renderChildrenClosure35 = function() {return NULL;};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output19 .= '
					';
return $output19;
};

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments36 = array();
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments39 = array();
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
							If no fields are selected in the flexform => show all
						';
};

$output38 .= '';

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments41 = array();
$arguments41['partial'] = 'Fields/Username';
$arguments41['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments41['section'] = NULL;
$arguments41['optional'] = false;
$renderChildrenClosure42 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments43 = array();
$arguments43['partial'] = 'Fields/Password';
$arguments43['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments43['section'] = NULL;
$arguments43['optional'] = false;
$renderChildrenClosure44 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments45 = array();
$arguments45['partial'] = 'Fields/Title';
$arguments45['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments45['section'] = NULL;
$arguments45['optional'] = false;
$renderChildrenClosure46 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments47 = array();
$arguments47['partial'] = 'Fields/Name';
$arguments47['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments47['section'] = NULL;
$arguments47['optional'] = false;
$renderChildrenClosure48 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments49 = array();
$arguments49['partial'] = 'Fields/FirstName';
$arguments49['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments49['section'] = NULL;
$arguments49['optional'] = false;
$renderChildrenClosure50 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments51 = array();
$arguments51['partial'] = 'Fields/MiddleName';
$arguments51['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments51['section'] = NULL;
$arguments51['optional'] = false;
$renderChildrenClosure52 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments53 = array();
$arguments53['partial'] = 'Fields/LastName';
$arguments53['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments53['section'] = NULL;
$arguments53['optional'] = false;
$renderChildrenClosure54 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments55 = array();
$arguments55['partial'] = 'Fields/Gender';
$arguments55['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments55['section'] = NULL;
$arguments55['optional'] = false;
$renderChildrenClosure56 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments57 = array();
$arguments57['partial'] = 'Fields/DateOfBirth';
$arguments57['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments57['section'] = NULL;
$arguments57['optional'] = false;
$renderChildrenClosure58 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments59 = array();
$arguments59['partial'] = 'Fields/Company';
$arguments59['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments59['section'] = NULL;
$arguments59['optional'] = false;
$renderChildrenClosure60 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments61 = array();
$arguments61['partial'] = 'Fields/Www';
$arguments61['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments61['section'] = NULL;
$arguments61['optional'] = false;
$renderChildrenClosure62 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments63 = array();
$arguments63['partial'] = 'Fields/Email';
$arguments63['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments63['section'] = NULL;
$arguments63['optional'] = false;
$renderChildrenClosure64 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments65 = array();
$arguments65['partial'] = 'Fields/Telephone';
$arguments65['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments65['section'] = NULL;
$arguments65['optional'] = false;
$renderChildrenClosure66 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments67 = array();
$arguments67['partial'] = 'Fields/Fax';
$arguments67['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments67['section'] = NULL;
$arguments67['optional'] = false;
$renderChildrenClosure68 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments69 = array();
$arguments69['partial'] = 'Fields/Address';
$arguments69['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments69['section'] = NULL;
$arguments69['optional'] = false;
$renderChildrenClosure70 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments71 = array();
$arguments71['partial'] = 'Fields/Zip';
$arguments71['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments71['section'] = NULL;
$arguments71['optional'] = false;
$renderChildrenClosure72 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments73 = array();
$arguments73['partial'] = 'Fields/City';
$arguments73['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments73['section'] = NULL;
$arguments73['optional'] = false;
$renderChildrenClosure74 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments75 = array();
$arguments75['partial'] = 'Fields/Country';
$arguments75['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments75['section'] = NULL;
$arguments75['optional'] = false;
$renderChildrenClosure76 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments77 = array();
$arguments77['partial'] = 'Fields/Image';
$arguments77['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments77['section'] = NULL;
$arguments77['optional'] = false;
$renderChildrenClosure78 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments79 = array();
$arguments79['partial'] = 'Fields/Usergroup';
$arguments79['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments79['section'] = NULL;
$arguments79['optional'] = false;
$renderChildrenClosure80 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output38 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments81 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments82 = array();
$arguments82['settings'] = $currentVariableContainer->getOrNull('settings');
$renderChildrenClosure83 = function() {return NULL;};
$viewHelper84 = $self->getViewHelper('$viewHelper84', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper');
$viewHelper84->setArguments($arguments82);
$viewHelper84->setRenderingContext($renderingContext);
$viewHelper84->setRenderChildrenClosure($renderChildrenClosure83);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments81['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper84->initializeArgumentsAndRender());
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output86 = '';

$output86 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments87 = array();
$arguments87['partial'] = 'Fields/Captcha';
$arguments87['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments87['section'] = NULL;
$arguments87['optional'] = false;
$renderChildrenClosure88 = function() {return NULL;};

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '
						';
return $output86;
};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure85, $renderingContext);

$output38 .= '

						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments89 = array();
$arguments89['partial'] = 'Fields/SubmitCreate';
$arguments89['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments89['section'] = NULL;
$arguments89['optional'] = false;
$renderChildrenClosure90 = function() {return NULL;};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output38 .= '
					';
return $output38;
};

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output16 .= '

				';
return $output16;
};
$arguments14['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output91 = '';

$output91 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments92 = array();
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
							If some fields are selected in the flexform
						';
};

$output91 .= '';

$output91 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments94 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments95 = array();
$arguments95['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'new.fields', $renderingContext);
$arguments95['separator'] = ',';
$arguments95['trim'] = true;
$renderChildrenClosure96 = function() {return NULL;};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper');
$viewHelper97->setArguments($arguments95);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments94['each'] = $viewHelper97->initializeArgumentsAndRender();
$arguments94['as'] = 'field';
$arguments94['key'] = '';
$arguments94['reverse'] = false;
$arguments94['iteration'] = NULL;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output99 = '';

$output99 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments100 = array();
$output101 = '';

$output101 .= 'Fields/';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$arguments102 = array();
$arguments102['string'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure103 = function() {return NULL;};
$viewHelper104 = $self->getViewHelper('$viewHelper104', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\UpperViewHelper');
$viewHelper104->setArguments($arguments102);
$viewHelper104->setRenderingContext($renderingContext);
$viewHelper104->setRenderChildrenClosure($renderChildrenClosure103);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper

$output101 .= $viewHelper104->initializeArgumentsAndRender();
$arguments100['partial'] = $output101;
$arguments100['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments100['section'] = NULL;
$arguments100['optional'] = false;
$renderChildrenClosure105 = function() {return NULL;};

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments100, $renderChildrenClosure105, $renderingContext);

$output99 .= '
						';
return $output99;
};

$output91 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments94, $renderChildrenClosure98, $renderingContext);

$output91 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments106 = array();
$arguments106['partial'] = 'Fields/SubmitCreate';
$arguments106['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments106['section'] = NULL;
$arguments106['optional'] = false;
$renderChildrenClosure107 = function() {return NULL;};

$output91 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output91 .= '
					';
return $output91;
};
$arguments14['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output108 = '';

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments109 = array();
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
							If no fields are selected in the flexform => show all
						';
};

$output108 .= '';

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments111 = array();
$arguments111['partial'] = 'Fields/Username';
$arguments111['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments111['section'] = NULL;
$arguments111['optional'] = false;
$renderChildrenClosure112 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments113 = array();
$arguments113['partial'] = 'Fields/Password';
$arguments113['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments113['section'] = NULL;
$arguments113['optional'] = false;
$renderChildrenClosure114 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments115 = array();
$arguments115['partial'] = 'Fields/Title';
$arguments115['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments115['section'] = NULL;
$arguments115['optional'] = false;
$renderChildrenClosure116 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments117 = array();
$arguments117['partial'] = 'Fields/Name';
$arguments117['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments117['section'] = NULL;
$arguments117['optional'] = false;
$renderChildrenClosure118 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments119 = array();
$arguments119['partial'] = 'Fields/FirstName';
$arguments119['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments119['section'] = NULL;
$arguments119['optional'] = false;
$renderChildrenClosure120 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments121 = array();
$arguments121['partial'] = 'Fields/MiddleName';
$arguments121['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments121['section'] = NULL;
$arguments121['optional'] = false;
$renderChildrenClosure122 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments123 = array();
$arguments123['partial'] = 'Fields/LastName';
$arguments123['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments123['section'] = NULL;
$arguments123['optional'] = false;
$renderChildrenClosure124 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments125 = array();
$arguments125['partial'] = 'Fields/Gender';
$arguments125['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments125['section'] = NULL;
$arguments125['optional'] = false;
$renderChildrenClosure126 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments127 = array();
$arguments127['partial'] = 'Fields/DateOfBirth';
$arguments127['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments127['section'] = NULL;
$arguments127['optional'] = false;
$renderChildrenClosure128 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments129 = array();
$arguments129['partial'] = 'Fields/Company';
$arguments129['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments129['section'] = NULL;
$arguments129['optional'] = false;
$renderChildrenClosure130 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments131 = array();
$arguments131['partial'] = 'Fields/Www';
$arguments131['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments131['section'] = NULL;
$arguments131['optional'] = false;
$renderChildrenClosure132 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments133 = array();
$arguments133['partial'] = 'Fields/Email';
$arguments133['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments133['section'] = NULL;
$arguments133['optional'] = false;
$renderChildrenClosure134 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments135 = array();
$arguments135['partial'] = 'Fields/Telephone';
$arguments135['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments135['section'] = NULL;
$arguments135['optional'] = false;
$renderChildrenClosure136 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments137 = array();
$arguments137['partial'] = 'Fields/Fax';
$arguments137['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments137['section'] = NULL;
$arguments137['optional'] = false;
$renderChildrenClosure138 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments139 = array();
$arguments139['partial'] = 'Fields/Address';
$arguments139['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments139['section'] = NULL;
$arguments139['optional'] = false;
$renderChildrenClosure140 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments141 = array();
$arguments141['partial'] = 'Fields/Zip';
$arguments141['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments141['section'] = NULL;
$arguments141['optional'] = false;
$renderChildrenClosure142 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments143 = array();
$arguments143['partial'] = 'Fields/City';
$arguments143['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments143['section'] = NULL;
$arguments143['optional'] = false;
$renderChildrenClosure144 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments145 = array();
$arguments145['partial'] = 'Fields/Country';
$arguments145['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments145['section'] = NULL;
$arguments145['optional'] = false;
$renderChildrenClosure146 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments147 = array();
$arguments147['partial'] = 'Fields/Image';
$arguments147['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments147['section'] = NULL;
$arguments147['optional'] = false;
$renderChildrenClosure148 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments149 = array();
$arguments149['partial'] = 'Fields/Usergroup';
$arguments149['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments149['section'] = NULL;
$arguments149['optional'] = false;
$renderChildrenClosure150 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments151 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments152 = array();
$arguments152['settings'] = $currentVariableContainer->getOrNull('settings');
$renderChildrenClosure153 = function() {return NULL;};
$viewHelper154 = $self->getViewHelper('$viewHelper154', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper');
$viewHelper154->setArguments($arguments152);
$viewHelper154->setRenderingContext($renderingContext);
$viewHelper154->setRenderChildrenClosure($renderChildrenClosure153);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments151['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper154->initializeArgumentsAndRender());
$arguments151['then'] = NULL;
$arguments151['else'] = NULL;
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output156 = '';

$output156 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments157 = array();
$arguments157['partial'] = 'Fields/Captcha';
$arguments157['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments157['section'] = NULL;
$arguments157['optional'] = false;
$renderChildrenClosure158 = function() {return NULL;};

$output156 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output156 .= '
						';
return $output156;
};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments151, $renderChildrenClosure155, $renderingContext);

$output108 .= '

						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments159 = array();
$arguments159['partial'] = 'Fields/SubmitCreate';
$arguments159['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments159['section'] = NULL;
$arguments159['optional'] = false;
$renderChildrenClosure160 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output108 .= '
					';
return $output108;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output11 .= '

			</fieldset>
		';
return $output11;
};
$viewHelper161 = $self->getViewHelper('$viewHelper161', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper161->setArguments($arguments6);
$viewHelper161->setRenderingContext($renderingContext);
$viewHelper161->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper161->initializeArgumentsAndRender();

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

$output162 = '';

$output162 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments163 = array();
$arguments163['name'] = 'Default';
$renderChildrenClosure164 = function() {return NULL;};
$viewHelper165 = $self->getViewHelper('$viewHelper165', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper165->setArguments($arguments163);
$viewHelper165->setRenderingContext($renderingContext);
$viewHelper165->setRenderChildrenClosure($renderChildrenClosure164);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output162 .= $viewHelper165->initializeArgumentsAndRender();

$output162 .= '

	User / New
		Available variables:
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments166 = array();
$arguments166['value'] = $currentVariableContainer->getOrNull('user');
$arguments166['keepQuotes'] = false;
$arguments166['encoding'] = NULL;
$arguments166['doubleEncode'] = true;
$renderChildrenClosure167 = function() {return NULL;};
$value168 = ($arguments166['value'] !== NULL ? $arguments166['value'] : $renderChildrenClosure167());

$output162 .= (!is_string($value168) ? $value168 : htmlspecialchars($value168, ($arguments166['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments166['encoding'] !== NULL ? $arguments166['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments166['doubleEncode']));

$output162 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments169 = array();
$arguments169['value'] = $currentVariableContainer->getOrNull('allUserGroups');
$arguments169['keepQuotes'] = false;
$arguments169['encoding'] = NULL;
$arguments169['doubleEncode'] = true;
$renderChildrenClosure170 = function() {return NULL;};
$value171 = ($arguments169['value'] !== NULL ? $arguments169['value'] : $renderChildrenClosure170());

$output162 .= (!is_string($value171) ? $value171 : htmlspecialchars($value171, ($arguments169['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments169['encoding'] !== NULL ? $arguments169['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments169['doubleEncode']));

$output162 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments172 = array();
$arguments172['name'] = 'main';
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output174 = '';

$output174 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments175 = array();
$arguments175['partial'] = 'Misc/FlashMessages';
$arguments175['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments175['section'] = NULL;
$arguments175['optional'] = false;
$renderChildrenClosure176 = function() {return NULL;};

$output174 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output174 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments177 = array();
$arguments177['partial'] = 'Misc/FormErrors';
// Rendering Array
$array178 = array();
$array178['object'] = $currentVariableContainer->getOrNull('User');
$arguments177['arguments'] = $array178;
$arguments177['section'] = NULL;
$arguments177['optional'] = false;
$renderChildrenClosure179 = function() {return NULL;};

$output174 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments177, $renderChildrenClosure179, $renderingContext);

$output174 .= '

	<div class="femanager_new">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments180 = array();
$arguments180['name'] = 'user';
$arguments180['object'] = $currentVariableContainer->getOrNull('user');
$arguments180['action'] = 'create';
$output181 = '';

$output181 .= 'form-horizontal ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments182 = array();
// Rendering Boolean node
$arguments182['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'new.validation._enable.client', $renderingContext));
$arguments182['then'] = 'feManagerValidation';
$arguments182['else'] = '';
$renderChildrenClosure183 = function() {return NULL;};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);
$arguments180['class'] = $output181;
$arguments180['additionalAttributes'] = NULL;
$arguments180['data'] = NULL;
$arguments180['arguments'] = array (
);
$arguments180['controller'] = NULL;
$arguments180['extensionName'] = NULL;
$arguments180['pluginName'] = NULL;
$arguments180['pageUid'] = NULL;
$arguments180['pageType'] = 0;
$arguments180['noCache'] = false;
$arguments180['noCacheHash'] = false;
$arguments180['section'] = '';
$arguments180['format'] = '';
$arguments180['additionalParams'] = array (
);
$arguments180['absolute'] = false;
$arguments180['addQueryString'] = false;
$arguments180['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments180['fieldNamePrefix'] = NULL;
$arguments180['actionUri'] = NULL;
$arguments180['objectName'] = NULL;
$arguments180['hiddenFieldClassName'] = NULL;
$arguments180['addQueryStringMethod'] = '';
$arguments180['enctype'] = NULL;
$arguments180['method'] = NULL;
$arguments180['onreset'] = NULL;
$arguments180['onsubmit'] = NULL;
$arguments180['target'] = NULL;
$arguments180['dir'] = NULL;
$arguments180['id'] = NULL;
$arguments180['lang'] = NULL;
$arguments180['style'] = NULL;
$arguments180['title'] = NULL;
$arguments180['accesskey'] = NULL;
$arguments180['tabindex'] = NULL;
$arguments180['onclick'] = NULL;
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output185 = '';

$output185 .= '
			<fieldset>
				<legend>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments186 = array();
$arguments186['key'] = 'titleCreateProfile';
$arguments186['id'] = NULL;
$arguments186['default'] = NULL;
$arguments186['htmlEscape'] = NULL;
$arguments186['arguments'] = NULL;
$arguments186['extensionName'] = NULL;
$renderChildrenClosure187 = function() {return NULL;};

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output185 .= '
				</legend>

				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments188 = array();
// Rendering Boolean node
$arguments188['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'new.fields', $renderingContext));
$arguments188['then'] = NULL;
$arguments188['else'] = NULL;
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output190 = '';

$output190 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments191 = array();
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output193 = '';

$output193 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments194 = array();
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
							If some fields are selected in the flexform
						';
};

$output193 .= '';

$output193 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments196 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments197 = array();
$arguments197['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'new.fields', $renderingContext);
$arguments197['separator'] = ',';
$arguments197['trim'] = true;
$renderChildrenClosure198 = function() {return NULL;};
$viewHelper199 = $self->getViewHelper('$viewHelper199', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper');
$viewHelper199->setArguments($arguments197);
$viewHelper199->setRenderingContext($renderingContext);
$viewHelper199->setRenderChildrenClosure($renderChildrenClosure198);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments196['each'] = $viewHelper199->initializeArgumentsAndRender();
$arguments196['as'] = 'field';
$arguments196['key'] = '';
$arguments196['reverse'] = false;
$arguments196['iteration'] = NULL;
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output201 = '';

$output201 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments202 = array();
$output203 = '';

$output203 .= 'Fields/';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$arguments204 = array();
$arguments204['string'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure205 = function() {return NULL;};
$viewHelper206 = $self->getViewHelper('$viewHelper206', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\UpperViewHelper');
$viewHelper206->setArguments($arguments204);
$viewHelper206->setRenderingContext($renderingContext);
$viewHelper206->setRenderChildrenClosure($renderChildrenClosure205);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper

$output203 .= $viewHelper206->initializeArgumentsAndRender();
$arguments202['partial'] = $output203;
$arguments202['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments202['section'] = NULL;
$arguments202['optional'] = false;
$renderChildrenClosure207 = function() {return NULL;};

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments202, $renderChildrenClosure207, $renderingContext);

$output201 .= '
						';
return $output201;
};

$output193 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments196, $renderChildrenClosure200, $renderingContext);

$output193 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments208 = array();
$arguments208['partial'] = 'Fields/SubmitCreate';
$arguments208['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments208['section'] = NULL;
$arguments208['optional'] = false;
$renderChildrenClosure209 = function() {return NULL;};

$output193 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output193 .= '
					';
return $output193;
};

$output190 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output190 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments210 = array();
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output212 = '';

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments213 = array();
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
							If no fields are selected in the flexform => show all
						';
};

$output212 .= '';

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments215 = array();
$arguments215['partial'] = 'Fields/Username';
$arguments215['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments215['section'] = NULL;
$arguments215['optional'] = false;
$renderChildrenClosure216 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments217 = array();
$arguments217['partial'] = 'Fields/Password';
$arguments217['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments217['section'] = NULL;
$arguments217['optional'] = false;
$renderChildrenClosure218 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments219 = array();
$arguments219['partial'] = 'Fields/Title';
$arguments219['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments219['section'] = NULL;
$arguments219['optional'] = false;
$renderChildrenClosure220 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments221 = array();
$arguments221['partial'] = 'Fields/Name';
$arguments221['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments221['section'] = NULL;
$arguments221['optional'] = false;
$renderChildrenClosure222 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments223 = array();
$arguments223['partial'] = 'Fields/FirstName';
$arguments223['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments223['section'] = NULL;
$arguments223['optional'] = false;
$renderChildrenClosure224 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments225 = array();
$arguments225['partial'] = 'Fields/MiddleName';
$arguments225['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments225['section'] = NULL;
$arguments225['optional'] = false;
$renderChildrenClosure226 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments227 = array();
$arguments227['partial'] = 'Fields/LastName';
$arguments227['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments227['section'] = NULL;
$arguments227['optional'] = false;
$renderChildrenClosure228 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments229 = array();
$arguments229['partial'] = 'Fields/Gender';
$arguments229['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments229['section'] = NULL;
$arguments229['optional'] = false;
$renderChildrenClosure230 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments231 = array();
$arguments231['partial'] = 'Fields/DateOfBirth';
$arguments231['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments231['section'] = NULL;
$arguments231['optional'] = false;
$renderChildrenClosure232 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments233 = array();
$arguments233['partial'] = 'Fields/Company';
$arguments233['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments233['section'] = NULL;
$arguments233['optional'] = false;
$renderChildrenClosure234 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments235 = array();
$arguments235['partial'] = 'Fields/Www';
$arguments235['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments235['section'] = NULL;
$arguments235['optional'] = false;
$renderChildrenClosure236 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments237 = array();
$arguments237['partial'] = 'Fields/Email';
$arguments237['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments237['section'] = NULL;
$arguments237['optional'] = false;
$renderChildrenClosure238 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments239 = array();
$arguments239['partial'] = 'Fields/Telephone';
$arguments239['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments239['section'] = NULL;
$arguments239['optional'] = false;
$renderChildrenClosure240 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments241 = array();
$arguments241['partial'] = 'Fields/Fax';
$arguments241['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments241['section'] = NULL;
$arguments241['optional'] = false;
$renderChildrenClosure242 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments243 = array();
$arguments243['partial'] = 'Fields/Address';
$arguments243['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments243['section'] = NULL;
$arguments243['optional'] = false;
$renderChildrenClosure244 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments245 = array();
$arguments245['partial'] = 'Fields/Zip';
$arguments245['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments245['section'] = NULL;
$arguments245['optional'] = false;
$renderChildrenClosure246 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments247 = array();
$arguments247['partial'] = 'Fields/City';
$arguments247['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments247['section'] = NULL;
$arguments247['optional'] = false;
$renderChildrenClosure248 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments249 = array();
$arguments249['partial'] = 'Fields/Country';
$arguments249['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments249['section'] = NULL;
$arguments249['optional'] = false;
$renderChildrenClosure250 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments251 = array();
$arguments251['partial'] = 'Fields/Image';
$arguments251['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments251['section'] = NULL;
$arguments251['optional'] = false;
$renderChildrenClosure252 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments253 = array();
$arguments253['partial'] = 'Fields/Usergroup';
$arguments253['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments253['section'] = NULL;
$arguments253['optional'] = false;
$renderChildrenClosure254 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output212 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments255 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments256 = array();
$arguments256['settings'] = $currentVariableContainer->getOrNull('settings');
$renderChildrenClosure257 = function() {return NULL;};
$viewHelper258 = $self->getViewHelper('$viewHelper258', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper');
$viewHelper258->setArguments($arguments256);
$viewHelper258->setRenderingContext($renderingContext);
$viewHelper258->setRenderChildrenClosure($renderChildrenClosure257);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments255['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper258->initializeArgumentsAndRender());
$arguments255['then'] = NULL;
$arguments255['else'] = NULL;
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output260 = '';

$output260 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments261 = array();
$arguments261['partial'] = 'Fields/Captcha';
$arguments261['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments261['section'] = NULL;
$arguments261['optional'] = false;
$renderChildrenClosure262 = function() {return NULL;};

$output260 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output260 .= '
						';
return $output260;
};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments255, $renderChildrenClosure259, $renderingContext);

$output212 .= '

						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments263 = array();
$arguments263['partial'] = 'Fields/SubmitCreate';
$arguments263['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments263['section'] = NULL;
$arguments263['optional'] = false;
$renderChildrenClosure264 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output212 .= '
					';
return $output212;
};

$output190 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output190 .= '

				';
return $output190;
};
$arguments188['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output265 = '';

$output265 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments266 = array();
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
							If some fields are selected in the flexform
						';
};

$output265 .= '';

$output265 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments268 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments269 = array();
$arguments269['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'new.fields', $renderingContext);
$arguments269['separator'] = ',';
$arguments269['trim'] = true;
$renderChildrenClosure270 = function() {return NULL;};
$viewHelper271 = $self->getViewHelper('$viewHelper271', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper');
$viewHelper271->setArguments($arguments269);
$viewHelper271->setRenderingContext($renderingContext);
$viewHelper271->setRenderChildrenClosure($renderChildrenClosure270);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\ExplodeViewHelper
$arguments268['each'] = $viewHelper271->initializeArgumentsAndRender();
$arguments268['as'] = 'field';
$arguments268['key'] = '';
$arguments268['reverse'] = false;
$arguments268['iteration'] = NULL;
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output273 = '';

$output273 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments274 = array();
$output275 = '';

$output275 .= 'Fields/';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$arguments276 = array();
$arguments276['string'] = $currentVariableContainer->getOrNull('field');
$renderChildrenClosure277 = function() {return NULL;};
$viewHelper278 = $self->getViewHelper('$viewHelper278', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\UpperViewHelper');
$viewHelper278->setArguments($arguments276);
$viewHelper278->setRenderingContext($renderingContext);
$viewHelper278->setRenderChildrenClosure($renderChildrenClosure277);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper

$output275 .= $viewHelper278->initializeArgumentsAndRender();
$arguments274['partial'] = $output275;
$arguments274['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments274['section'] = NULL;
$arguments274['optional'] = false;
$renderChildrenClosure279 = function() {return NULL;};

$output273 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments274, $renderChildrenClosure279, $renderingContext);

$output273 .= '
						';
return $output273;
};

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments268, $renderChildrenClosure272, $renderingContext);

$output265 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments280 = array();
$arguments280['partial'] = 'Fields/SubmitCreate';
$arguments280['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments280['section'] = NULL;
$arguments280['optional'] = false;
$renderChildrenClosure281 = function() {return NULL;};

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output265 .= '
					';
return $output265;
};
$arguments188['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output282 = '';

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments283 = array();
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
							If no fields are selected in the flexform => show all
						';
};

$output282 .= '';

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments285 = array();
$arguments285['partial'] = 'Fields/Username';
$arguments285['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments285['section'] = NULL;
$arguments285['optional'] = false;
$renderChildrenClosure286 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments287 = array();
$arguments287['partial'] = 'Fields/Password';
$arguments287['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments287['section'] = NULL;
$arguments287['optional'] = false;
$renderChildrenClosure288 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments289 = array();
$arguments289['partial'] = 'Fields/Title';
$arguments289['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments289['section'] = NULL;
$arguments289['optional'] = false;
$renderChildrenClosure290 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments291 = array();
$arguments291['partial'] = 'Fields/Name';
$arguments291['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments291['section'] = NULL;
$arguments291['optional'] = false;
$renderChildrenClosure292 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments293 = array();
$arguments293['partial'] = 'Fields/FirstName';
$arguments293['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments293['section'] = NULL;
$arguments293['optional'] = false;
$renderChildrenClosure294 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments295 = array();
$arguments295['partial'] = 'Fields/MiddleName';
$arguments295['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments295['section'] = NULL;
$arguments295['optional'] = false;
$renderChildrenClosure296 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments297 = array();
$arguments297['partial'] = 'Fields/LastName';
$arguments297['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments297['section'] = NULL;
$arguments297['optional'] = false;
$renderChildrenClosure298 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments299 = array();
$arguments299['partial'] = 'Fields/Gender';
$arguments299['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments299['section'] = NULL;
$arguments299['optional'] = false;
$renderChildrenClosure300 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments301 = array();
$arguments301['partial'] = 'Fields/DateOfBirth';
$arguments301['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments301['section'] = NULL;
$arguments301['optional'] = false;
$renderChildrenClosure302 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments303 = array();
$arguments303['partial'] = 'Fields/Company';
$arguments303['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments303['section'] = NULL;
$arguments303['optional'] = false;
$renderChildrenClosure304 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments305 = array();
$arguments305['partial'] = 'Fields/Www';
$arguments305['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments305['section'] = NULL;
$arguments305['optional'] = false;
$renderChildrenClosure306 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments307 = array();
$arguments307['partial'] = 'Fields/Email';
$arguments307['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments307['section'] = NULL;
$arguments307['optional'] = false;
$renderChildrenClosure308 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments309 = array();
$arguments309['partial'] = 'Fields/Telephone';
$arguments309['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments309['section'] = NULL;
$arguments309['optional'] = false;
$renderChildrenClosure310 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments311 = array();
$arguments311['partial'] = 'Fields/Fax';
$arguments311['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments311['section'] = NULL;
$arguments311['optional'] = false;
$renderChildrenClosure312 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments313 = array();
$arguments313['partial'] = 'Fields/Address';
$arguments313['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments313['section'] = NULL;
$arguments313['optional'] = false;
$renderChildrenClosure314 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments315 = array();
$arguments315['partial'] = 'Fields/Zip';
$arguments315['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments315['section'] = NULL;
$arguments315['optional'] = false;
$renderChildrenClosure316 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments317 = array();
$arguments317['partial'] = 'Fields/City';
$arguments317['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments317['section'] = NULL;
$arguments317['optional'] = false;
$renderChildrenClosure318 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments319 = array();
$arguments319['partial'] = 'Fields/Country';
$arguments319['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments319['section'] = NULL;
$arguments319['optional'] = false;
$renderChildrenClosure320 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments321 = array();
$arguments321['partial'] = 'Fields/Image';
$arguments321['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments321['section'] = NULL;
$arguments321['optional'] = false;
$renderChildrenClosure322 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments323 = array();
$arguments323['partial'] = 'Fields/Usergroup';
$arguments323['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments323['section'] = NULL;
$arguments323['optional'] = false;
$renderChildrenClosure324 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output282 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments325 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments326 = array();
$arguments326['settings'] = $currentVariableContainer->getOrNull('settings');
$renderChildrenClosure327 = function() {return NULL;};
$viewHelper328 = $self->getViewHelper('$viewHelper328', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper');
$viewHelper328->setArguments($arguments326);
$viewHelper328->setRenderingContext($renderingContext);
$viewHelper328->setRenderChildrenClosure($renderChildrenClosure327);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\CaptchaEnabledViewHelper
$arguments325['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper328->initializeArgumentsAndRender());
$arguments325['then'] = NULL;
$arguments325['else'] = NULL;
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output330 = '';

$output330 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments331 = array();
$arguments331['partial'] = 'Fields/Captcha';
$arguments331['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments331['section'] = NULL;
$arguments331['optional'] = false;
$renderChildrenClosure332 = function() {return NULL;};

$output330 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);

$output330 .= '
						';
return $output330;
};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments325, $renderChildrenClosure329, $renderingContext);

$output282 .= '

						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments333 = array();
$arguments333['partial'] = 'Fields/SubmitCreate';
$arguments333['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments333['section'] = NULL;
$arguments333['optional'] = false;
$renderChildrenClosure334 = function() {return NULL;};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output282 .= '
					';
return $output282;
};

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output185 .= '

			</fieldset>
		';
return $output185;
};
$viewHelper335 = $self->getViewHelper('$viewHelper335', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper335->setArguments($arguments180);
$viewHelper335->setRenderingContext($renderingContext);
$viewHelper335->setRenderChildrenClosure($renderChildrenClosure184);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output174 .= $viewHelper335->initializeArgumentsAndRender();

$output174 .= '
	</div>
';
return $output174;
};

$output162 .= '';

$output162 .= '
';


return $output162;
}


}
#1507281417    81489     