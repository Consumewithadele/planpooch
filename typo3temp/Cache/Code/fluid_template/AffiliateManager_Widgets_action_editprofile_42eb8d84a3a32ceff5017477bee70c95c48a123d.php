<?php
class FluidCache_AffiliateManager_Widgets_action_editprofile_42eb8d84a3a32ceff5017477bee70c95c48a123d extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

</style>


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['renderMode'] = NULL;
$arguments1['as'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['queueIdentifier'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '



';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'logged_in', $renderingContext), 1);
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments7 = array();
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments10 = array();
// Rendering Boolean node
$arguments10['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'user.image', $renderingContext));
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments13 = array();
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output15 = '';

$output15 .= '
		<div class="settings_div">
			<a href="index.php?id=48">
				<i class="settings icon" style="color:white;"></i>Settings
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments16 = array();
$output17 = '';

$output17 .= 'uploads/pics/';

$output17 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'user.image', $renderingContext);
$arguments16['src'] = $output17;
$output18 = '';

$output18 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'firstName', $renderingContext);

$output18 .= ' ';

$output18 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'lastName', $renderingContext);
$arguments16['alt'] = $output18;
$arguments16['width'] = '150';
$arguments16['class'] = 'ui image af-avatar';
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['height'] = NULL;
$arguments16['minWidth'] = NULL;
$arguments16['minHeight'] = NULL;
$arguments16['maxWidth'] = NULL;
$arguments16['maxHeight'] = NULL;
$arguments16['treatIdAsReference'] = false;
$arguments16['image'] = NULL;
$arguments16['crop'] = NULL;
$arguments16['absolute'] = false;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['ismap'] = NULL;
$arguments16['longdesc'] = NULL;
$arguments16['usemap'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper20->setArguments($arguments16);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output15 .= $viewHelper20->initializeArgumentsAndRender();

$output15 .= '
			</a>
		</div>	
		';
return $output15;
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments21 = array();
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
		<div class="settings_div">
			<a href="index.php?id=48">
				<i class="settings icon" style="color:white;"></i>Settings
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments24 = array();
$arguments24['src'] = 'typo3conf/ext/affiliate_manager/Resources/Public/Images/default-pic.gif';
$arguments24['alt'] = 'default';
$arguments24['width'] = '150';
$arguments24['class'] = 'ui image af-avatar';
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['height'] = NULL;
$arguments24['minWidth'] = NULL;
$arguments24['minHeight'] = NULL;
$arguments24['maxWidth'] = NULL;
$arguments24['maxHeight'] = NULL;
$arguments24['treatIdAsReference'] = false;
$arguments24['image'] = NULL;
$arguments24['crop'] = NULL;
$arguments24['absolute'] = false;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['ismap'] = NULL;
$arguments24['longdesc'] = NULL;
$arguments24['usemap'] = NULL;
$renderChildrenClosure25 = function() {return NULL;};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper26->setArguments($arguments24);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output23 .= $viewHelper26->initializeArgumentsAndRender();

$output23 .= '
			</a>
		</div>	
		';
return $output23;
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output12 .= '
	';
return $output12;
};
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output27 = '';

$output27 .= '
		<div class="settings_div">
			<a href="index.php?id=48">
				<i class="settings icon" style="color:white;"></i>Settings
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments28 = array();
$output29 = '';

$output29 .= 'uploads/pics/';

$output29 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'user.image', $renderingContext);
$arguments28['src'] = $output29;
$output30 = '';

$output30 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'firstName', $renderingContext);

$output30 .= ' ';

