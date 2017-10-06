<?php
class FluidCache_AffiliateManager_Search_action_insurance_0de52bf3b954c0ef96defab0d242d26c0f96b3ab extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

.size .image {
	-webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
    filter: grayscale(100%);
}

.size .image.select {
	-webkit-filter: grayscale(0%) !important; /* Safari 6.0 - 9.0 */
    filter: grayscale(0%) !important;
}

</style> 


<script>


$(document).ready(function(){
	
	$(\'.size input\').change(function(){
		//alert(\'++++\');
		$(\'.size .image\').removeClass(\'select\');
		$(this).parent(\'.size\').find(\'.image\').addClass(\'select\');
	});
	
	
});

</script>
 
 
 
 <div class="ui container">
        <div class="products">
          <div class="product-header">Insurances</div>
          
          <div class="insurance-box">
            <div class="ui container" id="first-content-box">  <!-- display this one first -->
              <div class="ui centered stackable grid">
                <div class=" six wide middle aligned column">
                  <div class="ui image">
                    <img src="fileadmin/plannedpooch/version2/images/one.png" width="40" class="ui image" />
                  </div>
                  <p class="choice">Your pets details</p>
                </div> <!-- column -->
                <div class="thwo wide middle aligned column">
                  <img src="fileadmin/plannedpooch/version2/images/angle-right.png" width="27" class="ui centered offer-angle image" />
                </div>
                <div class="six wide middle aligned column">
                  <div class="ui image">
                    <img src="fileadmin/plannedpooch/version2/images/gray-two.png" width="40" class="ui image" />
                  </div>
                  <p class="choice">Insurance options</p>
                </div> <!-- column -->
              </div> <!-- grid -->
              <img src="fileadmin/plannedpooch/version2/images/white-dog-logo.png" width="60" class="ui centered white-dog-logo image" />
              
              <h3>Tell us a bit about your pet</h3>
              
              <p class="fill">Fill in some details about your pet so we can give you the best offers</p>
              
             <div class="ui text container">
             
             
             ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['name'] = 'insurance';
$arguments1['action'] = 'searchInsurance';
$arguments1['class'] = 'ui form';
$arguments1['object'] = $currentVariableContainer->getOrNull('insurance');
$arguments1['id'] = 'search-form';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['controller'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
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
               <!--<form class="ui form">-->
               
               
               
                  <div class="ui stackable grid">
                    <div class="five wide right-aligned column">
                      <div class="part">
                      Pet name
                      </div>
                    </div>
                    <div class="eleven wide column">
                      <div class="input">
                      
                      
                         <!--<input type="name" placeholder="enter here" class="first-input">-->
                         
                         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments4 = array();
$arguments4['property'] = 'petname';
$arguments4['name'] = 'petname';
$arguments4['placeholder'] = 'enter here';
$arguments4['class'] = 'first-input';
$arguments4['type'] = 'name';
// Rendering Boolean node
$arguments4['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['value'] = NULL;
$arguments4['autofocus'] = NULL;
$arguments4['disabled'] = NULL;
$arguments4['maxlength'] = NULL;
$arguments4['readonly'] = NULL;
$arguments4['size'] = NULL;
$arguments4['pattern'] = NULL;
$arguments4['errorClass'] = 'f3-form-error';
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

$output3 .= '
                      </div>
                    </div>
                  </div>

                  <div class="field check-box">
                    <div class="ui stackable grid">
                        <div class="five wide right-aligned column">
                         <div class="part">
                            Is your pet male or female?
                          </div>
                        </div>
                        <div class="eleven wide column">
                          <div class="field check-box">
                            <div class="ui radio checkbox">
                              <!--<input type="radio" name="gender" tabindex="0" class="hidden">-->
                              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper
$arguments7 = array();
$arguments7['property'] = 'gender';
$arguments7['value'] = 'male';
$arguments7['tabindex'] = '0';
$arguments7['class'] = 'hidden';
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['checked'] = NULL;
$arguments7['name'] = NULL;
$arguments7['disabled'] = NULL;
$arguments7['errorClass'] = 'f3-form-error';
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['onclick'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper

$output3 .= $viewHelper9->initializeArgumentsAndRender();

$output3 .= '
                              <label>Male</label>
                            </div>
                          <div class="ui radio second-checkbox checkbox">
                            <!--<input type="radio" name="gender" tabindex="0" class="hidden">-->
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper
$arguments10 = array();
$arguments10['property'] = 'gender';
$arguments10['value'] = 'female';
$arguments10['tabindex'] = '0';
$arguments10['class'] = 'hidden';
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['checked'] = NULL;
$arguments10['name'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['errorClass'] = 'f3-form-error';
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['onclick'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper

$output3 .= $viewHelper12->initializeArgumentsAndRender();

$output3 .= '
                            <label>Female</label>
                            
                          </div>
                        </div>
                      </div>
                    </div> <!-- grid -->
                  </div> <!-- check-box -->

                  <div class="ui stackable grid">
                    <div class="five wide right-aligned column">
                      <div class="part">How old is your pet?  </div>
                    </div>
                    <div class="eleven wide column">
                      <div class="input">
                      	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments13 = array();
$arguments13['property'] = 'petyears';
$arguments13['name'] = 'petyears';
$arguments13['placeholder'] = 'years';
$arguments13['class'] = 'first-input';
$arguments13['type'] = 'years';
// Rendering Boolean node
$arguments13['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['value'] = NULL;
$arguments13['autofocus'] = NULL;
$arguments13['disabled'] = NULL;
$arguments13['maxlength'] = NULL;
$arguments13['readonly'] = NULL;
$arguments13['size'] = NULL;
$arguments13['pattern'] = NULL;
$arguments13['errorClass'] = 'f3-form-error';
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper15->initializeArgumentsAndRender();

$output3 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments16 = array();
$arguments16['property'] = 'petmonths';
$arguments16['name'] = 'petmonths';
$arguments16['placeholder'] = 'months';
$arguments16['class'] = 'first-input';
$arguments16['type'] = 'months';
// Rendering Boolean node
$arguments16['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['value'] = NULL;
$arguments16['autofocus'] = NULL;
$arguments16['disabled'] = NULL;
$arguments16['maxlength'] = NULL;
$arguments16['readonly'] = NULL;
$arguments16['size'] = NULL;
$arguments16['pattern'] = NULL;
$arguments16['errorClass'] = 'f3-form-error';
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$renderChildrenClosure17 = function() {return NULL;};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper18->initializeArgumentsAndRender();

$output3 .= '
                      </div>
                    </div>
                  </div>
                 
                 <div class="ui stackable size-grid grid">
                   <div class="five wide right-aligned column">
                     <div class="part">What size is It?  </div>
                   </div>
                   <div class="eleven wide column">
                     <div class="ui equal width stackable grid">
                       <div class="column">
                         <div class="ui size image">
                          <img src="fileadmin/plannedpooch/version2/images/ic2.png" width="85" class="ui image" />
                           
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper
$arguments19 = array();
$arguments19['property'] = 'petsize';
$arguments19['value'] = 'small';
$arguments19['tabindex'] = '0';
$arguments19['class'] = 'hidden';
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['checked'] = NULL;
$arguments19['name'] = NULL;
$arguments19['disabled'] = NULL;
$arguments19['errorClass'] = 'f3-form-error';
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['onclick'] = NULL;
$renderChildrenClosure20 = function() {return NULL;};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper');
$viewHelper21->setArguments($arguments19);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper

$output3 .= $viewHelper21->initializeArgumentsAndRender();

$output3 .= '                           
                           <p>
                             Small
                             <span class="size-span">(Up To 10kg)</span>
                           </p>
                         </div> <!-- image -->
                       </div>
                       <div class="column">
                         <div class="ui size image">
                          <img src="fileadmin/plannedpooch/version2/images/ic3.png" width="85" class="ui image" />
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper
$arguments22 = array();
$arguments22['property'] = 'petsize';
$arguments22['value'] = 'medium';
$arguments22['tabindex'] = '0';
$arguments22['class'] = 'hidden';
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['checked'] = NULL;
$arguments22['name'] = NULL;
$arguments22['disabled'] = NULL;
$arguments22['errorClass'] = 'f3-form-error';
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['onclick'] = NULL;
$renderChildrenClosure23 = function() {return NULL;};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper

$output3 .= $viewHelper24->initializeArgumentsAndRender();

$output3 .= '                             
                           <p>
                             Medium
                             <span class="size-span">(Up To 10kg)</span>
                           </p>
                         </div> <!-- image -->
                       </div>
                       <div class="column">
                         <div class="ui size image">
                          <img src="fileadmin/plannedpooch/version2/images/ic1.png" width="85" class="ui image" />
                           
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper
$arguments25 = array();
$arguments25['property'] = 'petsize';
$arguments25['value'] = 'large';
$arguments25['tabindex'] = '0';
$arguments25['class'] = 'hidden';
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['checked'] = NULL;
$arguments25['name'] = NULL;
$arguments25['disabled'] = NULL;
$arguments25['errorClass'] = 'f3-form-error';
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['onclick'] = NULL;
$renderChildrenClosure26 = function() {return NULL;};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper');
$viewHelper27->setArguments($arguments25);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper

$output3 .= $viewHelper27->initializeArgumentsAndRender();

$output3 .= '                                                        
<p>
                             Large
                             <span class="size-span">(Up To 10kg)</span>
                           </p>
                         </div> <!-- image -->
                       </div>
                       <div class="column"></div>
                       <div class="column"></div>
                     </div> <!-- grid -->
                   </div>
                 </div> <!-- grid -->
                 
                  <div class="ui stackable grid">
                    <div class="five wide right-aligned column">
                     <div class="part">
                       Is It a crossbreed?  
                      </div>
                    </div>
                    <div class="eleven wide column">
                      <div class="field check-box">
                        <div class="ui radio checkbox">
                          ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper
$arguments28 = array();
$arguments28['property'] = 'crossbreed';
$arguments28['value'] = '1';
$arguments28['tabindex'] = '0';
$arguments28['class'] = 'hidden';
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['checked'] = NULL;
$arguments28['name'] = NULL;
$arguments28['disabled'] = NULL;
$arguments28['errorClass'] = 'f3-form-error';
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['onclick'] = NULL;
$renderChildrenClosure29 = function() {return NULL;};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper');
$viewHelper30->setArguments($arguments28);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper

$output3 .= $viewHelper30->initializeArgumentsAndRender();

$output3 .= '  
                          <label>Yes</label>
                        </div>
                      <div class="ui radio second-checkbox checkbox">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper
$arguments31 = array();
$arguments31['property'] = 'crossbreed';
$arguments31['value'] = '0';
$arguments31['tabindex'] = '0';
$arguments31['class'] = 'hidden';
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['checked'] = NULL;
$arguments31['name'] = NULL;
$arguments31['disabled'] = NULL;
$arguments31['errorClass'] = 'f3-form-error';
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['onclick'] = NULL;
$renderChildrenClosure32 = function() {return NULL;};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper');
$viewHelper33->setArguments($arguments31);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper

$output3 .= $viewHelper33->initializeArgumentsAndRender();

$output3 .= '  
                        <label>No</label>
                      </div>
                    </div>
                  </div>
                </div> <!-- grid -->
                 
                    <div class="ui stackable grid">
                      <div class="five wide right-aligned column">
                       <div class="part">
                         Has It been chipped?  
                        </div>
                      </div>
                      <div class="eleven wide column">
                        <div class="field check-box">
                          <div class="ui radio checkbox">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper
$arguments34 = array();
$arguments34['property'] = 'chipped';
$arguments34['value'] = '1';
$arguments34['tabindex'] = '0';
$arguments34['class'] = 'hidden';
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['checked'] = NULL;
$arguments34['name'] = NULL;
$arguments34['disabled'] = NULL;
$arguments34['errorClass'] = 'f3-form-error';
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['onclick'] = NULL;
$renderChildrenClosure35 = function() {return NULL;};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper');
$viewHelper36->setArguments($arguments34);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper

$output3 .= $viewHelper36->initializeArgumentsAndRender();

$output3 .= '  
                            <label>Yes</label>
                          </div>
                        <div class="ui radio second-checkbox checkbox">
                          ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper
$arguments37 = array();
$arguments37['property'] = 'chipped';
$arguments37['value'] = '0';
$arguments37['tabindex'] = '0';
$arguments37['class'] = 'hidden';
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['checked'] = NULL;
$arguments37['name'] = NULL;
$arguments37['disabled'] = NULL;
$arguments37['errorClass'] = 'f3-form-error';
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['onclick'] = NULL;
$renderChildrenClosure38 = function() {return NULL;};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper');
$viewHelper39->setArguments($arguments37);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper

$output3 .= $viewHelper39->initializeArgumentsAndRender();

$output3 .= '  
                          <label>No</label>
                        </div>
                      </div>
                    </div>
                  </div> <!-- grid -->
                 
                  <div class="ui stackable grid">
                    <div class="five wide right-aligned column">
                      <div class="part">
                      How much did you pay or donate for It?
                      </div>
                    </div>
                    <div class="eleven wide column">
                      <div class="input">
                        <div class="ui left icon input">
                         <i class="pound left floated icon"></i>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments40 = array();
$arguments40['property'] = 'cost';
$arguments40['type'] = 'name';
// Rendering Boolean node
$arguments40['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['name'] = NULL;
$arguments40['value'] = NULL;
$arguments40['autofocus'] = NULL;
$arguments40['disabled'] = NULL;
$arguments40['maxlength'] = NULL;
$arguments40['readonly'] = NULL;
$arguments40['size'] = NULL;
$arguments40['placeholder'] = NULL;
$arguments40['pattern'] = NULL;
$arguments40['errorClass'] = 'f3-form-error';
$arguments40['class'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$renderChildrenClosure41 = function() {return NULL;};
$viewHelper42 = $self->getViewHelper('$viewHelper42', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper42->setArguments($arguments40);
$viewHelper42->setRenderingContext($renderingContext);
$viewHelper42->setRenderChildrenClosure($renderChildrenClosure41);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper42->initializeArgumentsAndRender();

$output3 .= '
                       </div>
                      </div>

                    </div>
                  </div>
                 
                 <div class="ui stackable grid">
                   <div class="five wide column"></div>
                   <div class="eleven wide column">
                     <div class="input">
                      <div class="ui  checkbox">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$arguments43 = array();
$arguments43['property'] = 'free';
$arguments43['value'] = '1';
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['checked'] = NULL;
$arguments43['multiple'] = false;
$arguments43['name'] = NULL;
$arguments43['disabled'] = NULL;
$arguments43['errorClass'] = 'f3-form-error';
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$renderChildrenClosure44 = function() {return NULL;};
$viewHelper45 = $self->getViewHelper('$viewHelper45', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper');
$viewHelper45->setArguments($arguments43);
$viewHelper45->setRenderingContext($renderingContext);
$viewHelper45->setRenderChildrenClosure($renderChildrenClosure44);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper

$output3 .= $viewHelper45->initializeArgumentsAndRender();

$output3 .= ' 
                        <label>I didn‘t pay anything</label>
                      </div>
                     </div>

                   </div>
                 </div>

                    <div class="ui stackable grid">
                      <div class="five wide right-aligned column">
                       <div class="part">
                        Has It been neutered or spayed?
                        </div>
                      </div>
                      <div class="eleven wide column">
                        <div class="field check-box">
                          <div class="ui radio checkbox">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper
$arguments46 = array();
$arguments46['property'] = 'neutered';
$arguments46['value'] = '1';
$arguments46['tabindex'] = '0';
$arguments46['class'] = 'hidden';
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['checked'] = NULL;
$arguments46['name'] = NULL;
$arguments46['disabled'] = NULL;
$arguments46['errorClass'] = 'f3-form-error';
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['onclick'] = NULL;
$renderChildrenClosure47 = function() {return NULL;};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper');
$viewHelper48->setArguments($arguments46);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper

$output3 .= $viewHelper48->initializeArgumentsAndRender();

$output3 .= '  
                            <label>Yes</label>
                          </div>
                        <div class="ui radio second-checkbox checkbox">
                          ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper
$arguments49 = array();
$arguments49['property'] = 'neutered';
$arguments49['value'] = '0';
$arguments49['tabindex'] = '0';
$arguments49['class'] = 'hidden';
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['checked'] = NULL;
$arguments49['name'] = NULL;
$arguments49['disabled'] = NULL;
$arguments49['errorClass'] = 'f3-form-error';
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['onclick'] = NULL;
$renderChildrenClosure50 = function() {return NULL;};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper');
$viewHelper51->setArguments($arguments49);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper

$output3 .= $viewHelper51->initializeArgumentsAndRender();

$output3 .= '  
                          <label>No</label>
                        </div>
                      </div>
                    </div>
                  </div> <!-- grid -->
               <!-- </form>--> <!-- form -->
               
               
               ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments52 = array();
$arguments52['id'] = 'submit-action';
$arguments52['class'] = 'ui planpooch-button button';
$arguments52['value'] = 'Done, Let\'s see the offers';
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['name'] = NULL;
$arguments52['property'] = NULL;
$arguments52['disabled'] = NULL;
$arguments52['dir'] = NULL;
$arguments52['lang'] = NULL;
$arguments52['style'] = NULL;
$arguments52['title'] = NULL;
$arguments52['accesskey'] = NULL;
$arguments52['tabindex'] = NULL;
$arguments52['onclick'] = NULL;
$renderChildrenClosure53 = function() {return NULL;};
$viewHelper54 = $self->getViewHelper('$viewHelper54', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper54->setArguments($arguments52);
$viewHelper54->setRenderingContext($renderingContext);
$viewHelper54->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output3 .= $viewHelper54->initializeArgumentsAndRender();

$output3 .= '
               <!--<div class="ui planpooch-button button">
                 Done, Let\'s see the offers
               </div>-->
                ';
return $output3;
};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper55->setArguments($arguments1);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper55->initializeArgumentsAndRender();

$output0 .= '



            </div> <!-- container -->
</div> <!-- first content box end-->


        <div class="ui container" id="second-content-box" style="display:none;">
          <div class="ui centered stackable grid">
            <div class=" six wide middle aligned column">
              <div class="ui image">
                <img src="fileadmin/plannedpooch/version2/images/one.png" width="40" class="ui image" />
              </div>
              <p class="choice">Your pets details</p>
            </div> <!-- column -->
            <div class="thwo wide middle aligned column">
              <img src="fileadmin/plannedpooch/version2/images/angle-right.png" width="27" class="ui centered offer-angle image" />
            </div>
            <div class="six wide middle aligned column">
              <div class="ui image">
                <img src="fileadmin/plannedpooch/version2/images/gray-two.png" width="40" class="ui image" />
              </div>
              <p class="choice">Insurance options</p>
            </div> <!-- column -->
          </div> <!-- grid -->
          <div class="search-wrapper">
            <img src="fileadmin/plannedpooch/version2/images/search-loader2.gif" width="100" class="ui centered image" />
          </div>
          <h3>Searching for your prices</h3>
          
          <p class="fill">We’ll have it ready for you in a moment</p>
        </div> <!-- container -->

</div>
</div>
</div>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          
          
<script type="text/javascript"> 
jQuery( document ).ready(function($) {


    var $input = $(\'#refresh\');



    		$("#first-content-box").show();
			$("#second-content-box").hide();

	$("#search-form").submit(function (e) {
    		e.preventDefault();
    		var form = this;

    		$("#first-content-box").hide();
    		$("#second-content-box").fadeIn("slow");
    		setTimeout(function () {
        		form.submit();
    		}, 6000); // in milliseconds
		});
    		
    		
	});
	
	//forces page to reload on back button
window.onpageshow = function(event) ';

$output0 .= '{
if (event.persisted) {
    window.location.reload() 
}
}';

$output0 .= ';
	
</script>

          
          
          
          
          ';


return $output0;
}


}
#1507232301    36904     