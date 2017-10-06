<?php
class FluidCache_Femanager_User_action_validate_e8c7a266de30857bfc0957bae8488e0dc3ff4cd8 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Clean';
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('isValid'));
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
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper
$arguments7 = array();
// Rendering Array
$array8 = array();
$array8['validate'] = 1;
$arguments7['array'] = $array8;
$renderChildrenClosure9 = function() {return NULL;};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper');
$viewHelper10->setArguments($arguments7);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper

$output6 .= $viewHelper10->initializeArgumentsAndRender();

$output6 .= '
		';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments11 = array();
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output13 = '';

$output13 .= '
			';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper
$arguments14 = array();
// Rendering Array
$array15 = array();
$array15['validate'] = 0;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments16 = array();
$arguments16['partial'] = 'Misc/ValidationMessages';
$arguments16['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments16['section'] = NULL;
$arguments16['optional'] = false;
$renderChildrenClosure17 = function() {return NULL;};
$array15['message'] = TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);
$arguments14['array'] = $array15;
$renderChildrenClosure18 = function() {return NULL;};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper');
$viewHelper19->setArguments($arguments14);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper

$output13 .= $viewHelper19->initializeArgumentsAndRender();

$output13 .= '
		';
return $output13;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output3 .= '
	';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
			';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper
$arguments21 = array();
// Rendering Array
$array22 = array();
$array22['validate'] = 1;
$arguments21['array'] = $array22;
$renderChildrenClosure23 = function() {return NULL;};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper');
$viewHelper24->setArguments($arguments21);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper

$output20 .= $viewHelper24->initializeArgumentsAndRender();

$output20 .= '
		';
return $output20;
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
			';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper
$arguments26 = array();
// Rendering Array
$array27 = array();
$array27['validate'] = 0;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments28 = array();
$arguments28['partial'] = 'Misc/ValidationMessages';
$arguments28['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments28['section'] = NULL;
$arguments28['optional'] = false;
$renderChildrenClosure29 = function() {return NULL;};
$array27['message'] = TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);
$arguments26['array'] = $array27;
$renderChildrenClosure30 = function() {return NULL;};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper');
$viewHelper31->setArguments($arguments26);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper

$output25 .= $viewHelper31->initializeArgumentsAndRender();

$output25 .= '
		';
return $output25;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

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

$output32 = '';

$output32 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments33 = array();
$arguments33['name'] = 'Clean';
$renderChildrenClosure34 = function() {return NULL;};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper35->setArguments($arguments33);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output32 .= $viewHelper35->initializeArgumentsAndRender();

$output32 .= '

	User / Validate

	Available variables:
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments36 = array();
$arguments36['value'] = $currentVariableContainer->getOrNull('isValid');
$arguments36['keepQuotes'] = false;
$arguments36['encoding'] = NULL;
$arguments36['doubleEncode'] = true;
$renderChildrenClosure37 = function() {return NULL;};
$value38 = ($arguments36['value'] !== NULL ? $arguments36['value'] : $renderChildrenClosure37());