$output30 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'lastName', $renderingContext);
$arguments28['alt'] = $output30;
$arguments28['width'] = '150';
$arguments28['class'] = 'ui image af-avatar';
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['height'] = NULL;
$arguments28['minWidth'] = NULL;
$arguments28['minHeight'] = NULL;
$arguments28['maxWidth'] = NULL;
$arguments28['maxHeight'] = NULL;
$arguments28['treatIdAsReference'] = false;
$arguments28['image'] = NULL;
$arguments28['crop'] = NULL;
$arguments28['absolute'] = false;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['ismap'] = NULL;
$arguments28['longdesc'] = NULL;
$arguments28['usemap'] = NULL;
$renderChildrenClosure31 = function() {return NULL;};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper32->setArguments($arguments28);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output27 .= $viewHelper32->initializeArgumentsAndRender();

$output27 .= '
			</a>
		</div>	
		';
return $output27;
};
$arguments10['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output33 = '';

$output33 .= '
		<div class="settings_div">
			<a href="index.php?id=48">
				<i class="settings icon" style="color:white;"></i>Settings
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments34 = array();
$arguments34['src'] = 'typo3conf/ext/affiliate_manager/Resources/Public/Images/default-pic.gif';
$arguments34['alt'] = 'default';
$arguments34['width'] = '150';
$arguments34['class'] = 'ui image af-avatar';
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['height'] = NULL;
$arguments34['minWidth'] = NULL;
$arguments34['minHeight'] = NULL;
$arguments34['maxWidth'] = NULL;
$arguments34['maxHeight'] = NULL;
$arguments34['treatIdAsReference'] = false;
$arguments34['image'] = NULL;
$arguments34['crop'] = NULL;
$arguments34['absolute'] = false;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['ismap'] = NULL;
$arguments34['longdesc'] = NULL;
$arguments34['usemap'] = NULL;
$renderChildrenClosure35 = function() {return NULL;};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper36->setArguments($arguments34);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output33 .= $viewHelper36->initializeArgumentsAndRender();

$output33 .= '
			</a>
		</div>	
		';
return $output33;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
';
return $output9;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments37 = array();
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
<!--
<a href="index.php?id=32" class="item mobile-hidden">
          <img src="fileadmin/plannedpooch/version2/images/lock-icon.png" class="ui image" width="14">
          Log In
        </a>
    -->    
<a href="index.php?id=32" class="pooch-button menu-button">
          Log In
        </a>
';
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output6 .= '

';
return $output6;
};
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output39 = '';

$output39 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments40 = array();
// Rendering Boolean node
$arguments40['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'user.image', $renderingContext));
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments43 = array();
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
		<div class="settings_div">
			<a href="index.php?id=48">
				<i class="settings icon" style="color:white;"></i>Settings
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments46 = array();
$output47 = '';

$output47 .= 'uploads/pics/';

$output47 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'user.image', $renderingContext);
$arguments46['src'] = $output47;
$output48 = '';

$output48 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'firstName', $renderingContext);

$output48 .= ' ';

$output48 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'lastName', $renderingContext);
$arguments46['alt'] = $output48;
$arguments46['width'] = '150';
$arguments46['class'] = 'ui image af-avatar';
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['height'] = NULL;
$arguments46['minWidth'] = NULL;
$arguments46['minHeight'] = NULL;
$arguments46['maxWidth'] = NULL;
$arguments46['maxHeight'] = NULL;
$arguments46['treatIdAsReference'] = false;
$arguments46['image'] = NULL;
$arguments46['crop'] = NULL;
$arguments46['absolute'] = false;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['ismap'] = NULL;
$arguments46['longdesc'] = NULL;
$arguments46['usemap'] = NULL;
$renderChildrenClosure49 = function() {return NULL;};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper50->setArguments($arguments46);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure49);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output45 .= $viewHelper50->initializeArgumentsAndRender();

$output45 .= '
			</a>
		</div>	
		';
