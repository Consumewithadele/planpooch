<?php
class FluidCache_News_News_partial_Detail_Opengraph_de86ac39ad4117a73c626795a5b6aba881f266a7 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments6 = array();
$arguments6['property'] = 'og:title';
$arguments6['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext);
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['useCurrentDomain'] = false;
$arguments6['forceAbsoluteUrl'] = false;
$arguments6['name'] = NULL;
$renderChildrenClosure7 = function() {return NULL;};
$viewHelper8 = $self->getViewHelper('$viewHelper8', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper8->setArguments($arguments6);
$viewHelper8->setRenderingContext($renderingContext);
$viewHelper8->setRenderChildrenClosure($renderChildrenClosure7);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
return $viewHelper8->initializeArgumentsAndRender();
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments9 = array();
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments11 = array();
$arguments11['property'] = 'og:title';
$arguments11['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['useCurrentDomain'] = false;
$arguments11['forceAbsoluteUrl'] = false;
$arguments11['name'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper13->setArguments($arguments11);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
return $viewHelper13->initializeArgumentsAndRender();
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments14 = array();
$arguments14['property'] = 'og:title';
$arguments14['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'alternativeTitle', $renderingContext);
$arguments14['additionalAttributes'] = NULL;
$arguments14['data'] = NULL;
$arguments14['useCurrentDomain'] = false;
$arguments14['forceAbsoluteUrl'] = false;
$arguments14['name'] = NULL;
$renderChildrenClosure15 = function() {return NULL;};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper16->setArguments($arguments14);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
return $viewHelper16->initializeArgumentsAndRender();
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments17 = array();
$arguments17['property'] = 'og:title';
$arguments17['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['useCurrentDomain'] = false;
$arguments17['forceAbsoluteUrl'] = false;
$arguments17['name'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper19->setArguments($arguments17);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
return $viewHelper19->initializeArgumentsAndRender();
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments20 = array();
$arguments20['property'] = 'og:type';
$arguments20['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.type', $renderingContext);
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['useCurrentDomain'] = false;
$arguments20['forceAbsoluteUrl'] = false;
$arguments20['name'] = NULL;
$renderChildrenClosure21 = function() {return NULL;};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper22->setArguments($arguments20);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper22->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments23 = array();
$arguments23['property'] = 'og:url';
$arguments23['content'] = '';
// Rendering Boolean node
$arguments23['useCurrentDomain'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['forceAbsoluteUrl'] = false;
$arguments23['name'] = NULL;
$renderChildrenClosure24 = function() {return NULL;};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper25->setArguments($arguments23);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper25->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments26 = array();
$arguments26['property'] = 'og:site_name';
$arguments26['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.site_name', $renderingContext);
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['useCurrentDomain'] = false;
$arguments26['forceAbsoluteUrl'] = false;
$arguments26['name'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper28->setArguments($arguments26);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper28->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments29 = array();
// Rendering Boolean node
$arguments29['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'firstPreview', $renderingContext));
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments32 = array();
$arguments32['property'] = 'og:image';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments33 = array();
$arguments33['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'firstPreview.uid', $renderingContext);
// Rendering Boolean node
$arguments33['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments33['maxWidth'] = '500';
$arguments33['image'] = NULL;
$arguments33['width'] = NULL;
$arguments33['height'] = NULL;
$arguments33['minWidth'] = NULL;
$arguments33['minHeight'] = NULL;
$arguments33['maxHeight'] = NULL;
$arguments33['crop'] = NULL;
$arguments33['absolute'] = false;
$renderChildrenClosure34 = function() {return NULL;};
$arguments32['content'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);
// Rendering Boolean node
$arguments32['forceAbsoluteUrl'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['useCurrentDomain'] = false;
$arguments32['name'] = NULL;
$renderChildrenClosure35 = function() {return NULL;};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper36->setArguments($arguments32);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output31 .= $viewHelper36->initializeArgumentsAndRender();

$output31 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments37 = array();
$arguments37['property'] = 'og:image:width';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ImageSizeViewHelper
$arguments38 = array();
$arguments38['property'] = 'width';
$renderChildrenClosure39 = function() {return NULL;};
$arguments37['content'] = GeorgRinger\News\ViewHelpers\ImageSizeViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['useCurrentDomain'] = false;
$arguments37['forceAbsoluteUrl'] = false;
$arguments37['name'] = NULL;
$renderChildrenClosure40 = function() {return NULL;};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper41->setArguments($arguments37);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output31 .= $viewHelper41->initializeArgumentsAndRender();

$output31 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments42 = array();
$arguments42['property'] = 'og:image:height';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ImageSizeViewHelper
$arguments43 = array();
$arguments43['property'] = 'height';
$renderChildrenClosure44 = function() {return NULL;};
$arguments42['content'] = GeorgRinger\News\ViewHelpers\ImageSizeViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);
$arguments42['additionalAttributes'] = NULL;
$arguments42['data'] = NULL;
$arguments42['useCurrentDomain'] = false;
$arguments42['forceAbsoluteUrl'] = false;
$arguments42['name'] = NULL;
$renderChildrenClosure45 = function() {return NULL;};
$viewHelper46 = $self->getViewHelper('$viewHelper46', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper46->setArguments($arguments42);
$viewHelper46->setRenderingContext($renderingContext);
$viewHelper46->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output31 .= $viewHelper46->initializeArgumentsAndRender();

$output31 .= '
';
return $output31;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments47 = array();
// Rendering Boolean node
$arguments47['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'description', $renderingContext));
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output49 = '';

$output49 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments50 = array();
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output52 = '';

$output52 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments53 = array();
$arguments53['name'] = 'description';
$arguments53['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'description', $renderingContext);
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['useCurrentDomain'] = false;
$arguments53['forceAbsoluteUrl'] = false;
$arguments53['property'] = NULL;
$renderChildrenClosure54 = function() {return NULL;};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper55->setArguments($arguments53);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output52 .= $viewHelper55->initializeArgumentsAndRender();

$output52 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments56 = array();
$arguments56['property'] = 'og:description';
$arguments56['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'description', $renderingContext);
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['useCurrentDomain'] = false;
$arguments56['forceAbsoluteUrl'] = false;
$arguments56['name'] = NULL;
$renderChildrenClosure57 = function() {return NULL;};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper58->setArguments($arguments56);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure57);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output52 .= $viewHelper58->initializeArgumentsAndRender();

$output52 .= '
	';
return $output52;
};

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments59 = array();
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments62 = array();
$arguments62['name'] = 'description';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$arguments63 = array();
$arguments63['value'] = NULL;
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};
$arguments62['content'] = TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['useCurrentDomain'] = false;
$arguments62['forceAbsoluteUrl'] = false;
$arguments62['property'] = NULL;
$renderChildrenClosure65 = function() {return NULL;};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper66->setArguments($arguments62);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output61 .= $viewHelper66->initializeArgumentsAndRender();

$output61 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments67 = array();
$arguments67['property'] = 'og:description';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$arguments68 = array();
$arguments68['value'] = NULL;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};
$arguments67['content'] = TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);
$arguments67['additionalAttributes'] = NULL;
$arguments67['data'] = NULL;
$arguments67['useCurrentDomain'] = false;
$arguments67['forceAbsoluteUrl'] = false;
$arguments67['name'] = NULL;
$renderChildrenClosure70 = function() {return NULL;};
$viewHelper71 = $self->getViewHelper('$viewHelper71', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper71->setArguments($arguments67);
$viewHelper71->setRenderingContext($renderingContext);
$viewHelper71->setRenderChildrenClosure($renderChildrenClosure70);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output61 .= $viewHelper71->initializeArgumentsAndRender();

$output61 .= '
	';
return $output61;
};

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output49 .= '
';
return $output49;
};
$arguments47['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output72 = '';

$output72 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments73 = array();
$arguments73['name'] = 'description';
$arguments73['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'description', $renderingContext);
$arguments73['additionalAttributes'] = NULL;
$arguments73['data'] = NULL;
$arguments73['useCurrentDomain'] = false;
$arguments73['forceAbsoluteUrl'] = false;
$arguments73['property'] = NULL;
$renderChildrenClosure74 = function() {return NULL;};
$viewHelper75 = $self->getViewHelper('$viewHelper75', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper75->setArguments($arguments73);
$viewHelper75->setRenderingContext($renderingContext);
$viewHelper75->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output72 .= $viewHelper75->initializeArgumentsAndRender();

$output72 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments76 = array();
$arguments76['property'] = 'og:description';
$arguments76['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'description', $renderingContext);
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['useCurrentDomain'] = false;
$arguments76['forceAbsoluteUrl'] = false;
$arguments76['name'] = NULL;
$renderChildrenClosure77 = function() {return NULL;};
$viewHelper78 = $self->getViewHelper('$viewHelper78', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper78->setArguments($arguments76);
$viewHelper78->setRenderingContext($renderingContext);
$viewHelper78->setRenderChildrenClosure($renderChildrenClosure77);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output72 .= $viewHelper78->initializeArgumentsAndRender();

$output72 .= '
	';
return $output72;
};
$arguments47['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output79 = '';

$output79 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments80 = array();
$arguments80['name'] = 'description';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$arguments81 = array();
$arguments81['value'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};
$arguments80['content'] = TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['useCurrentDomain'] = false;
$arguments80['forceAbsoluteUrl'] = false;
$arguments80['property'] = NULL;
$renderChildrenClosure83 = function() {return NULL;};
$viewHelper84 = $self->getViewHelper('$viewHelper84', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper84->setArguments($arguments80);
$viewHelper84->setRenderingContext($renderingContext);
$viewHelper84->setRenderChildrenClosure($renderChildrenClosure83);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output79 .= $viewHelper84->initializeArgumentsAndRender();

$output79 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments85 = array();
$arguments85['property'] = 'og:description';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$arguments86 = array();
$arguments86['value'] = NULL;
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};
$arguments85['content'] = TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['useCurrentDomain'] = false;
$arguments85['forceAbsoluteUrl'] = false;
$arguments85['name'] = NULL;
$renderChildrenClosure88 = function() {return NULL;};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper89->setArguments($arguments85);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure88);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output79 .= $viewHelper89->initializeArgumentsAndRender();

$output79 .= '
	';
return $output79;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments90 = array();
$arguments90['name'] = 'keywords';
$arguments90['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'keywords', $renderingContext);
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['useCurrentDomain'] = false;
$arguments90['forceAbsoluteUrl'] = false;
$arguments90['property'] = NULL;
$renderChildrenClosure91 = function() {return NULL;};
$viewHelper92 = $self->getViewHelper('$viewHelper92', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper92->setArguments($arguments90);
$viewHelper92->setRenderingContext($renderingContext);
$viewHelper92->setRenderChildrenClosure($renderChildrenClosure91);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper92->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments93 = array();
$arguments93['property'] = 'fb:admins';
$arguments93['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.admins', $renderingContext);
$arguments93['additionalAttributes'] = NULL;
$arguments93['data'] = NULL;
$arguments93['useCurrentDomain'] = false;
$arguments93['forceAbsoluteUrl'] = false;
$arguments93['name'] = NULL;
$renderChildrenClosure94 = function() {return NULL;};
$viewHelper95 = $self->getViewHelper('$viewHelper95', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper95->setArguments($arguments93);
$viewHelper95->setRenderingContext($renderingContext);
$viewHelper95->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper95->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments96 = array();
$arguments96['property'] = 'og:email';
$arguments96['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.email', $renderingContext);
$arguments96['additionalAttributes'] = NULL;
$arguments96['data'] = NULL;
$arguments96['useCurrentDomain'] = false;
$arguments96['forceAbsoluteUrl'] = false;
$arguments96['name'] = NULL;
$renderChildrenClosure97 = function() {return NULL;};
$viewHelper98 = $self->getViewHelper('$viewHelper98', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper98->setArguments($arguments96);
$viewHelper98->setRenderingContext($renderingContext);
$viewHelper98->setRenderChildrenClosure($renderChildrenClosure97);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper98->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments99 = array();
$arguments99['property'] = 'og:phone_number';
$arguments99['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.phone_number', $renderingContext);
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['useCurrentDomain'] = false;
$arguments99['forceAbsoluteUrl'] = false;
$arguments99['name'] = NULL;
$renderChildrenClosure100 = function() {return NULL;};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper101->setArguments($arguments99);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper101->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments102 = array();
$arguments102['property'] = 'og:fax_number';
$arguments102['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.fax_number', $renderingContext);
$arguments102['additionalAttributes'] = NULL;
$arguments102['data'] = NULL;
$arguments102['useCurrentDomain'] = false;
$arguments102['forceAbsoluteUrl'] = false;
$arguments102['name'] = NULL;
$renderChildrenClosure103 = function() {return NULL;};
$viewHelper104 = $self->getViewHelper('$viewHelper104', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper104->setArguments($arguments102);
$viewHelper104->setRenderingContext($renderingContext);
$viewHelper104->setRenderChildrenClosure($renderChildrenClosure103);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper104->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments105 = array();
$arguments105['property'] = 'og:latitude';
$arguments105['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.latitude', $renderingContext);
$arguments105['additionalAttributes'] = NULL;
$arguments105['data'] = NULL;
$arguments105['useCurrentDomain'] = false;
$arguments105['forceAbsoluteUrl'] = false;
$arguments105['name'] = NULL;
$renderChildrenClosure106 = function() {return NULL;};
$viewHelper107 = $self->getViewHelper('$viewHelper107', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper107->setArguments($arguments105);
$viewHelper107->setRenderingContext($renderingContext);
$viewHelper107->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper107->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments108 = array();
$arguments108['property'] = 'og:longitude';
$arguments108['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.longitude', $renderingContext);
$arguments108['additionalAttributes'] = NULL;
$arguments108['data'] = NULL;
$arguments108['useCurrentDomain'] = false;
$arguments108['forceAbsoluteUrl'] = false;
$arguments108['name'] = NULL;
$renderChildrenClosure109 = function() {return NULL;};
$viewHelper110 = $self->getViewHelper('$viewHelper110', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper110->setArguments($arguments108);
$viewHelper110->setRenderingContext($renderingContext);
$viewHelper110->setRenderChildrenClosure($renderChildrenClosure109);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper110->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments111 = array();
$arguments111['property'] = 'og:street-address';
$arguments111['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.street-address', $renderingContext);
$arguments111['additionalAttributes'] = NULL;
$arguments111['data'] = NULL;
$arguments111['useCurrentDomain'] = false;
$arguments111['forceAbsoluteUrl'] = false;
$arguments111['name'] = NULL;
$renderChildrenClosure112 = function() {return NULL;};
$viewHelper113 = $self->getViewHelper('$viewHelper113', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper113->setArguments($arguments111);
$viewHelper113->setRenderingContext($renderingContext);
$viewHelper113->setRenderChildrenClosure($renderChildrenClosure112);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper113->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments114 = array();
$arguments114['property'] = 'og:locality';
$arguments114['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.locality', $renderingContext);
$arguments114['additionalAttributes'] = NULL;
$arguments114['data'] = NULL;
$arguments114['useCurrentDomain'] = false;
$arguments114['forceAbsoluteUrl'] = false;
$arguments114['name'] = NULL;
$renderChildrenClosure115 = function() {return NULL;};
$viewHelper116 = $self->getViewHelper('$viewHelper116', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper116->setArguments($arguments114);
$viewHelper116->setRenderingContext($renderingContext);
$viewHelper116->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper116->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments117 = array();
$arguments117['property'] = 'og:region';
$arguments117['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.region', $renderingContext);
$arguments117['additionalAttributes'] = NULL;
$arguments117['data'] = NULL;
$arguments117['useCurrentDomain'] = false;
$arguments117['forceAbsoluteUrl'] = false;
$arguments117['name'] = NULL;
$renderChildrenClosure118 = function() {return NULL;};
$viewHelper119 = $self->getViewHelper('$viewHelper119', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper119->setArguments($arguments117);
$viewHelper119->setRenderingContext($renderingContext);
$viewHelper119->setRenderChildrenClosure($renderChildrenClosure118);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper119->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments120 = array();
$arguments120['property'] = 'og:postal-code';
$arguments120['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.postal-code', $renderingContext);
$arguments120['additionalAttributes'] = NULL;
$arguments120['data'] = NULL;
$arguments120['useCurrentDomain'] = false;
$arguments120['forceAbsoluteUrl'] = false;
$arguments120['name'] = NULL;
$renderChildrenClosure121 = function() {return NULL;};
$viewHelper122 = $self->getViewHelper('$viewHelper122', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper122->setArguments($arguments120);
$viewHelper122->setRenderingContext($renderingContext);
$viewHelper122->setRenderChildrenClosure($renderChildrenClosure121);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper122->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments123 = array();
$arguments123['property'] = 'og:country-name';
$arguments123['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.country-name', $renderingContext);
$arguments123['additionalAttributes'] = NULL;
$arguments123['data'] = NULL;
$arguments123['useCurrentDomain'] = false;
$arguments123['forceAbsoluteUrl'] = false;
$arguments123['name'] = NULL;
$renderChildrenClosure124 = function() {return NULL;};
$viewHelper125 = $self->getViewHelper('$viewHelper125', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper125->setArguments($arguments123);
$viewHelper125->setRenderingContext($renderingContext);
$viewHelper125->setRenderChildrenClosure($renderChildrenClosure124);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output0 .= $viewHelper125->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments126 = array();
// Rendering Boolean node
$arguments126['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.twitter.site', $renderingContext));
$arguments126['then'] = NULL;
$arguments126['else'] = NULL;
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output128 = '';

$output128 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments129 = array();
$arguments129['name'] = 'twitter:card';
$arguments129['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.twitter.card', $renderingContext);
$arguments129['additionalAttributes'] = NULL;
$arguments129['data'] = NULL;
$arguments129['useCurrentDomain'] = false;
$arguments129['forceAbsoluteUrl'] = false;
$arguments129['property'] = NULL;
$renderChildrenClosure130 = function() {return NULL;};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper131->setArguments($arguments129);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure130);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output128 .= $viewHelper131->initializeArgumentsAndRender();

$output128 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments132 = array();
$arguments132['name'] = 'twitter:site';
$arguments132['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.twitter.site', $renderingContext);
$arguments132['additionalAttributes'] = NULL;
$arguments132['data'] = NULL;
$arguments132['useCurrentDomain'] = false;
$arguments132['forceAbsoluteUrl'] = false;
$arguments132['property'] = NULL;
$renderChildrenClosure133 = function() {return NULL;};
$viewHelper134 = $self->getViewHelper('$viewHelper134', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper134->setArguments($arguments132);
$viewHelper134->setRenderingContext($renderingContext);
$viewHelper134->setRenderChildrenClosure($renderChildrenClosure133);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output128 .= $viewHelper134->initializeArgumentsAndRender();

$output128 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$arguments135 = array();
$arguments135['name'] = 'twitter:creator';
$arguments135['content'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'opengraph.twitter.creator', $renderingContext);
$arguments135['additionalAttributes'] = NULL;
$arguments135['data'] = NULL;
$arguments135['useCurrentDomain'] = false;
$arguments135['forceAbsoluteUrl'] = false;
$arguments135['property'] = NULL;
$renderChildrenClosure136 = function() {return NULL;};
$viewHelper137 = $self->getViewHelper('$viewHelper137', $renderingContext, 'GeorgRinger\News\ViewHelpers\MetaTagViewHelper');
$viewHelper137->setArguments($arguments135);
$viewHelper137->setRenderingContext($renderingContext);
$viewHelper137->setRenderChildrenClosure($renderChildrenClosure136);
// End of ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper

$output128 .= $viewHelper137->initializeArgumentsAndRender();

$output128 .= '
';
return $output128;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1507237320    42424     