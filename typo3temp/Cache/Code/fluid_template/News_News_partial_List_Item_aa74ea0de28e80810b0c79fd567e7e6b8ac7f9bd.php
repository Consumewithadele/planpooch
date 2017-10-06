<?php
class FluidCache_News_News_partial_List_Item_aa74ea0de28e80810b0c79fd567e7e6b8ac7f9bd extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<!--
	=====================
		Partials/List/Item.html
-->
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$arguments1 = array();
$arguments1['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
<div class="row news-list-item">
	<div class="col-md-3">
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments3 = array();
$arguments3['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments3['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments3['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments3['additionalAttributes'] = NULL;
$arguments3['data'] = NULL;
$arguments3['class'] = NULL;
$arguments3['dir'] = NULL;
$arguments3['id'] = NULL;
$arguments3['lang'] = NULL;
$arguments3['style'] = NULL;
$arguments3['accesskey'] = NULL;
$arguments3['tabindex'] = NULL;
$arguments3['onclick'] = NULL;
$arguments3['uriOnly'] = false;
$arguments3['configuration'] = array (
);
$arguments3['content'] = '';
$arguments3['section'] = NULL;
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output5 = '';

$output5 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments6 = array();
// Rendering Boolean node
$arguments6['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews', $renderingContext));
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$arguments12 = array();
$arguments12['class'] = 'img-responsive';
$arguments12['file'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments12['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments12['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments13 = array();
// Rendering Boolean node
$arguments13['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'media.maxWidth', $renderingContext));
$arguments13['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'media.maxWidth', $renderingContext);
$arguments13['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.width', $renderingContext);
$renderChildrenClosure14 = function() {return NULL;};
$arguments12['width'] = TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments15 = array();
// Rendering Boolean node
$arguments15['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'media.maxHeight', $renderingContext));
$arguments15['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'media.maxHeight', $renderingContext);
$arguments15['else'] = '';
$renderChildrenClosure16 = function() {return NULL;};
$arguments12['height'] = TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['additionalConfig'] = array (
);
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$renderChildrenClosure17 = function() {return NULL;};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper');
$viewHelper18->setArguments($arguments12);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper

$output11 .= $viewHelper18->initializeArgumentsAndRender();

$output11 .= '
				';
return $output11;
};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments19 = array();
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments22 = array();
// Rendering Boolean node
$arguments22['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments25 = array();
$arguments25['class'] = 'img-dummy img-responsive';
$arguments25['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments25['title'] = '';
$arguments25['alt'] = '';
$arguments25['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments25['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['width'] = NULL;
$arguments25['height'] = NULL;
$arguments25['minWidth'] = NULL;
$arguments25['minHeight'] = NULL;
$arguments25['treatIdAsReference'] = false;
$arguments25['image'] = NULL;
$arguments25['crop'] = NULL;
$arguments25['absolute'] = false;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$arguments25['ismap'] = NULL;
$arguments25['longdesc'] = NULL;
$arguments25['usemap'] = NULL;
$renderChildrenClosure26 = function() {return NULL;};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper27->setArguments($arguments25);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output24 .= $viewHelper27->initializeArgumentsAndRender();

$output24 .= '
					';
return $output24;
};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
				';
return $output21;
};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output8 .= '
			';
return $output8;
};
$arguments6['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$arguments29 = array();
$arguments29['class'] = 'img-responsive';
$arguments29['file'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'mediaPreviews.0', $renderingContext);
$arguments29['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.title', $renderingContext);
$arguments29['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mediaElement'), 'originalResource.alternative', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments30 = array();
// Rendering Boolean node
$arguments30['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'media.maxWidth', $renderingContext));
$arguments30['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'media.maxWidth', $renderingContext);
$arguments30['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.width', $renderingContext);
$renderChildrenClosure31 = function() {return NULL;};
$arguments29['width'] = TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments32 = array();
// Rendering Boolean node
$arguments32['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'media.maxHeight', $renderingContext));
$arguments32['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'media.maxHeight', $renderingContext);
$arguments32['else'] = '';
$renderChildrenClosure33 = function() {return NULL;};
$arguments29['height'] = TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['additionalConfig'] = array (
);
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$renderChildrenClosure34 = function() {return NULL;};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper');
$viewHelper35->setArguments($arguments29);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper

$output28 .= $viewHelper35->initializeArgumentsAndRender();

$output28 .= '
				';
return $output28;
};
$arguments6['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output36 = '';

$output36 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments37 = array();
// Rendering Boolean node
$arguments37['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'displayDummyIfNoMedia', $renderingContext));
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output39 = '';

$output39 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments40 = array();
$arguments40['class'] = 'img-dummy img-responsive';
$arguments40['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.dummyImage', $renderingContext);
$arguments40['title'] = '';
$arguments40['alt'] = '';
$arguments40['maxWidth'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxWidth', $renderingContext);
$arguments40['maxHeight'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'list.media.image.maxHeight', $renderingContext);
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['width'] = NULL;
$arguments40['height'] = NULL;
$arguments40['minWidth'] = NULL;
$arguments40['minHeight'] = NULL;
$arguments40['treatIdAsReference'] = false;
$arguments40['image'] = NULL;
$arguments40['crop'] = NULL;
$arguments40['absolute'] = false;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['ismap'] = NULL;
$arguments40['longdesc'] = NULL;
$arguments40['usemap'] = NULL;
$renderChildrenClosure41 = function() {return NULL;};
$viewHelper42 = $self->getViewHelper('$viewHelper42', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper42->setArguments($arguments40);
$viewHelper42->setRenderingContext($renderingContext);
$viewHelper42->setRenderChildrenClosure($renderChildrenClosure41);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output39 .= $viewHelper42->initializeArgumentsAndRender();

$output39 .= '
					';
return $output39;
};

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
				';
return $output36;
};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
		';
return $output5;
};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper43->setArguments($arguments3);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure4);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output0 .= $viewHelper43->initializeArgumentsAndRender();

$output0 .= '
	</div>

	<div class="col-md-9 articletype-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments44 = array();
$arguments44['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'type', $renderingContext);
$arguments44['keepQuotes'] = false;
$arguments44['encoding'] = NULL;
$arguments44['doubleEncode'] = true;
$renderChildrenClosure45 = function() {return NULL;};
$value46 = ($arguments44['value'] !== NULL ? $arguments44['value'] : $renderChildrenClosure45());

$output0 .= (!is_string($value46) ? $value46 : htmlspecialchars($value46, ($arguments44['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments44['encoding'] !== NULL ? $arguments44['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments44['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments47 = array();
// Rendering Boolean node
$arguments47['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'istopnews', $renderingContext));
$arguments47['then'] = ' topnews';
$arguments47['else'] = NULL;
$renderChildrenClosure48 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output0 .= '" itemscope="itemscope" itemtype="http://schema.org/Article">
		<h3 itemprop="headline">
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments49 = array();
$arguments49['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments49['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments49['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['class'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['uriOnly'] = false;
$arguments49['configuration'] = array (
);
$arguments49['content'] = '';
$arguments49['section'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output51 = '';

$output51 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments52 = array();
$arguments52['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments52['keepQuotes'] = false;
$arguments52['encoding'] = NULL;
$arguments52['doubleEncode'] = true;
$renderChildrenClosure53 = function() {return NULL;};
$value54 = ($arguments52['value'] !== NULL ? $arguments52['value'] : $renderChildrenClosure53());

$output51 .= (!is_string($value54) ? $value54 : htmlspecialchars($value54, ($arguments52['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments52['encoding'] !== NULL ? $arguments52['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments52['doubleEncode']));

$output51 .= '
			';
return $output51;
};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper55->setArguments($arguments49);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output0 .= $viewHelper55->initializeArgumentsAndRender();

$output0 .= '
		</h3>

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments56 = array();
$arguments56['partial'] = 'General/AdditionalInformation';
// Rendering Array
$array57 = array();
$array57['settings'] = $currentVariableContainer->getOrNull('settings');
$array57['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments56['arguments'] = $array57;
$arguments56['section'] = NULL;
$arguments56['optional'] = false;
$renderChildrenClosure58 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments56, $renderChildrenClosure58, $renderingContext);

$output0 .= '

		<!-- teaser -->
		<div class="lead" itemprop="description">
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper
$arguments59 = array();
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments62 = array();
// Rendering Boolean node
$arguments62['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext));
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output64 = '';

$output64 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments65 = array();
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output67 = '';

$output67 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments68 = array();
$arguments68['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments70 = array();
$arguments70['maxCharacters'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'cropMaxCharacters', $renderingContext);
// Rendering Boolean node
$arguments70['respectWordBoundaries'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments70['append'] = '...';
$arguments70['respectHtml'] = true;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);
};

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
					';
return $output67;
};

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments72 = array();
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output74 = '';

$output74 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments75 = array();
$arguments75['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments77 = array();
$arguments77['maxCharacters'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'cropMaxCharacters', $renderingContext);
// Rendering Boolean node
$arguments77['respectWordBoundaries'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments77['append'] = '...';
$arguments77['respectHtml'] = true;
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'bodytext', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);
};

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
					';
return $output74;
};

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output64 .= '
				';
return $output64;
};
$arguments62['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output79 = '';

$output79 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments80 = array();
$arguments80['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments82 = array();
$arguments82['maxCharacters'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'cropMaxCharacters', $renderingContext);
// Rendering Boolean node
$arguments82['respectWordBoundaries'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments82['append'] = '...';
$arguments82['respectHtml'] = true;
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'teaser', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);
};

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
					';
return $output79;
};
$arguments62['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments85 = array();
$arguments85['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments87 = array();
$arguments87['maxCharacters'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'cropMaxCharacters', $renderingContext);
// Rendering Boolean node
$arguments87['respectWordBoundaries'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments87['append'] = '...';
$arguments87['respectHtml'] = true;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'bodytext', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);
};

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
					';
return $output84;
};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
			';
return $output61;
};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper');
$viewHelper89->setArguments($arguments59);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper

$output0 .= $viewHelper89->initializeArgumentsAndRender();

$output0 .= '
		</div>

		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$arguments90 = array();
$arguments90['newsItem'] = $currentVariableContainer->getOrNull('newsItem');
$arguments90['settings'] = $currentVariableContainer->getOrNull('settings');
$arguments90['class'] = 'btn btn-default btn-read-more';
$arguments90['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('newsItem'), 'title', $renderingContext);
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['uriOnly'] = false;
$arguments90['configuration'] = array (
);
$arguments90['content'] = '';
$arguments90['section'] = NULL;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments93 = array();
$arguments93['key'] = 'more-link';
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['htmlEscape'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$renderChildrenClosure94 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
		';
return $output92;
};
$viewHelper95 = $self->getViewHelper('$viewHelper95', $renderingContext, 'GeorgRinger\News\ViewHelpers\LinkViewHelper');
$viewHelper95->setArguments($arguments90);
$viewHelper95->setRenderingContext($renderingContext);
$viewHelper95->setRenderChildrenClosure($renderChildrenClosure91);
// End of ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper

$output0 .= $viewHelper95->initializeArgumentsAndRender();

$output0 .= '
	</div>
</div>
';


return $output0;
}


}
#1507277042    32442     