return $output45;
};

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments51 = array();
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '
		<div class="settings_div">
			<a href="index.php?id=48">
				<i class="settings icon" style="color:white;"></i>Settings
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments54 = array();
$arguments54['src'] = 'typo3conf/ext/affiliate_manager/Resources/Public/Images/default-pic.gif';
$arguments54['alt'] = 'default';
$arguments54['width'] = '150';
$arguments54['class'] = 'ui image af-avatar';
$arguments54['additionalAttributes'] = NULL;
$arguments54['data'] = NULL;
$arguments54['height'] = NULL;
$arguments54['minWidth'] = NULL;
$arguments54['minHeight'] = NULL;
$arguments54['maxWidth'] = NULL;
$arguments54['maxHeight'] = NULL;
$arguments54['treatIdAsReference'] = false;
$arguments54['image'] = NULL;
$arguments54['crop'] = NULL;
$arguments54['absolute'] = false;
$arguments54['dir'] = NULL;
$arguments54['id'] = NULL;
$arguments54['lang'] = NULL;
$arguments54['style'] = NULL;
$arguments54['title'] = NULL;
$arguments54['accesskey'] = NULL;
$arguments54['tabindex'] = NULL;
$arguments54['onclick'] = NULL;
$arguments54['ismap'] = NULL;
$arguments54['longdesc'] = NULL;
$arguments54['usemap'] = NULL;
$renderChildrenClosure55 = function() {return NULL;};
$viewHelper56 = $self->getViewHelper('$viewHelper56', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper56->setArguments($arguments54);
$viewHelper56->setRenderingContext($renderingContext);
$viewHelper56->setRenderChildrenClosure($renderChildrenClosure55);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output53 .= $viewHelper56->initializeArgumentsAndRender();

$output53 .= '
			</a>
		</div>	
		';
return $output53;
};

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output42 .= '
	';
return $output42;
};
$arguments40['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
		<div class="settings_div">
			<a href="index.php?id=48">
				<i class="settings icon" style="color:white;"></i>Settings
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments58 = array();
$output59 = '';

$output59 .= 'uploads/pics/';

$output59 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'user.image', $renderingContext);
$arguments58['src'] = $output59;
$output60 = '';

$output60 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'firstName', $renderingContext);

$output60 .= ' ';

