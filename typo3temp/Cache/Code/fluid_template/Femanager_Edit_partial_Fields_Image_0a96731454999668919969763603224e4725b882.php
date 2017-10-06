<?php
class FluidCache_Femanager_Edit_partial_Fields_Image_0a96731454999668919969763603224e4725b882 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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


<div class="femanager_fieldset femanager_image control-group">
	<label class="control-label" for="femanager_field_image">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'tx_femanager_domain_model_user.image';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments3 = array();
// Rendering Boolean node
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Validation\IsRequiredFieldViewHelper
$arguments4 = array();
$arguments4['fieldName'] = 'image';
$renderChildrenClosure5 = function() {return NULL;};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'In2code\Femanager\ViewHelpers\Validation\IsRequiredFieldViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper In2code\Femanager\ViewHelpers\Validation\IsRequiredFieldViewHelper
$arguments3['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($viewHelper6->initializeArgumentsAndRender());
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<span>*</span>
		';
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure7, $renderingContext);

$output0 .= '
	</label>
	<div class="controls">
		<div id="femanager_field_fine-uploader">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments8 = array();
$arguments8['key'] = 'field_image_fineuploader';
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['htmlEscape'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$renderChildrenClosure9 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
		</div>
		<div id="femanager_field_preview-image">
			<ul class="qq-upload-list">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments10 = array();
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Form\GetImagesViewHelper
$arguments11 = array();
$arguments11['property'] = 'image';
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['name'] = NULL;
$arguments11['value'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'In2code\Femanager\ViewHelpers\Form\GetImagesViewHelper');
$viewHelper13->setArguments($arguments11);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper In2code\Femanager\ViewHelpers\Form\GetImagesViewHelper
$arguments10['each'] = $viewHelper13->initializeArgumentsAndRender();
$arguments10['as'] = 'image';
$arguments10['key'] = '';
$arguments10['reverse'] = false;
$arguments10['iteration'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output15 = '';

$output15 .= '
					<li class="alert alert-success">
						<span class="qq-upload-file">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = $currentVariableContainer->getOrNull('image');
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = NULL;
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() {return NULL;};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output15 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments16['encoding'] !== NULL ? $arguments16['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments16['doubleEncode']));

$output15 .= '</span>
						<span class="qq-upload-size">';
// Rendering ViewHelper In2code\Femanager\ViewHelpers\Misc\FileSizeViewHelper
$arguments19 = array();
$output20 = '';

$output20 .= $currentVariableContainer->getOrNull('uploadFolder');

$output20 .= '/';

$output20 .= $currentVariableContainer->getOrNull('image');
$arguments19['path'] = $output20;
$arguments19['unit'] = 'k';
$renderChildrenClosure21 = function() {return NULL;};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'In2code\Femanager\ViewHelpers\Misc\FileSizeViewHelper');
$viewHelper22->setArguments($arguments19);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper In2code\Femanager\ViewHelpers\Misc\FileSizeViewHelper

$output15 .= $viewHelper22->initializeArgumentsAndRender();

$output15 .= 'kB</span>
						<a href="#" class="qq-upload-delete icon-trash">Delete</a>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments23 = array();
$output24 = '';

$output24 .= $currentVariableContainer->getOrNull('uploadFolder');

$output24 .= '/';

$output24 .= $currentVariableContainer->getOrNull('image');
$arguments23['src'] = $output24;
$output25 = '';

$output25 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'firstName', $renderingContext);

$output25 .= ' ';

$output25 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'lastName', $renderingContext);
$arguments23['alt'] = $output25;
$arguments23['width'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'misc.renderImageWidth', $renderingContext);
$arguments23['class'] = 'fileupload_image';
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['height'] = NULL;
$arguments23['minWidth'] = NULL;
$arguments23['minHeight'] = NULL;
$arguments23['maxWidth'] = NULL;
$arguments23['maxHeight'] = NULL;
$arguments23['treatIdAsReference'] = false;
$arguments23['image'] = NULL;
$arguments23['crop'] = NULL;
$arguments23['absolute'] = false;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['ismap'] = NULL;
$arguments23['longdesc'] = NULL;
$arguments23['usemap'] = NULL;
$renderChildrenClosure26 = function() {return NULL;};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper27->setArguments($arguments23);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output15 .= $viewHelper27->initializeArgumentsAndRender();

$output15 .= '
					</li>
				';
return $output15;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments10, $renderChildrenClosure14, $renderingContext);

$output0 .= '
			</ul>
		</div>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments28 = array();
$arguments28['id'] = 'femanager_field_image';
$arguments28['property'] = 'image';
$arguments28['class'] = 'fine_uploader_image';
$arguments28['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('user'), 'image', $renderingContext);
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['name'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$renderChildrenClosure29 = function() {return NULL;};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper30->setArguments($arguments28);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output0 .= $viewHelper30->initializeArgumentsAndRender();

$output0 .= '
	</div>
	<div class="hidden" style="display: none;">
		<div class="image_container_template">
			<div class="qq-uploader">
				<pre class="qq-upload-drop-area">
					<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments31 = array();
$arguments31['key'] = 'field_image_drag';
$arguments31['id'] = NULL;
$arguments31['default'] = NULL;
$arguments31['htmlEscape'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['extensionName'] = NULL;
$renderChildrenClosure32 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output0 .= '</span>
				</pre>
				<div class="qq-upload-button btn btn-block btn-success">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments33 = array();
$arguments33['key'] = 'field_image_upload';
$arguments33['id'] = NULL;
$arguments33['default'] = NULL;
$arguments33['htmlEscape'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['extensionName'] = NULL;
$renderChildrenClosure34 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output0 .= '
				</div>
				<span class="qq-drop-processing">
					<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments35 = array();
$arguments35['key'] = 'field_image_drag_processing';
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['htmlEscape'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$renderChildrenClosure36 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output0 .= '</span>
					<span class="qq-drop-processing-spinner"></span>
				</span>
				<ul class="qq-upload-list"></ul>
			</div>
		</div>
		<div class="image_container_filetemplate">
			<li>
				<div class="qq-progress-bar"></div>
				<span class="qq-upload-spinner"></span>
				<span class="qq-upload-finished"></span>
				<span class="qq-upload-file"></span>
				<span class="qq-upload-size"></span>
				<a class="qq-upload-cancel" href="#">Cancel</a>
				<a class="qq-upload-retry" href="#">Retry</a>
				<a class="qq-upload-delete" href="#">Del</a>
				<span class="qq-upload-status-text">Status</span>
			</li>
		</div>
	</div>
</div>
';


return $output0;
}


}
#1507232167    12690     