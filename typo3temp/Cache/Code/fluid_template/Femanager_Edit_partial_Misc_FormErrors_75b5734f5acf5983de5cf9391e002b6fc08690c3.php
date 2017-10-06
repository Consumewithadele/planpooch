<?php
class FluidCache_Femanager_Edit_partial_Misc_FormErrors_75b5734f5acf5983de5cf9391e002b6fc08690c3 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments1 = array();
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
	PHP Validation Errormessages
';
};

$output0 .= '';

$output0 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$arguments3 = array();
$arguments3['for'] = $currentVariableContainer->getOrNull('object');
$arguments3['as'] = 'validationResults';
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output5 = '';

$output5 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments6 = array();
// Rendering Boolean node
$arguments6['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('validationResults'), 'flattenedErrors', $renderingContext));
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output8 = '';

$output8 .= '
		<ul class="femanager_error">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments9 = array();
$arguments9['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('validationResults'), 'flattenedErrors', $renderingContext);
$arguments9['key'] = 'propertyPath';
$arguments9['as'] = 'errors';
$arguments9['reverse'] = false;
$arguments9['iteration'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments12 = array();
$arguments12['each'] = $currentVariableContainer->getOrNull('errors');
$arguments12['as'] = 'error';
$arguments12['key'] = '';
$arguments12['reverse'] = false;
$arguments12['iteration'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output14 = '';

$output14 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments15 = array();
// Rendering Boolean node
$arguments15['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'code', $renderingContext), 1221560718);
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments18 = array();
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments21 = array();
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									If any required field in model was empty (normally username or password)
								';
};

$output20 .= '';

$output20 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments23 = array();
$arguments23['key'] = 'validationErrorRequiredModel';
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['htmlEscape'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$renderChildrenClosure24 = function() {return NULL;};

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output20 .= '
							';
return $output20;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments25 = array();
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output27 = '';

$output27 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments28 = array();
// Rendering Boolean node
$arguments28['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'code', $renderingContext), 1307719788);
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output30 = '';

$output30 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments31 = array();
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output33 = '';

$output33 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments34 = array();
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
											If given date format failed
										';
};

$output33 .= '';

$output33 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments36 = array();
$arguments36['key'] = 'validationErrorWrongDateFormat';
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['htmlEscape'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$renderChildrenClosure37 = function() {return NULL;};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output33 .= '
									';
return $output33;
};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments38 = array();
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output40 = '';

$output40 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments41 = array();
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
											If a validator check (see TypoScript) failed
										';
};

$output40 .= '';

$output40 .= '
										';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$arguments43 = array();
$arguments43['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'code', $renderingContext);
$renderChildrenClosure44 = function() {return NULL;};
$viewHelper45 = $self->getViewHelper('$viewHelper45', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\UpperViewHelper');
$viewHelper45->setArguments($arguments43);
$viewHelper45->setRenderingContext($renderingContext);
$viewHelper45->setRenderChildrenClosure($renderChildrenClosure44);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper

$output40 .= $viewHelper45->initializeArgumentsAndRender();

$output40 .= ':
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\PrintfViewHelper
$arguments46 = array();
// Rendering Array
$array47 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments48 = array();
$output49 = '';

$output49 .= 'tx_femanager_domain_model_user.';

$output49 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'code', $renderingContext);
$arguments48['key'] = $output49;
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['htmlEscape'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('fieldname');
};
$array47['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure50, $renderingContext);
$arguments46['arguments'] = $array47;
$arguments46['value'] = NULL;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output52 = '';

$output52 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments53 = array();
$arguments53['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'message', $renderingContext);
$arguments53['id'] = NULL;
$arguments53['default'] = NULL;
$arguments53['htmlEscape'] = NULL;
$arguments53['arguments'] = NULL;
$arguments53['extensionName'] = NULL;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments55 = array();
$arguments55['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'message', $renderingContext);
$arguments55['keepQuotes'] = false;
$arguments55['encoding'] = NULL;
$arguments55['doubleEncode'] = true;
$renderChildrenClosure56 = function() {return NULL;};
$value57 = ($arguments55['value'] !== NULL ? $arguments55['value'] : $renderChildrenClosure56());
return (!is_string($value57) ? $value57 : htmlspecialchars($value57, ($arguments55['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments55['encoding'] !== NULL ? $arguments55['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments55['doubleEncode']));
};

$output52 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
										';
return $output52;
};

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\Format\PrintfViewHelper::renderStatic($arguments46, $renderChildrenClosure51, $renderingContext);

$output40 .= '
									';
return $output40;
};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output30 .= '
								';
return $output30;
};
$arguments28['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output58 = '';

$output58 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments59 = array();
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
											If given date format failed
										';
};

$output58 .= '';

$output58 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments61 = array();
$arguments61['key'] = 'validationErrorWrongDateFormat';
$arguments61['id'] = NULL;
$arguments61['default'] = NULL;
$arguments61['htmlEscape'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['extensionName'] = NULL;
$renderChildrenClosure62 = function() {return NULL;};

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output58 .= '
									';
return $output58;
};
$arguments28['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments64 = array();
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
											If a validator check (see TypoScript) failed
										';
};

$output63 .= '';

$output63 .= '
										';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$arguments66 = array();
$arguments66['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'code', $renderingContext);
$renderChildrenClosure67 = function() {return NULL;};
$viewHelper68 = $self->getViewHelper('$viewHelper68', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\UpperViewHelper');
$viewHelper68->setArguments($arguments66);
$viewHelper68->setRenderingContext($renderingContext);
$viewHelper68->setRenderChildrenClosure($renderChildrenClosure67);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper

$output63 .= $viewHelper68->initializeArgumentsAndRender();

$output63 .= ':
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\PrintfViewHelper
$arguments69 = array();
// Rendering Array
$array70 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments71 = array();
$output72 = '';

$output72 .= 'tx_femanager_domain_model_user.';

$output72 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'code', $renderingContext);
$arguments71['key'] = $output72;
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['htmlEscape'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('fieldname');
};
$array70['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure73, $renderingContext);
$arguments69['arguments'] = $array70;
$arguments69['value'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments76 = array();
$arguments76['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'message', $renderingContext);
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['htmlEscape'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments78 = array();
$arguments78['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'message', $renderingContext);
$arguments78['keepQuotes'] = false;
$arguments78['encoding'] = NULL;
$arguments78['doubleEncode'] = true;
$renderChildrenClosure79 = function() {return NULL;};
$value80 = ($arguments78['value'] !== NULL ? $arguments78['value'] : $renderChildrenClosure79());
return (!is_string($value80) ? $value80 : htmlspecialchars($value80, ($arguments78['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments78['encoding'] !== NULL ? $arguments78['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments78['doubleEncode']));
};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
										';
return $output75;
};

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\Format\PrintfViewHelper::renderStatic($arguments69, $renderChildrenClosure74, $renderingContext);

$output63 .= '
									';
return $output63;
};

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
							';
return $output27;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output17 .= '
						';
return $output17;
};
$arguments15['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments82 = array();
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									If any required field in model was empty (normally username or password)
								';
};

$output81 .= '';

$output81 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments84 = array();
$arguments84['key'] = 'validationErrorRequiredModel';
$arguments84['id'] = NULL;
$arguments84['default'] = NULL;
$arguments84['htmlEscape'] = NULL;
$arguments84['arguments'] = NULL;
$arguments84['extensionName'] = NULL;
$renderChildrenClosure85 = function() {return NULL;};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output81 .= '
							';
return $output81;
};
$arguments15['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output86 = '';

$output86 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments87 = array();
// Rendering Boolean node
$arguments87['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'code', $renderingContext), 1307719788);
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';

$output89 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments90 = array();
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments93 = array();
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
											If given date format failed
										';
};

$output92 .= '';

$output92 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments95 = array();
$arguments95['key'] = 'validationErrorWrongDateFormat';
$arguments95['id'] = NULL;
$arguments95['default'] = NULL;
$arguments95['htmlEscape'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['extensionName'] = NULL;
$renderChildrenClosure96 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output92 .= '
									';
return $output92;
};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments97 = array();
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output99 = '';

$output99 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments100 = array();
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
											If a validator check (see TypoScript) failed
										';
};

$output99 .= '';

$output99 .= '
										';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$arguments102 = array();
$arguments102['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'code', $renderingContext);
$renderChildrenClosure103 = function() {return NULL;};
$viewHelper104 = $self->getViewHelper('$viewHelper104', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\UpperViewHelper');
$viewHelper104->setArguments($arguments102);
$viewHelper104->setRenderingContext($renderingContext);
$viewHelper104->setRenderChildrenClosure($renderChildrenClosure103);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper

$output99 .= $viewHelper104->initializeArgumentsAndRender();

$output99 .= ':
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\PrintfViewHelper
$arguments105 = array();
// Rendering Array
$array106 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments107 = array();
$output108 = '';

$output108 .= 'tx_femanager_domain_model_user.';

$output108 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'code', $renderingContext);
$arguments107['key'] = $output108;
$arguments107['id'] = NULL;
$arguments107['default'] = NULL;
$arguments107['htmlEscape'] = NULL;
$arguments107['arguments'] = NULL;
$arguments107['extensionName'] = NULL;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('fieldname');
};
$array106['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure109, $renderingContext);
$arguments105['arguments'] = $array106;
$arguments105['value'] = NULL;
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output111 = '';

$output111 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments112 = array();
$arguments112['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'message', $renderingContext);
$arguments112['id'] = NULL;
$arguments112['default'] = NULL;
$arguments112['htmlEscape'] = NULL;
$arguments112['arguments'] = NULL;
$arguments112['extensionName'] = NULL;
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments114 = array();
$arguments114['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'message', $renderingContext);
$arguments114['keepQuotes'] = false;
$arguments114['encoding'] = NULL;
$arguments114['doubleEncode'] = true;
$renderChildrenClosure115 = function() {return NULL;};
$value116 = ($arguments114['value'] !== NULL ? $arguments114['value'] : $renderChildrenClosure115());
return (!is_string($value116) ? $value116 : htmlspecialchars($value116, ($arguments114['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments114['encoding'] !== NULL ? $arguments114['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments114['doubleEncode']));
};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output111 .= '
										';
return $output111;
};

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\Format\PrintfViewHelper::renderStatic($arguments105, $renderChildrenClosure110, $renderingContext);

$output99 .= '
									';
return $output99;
};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output89 .= '
								';
return $output89;
};
$arguments87['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output117 = '';

$output117 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments118 = array();
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
											If given date format failed
										';
};

$output117 .= '';

$output117 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments120 = array();
$arguments120['key'] = 'validationErrorWrongDateFormat';
$arguments120['id'] = NULL;
$arguments120['default'] = NULL;
$arguments120['htmlEscape'] = NULL;
$arguments120['arguments'] = NULL;
$arguments120['extensionName'] = NULL;
$renderChildrenClosure121 = function() {return NULL;};

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output117 .= '
									';
return $output117;
};
$arguments87['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output122 = '';

$output122 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments123 = array();
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
											If a validator check (see TypoScript) failed
										';
};

$output122 .= '';

$output122 .= '
										';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper
$arguments125 = array();
$arguments125['string'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'code', $renderingContext);
$renderChildrenClosure126 = function() {return NULL;};
$viewHelper127 = $self->getViewHelper('$viewHelper127', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\UpperViewHelper');
$viewHelper127->setArguments($arguments125);
$viewHelper127->setRenderingContext($renderingContext);
$viewHelper127->setRenderChildrenClosure($renderChildrenClosure126);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\UpperViewHelper

$output122 .= $viewHelper127->initializeArgumentsAndRender();

$output122 .= ':
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\PrintfViewHelper
$arguments128 = array();
// Rendering Array
$array129 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments130 = array();
$output131 = '';

$output131 .= 'tx_femanager_domain_model_user.';

$output131 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'code', $renderingContext);
$arguments130['key'] = $output131;
$arguments130['id'] = NULL;
$arguments130['default'] = NULL;
$arguments130['htmlEscape'] = NULL;
$arguments130['arguments'] = NULL;
$arguments130['extensionName'] = NULL;
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('fieldname');
};
$array129['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments130, $renderChildrenClosure132, $renderingContext);
$arguments128['arguments'] = $array129;
$arguments128['value'] = NULL;
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output134 = '';

$output134 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments135 = array();
$arguments135['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'message', $renderingContext);
$arguments135['id'] = NULL;
$arguments135['default'] = NULL;
$arguments135['htmlEscape'] = NULL;
$arguments135['arguments'] = NULL;
$arguments135['extensionName'] = NULL;
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments137 = array();
$arguments137['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('error'), 'message', $renderingContext);
$arguments137['keepQuotes'] = false;
$arguments137['encoding'] = NULL;
$arguments137['doubleEncode'] = true;
$renderChildrenClosure138 = function() {return NULL;};
$value139 = ($arguments137['value'] !== NULL ? $arguments137['value'] : $renderChildrenClosure138());
return (!is_string($value139) ? $value139 : htmlspecialchars($value139, ($arguments137['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments137['encoding'] !== NULL ? $arguments137['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments137['doubleEncode']));
};

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
										';
return $output134;
};

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\Format\PrintfViewHelper::renderStatic($arguments128, $renderChildrenClosure133, $renderingContext);

$output122 .= '
									';
return $output122;
};

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '
							';
return $output86;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
					</li>
				';
return $output14;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
			';
return $output11;
};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
		</ul>
	';
return $output8;
};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
';
return $output5;
};
$viewHelper140 = $self->getViewHelper('$viewHelper140', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper');
$viewHelper140->setArguments($arguments3);
$viewHelper140->setRenderingContext($renderingContext);
$viewHelper140->setRenderChildrenClosure($renderChildrenClosure4);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper

$output0 .= $viewHelper140->initializeArgumentsAndRender();

$output0 .= '
';


return $output0;
}


}
#1507232167    33363     