$output60 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'lastName', $renderingContext);
$arguments58['alt'] = $output60;
$arguments58['width'] = '150';
$arguments58['class'] = 'ui image af-avatar';
$arguments58['additionalAttributes'] = NULL;
$arguments58['data'] = NULL;
$arguments58['height'] = NULL;
$arguments58['minWidth'] = NULL;
$arguments58['minHeight'] = NULL;
$arguments58['maxWidth'] = NULL;
$arguments58['maxHeight'] = NULL;
$arguments58['treatIdAsReference'] = false;
$arguments58['image'] = NULL;
$arguments58['crop'] = NULL;
$arguments58['absolute'] = false;
$arguments58['dir'] = NULL;
$arguments58['id'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['title'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['ismap'] = NULL;
$arguments58['longdesc'] = NULL;
$arguments58['usemap'] = NULL;
$renderChildrenClosure61 = function() {return NULL;};
$viewHelper62 = $self->getViewHelper('$viewHelper62', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper62->setArguments($arguments58);
$viewHelper62->setRenderingContext($renderingContext);
$viewHelper62->setRenderChildrenClosure($renderChildrenClosure61);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output57 .= $viewHelper62->initializeArgumentsAndRender();

$output57 .= '
			</a>
		</div>	
		';
return $output57;
};
$arguments40['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
		<div class="settings_div">
			<a href="index.php?id=48">
				<i class="settings icon" style="color:white;"></i>Settings
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments64 = array();
$arguments64['src'] = 'typo3conf/ext/affiliate_manager/Resources/Public/Images/default-pic.gif';
$arguments64['alt'] = 'default';
$arguments64['width'] = '150';
$arguments64['class'] = 'ui image af-avatar';
$arguments64['additionalAttributes'] = NULL;
$arguments64['data'] = NULL;
$arguments64['height'] = NULL;
$arguments64['minWidth'] = NULL;
$arguments64['minHeight'] = NULL;
$arguments64['maxWidth'] = NULL;
$arguments64['maxHeight'] = NULL;
$arguments64['treatIdAsReference'] = false;
$arguments64['image'] = NULL;
$arguments64['crop'] = NULL;
$arguments64['absolute'] = false;
$arguments64['dir'] = NULL;
$arguments64['id'] = NULL;
$arguments64['lang'] = NULL;
$arguments64['style'] = NULL;
$arguments64['title'] = NULL;
$arguments64['accesskey'] = NULL;
$arguments64['tabindex'] = NULL;
$arguments64['onclick'] = NULL;
$arguments64['ismap'] = NULL;
$arguments64['longdesc'] = NULL;
$arguments64['usemap'] = NULL;
$renderChildrenClosure65 = function() {return NULL;};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper66->setArguments($arguments64);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output63 .= $viewHelper66->initializeArgumentsAndRender();

$output63 .= '
			</a>
		</div>	
		';
return $output63;
};

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
';
return $output39;
};
$arguments4['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
<!--
<a href="index.php?id=32" class="item mobile-hidden">
          <img src="fileadmin/plannedpooch/version2/images/lock-icon.png" class="ui image" width="14">
          Log In
        </a>
    -->    
<a href="index.php?id=32" class="pooch-button menu-button">
          Log In
        </a>
';
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

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

$output67 = '';

$output67 .= '






';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments68 = array();
$arguments68['name'] = 'Default';
$renderChildrenClosure69 = function() {return NULL;};
$viewHelper70 = $self->getViewHelper('$viewHelper70', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper70->setArguments($arguments68);
$viewHelper70->setRenderingContext($renderingContext);
$viewHelper70->setRenderChildrenClosure($renderChildrenClosure69);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output67 .= $viewHelper70->initializeArgumentsAndRender();

$output67 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments71 = array();
$arguments71['name'] = 'main';
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
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

</style>


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments74 = array();
$arguments74['additionalAttributes'] = NULL;
$arguments74['data'] = NULL;
$arguments74['renderMode'] = NULL;
$arguments74['as'] = NULL;
$arguments74['class'] = NULL;
$arguments74['dir'] = NULL;
$arguments74['id'] = NULL;
$arguments74['lang'] = NULL;
$arguments74['style'] = NULL;
$arguments74['title'] = NULL;
$arguments74['accesskey'] = NULL;
$arguments74['tabindex'] = NULL;
$arguments74['onclick'] = NULL;
$arguments74['queueIdentifier'] = NULL;
$renderChildrenClosure75 = function() {return NULL;};
$viewHelper76 = $self->getViewHelper('$viewHelper76', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper76->setArguments($arguments74);
$viewHelper76->setRenderingContext($renderingContext);
$viewHelper76->setRenderChildrenClosure($renderChildrenClosure75);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output73 .= $viewHelper76->initializeArgumentsAndRender();

$output73 .= '



';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments77 = array();
// Rendering Boolean node
$arguments77['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'logged_in', $renderingContext), 1);
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output79 = '';

$output79 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments80 = array();
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output82 = '';

$output82 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments83 = array();
// Rendering Boolean node
$arguments83['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'user.image', $renderingContext));
$arguments83['then'] = NULL;
$arguments83['else'] = NULL;
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output85 = '';

$output85 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments86 = array();
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output88 = '';

$output88 .= '
		<div class="settings_div">
			<a href="index.php?id=48">
				<i class="settings icon" style="color:white;"></i>Settings
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments89 = array();
$output90 = '';

$output90 .= 'uploads/pics/';

$output90 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'user.image', $renderingContext);
$arguments89['src'] = $output90;
$output91 = '';

$output91 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'firstName', $renderingContext);

$output91 .= ' ';

$output91 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'lastName', $renderingContext);
$arguments89['alt'] = $output91;
$arguments89['width'] = '150';
$arguments89['class'] = 'ui image af-avatar';
$arguments89['additionalAttributes'] = NULL;
$arguments89['data'] = NULL;
$arguments89['height'] = NULL;
$arguments89['minWidth'] = NULL;
$arguments89['minHeight'] = NULL;
$arguments89['maxWidth'] = NULL;
$arguments89['maxHeight'] = NULL;
$arguments89['treatIdAsReference'] = false;
$arguments89['image'] = NULL;
$arguments89['crop'] = NULL;
$arguments89['absolute'] = false;
$arguments89['dir'] = NULL;
$arguments89['id'] = NULL;
$arguments89['lang'] = NULL;
$arguments89['style'] = NULL;
$arguments89['title'] = NULL;
$arguments89['accesskey'] = NULL;
$arguments89['tabindex'] = NULL;
$arguments89['onclick'] = NULL;
$arguments89['ismap'] = NULL;
$arguments89['longdesc'] = NULL;
$arguments89['usemap'] = NULL;
$renderChildrenClosure92 = function() {return NULL;};
$viewHelper93 = $self->getViewHelper('$viewHelper93', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper93->setArguments($arguments89);
$viewHelper93->setRenderingContext($renderingContext);
$viewHelper93->setRenderChildrenClosure($renderChildrenClosure92);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output88 .= $viewHelper93->initializeArgumentsAndRender();

$output88 .= '
			</a>
		</div>	
		';
return $output88;
};

$output85 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments94 = array();
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output96 = '';

$output96 .= '
		<div class="settings_div">
			<a href="index.php?id=48">
				<i class="settings icon" style="color:white;"></i>Settings
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments97 = array();
$arguments97['src'] = 'typo3conf/ext/affiliate_manager/Resources/Public/Images/default-pic.gif';
$arguments97['alt'] = 'default';
$arguments97['width'] = '150';
$arguments97['class'] = 'ui image af-avatar';
$arguments97['additionalAttributes'] = NULL;
$arguments97['data'] = NULL;
$arguments97['height'] = NULL;
$arguments97['minWidth'] = NULL;
$arguments97['minHeight'] = NULL;
$arguments97['maxWidth'] = NULL;
$arguments97['maxHeight'] = NULL;
$arguments97['treatIdAsReference'] = false;
$arguments97['image'] = NULL;
$arguments97['crop'] = NULL;
$arguments97['absolute'] = false;
$arguments97['dir'] = NULL;
$arguments97['id'] = NULL;
$arguments97['lang'] = NULL;
$arguments97['style'] = NULL;
$arguments97['title'] = NULL;
$arguments97['accesskey'] = NULL;
$arguments97['tabindex'] = NULL;
$arguments97['onclick'] = NULL;
$arguments97['ismap'] = NULL;
$arguments97['longdesc'] = NULL;
$arguments97['usemap'] = NULL;
$renderChildrenClosure98 = function() {return NULL;};
$viewHelper99 = $self->getViewHelper('$viewHelper99', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper99->setArguments($arguments97);
$viewHelper99->setRenderingContext($renderingContext);
$viewHelper99->setRenderChildrenClosure($renderChildrenClosure98);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output96 .= $viewHelper99->initializeArgumentsAndRender();

$output96 .= '
			</a>
		</div>	
		';
return $output96;
};

$output85 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output85 .= '
	';
return $output85;
};
$arguments83['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output100 = '';

$output100 .= '
		<div class="settings_div">
			<a href="index.php?id=48">
				<i class="settings icon" style="color:white;"></i>Settings
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments101 = array();
$output102 = '';

$output102 .= 'uploads/pics/';

$output102 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'user.image', $renderingContext);
$arguments101['src'] = $output102;
$output103 = '';

$output103 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'firstName', $renderingContext);

$output103 .= ' ';

$output103 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'lastName', $renderingContext);
$arguments101['alt'] = $output103;
$arguments101['width'] = '150';
$arguments101['class'] = 'ui image af-avatar';
$arguments101['additionalAttributes'] = NULL;
$arguments101['data'] = NULL;
$arguments101['height'] = NULL;
$arguments101['minWidth'] = NULL;
$arguments101['minHeight'] = NULL;
$arguments101['maxWidth'] = NULL;
$arguments101['maxHeight'] = NULL;
$arguments101['treatIdAsReference'] = false;
$arguments101['image'] = NULL;
$arguments101['crop'] = NULL;
$arguments101['absolute'] = false;
$arguments101['dir'] = NULL;
$arguments101['id'] = NULL;
$arguments101['lang'] = NULL;
$arguments101['style'] = NULL;
$arguments101['title'] = NULL;
$arguments101['accesskey'] = NULL;
$arguments101['tabindex'] = NULL;
$arguments101['onclick'] = NULL;
$arguments101['ismap'] = NULL;
$arguments101['longdesc'] = NULL;
$arguments101['usemap'] = NULL;
$renderChildrenClosure104 = function() {return NULL;};
$viewHelper105 = $self->getViewHelper('$viewHelper105', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper105->setArguments($arguments101);
$viewHelper105->setRenderingContext($renderingContext);
$viewHelper105->setRenderChildrenClosure($renderChildrenClosure104);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output100 .= $viewHelper105->initializeArgumentsAndRender();

$output100 .= '
			</a>
		</div>	
		';
return $output100;
};
$arguments83['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output106 = '';

$output106 .= '
		<div class="settings_div">
			<a href="index.php?id=48">
				<i class="settings icon" style="color:white;"></i>Settings
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments107 = array();
$arguments107['src'] = 'typo3conf/ext/affiliate_manager/Resources/Public/Images/default-pic.gif';
$arguments107['alt'] = 'default';
$arguments107['width'] = '150';
$arguments107['class'] = 'ui image af-avatar';
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
$arguments107['height'] = NULL;
$arguments107['minWidth'] = NULL;
$arguments107['minHeight'] = NULL;
$arguments107['maxWidth'] = NULL;
$arguments107['maxHeight'] = NULL;
$arguments107['treatIdAsReference'] = false;
$arguments107['image'] = NULL;
$arguments107['crop'] = NULL;
$arguments107['absolute'] = false;
$arguments107['dir'] = NULL;
$arguments107['id'] = NULL;
$arguments107['lang'] = NULL;
$arguments107['style'] = NULL;
$arguments107['title'] = NULL;
$arguments107['accesskey'] = NULL;
$arguments107['tabindex'] = NULL;
$arguments107['onclick'] = NULL;
$arguments107['ismap'] = NULL;
$arguments107['longdesc'] = NULL;
$arguments107['usemap'] = NULL;
$renderChildrenClosure108 = function() {return NULL;};
$viewHelper109 = $self->getViewHelper('$viewHelper109', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper109->setArguments($arguments107);
$viewHelper109->setRenderingContext($renderingContext);
$viewHelper109->setRenderChildrenClosure($renderChildrenClosure108);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output106 .= $viewHelper109->initializeArgumentsAndRender();

$output106 .= '
			</a>
		</div>	
		';
return $output106;
};

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
';
return $output82;
};

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments110 = array();
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
<!--
<a href="index.php?id=32" class="item mobile-hidden">
          <img src="fileadmin/plannedpooch/version2/images/lock-icon.png" class="ui image" width="14">
          Log In
        </a>
    -->    