$output32 .= (!is_string($value38) ? $value38 : htmlspecialchars($value38, ($arguments36['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments36['encoding'] !== NULL ? $arguments36['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments36['doubleEncode']));

$output32 .= ' Boolean value if validation was correct or not
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments39 = array();
$arguments39['value'] = $currentVariableContainer->getOrNull('messages');
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = NULL;
$arguments39['doubleEncode'] = true;
$renderChildrenClosure40 = function() {return NULL;};
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output32 .= (!is_string($value41) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments39['encoding'] !== NULL ? $arguments39['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments39['doubleEncode']));

$output32 .= ' Errormessage from Validator
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments42 = array();
$arguments42['value'] = $currentVariableContainer->getOrNull('validation');
$arguments42['keepQuotes'] = false;
$arguments42['encoding'] = NULL;
$arguments42['doubleEncode'] = true;
$renderChildrenClosure43 = function() {return NULL;};
$value44 = ($arguments42['value'] !== NULL ? $arguments42['value'] : $renderChildrenClosure43());

$output32 .= (!is_string($value44) ? $value44 : htmlspecialchars($value44, ($arguments42['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments42['encoding'] !== NULL ? $arguments42['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments42['doubleEncode']));

$output32 .= ' Validation String from HTML (like "required, email, min(10)")
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = $currentVariableContainer->getOrNull('value');
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = NULL;
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() {return NULL;};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());

$output32 .= (!is_string($value47) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments45['encoding'] !== NULL ? $arguments45['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments45['doubleEncode']));

$output32 .= ' Value from field
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments48 = array();
$arguments48['value'] = $currentVariableContainer->getOrNull('fieldname');
$arguments48['keepQuotes'] = false;
$arguments48['encoding'] = NULL;
$arguments48['doubleEncode'] = true;
$renderChildrenClosure49 = function() {return NULL;};
$value50 = ($arguments48['value'] !== NULL ? $arguments48['value'] : $renderChildrenClosure49());

$output32 .= (!is_string($value50) ? $value50 : htmlspecialchars($value50, ($arguments48['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments48['encoding'] !== NULL ? $arguments48['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments48['doubleEncode']));

$output32 .= ' Fieldname (like "username")
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments51 = array();
$arguments51['value'] = $currentVariableContainer->getOrNull('user');
$arguments51['keepQuotes'] = false;
$arguments51['encoding'] = NULL;
$arguments51['doubleEncode'] = true;
$renderChildrenClosure52 = function() {return NULL;};
$value53 = ($arguments51['value'] !== NULL ? $arguments51['value'] : $renderChildrenClosure52());

$output32 .= (!is_string($value53) ? $value53 : htmlspecialchars($value53, ($arguments51['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments51['encoding'] !== NULL ? $arguments51['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments51['doubleEncode']));

$output32 .= ' User Object (only filled when used with edit action)

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments54 = array();
$arguments54['name'] = 'main';
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output56 = '';

$output56 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments57 = array();
// Rendering Boolean node
$arguments57['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('isValid'));
$arguments57['then'] = NULL;
$arguments57['else'] = NULL;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments60 = array();
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output62 = '';

$output62 .= '
			';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper
$arguments63 = array();
// Rendering Array
$array64 = array();
$array64['validate'] = 1;
$arguments63['array'] = $array64;
$renderChildrenClosure65 = function() {return NULL;};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper');
$viewHelper66->setArguments($arguments63);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper

$output62 .= $viewHelper66->initializeArgumentsAndRender();

$output62 .= '
		';
return $output62;
};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments67 = array();
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output69 = '';

$output69 .= '
			';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper
$arguments70 = array();
// Rendering Array
$array71 = array();
$array71['validate'] = 0;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments72 = array();
$arguments72['partial'] = 'Misc/ValidationMessages';
$arguments72['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments72['section'] = NULL;
$arguments72['optional'] = false;
$renderChildrenClosure73 = function() {return NULL;};
$array71['message'] = TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);
$arguments70['array'] = $array71;
$renderChildrenClosure74 = function() {return NULL;};
$viewHelper75 = $self->getViewHelper('$viewHelper75', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper');
$viewHelper75->setArguments($arguments70);
$viewHelper75->setRenderingContext($renderingContext);
$viewHelper75->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper

$output69 .= $viewHelper75->initializeArgumentsAndRender();

$output69 .= '
		';
return $output69;
};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output59 .= '
	';
return $output59;
};
$arguments57['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output76 = '';

$output76 .= '
			';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper
$arguments77 = array();
// Rendering Array
$array78 = array();
$array78['validate'] = 1;
$arguments77['array'] = $array78;
$renderChildrenClosure79 = function() {return NULL;};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper');
$viewHelper80->setArguments($arguments77);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure79);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper

$output76 .= $viewHelper80->initializeArgumentsAndRender();

$output76 .= '
		';
return $output76;
};
$arguments57['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= '
			';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper
$arguments82 = array();
// Rendering Array
$array83 = array();
$array83['validate'] = 0;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments84 = array();
$arguments84['partial'] = 'Misc/ValidationMessages';
$arguments84['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments84['section'] = NULL;
$arguments84['optional'] = false;
$renderChildrenClosure85 = function() {return NULL;};
$array83['message'] = TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);
$arguments82['array'] = $array83;
$renderChildrenClosure86 = function() {return NULL;};
$viewHelper87 = $self->getViewHelper('$viewHelper87', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper');
$viewHelper87->setArguments($arguments82);
$viewHelper87->setRenderingContext($renderingContext);
$viewHelper87->setRenderChildrenClosure($renderChildrenClosure86);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\JsonEncodeViewHelper

$output81 .= $viewHelper87->initializeArgumentsAndRender();

$output81 .= '
		';
return $output81;
};

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
';
return $output56;
};

$output32 .= '';

$output32 .= '
';


return $output32;
}


}
#1507232122    18690     