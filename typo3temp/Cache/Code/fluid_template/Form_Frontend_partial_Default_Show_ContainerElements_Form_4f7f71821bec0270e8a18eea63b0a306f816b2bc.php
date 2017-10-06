<?php
class FluidCache_Form_Frontend_partial_Default_Show_ContainerElements_Form_4f7f71821bec0270e8a18eea63b0a306f816b2bc extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['class'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.class', $renderingContext);
$arguments1['dir'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.dir', $renderingContext);
$arguments1['id'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.id', $renderingContext);
$arguments1['lang'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.lang', $renderingContext);
$arguments1['style'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.style', $renderingContext);
$arguments1['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.title', $renderingContext);
$arguments1['accesskey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.accesskey', $renderingContext);
$arguments1['tabindex'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.tabindex', $renderingContext);
$arguments1['onclick'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.onclick', $renderingContext);
$arguments1['enctype'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.enctype', $renderingContext);
$arguments1['method'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.method', $renderingContext);
$arguments1['name'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.name', $renderingContext);
$arguments1['onreset'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.onreset', $renderingContext);
$arguments1['onsubmit'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.onsubmit', $renderingContext);
// Rendering Boolean node
$arguments1['absolute'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.absolute', $renderingContext));
$arguments1['action'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.action', $renderingContext);
$arguments1['actionUri'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.actionUri', $renderingContext);
// Rendering Boolean node
$arguments1['addQueryString'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.addQueryString', $renderingContext));
$arguments1['additionalAttributes'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'htmlAttributes', $renderingContext);
$arguments1['additionalParams'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.additionalParams', $renderingContext);
$arguments1['arguments'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.arguments', $renderingContext);
$arguments1['argumentsToBeExcludedFromQueryString'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.argumentsToBeExcludedFromQueryString', $renderingContext);
$arguments1['controller'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.controller', $renderingContext);
$arguments1['extensionName'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.extensionName', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments2 = array();
// Rendering Boolean node
$arguments2['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.format', $renderingContext));
$arguments2['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.format', $renderingContext);
$arguments2['else'] = NULL;
$renderChildrenClosure3 = function() {return NULL;};
$arguments1['format'] = TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);
$arguments1['hiddenFieldClassName'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.hiddenFieldClassName', $renderingContext);
$arguments1['object'] = $currentVariableContainer->getOrNull('model');
$arguments1['pageType'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.pageType', $renderingContext);
$arguments1['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.pageUid', $renderingContext);
$arguments1['pluginName'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.pluginName', $renderingContext);
$arguments1['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'additionalArguments.section', $renderingContext);
$arguments1['data'] = NULL;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['fieldNamePrefix'] = NULL;
$arguments1['objectName'] = NULL;
$arguments1['addQueryStringMethod'] = '';
$arguments1['target'] = NULL;
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output5 = '';

$output5 .= '

	<ol>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments6 = array();
$arguments6['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('model'), 'childElements', $renderingContext);
$arguments6['as'] = 'element';
$arguments6['key'] = '';
$arguments6['reverse'] = false;
$arguments6['iteration'] = NULL;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output8 = '';

$output8 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments9 = array();
$output10 = '';

$output10 .= $currentVariableContainer->getOrNull('themeName');

$output10 .= '/Show/';

$output10 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('element'), 'partialPath', $renderingContext);
$arguments9['partial'] = $output10;
// Rendering Array
$array11 = array();
$array11['model'] = $currentVariableContainer->getOrNull('element');
$array11['themeName'] = $currentVariableContainer->getOrNull('themeName');
$arguments9['arguments'] = $array11;
$arguments9['section'] = NULL;
$arguments9['optional'] = false;
$renderChildrenClosure12 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure12, $renderingContext);

$output8 .= '
		';
return $output8;
};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
	</ol>
';
return $output5;
};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper13->setArguments($arguments1);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure4);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper13->initializeArgumentsAndRender();

$output0 .= '
';


return $output0;
}


}
#1507243300    10409     