<a href="index.php?id=32" class="pooch-button menu-button">
          Log In
        </a>
';
};

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output79 .= '

';
return $output79;
};
$arguments77['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output112 = '';

$output112 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments113 = array();
// Rendering Boolean node
$arguments113['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'user.image', $renderingContext));
$arguments113['then'] = NULL;
$arguments113['else'] = NULL;
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output115 = '';

$output115 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments116 = array();
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output118 = '';

$output118 .= '
		<div class="settings_div">
			<a href="index.php?id=48">
				<i class="settings icon" style="color:white;"></i>Settings
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments119 = array();
$output120 = '';

$output120 .= 'uploads/pics/';

$output120 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'user.image', $renderingContext);
$arguments119['src'] = $output120;
$output121 = '';

$output121 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'firstName', $renderingContext);

$output121 .= ' ';

$output121 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'lastName', $renderingContext);
$arguments119['alt'] = $output121;
$arguments119['width'] = '150';
$arguments119['class'] = 'ui image af-avatar';
$arguments119['additionalAttributes'] = NULL;
$arguments119['data'] = NULL;
$arguments119['height'] = NULL;
$arguments119['minWidth'] = NULL;
$arguments119['minHeight'] = NULL;
$arguments119['maxWidth'] = NULL;
$arguments119['maxHeight'] = NULL;
$arguments119['treatIdAsReference'] = false;
$arguments119['image'] = NULL;
$arguments119['crop'] = NULL;
$arguments119['absolute'] = false;
$arguments119['dir'] = NULL;
$arguments119['id'] = NULL;
$arguments119['lang'] = NULL;
$arguments119['style'] = NULL;
$arguments119['title'] = NULL;
$arguments119['accesskey'] = NULL;
$arguments119['tabindex'] = NULL;
$arguments119['onclick'] = NULL;
$arguments119['ismap'] = NULL;
$arguments119['longdesc'] = NULL;
$arguments119['usemap'] = NULL;
$renderChildrenClosure122 = function() {return NULL;};
$viewHelper123 = $self->getViewHelper('$viewHelper123', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper123->setArguments($arguments119);
$viewHelper123->setRenderingContext($renderingContext);
$viewHelper123->setRenderChildrenClosure($renderChildrenClosure122);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output118 .= $viewHelper123->initializeArgumentsAndRender();

$output118 .= '
			</a>
		</div>	
		';
return $output118;
};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output115 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments124 = array();
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output126 = '';

