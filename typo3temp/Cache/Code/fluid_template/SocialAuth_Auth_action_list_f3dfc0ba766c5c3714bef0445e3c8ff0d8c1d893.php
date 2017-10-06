<?php
class FluidCache_SocialAuth_Auth_action_list_f3dfc0ba766c5c3714bef0445e3c8ff0d8c1d893 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper
$arguments1 = array();
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
$output6 = '';

$output6 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments7 = array();
// Rendering Array
$array8 = array();
$array8['logintype'] = 'logout';
$arguments7['additionalParams'] = $array8;
// Rendering Boolean node
$arguments7['addQueryString'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments9 = array();
$arguments9['key'] = 'logout.label';
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$renderChildrenClosure10 = function() {return NULL;};
$arguments7['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);
// Rendering Boolean node
$arguments7['noCacheHash'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['pageUid'] = NULL;
$arguments7['pageType'] = 0;
$arguments7['noCache'] = false;
$arguments7['section'] = '';
$arguments7['linkAccessRestrictedPages'] = false;
$arguments7['absolute'] = false;
$arguments7['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments7['addQueryStringMethod'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['target'] = NULL;
$arguments7['rel'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments12 = array();
$arguments12['key'] = 'logout.label';
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['htmlEscape'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$renderChildrenClosure13 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
};
$viewHelper14 = $self->getViewHelper('$viewHelper14', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper14->setArguments($arguments7);
$viewHelper14->setRenderingContext($renderingContext);
$viewHelper14->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output6 .= $viewHelper14->initializeArgumentsAndRender();

$output6 .= '
        ';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments15 = array();
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments18 = array();
// Rendering Boolean node
$arguments18['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('providers'));
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments21 = array();
$arguments21['each'] = $currentVariableContainer->getOrNull('providers');
$arguments21['as'] = 'provider';
$arguments21['key'] = '';
$arguments21['reverse'] = false;
$arguments21['iteration'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments24 = array();
$arguments24['pageType'] = '1316773681';
// Rendering Array
$array25 = array();
// Rendering Array
$array26 = array();
$array26['provider'] = $currentVariableContainer->getOrNull('provider');
// Rendering ViewHelper MV\SocialAuth\ViewHelpers\CurrentUriViewHelper
$arguments27 = array();
$renderChildrenClosure28 = function() {return NULL;};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'MV\SocialAuth\ViewHelpers\CurrentUriViewHelper');
$viewHelper29->setArguments($arguments27);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper MV\SocialAuth\ViewHelpers\CurrentUriViewHelper
$array26['redirect'] = $viewHelper29->initializeArgumentsAndRender();
$array25['tx_socialauth_pi1'] = $array26;
$arguments24['additionalParams'] = $array25;
// Rendering Boolean node
$arguments24['noCacheHash'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$output30 = '';

$output30 .= 'btn btn-block btn-social btn-';

$output30 .= $currentVariableContainer->getOrNull('provider');
$arguments24['class'] = $output30;
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['pageUid'] = NULL;
$arguments24['noCache'] = false;
$arguments24['section'] = '';
$arguments24['linkAccessRestrictedPages'] = false;
$arguments24['absolute'] = false;
$arguments24['addQueryString'] = false;
$arguments24['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments24['addQueryStringMethod'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['target'] = NULL;
$arguments24['rel'] = NULL;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output32 = '';

$output32 .= '
                    			 <span class="fa fa-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = $currentVariableContainer->getOrNull('provider');
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = NULL;
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() {return NULL;};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());

$output32 .= (!is_string($value35) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments33['encoding'] !== NULL ? $arguments33['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments33['doubleEncode']));

$output32 .= '"></span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments36 = array();
$output37 = '';

$output37 .= $currentVariableContainer->getOrNull('provider');

$output37 .= '.label';
$arguments36['key'] = $output37;
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['htmlEscape'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$renderChildrenClosure38 = function() {return NULL;};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure38, $renderingContext);

$output32 .= '
                    ';
return $output32;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper39->setArguments($arguments24);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output23 .= $viewHelper39->initializeArgumentsAndRender();

$output23 .= '
                ';
return $output23;
};

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
            ';
return $output20;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
        ';
return $output17;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output3 .= '
    ';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output40 = '';

$output40 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments41 = array();
// Rendering Array
$array42 = array();
$array42['logintype'] = 'logout';
$arguments41['additionalParams'] = $array42;
// Rendering Boolean node
$arguments41['addQueryString'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments43 = array();
$arguments43['key'] = 'logout.label';
$arguments43['id'] = NULL;
$arguments43['default'] = NULL;
$arguments43['htmlEscape'] = NULL;
$arguments43['arguments'] = NULL;
$arguments43['extensionName'] = NULL;
$renderChildrenClosure44 = function() {return NULL;};
$arguments41['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);
// Rendering Boolean node
$arguments41['noCacheHash'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments41['additionalAttributes'] = NULL;
$arguments41['data'] = NULL;
$arguments41['pageUid'] = NULL;
$arguments41['pageType'] = 0;
$arguments41['noCache'] = false;
$arguments41['section'] = '';
$arguments41['linkAccessRestrictedPages'] = false;
$arguments41['absolute'] = false;
$arguments41['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments41['addQueryStringMethod'] = NULL;
$arguments41['class'] = NULL;
$arguments41['dir'] = NULL;
$arguments41['id'] = NULL;
$arguments41['lang'] = NULL;
$arguments41['style'] = NULL;
$arguments41['accesskey'] = NULL;
$arguments41['tabindex'] = NULL;
$arguments41['onclick'] = NULL;
$arguments41['target'] = NULL;
$arguments41['rel'] = NULL;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments46 = array();
$arguments46['key'] = 'logout.label';
$arguments46['id'] = NULL;
$arguments46['default'] = NULL;
$arguments46['htmlEscape'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['extensionName'] = NULL;
$renderChildrenClosure47 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);
};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper48->setArguments($arguments41);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output40 .= $viewHelper48->initializeArgumentsAndRender();

$output40 .= '
        ';
return $output40;
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output49 = '';

$output49 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments50 = array();
// Rendering Boolean node
$arguments50['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('providers'));
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output52 = '';

$output52 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments53 = array();
$arguments53['each'] = $currentVariableContainer->getOrNull('providers');
$arguments53['as'] = 'provider';
$arguments53['key'] = '';
$arguments53['reverse'] = false;
$arguments53['iteration'] = NULL;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output55 = '';

$output55 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments56 = array();
$arguments56['pageType'] = '1316773681';
// Rendering Array
$array57 = array();
// Rendering Array
$array58 = array();
$array58['provider'] = $currentVariableContainer->getOrNull('provider');
// Rendering ViewHelper MV\SocialAuth\ViewHelpers\CurrentUriViewHelper
$arguments59 = array();
$renderChildrenClosure60 = function() {return NULL;};
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'MV\SocialAuth\ViewHelpers\CurrentUriViewHelper');
$viewHelper61->setArguments($arguments59);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper MV\SocialAuth\ViewHelpers\CurrentUriViewHelper
$array58['redirect'] = $viewHelper61->initializeArgumentsAndRender();
$array57['tx_socialauth_pi1'] = $array58;
$arguments56['additionalParams'] = $array57;
// Rendering Boolean node
$arguments56['noCacheHash'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$output62 = '';

$output62 .= 'btn btn-block btn-social btn-';

$output62 .= $currentVariableContainer->getOrNull('provider');
$arguments56['class'] = $output62;
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['pageUid'] = NULL;
$arguments56['noCache'] = false;
$arguments56['section'] = '';
$arguments56['linkAccessRestrictedPages'] = false;
$arguments56['absolute'] = false;
$arguments56['addQueryString'] = false;
$arguments56['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments56['addQueryStringMethod'] = NULL;
$arguments56['dir'] = NULL;
$arguments56['id'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['title'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
$arguments56['target'] = NULL;
$arguments56['rel'] = NULL;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output64 = '';

$output64 .= '
                    			 <span class="fa fa-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments65 = array();
$arguments65['value'] = $currentVariableContainer->getOrNull('provider');
$arguments65['keepQuotes'] = false;
$arguments65['encoding'] = NULL;
$arguments65['doubleEncode'] = true;
$renderChildrenClosure66 = function() {return NULL;};
$value67 = ($arguments65['value'] !== NULL ? $arguments65['value'] : $renderChildrenClosure66());

$output64 .= (!is_string($value67) ? $value67 : htmlspecialchars($value67, ($arguments65['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments65['encoding'] !== NULL ? $arguments65['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments65['doubleEncode']));

$output64 .= '"></span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments68 = array();
$output69 = '';

$output69 .= $currentVariableContainer->getOrNull('provider');

$output69 .= '.label';
$arguments68['key'] = $output69;
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['htmlEscape'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$renderChildrenClosure70 = function() {return NULL;};

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure70, $renderingContext);

$output64 .= '
                    ';
return $output64;
};
$viewHelper71 = $self->getViewHelper('$viewHelper71', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper71->setArguments($arguments56);
$viewHelper71->setRenderingContext($renderingContext);
$viewHelper71->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output55 .= $viewHelper71->initializeArgumentsAndRender();

$output55 .= '
                ';
return $output55;
};

$output52 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
            ';
return $output52;
};

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
        ';
return $output49;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

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

$output72 = '';

$output72 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments73 = array();
$arguments73['name'] = 'Default';
$renderChildrenClosure74 = function() {return NULL;};
$viewHelper75 = $self->getViewHelper('$viewHelper75', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper75->setArguments($arguments73);
$viewHelper75->setRenderingContext($renderingContext);
$viewHelper75->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output72 .= $viewHelper75->initializeArgumentsAndRender();

$output72 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments76 = array();
$arguments76['name'] = 'main';
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output78 = '';

$output78 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments82 = array();
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments85 = array();
// Rendering Array
$array86 = array();
$array86['logintype'] = 'logout';
$arguments85['additionalParams'] = $array86;
// Rendering Boolean node
$arguments85['addQueryString'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments87 = array();
$arguments87['key'] = 'logout.label';
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['htmlEscape'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$renderChildrenClosure88 = function() {return NULL;};
$arguments85['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);
// Rendering Boolean node
$arguments85['noCacheHash'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['pageUid'] = NULL;
$arguments85['pageType'] = 0;
$arguments85['noCache'] = false;
$arguments85['section'] = '';
$arguments85['linkAccessRestrictedPages'] = false;
$arguments85['absolute'] = false;
$arguments85['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments85['addQueryStringMethod'] = NULL;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['target'] = NULL;
$arguments85['rel'] = NULL;
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments90 = array();
$arguments90['key'] = 'logout.label';
$arguments90['id'] = NULL;
$arguments90['default'] = NULL;
$arguments90['htmlEscape'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['extensionName'] = NULL;
$renderChildrenClosure91 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);
};
$viewHelper92 = $self->getViewHelper('$viewHelper92', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper92->setArguments($arguments85);
$viewHelper92->setRenderingContext($renderingContext);
$viewHelper92->setRenderChildrenClosure($renderChildrenClosure89);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output84 .= $viewHelper92->initializeArgumentsAndRender();

$output84 .= '
        ';
return $output84;
};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments93 = array();
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output95 = '';

$output95 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments96 = array();
// Rendering Boolean node
$arguments96['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('providers'));
$arguments96['then'] = NULL;
$arguments96['else'] = NULL;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output98 = '';

$output98 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments99 = array();
$arguments99['each'] = $currentVariableContainer->getOrNull('providers');
$arguments99['as'] = 'provider';
$arguments99['key'] = '';
$arguments99['reverse'] = false;
$arguments99['iteration'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output101 = '';

$output101 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments102 = array();
$arguments102['pageType'] = '1316773681';
// Rendering Array
$array103 = array();
// Rendering Array
$array104 = array();
$array104['provider'] = $currentVariableContainer->getOrNull('provider');
// Rendering ViewHelper MV\SocialAuth\ViewHelpers\CurrentUriViewHelper
$arguments105 = array();
$renderChildrenClosure106 = function() {return NULL;};
$viewHelper107 = $self->getViewHelper('$viewHelper107', $renderingContext, 'MV\SocialAuth\ViewHelpers\CurrentUriViewHelper');
$viewHelper107->setArguments($arguments105);
$viewHelper107->setRenderingContext($renderingContext);
$viewHelper107->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper MV\SocialAuth\ViewHelpers\CurrentUriViewHelper
$array104['redirect'] = $viewHelper107->initializeArgumentsAndRender();
$array103['tx_socialauth_pi1'] = $array104;
$arguments102['additionalParams'] = $array103;
// Rendering Boolean node
$arguments102['noCacheHash'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$output108 = '';

$output108 .= 'btn btn-block btn-social btn-';

$output108 .= $currentVariableContainer->getOrNull('provider');
$arguments102['class'] = $output108;
$arguments102['additionalAttributes'] = NULL;
$arguments102['data'] = NULL;
$arguments102['pageUid'] = NULL;
$arguments102['noCache'] = false;
$arguments102['section'] = '';
$arguments102['linkAccessRestrictedPages'] = false;
$arguments102['absolute'] = false;
$arguments102['addQueryString'] = false;
$arguments102['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments102['addQueryStringMethod'] = NULL;
$arguments102['dir'] = NULL;
$arguments102['id'] = NULL;
$arguments102['lang'] = NULL;
$arguments102['style'] = NULL;
$arguments102['title'] = NULL;
$arguments102['accesskey'] = NULL;
$arguments102['tabindex'] = NULL;
$arguments102['onclick'] = NULL;
$arguments102['target'] = NULL;
$arguments102['rel'] = NULL;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output110 = '';

$output110 .= '
                    			 <span class="fa fa-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments111 = array();
$arguments111['value'] = $currentVariableContainer->getOrNull('provider');
$arguments111['keepQuotes'] = false;
$arguments111['encoding'] = NULL;
$arguments111['doubleEncode'] = true;
$renderChildrenClosure112 = function() {return NULL;};
$value113 = ($arguments111['value'] !== NULL ? $arguments111['value'] : $renderChildrenClosure112());

$output110 .= (!is_string($value113) ? $value113 : htmlspecialchars($value113, ($arguments111['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments111['encoding'] !== NULL ? $arguments111['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments111['doubleEncode']));

$output110 .= '"></span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments114 = array();
$output115 = '';

$output115 .= $currentVariableContainer->getOrNull('provider');

$output115 .= '.label';
$arguments114['key'] = $output115;
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['htmlEscape'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$renderChildrenClosure116 = function() {return NULL;};

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure116, $renderingContext);

$output110 .= '
                    ';
return $output110;
};
$viewHelper117 = $self->getViewHelper('$viewHelper117', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper117->setArguments($arguments102);
$viewHelper117->setRenderingContext($renderingContext);
$viewHelper117->setRenderChildrenClosure($renderChildrenClosure109);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output101 .= $viewHelper117->initializeArgumentsAndRender();

$output101 .= '
                ';
return $output101;
};

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
            ';
return $output98;
};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
        ';
return $output95;
};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output81 .= '
    ';
return $output81;
};
$arguments79['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output118 = '';

$output118 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments119 = array();
// Rendering Array
$array120 = array();
$array120['logintype'] = 'logout';
$arguments119['additionalParams'] = $array120;
// Rendering Boolean node
$arguments119['addQueryString'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments121 = array();
$arguments121['key'] = 'logout.label';
$arguments121['id'] = NULL;
$arguments121['default'] = NULL;
$arguments121['htmlEscape'] = NULL;
$arguments121['arguments'] = NULL;
$arguments121['extensionName'] = NULL;
$renderChildrenClosure122 = function() {return NULL;};
$arguments119['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);
// Rendering Boolean node
$arguments119['noCacheHash'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments119['additionalAttributes'] = NULL;
$arguments119['data'] = NULL;
$arguments119['pageUid'] = NULL;
$arguments119['pageType'] = 0;
$arguments119['noCache'] = false;
$arguments119['section'] = '';
$arguments119['linkAccessRestrictedPages'] = false;
$arguments119['absolute'] = false;
$arguments119['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments119['addQueryStringMethod'] = NULL;
$arguments119['class'] = NULL;
$arguments119['dir'] = NULL;
$arguments119['id'] = NULL;
$arguments119['lang'] = NULL;
$arguments119['style'] = NULL;
$arguments119['accesskey'] = NULL;
$arguments119['tabindex'] = NULL;
$arguments119['onclick'] = NULL;
$arguments119['target'] = NULL;
$arguments119['rel'] = NULL;
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments124 = array();
$arguments124['key'] = 'logout.label';
$arguments124['id'] = NULL;
$arguments124['default'] = NULL;
$arguments124['htmlEscape'] = NULL;
$arguments124['arguments'] = NULL;
$arguments124['extensionName'] = NULL;
$renderChildrenClosure125 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);
};
$viewHelper126 = $self->getViewHelper('$viewHelper126', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper126->setArguments($arguments119);
$viewHelper126->setRenderingContext($renderingContext);
$viewHelper126->setRenderChildrenClosure($renderChildrenClosure123);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output118 .= $viewHelper126->initializeArgumentsAndRender();

$output118 .= '
        ';
return $output118;
};
$arguments79['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output127 = '';

$output127 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments128 = array();
// Rendering Boolean node
$arguments128['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('providers'));
$arguments128['then'] = NULL;
$arguments128['else'] = NULL;
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output130 = '';

$output130 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments131 = array();
$arguments131['each'] = $currentVariableContainer->getOrNull('providers');
$arguments131['as'] = 'provider';
$arguments131['key'] = '';
$arguments131['reverse'] = false;
$arguments131['iteration'] = NULL;
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output133 = '';

$output133 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments134 = array();
$arguments134['pageType'] = '1316773681';
// Rendering Array
$array135 = array();
// Rendering Array
$array136 = array();
$array136['provider'] = $currentVariableContainer->getOrNull('provider');
// Rendering ViewHelper MV\SocialAuth\ViewHelpers\CurrentUriViewHelper
$arguments137 = array();
$renderChildrenClosure138 = function() {return NULL;};
$viewHelper139 = $self->getViewHelper('$viewHelper139', $renderingContext, 'MV\SocialAuth\ViewHelpers\CurrentUriViewHelper');
$viewHelper139->setArguments($arguments137);
$viewHelper139->setRenderingContext($renderingContext);
$viewHelper139->setRenderChildrenClosure($renderChildrenClosure138);
// End of ViewHelper MV\SocialAuth\ViewHelpers\CurrentUriViewHelper
$array136['redirect'] = $viewHelper139->initializeArgumentsAndRender();
$array135['tx_socialauth_pi1'] = $array136;
$arguments134['additionalParams'] = $array135;
// Rendering Boolean node
$arguments134['noCacheHash'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$output140 = '';

$output140 .= 'btn btn-block btn-social btn-';

$output140 .= $currentVariableContainer->getOrNull('provider');
$arguments134['class'] = $output140;
$arguments134['additionalAttributes'] = NULL;
$arguments134['data'] = NULL;
$arguments134['pageUid'] = NULL;
$arguments134['noCache'] = false;
$arguments134['section'] = '';
$arguments134['linkAccessRestrictedPages'] = false;
$arguments134['absolute'] = false;
$arguments134['addQueryString'] = false;
$arguments134['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments134['addQueryStringMethod'] = NULL;
$arguments134['dir'] = NULL;
$arguments134['id'] = NULL;
$arguments134['lang'] = NULL;
$arguments134['style'] = NULL;
$arguments134['title'] = NULL;
$arguments134['accesskey'] = NULL;
$arguments134['tabindex'] = NULL;
$arguments134['onclick'] = NULL;
$arguments134['target'] = NULL;
$arguments134['rel'] = NULL;
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output142 = '';

$output142 .= '
                    			 <span class="fa fa-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments143 = array();
$arguments143['value'] = $currentVariableContainer->getOrNull('provider');
$arguments143['keepQuotes'] = false;
$arguments143['encoding'] = NULL;
$arguments143['doubleEncode'] = true;
$renderChildrenClosure144 = function() {return NULL;};
$value145 = ($arguments143['value'] !== NULL ? $arguments143['value'] : $renderChildrenClosure144());

$output142 .= (!is_string($value145) ? $value145 : htmlspecialchars($value145, ($arguments143['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments143['encoding'] !== NULL ? $arguments143['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments143['doubleEncode']));

$output142 .= '"></span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments146 = array();
$output147 = '';

$output147 .= $currentVariableContainer->getOrNull('provider');

$output147 .= '.label';
$arguments146['key'] = $output147;
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['htmlEscape'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$renderChildrenClosure148 = function() {return NULL;};

$output142 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure148, $renderingContext);

$output142 .= '
                    ';
return $output142;
};
$viewHelper149 = $self->getViewHelper('$viewHelper149', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper149->setArguments($arguments134);
$viewHelper149->setRenderingContext($renderingContext);
$viewHelper149->setRenderChildrenClosure($renderChildrenClosure141);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output133 .= $viewHelper149->initializeArgumentsAndRender();

$output133 .= '
                ';
return $output133;
};

$output130 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output130 .= '
            ';
return $output130;
};

$output127 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output127 .= '
        ';
return $output127;
};

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
';
return $output78;
};

$output72 .= '';


return $output72;
}


}
#1507300899    39061     