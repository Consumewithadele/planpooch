<?php
class FluidCache_AffiliateManager_Search_action_vets_16ee18a2733fa4794add92569d73108b5c287591 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    
<style>


.ui.planpooch-button.button {
    background-image: linear-gradient(-68deg, #DA233D 2%, #812531 99%) !important;
    box-shadow: 0 4px 0 0 #8B2533 !important;
    border-radius: 100px !important;
    text-transform: uppercase !important;
    color: white !important;
    font-size: 13px !important;
    font-weight: 700 !important;
    padding: 10px !important;
    padding: 18px 48px !important;
    max-width: 275px !important;

}

</style> 
 
   
   
      <div class="ui container">
        <div class="products">
          <div class="product-header">Vets</div>
          <div class="location">
            <div class="iu image">
              <img src="fileadmin/plannedpooch/version2/images/vets.png" width="100" class="ui centered results-image image" />
            </div>
           <h3>Your postal code</h3>
            <p>Based on this information we’ll find the best dining places for your pet</p>
            <div class="ui text container">
            
            
            
            
            
            <!--
              <form class="ui form">
                <div class="field">
                  <input type="text" placeholder="enter here">
                </div>
                <a href="#" class="ui planpooch-button button" type="submit">SEARCH</a>
              </form>
              -->
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['name'] = 'searchFields';
$arguments1['action'] = 'searchVets';
$arguments1['class'] = 'ui form';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['controller'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['object'] = NULL;
$arguments1['pageType'] = 0;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['fieldNamePrefix'] = NULL;
$arguments1['actionUri'] = NULL;
$arguments1['objectName'] = NULL;
$arguments1['hiddenFieldClassName'] = NULL;
$arguments1['addQueryStringMethod'] = '';
$arguments1['enctype'] = NULL;
$arguments1['method'] = NULL;
$arguments1['onreset'] = NULL;
$arguments1['onsubmit'] = NULL;
$arguments1['target'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '


                <div class="field">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments4 = array();
$arguments4['property'] = 'postalCode';
$arguments4['name'] = 'postalCode';
$arguments4['placeholder'] = 'enter here';
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['required'] = false;
$arguments4['type'] = 'text';
$arguments4['value'] = NULL;
$arguments4['autofocus'] = NULL;
$arguments4['disabled'] = NULL;
$arguments4['maxlength'] = NULL;
$arguments4['readonly'] = NULL;
$arguments4['size'] = NULL;
$arguments4['pattern'] = NULL;
$arguments4['errorClass'] = 'f3-form-error';
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper6->initializeArgumentsAndRender();

$output3 .= '</div>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments7 = array();
$arguments7['class'] = 'ui planpooch-button button';
$arguments7['value'] = 'SEARCH';
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['name'] = NULL;
$arguments7['property'] = NULL;
$arguments7['disabled'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output3 .= $viewHelper9->initializeArgumentsAndRender();

$output3 .= '


				';
return $output3;
};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper10->setArguments($arguments1);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper10->initializeArgumentsAndRender();

$output0 .= '
              
            </div>
          </div>
        </div>
      </div>';


return $output0;
}


}
#1507163911    6789      