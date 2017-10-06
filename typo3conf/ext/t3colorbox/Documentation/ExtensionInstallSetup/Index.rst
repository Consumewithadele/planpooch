.. include:: Images.txt

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


Extension Install & Setup
^^^^^^^^^^^^^^^^^^^^^^^^^


Install extension
"""""""""""""""""

Download the extension from the TYPO3 extension repository and enable
it. The extension key is t3colorbox.

There is nothing to configure via the extension manager.


Include the static TypoScript
"""""""""""""""""""""""""""""

Include the plugin's static TypoScript (t3colorbox) into the
TypoScript root template of your site.

|img-8|  *Include the static template after css\_styled\_content*

It is important to include the templates in the correct order. The
t3colorbox template has to be included after css\_styled\_content and
– if you want to use images in the RTE – rtehtmlarea.

If you have to include the css\_styled\_content template for some
reason after the t3colorbox template, you can manually add the
typoscript in your root template:


// for fluid_styled_content
"""""""""""""""""""""""""""
::

	styles.content.textmedia.linkWrap.newWindow = 1
	styles.content.textmedia.linkWrap.lightboxRelAttribute = cbox{field:uid}
	styles.content.textmedia.linkWrap.lightboxEnabled = 1
	styles.content.textmedia.linkWrap.lightboxCssClass = t3colorbox

// css_styled_content
"""""""""""""""""""""""""""

::


	#constants
	styles.content.imgtext.linkWrap.lightboxEnabled = 1
	styles.content.imgtext.linkWrap.lightboxCssClass = t3colorbox

	#setup
	#images in content elements
	tt_content.image.20.1.imageLinkWrap {
	JSwindow = 0
	directImageLink = 1
	linkParams.ATagParams.dataWrap = class="t3colorbox" data-rel="cbox{field:uid}"
	}

	#images in RTE
	lib.parseFunc_RTE.tags.img.postUserFunc.imageLinkWrap {
	JSwindow = 0
	directImageLink = 1
	linkParams.ATagParams.dataWrap = class="t3colorbox" data-rel="cbox{field:uid}"
	}



Click enlarge image in Typo3 RTE
""""""""""""""""""""""""""""""""

If you want to use the colorbox for images in the TYPO3 RTE (rich text
editor), do the following.

#. Go to the extension manager and click on the extension “htmlArea RTE”
   and there check “Enable images in the RTE[enableImages]”. After that
   click on “Update”.

#. Include the static template “Clickenlarge Rendering (rtehtmlarea) “
   into the TypoScript root template.

#. Insert the image in RTE and set on “Click-enlarge” option.

There is no need for an extension like the RTE Lightbox (ext key: rtelightbox).