$output126 .= '
		<div class="settings_div">
			<a href="index.php?id=48">
				<i class="settings icon" style="color:white;"></i>Settings
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments127 = array();
$arguments127['src'] = 'typo3conf/ext/affiliate_manager/Resources/Public/Images/default-pic.gif';
$arguments127['alt'] = 'default';
$arguments127['width'] = '150';
$arguments127['class'] = 'ui image af-avatar';
$arguments127['additionalAttributes'] = NULL;
$arguments127['data'] = NULL;
$arguments127['height'] = NULL;
$arguments127['minWidth'] = NULL;
$arguments127['minHeight'] = NULL;
$arguments127['maxWidth'] = NULL;
$arguments127['maxHeight'] = NULL;
$arguments127['treatIdAsReference'] = false;
$arguments127['image'] = NULL;
$arguments127['crop'] = NULL;
$arguments127['absolute'] = false;
$arguments127['dir'] = NULL;
$arguments127['id'] = NULL;
$arguments127['lang'] = NULL;
$arguments127['style'] = NULL;
$arguments127['title'] = NULL;
$arguments127['accesskey'] = NULL;
$arguments127['tabindex'] = NULL;
$arguments127['onclick'] = NULL;
$arguments127['ismap'] = NULL;
$arguments127['longdesc'] = NULL;
$arguments127['usemap'] = NULL;
$renderChildrenClosure128 = function() {return NULL;};
$viewHelper129 = $self->getViewHelper('$viewHelper129', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper129->setArguments($arguments127);
$viewHelper129->setRenderingContext($renderingContext);
$viewHelper129->setRenderChildrenClosure($renderChildrenClosure128);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output126 .= $viewHelper129->initializeArgumentsAndRender();

$output126 .= '
			</a>
		</div>	
		';
return $output126;
};

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output115 .= '
	';
