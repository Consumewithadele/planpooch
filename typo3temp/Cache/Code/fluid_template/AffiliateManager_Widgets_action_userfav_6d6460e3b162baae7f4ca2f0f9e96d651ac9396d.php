<?php
class FluidCache_AffiliateManager_Widgets_action_userfav_6d6460e3b162baae7f4ca2f0f9e96d651ac9396d extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Nowrap';
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


<!-- Reference -->
<!-- https://stackoverflow.com/questions/10737033/how-to-pass-ajax-arguments-to-the-extbase-action -->

<script type="text/javascript">
    var actionsPathFromViewHelperSetInTheView 
        = \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments1 = array();
$arguments1['action'] = 'addfav';
$arguments1['controller'] = 'Widgets';
$arguments1['pageType'] = '89657201';
$arguments1['arguments'] = array (
);
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['linkAccessRestrictedPages'] = false;
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['addQueryStringMethod'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '\';
        
        //"';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments4 = array();
$arguments4['action'] = 'test';
$arguments4['arguments'] = array (
);
$arguments4['controller'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['pluginName'] = NULL;
$arguments4['pageUid'] = NULL;
$arguments4['pageType'] = 0;
$arguments4['noCache'] = false;
$arguments4['noCacheHash'] = false;
$arguments4['section'] = '';
$arguments4['format'] = '';
$arguments4['linkAccessRestrictedPages'] = false;
$arguments4['additionalParams'] = array (
);
$arguments4['absolute'] = false;
$arguments4['addQueryString'] = false;
$arguments4['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments4['addQueryStringMethod'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '";
        //alert(actionsPathFromViewHelperSetInTheView);
</script>
<script type="text/javascript" src="typo3conf/ext/affiliate_manager/Resources/Public/Js/Ajax.js"></script>



<style>
.af-avatar {
    background-color: #fff;
    border: 2px solid #fff;
    -moz-border-radius: 50%;
    border-radius: 50%;
    box-sizing: border-box;
    height: 60px;
    margin-top: -30px;
    position: relative;
    width: 60px;
    -moz-box-flex: 0 0 auto;
    flex: 0 0 auto;
}

#saved_item_count {
font-size: 12px;
font-weight: 100;
color: white;
line-height: 21px;
display: flex;
flex-direction: row;
align-items: center;
margin-right:5px;
}

</style>


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['renderMode'] = NULL;
$arguments7['as'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['queueIdentifier'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output0 .= $viewHelper9->initializeArgumentsAndRender();

$output0 .= '



';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments10 = array();
// Rendering Boolean node
$arguments10['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'logged_in', $renderingContext), 1);
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '
<a href=\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments13 = array();
$arguments13['action'] = 'favview';
$arguments13['arguments'] = array (
);
$arguments13['controller'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['pluginName'] = NULL;
$arguments13['pageUid'] = NULL;
$arguments13['pageType'] = 0;
$arguments13['noCache'] = false;
$arguments13['noCacheHash'] = false;
$arguments13['section'] = '';
$arguments13['format'] = '';
$arguments13['linkAccessRestrictedPages'] = false;
$arguments13['additionalParams'] = array (
);
$arguments13['absolute'] = false;
$arguments13['addQueryString'] = false;
$arguments13['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments13['addQueryStringMethod'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output12 .= $viewHelper15->initializeArgumentsAndRender();

$output12 .= '\' class="saved-item"><span id="saved_item_count" style="color:white;font-size:inherit;">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'favCount', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = NULL;
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() {return NULL;};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output12 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments16['encoding'] !== NULL ? $arguments16['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments16['doubleEncode']));

$output12 .= '</span>Saved Items<span><i class="heart icon"></i></span></a> 
';
return $output12;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '



';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output19 = '';

$output19 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments20 = array();
$arguments20['name'] = 'Nowrap';
$renderChildrenClosure21 = function() {return NULL;};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper22->setArguments($arguments20);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output19 .= $viewHelper22->initializeArgumentsAndRender();

$output19 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments23 = array();
$arguments23['name'] = 'main';
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '


<!-- Reference -->
<!-- https://stackoverflow.com/questions/10737033/how-to-pass-ajax-arguments-to-the-extbase-action -->

<script type="text/javascript">
    var actionsPathFromViewHelperSetInTheView 
        = \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments26 = array();
$arguments26['action'] = 'addfav';
$arguments26['controller'] = 'Widgets';
$arguments26['pageType'] = '89657201';
$arguments26['arguments'] = array (
);
$arguments26['extensionName'] = NULL;
$arguments26['pluginName'] = NULL;
$arguments26['pageUid'] = NULL;
$arguments26['noCache'] = false;
$arguments26['noCacheHash'] = false;
$arguments26['section'] = '';
$arguments26['format'] = '';
$arguments26['linkAccessRestrictedPages'] = false;
$arguments26['additionalParams'] = array (
);
$arguments26['absolute'] = false;
$arguments26['addQueryString'] = false;
$arguments26['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments26['addQueryStringMethod'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper28->setArguments($arguments26);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output25 .= $viewHelper28->initializeArgumentsAndRender();

$output25 .= '\';
        
        //"';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments29 = array();
$arguments29['action'] = 'test';
$arguments29['arguments'] = array (
);
$arguments29['controller'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['pluginName'] = NULL;
$arguments29['pageUid'] = NULL;
$arguments29['pageType'] = 0;
$arguments29['noCache'] = false;
$arguments29['noCacheHash'] = false;
$arguments29['section'] = '';
$arguments29['format'] = '';
$arguments29['linkAccessRestrictedPages'] = false;
$arguments29['additionalParams'] = array (
);
$arguments29['absolute'] = false;
$arguments29['addQueryString'] = false;
$arguments29['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments29['addQueryStringMethod'] = NULL;
$renderChildrenClosure30 = function() {return NULL;};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper31->setArguments($arguments29);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output25 .= $viewHelper31->initializeArgumentsAndRender();

$output25 .= '";
        //alert(actionsPathFromViewHelperSetInTheView);
</script>
<script type="text/javascript" src="typo3conf/ext/affiliate_manager/Resources/Public/Js/Ajax.js"></script>



<style>
.af-avatar {
    background-color: #fff;
    border: 2px solid #fff;
    -moz-border-radius: 50%;
    border-radius: 50%;
    box-sizing: border-box;
    height: 60px;
    margin-top: -30px;
    position: relative;
    width: 60px;
    -moz-box-flex: 0 0 auto;
    flex: 0 0 auto;
}

#saved_item_count {
font-size: 12px;
font-weight: 100;
color: white;
line-height: 21px;
display: flex;
flex-direction: row;
align-items: center;
margin-right:5px;
}

</style>


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments32 = array();
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['renderMode'] = NULL;
$arguments32['as'] = NULL;
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['queueIdentifier'] = NULL;
$renderChildrenClosure33 = function() {return NULL;};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper34->setArguments($arguments32);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output25 .= $viewHelper34->initializeArgumentsAndRender();

$output25 .= '



';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments35 = array();
// Rendering Boolean node
$arguments35['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'logged_in', $renderingContext), 1);
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output37 = '';

$output37 .= '
<a href=\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments38 = array();
$arguments38['action'] = 'favview';
$arguments38['arguments'] = array (
);
$arguments38['controller'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['pluginName'] = NULL;
$arguments38['pageUid'] = NULL;
$arguments38['pageType'] = 0;
$arguments38['noCache'] = false;
$arguments38['noCacheHash'] = false;
$arguments38['section'] = '';
$arguments38['format'] = '';
$arguments38['linkAccessRestrictedPages'] = false;
$arguments38['additionalParams'] = array (
);
$arguments38['absolute'] = false;
$arguments38['addQueryString'] = false;
$arguments38['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments38['addQueryStringMethod'] = NULL;
$renderChildrenClosure39 = function() {return NULL;};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper40->setArguments($arguments38);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output37 .= $viewHelper40->initializeArgumentsAndRender();

$output37 .= '\' class="saved-item"><span id="saved_item_count" style="color:white;font-size:inherit;">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments41 = array();
$arguments41['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'favCount', $renderingContext);
$arguments41['keepQuotes'] = false;
$arguments41['encoding'] = NULL;
$arguments41['doubleEncode'] = true;
$renderChildrenClosure42 = function() {return NULL;};
$value43 = ($arguments41['value'] !== NULL ? $arguments41['value'] : $renderChildrenClosure42());

$output37 .= (!is_string($value43) ? $value43 : htmlspecialchars($value43, ($arguments41['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments41['encoding'] !== NULL ? $arguments41['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments41['doubleEncode']));

$output37 .= '</span>Saved Items<span><i class="heart icon"></i></span></a> 
';
return $output37;
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output25 .= '



';
return $output25;
};

$output19 .= '';


return $output19;
}


}
#1507295565    17105     