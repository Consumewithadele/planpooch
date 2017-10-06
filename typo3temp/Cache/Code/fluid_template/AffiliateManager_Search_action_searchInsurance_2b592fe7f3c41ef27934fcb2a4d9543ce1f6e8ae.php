<?php
class FluidCache_AffiliateManager_Search_action_searchInsurance_2b592fe7f3c41ef27934fcb2a4d9543ce1f6e8ae extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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





<div class="ui container">
        <div class="products">
          <div class="product-header">Insurances</div>
          
          <div class="insurance-box" style="margin-bottom:0px;">
            <div class="ui container">
              <div class="ui centered stackable grid">
                <div class=" six wide middle aligned column">
                  <div class="ui image">
                    <img src="fileadmin/plannedpooch/version2/images/red-check.png" width="40" class="ui image" />
                  </div>
                  <p class="choice">Your pets details</p>
                </div> <!-- column -->
                <div class="thwo wide middle aligned column">
                  <img src="fileadmin/plannedpooch/version2/images/angle-right.png" width="27" class="ui offer-angle centered image" />
                </div>
                <div class="six wide middle aligned column">
                  <div class="ui image">
                    <img src="fileadmin/plannedpooch/version2/images/two.png" width="40" class="ui image" />
                  </div>
                  <p class="choice">Insurance options</p>
                </div> <!-- column -->
              </div> <!-- grid -->
              <img src="fileadmin/plannedpooch/version2/images/white-dog-logo.png" width="60" class="ui centered white-dog-logo image" />
              
              <h3>Insurance options</h3>
              
                <p class="insurance-header">These are your best prices that meet the requirements for you fur baby</p>
              </div>
            
            <!--<div class="reset-filter">
              <div class="ui stackable grid">
                <div class="fourteen wide left aligned column">
                  <span>Sort by:</span>
                  <div class="ui checkbox">
                    <input type="checkbox" name="example">
                    <label class="color-label">Annual Price</label>
                  </div>
                  <div class="ui second-checkbox checkbox">
                    <input type="checkbox" name="example">
                    <label>Monthly Price</label>
                  </div></div>
                <div class="two wide column">
                  <a href="#" class="reset-button">Reset filters</a>
                </div>
              </div>
            </div>-->
            </div> <!-- insurance box -->
          
            <div class="insurrance-table">
            <div class="ui color-grid container">
                  <table class="ui celled table">
                  <thead>
                    <tr>
                      <th>Provider</th>
                      <th class="red-column">Premium</th>
                      <th>Type of Cover</th>
                      <th>Vet Fees</th>
                      <th>Death by</th>
                      <th>Lost or stolen</th>
                      <th>Vet Fee Excess</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments1 = array();