return $output115;
};
$arguments113['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output130 = '';

$output130 .= '
		<div class="settings_div">
			<a href="index.php?id=48">
				<i class="settings icon" style="color:white;"></i>Settings
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments131 = array();
$output132 = '';

$output132 .= 'uploads/pics/';

$output132 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'user.image', $renderingContext);
$arguments131['src'] = $output132;
$output133 = '';

$output133 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'firstName', $renderingContext);

$output133 .= ' ';

$output133 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'lastName', $renderingContext);
$arguments131['alt'] = $output133;
$arguments131['width'] = '150';
$arguments131['class'] = 'ui image af-avatar';
$arguments131['additionalAttributes'] = NULL;
$arguments131['data'] = NULL;
$arguments131['height'] = NULL;
$arguments131['minWidth'] = NULL;
$arguments131['minHeight'] = NULL;
$arguments131['maxWidth'] = NULL;
$arguments131['maxHeight'] = NULL;
$arguments131['treatIdAsReference'] = false;
$arguments131['image'] = NULL;
$arguments131['crop'] = NULL;
$arguments131['absolute'] = false;
$arguments131['dir'] = NULL;
$arguments131['id'] = NULL;
$arguments131['lang'] = NULL;
$arguments131['style'] = NULL;
$arguments131['title'] = NULL;
$arguments131['accesskey'] = NULL;
$arguments131['tabindex'] = NULL;
$arguments131['onclick'] = NULL;
$arguments131['ismap'] = NULL;
$arguments131['longdesc'] = NULL;
$arguments131['usemap'] = NULL;
$renderChildrenClosure134 = function() {return NULL;};
$viewHelper135 = $self->getViewHelper('$viewHelper135', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper135->setArguments($arguments131);
$viewHelper135->setRenderingContext($renderingContext);
$viewHelper135->setRenderChildrenClosure($renderChildrenClosure134);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output130 .= $viewHelper135->initializeArgumentsAndRender();

$output130 .= '
			</a>
		</div>	
		';
return $output130;
};
$arguments113['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output136 = '';

$output136 .= '
		<div class="settings_div">
			<a href="index.php?id=48">
				<i class="settings icon" style="color:white;"></i>Settings
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments137 = array();
$arguments137['src'] = 'typo3conf/ext/affiliate_manager/Resources/Public/Images/default-pic.gif';
$arguments137['alt'] = 'default';
$arguments137['width'] = '150';
$arguments137['class'] = 'ui image af-avatar';
$arguments137['additionalAttributes'] = NULL;
$arguments137['data'] = NULL;
$arguments137['height'] = NULL;
$arguments137['minWidth'] = NULL;
$arguments137['minHeight'] = NULL;
$arguments137['maxWidth'] = NULL;
$arguments137['maxHeight'] = NULL;
$arguments137['treatIdAsReference'] = false;
$arguments137['image'] = NULL;
$arguments137['crop'] = NULL;
$arguments137['absolute'] = false;
$arguments137['dir'] = NULL;
$arguments137['id'] = NULL;
$arguments137['lang'] = NULL;
$arguments137['style'] = NULL;
$arguments137['title'] = NULL;
$arguments137['accesskey'] = NULL;
$arguments137['tabindex'] = NULL;
$arguments137['onclick'] = NULL;
$arguments137['ismap'] = NULL;
$arguments137['longdesc'] = NULL;
$arguments137['usemap'] = NULL;
$renderChildrenClosure138 = function() {return NULL;};
$viewHelper139 = $self->getViewHelper('$viewHelper139', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper139->setArguments($arguments137);
$viewHelper139->setRenderingContext($renderingContext);
$viewHelper139->setRenderChildrenClosure($renderChildrenClosure138);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output136 .= $viewHelper139->initializeArgumentsAndRender();

$output136 .= '
			</a>
		</div>	
		';
return $output136;
};

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
';
return $output112;
};
$arguments77['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
<!--
<a href="index.php?id=32" class="item mobile-hidden">
          <img src="fileadmin/plannedpooch/version2/images/lock-icon.png" class="ui image" width="14">
          Log In
        </a>
    -->    
<a href="index.php?id=32" class="pooch-button menu-button">
          Log In
        </a>
';
};

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output73 .= '













';
return $output73;
};

$output67 .= '';


return $output67;
}


}
#1507295565    49270     