$arguments1['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'results', $renderingContext);
$arguments1['as'] = 'result';
$arguments1['iteration'] = 'iterator';
$arguments1['key'] = '';
$arguments1['reverse'] = false;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
                    <tr>
                      <td><img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('result'), 'imageurl', $renderingContext);
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = NULL;
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() {return NULL;};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output3 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments4['encoding'] !== NULL ? $arguments4['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments4['doubleEncode']));

$output3 .= '" width="80" class="ui centered image" /> </td>
                      <td class="red-column"><p>Monthly Price ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('result'), 'inscycle', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = NULL;
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() {return NULL;};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output3 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments7['encoding'] !== NULL ? $arguments7['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments7['doubleEncode']));

$output3 .= ' x <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('result'), 'currency', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output3 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('result'), 'inscost', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = NULL;
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() {return NULL;};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output3 .= (!is_string($value15) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments13['encoding'] !== NULL ? $arguments13['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments13['doubleEncode']));

$output3 .= '</span> Total ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('result'), 'currency', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = NULL;
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() {return NULL;};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output3 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments16['encoding'] !== NULL ? $arguments16['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments16['doubleEncode']));
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\GetViewHelper
$arguments19 = array();
$output20 = '';

$output20 .= 'data.totals.';

$output20 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext);
$arguments19['name'] = $output20;
// Rendering Boolean node
$arguments19['useRawKeys'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$renderChildrenClosure21 = function() {return NULL;};

$output3 .= FluidTYPO3\Vhs\ViewHelpers\Variable\GetViewHelper::renderStatic($arguments19, $renderChildrenClosure21, $renderingContext);

$output3 .= '</p></td>
                      <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments22 = array();
$arguments22['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('result'), 'insurancecoverage', $renderingContext);
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output3 .= '</td>
                      <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments24 = array();
$arguments24['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('result'), 'insurancefees', $renderingContext);
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output3 .= '</td>
                      <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments26 = array();
$arguments26['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('result'), 'insurancedeath', $renderingContext);
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output3 .= '</td>
                      <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments28 = array();
$arguments28['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('result'), 'insurancelost', $renderingContext);
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output3 .= '</td>
                      <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments30 = array();
$arguments30['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('result'), 'currency', $renderingContext);
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = NULL;
$arguments30['doubleEncode'] = true;
$renderChildrenClosure31 = function() {return NULL;};
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());

$output3 .= (!is_string($value32) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments30['encoding'] !== NULL ? $arguments30['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments30['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('result'), 'insurancefeesexcess', $renderingContext);
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = NULL;
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() {return NULL;};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());

$output3 .= (!is_string($value35) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments33['encoding'] !== NULL ? $arguments33['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments33['doubleEncode']));

$output3 .= '</td>
                      <td><a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments36 = array();
$arguments36['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('result'), 'url', $renderingContext);
$arguments36['keepQuotes'] = false;
$arguments36['encoding'] = NULL;
$arguments36['doubleEncode'] = true;
$renderChildrenClosure37 = function() {return NULL;};
$value38 = ($arguments36['value'] !== NULL ? $arguments36['value'] : $renderChildrenClosure37());

$output3 .= (!is_string($value38) ? $value38 : htmlspecialchars($value38, ($arguments36['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments36['encoding'] !== NULL ? $arguments36['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments36['doubleEncode']));

$output3 .= '" class="ui planpooch-button button">Details</a></td>
                    </tr>
                    
                  ';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
                    <!--<tr>
                      <td><img src="fileadmin/plannedpooch/version2/images/e-i.png" width="80" class="ui centered image" /> </td>
                      <td class="red-column"><p>Monthly Price 12 x <span>£3.27</span> Total £39.24</p></td>
                      <td><p>Accident Only</p></td>
                      <td><p>£3,000 per qualifying accident up to a maximum of £12,500</p></td>
                      <td><p>Accident: — Illness: —</p></td>
                      <td>—</td>
                      <td><p>£95</p></td>
                      <td><a href="#" class="ui planpooch-button button">Details</a></td>
                    </tr>
                    <tr>
                      <td><img src="fileadmin/plannedpooch/version2/images/e-i.png" width="80" class="ui centered image" /> </td>
                      <td class="red-column"><p>Monthly Price 12 x <span>£3.27</span> Total £39.24</p></td>
                      <td><p>Accident Only</p></td>
                      <td><p>£3,000 per qualifying accident up to a maximum of £12,500</p></td>
                      <td><p>Accident: — Illness: —</p></td>
                      <td>—</td>
                      <td><p>£95</p></td>
                      <td><a href="#" class="ui planpooch-button button">Details</a></td>
                    </tr>
                    <tr>
                      <td><img src="fileadmin/plannedpooch/version2/images/e-i.png" width="80" class="ui centered image" /> </td>
                      <td class="red-column"><p>Monthly Price 12 x <span>£3.27</span> Total £39.24</p></td>
                      <td><p>Accident Only</p></td>
                      <td><p>£3,000 per qualifying accident up to a maximum of £12,500</p></td>
                      <td><p>Accident: — Illness: —</p></td>
                      <td>—</td>
                      <td><p>£95</p></td>
                      <td><a href="#" class="ui planpooch-button button">Details</a></td>
                    </tr>
                    <tr>
                      <td><img src="fileadmin/plannedpooch/version2/images/e-i.png" width="80" class="ui centered image" /> </td>
                      <td class="red-column"><p>Monthly Price 12 x <span>£3.27</span> Total £39.24</p></td>
                      <td><p>Accident Only</p></td>
                      <td><p>£3,000 per qualifying accident up to a maximum of £12,500</p></td>
                      <td><p>Accident: — Illness: —</p></td>
                      <td>—</td>
                      <td><p>£95</p></td>
                      <td><a href="#" class="ui planpooch-button button">Details</a></td>
                    </tr>
                    <tr>
                      <td><img src="fileadmin/plannedpooch/version2/images/e-i.png" width="80" class="ui centered image" /> </td>
                      <td class="red-column"><p>Monthly Price 12 x <span>£3.27</span> Total £39.24</p></td>
                      <td><p>Accident Only</p></td>
                      <td><p>£3,000 per qualifying accident up to a maximum of £12,500</p></td>
                      <td><p>Accident: — Illness: —</p></td>
                      <td>—</td>
                      <td><p>£95</p></td>
                      <td><a href="#" class="ui planpooch-button button">Details</a></td>
                    </tr>-->
                  </tbody>
                </table>
              </div>
            </div> <!--  insurrance-table  -->
            
            </div></div>
';


return $output0;
}


}
#1506705356    18853     