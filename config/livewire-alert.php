<?php

/*
 * For more details about the configuration, see:
 * https://sweetalert2.github.io/#configuration
 */
return [
    'alert' => [
        'position' => 'bottom-end',
        'timer' => 5000,
        'toast' => true,
        'text' => null,
        'showCancelButton' => false,
        'confirmButtonColor' => '#6875f5',
        'showConfirmButton' => false
    ],
    'confirm' => [
        'icon' => 'warning',
        'position' => 'center',
        'toast' => false,
        'timer' => null,
        'showConfirmButton' => true,
        'showCancelButton' => true,
        'cancelButtonText' => 'No',
        'confirmButtonColor' => '#6875f5',
        'cancelButtonColor' => '#d33'
    ]
];


/*
CONFIGURATION PARAMS
Here are the keys that you can use if you pass an object into sweetAlert2:

Argument
(Default value)	Description
title
''	The title of the popup, as HTML.
titleText
''	The title of the popup, as text. Useful to avoid HTML injection.
html
''	A HTML description for the popup.
If text and html parameters are provided in the same time,html will be used.
[Security] SweetAlert2 does NOT sanitize this parameter. It is the developer's responsibility to escape any user input when using the html option, so XSS attacks would be prevented.
text
''	A description for the popup.
If text and html parameters are provided in the same time,html will be used.
icon
undefined	The icon of the popup. SweetAlert2 comes with 5 built-in icon which will show a corresponding icon animation: warning, error, success, info, and question. It can either be put in the array under the key "icon" or passed as the third parameter of the function.
iconColor
undefined	Use this to change the color of the icon.
iconHtml
undefined	The custom HTML content for an icon.
animation
true	If set to false, the popup animation will be disabled
showClass
{
  popup: 'swal2-show',
  backdrop: 'swal2-backdrop-show',
  icon: 'swal2-icon-show'
}
CSS classes for animations when showing a popup (fade in)
hideClass
{
  popup: 'swal2-hide',
  backdrop: 'swal2-backdrop-hide',
  icon: 'swal2-icon-hide'
}
CSS classes for animations when hiding a popup (fade out)
footer
''	The footer of the popup. Can be either plain text or HTML.
backdrop
true	Whether or not SweetAlert2 should show a full screen click-to-dismiss backdrop. Can be either a boolean or a string which will be assigned to the CSS background property.
toast
false	Whether or not an alert should be treated as a toast notification. This option is normally coupled with theposition parameter and a timer. Toasts are NEVER autofocused.
target
'body'	The container element for adding popup into.
input
undefined	Input field type, can be text, email, password, number, tel, range, textarea, search, url, select, radio, checkbox, file, date, datetime-local, time, week, month.
width
'32em'	Popup window width, including paddings (box-sizing: border-box). Can be in any CSS unit (px, em/rem, %).
padding
'0 0 1.25em'	Popup window padding. Can be in any CSS unit (px, em/rem, %).
color
undefined	Color for title, content and footer (CSS color property). The default color is '#545454'.
background
undefined	Popup window background (CSS background property). The default background is '#fff'.
position
'center'	Popup window position, can be 'top', 'top-start', 'top-end', 'center', 'center-start', 'center-end', 'bottom', 'bottom-start', or 'bottom-end'.
grow
false	Paired with window position, sets the direction the popup should grow in, can be set to'row', 'column', 'fullscreen', or false.
customClass
undefined	A custom CSS class for the popup:
customClass: {
  container: '...',
  popup: '...',
  header: '...',
  title: '...',
  closeButton: '...',
  icon: '...',
  image: '...',
  htmlContainer: '...',
  input: '...',
  inputLabel: '...',
  validationMessage: '...',
  actions: '...',
  confirmButton: '...',
  denyButton: '...',
  cancelButton: '...',
  loader: '...',
  footer: '....',
  timerProgressBar: '....',
}
timer
undefined	Auto close timer of the popup. Set in ms (milliseconds). See also Swal.getTimerLeft(), Swal.stopTimer(), Swal.resumeTimer(), Swal.toggleTimer(), Swal.isTimerRunning() and Swal.increaseTimer().
timerProgressBar
false	If set to true, the timer will have a progress bar at the bottom of a popup. Mostly, this feature is useful with toasts.
heightAuto
true	By default, SweetAlert2 sets html's and body's CSS height to auto !important. If this behavior isn't compatible with your project's layout, set heightAuto to false.
allowOutsideClick
true	If set to false, the user can't dismiss the popup by clicking outside it.
You can also pass a custom function returning a boolean value, e.g. if you want to disable outside clicks for the loading state of a popup.
allowEscapeKey
true	If set to false, the user can't dismiss the popup by pressing the Esc key. You can also pass a custom function returning a boolean value, e.g. if you want to disable the Esc key for the loading state of a popup.
stopKeydownPropagation
true	If set to false, SweetAlert2 will allow keydown events propagation to the document.
keydownListenerCapture
false	Useful for those who are using SweetAlert2 along with Bootstrap modals. By default keydownListenerCapture is false which means when a user hits Esc, both SweetAlert2 and Bootstrap modals will be closed. Set keydownListenerCapture to true to fix that behavior.
showConfirmButton
true	If set to false, a "Confirm"-button will not be shown.
showDenyButton
false	If set to true, a "Deny"-button will be shown. It can be useful when you want a popup with 3 buttons.
showCancelButton
false	If set to true, a "Cancel"-button will be shown, which the user can click on to dismiss the modal.
confirmButtonText
'OK'	Use this to change the text on the "Confirm"-button.
denyButtonText
'No'	Use this to change the text on the "Deny"-button.
cancelButtonText
'Cancel'	Use this to change the text on the "Cancel"-button.
confirmButtonColor
undefined	Use this to change the background color of the "Confirm"-button. The default color is #3085d6
denyButtonColor
undefined	Use this to change the background color of the "Deny"-button. The default color is #dd6b55
cancelButtonColor
undefined	Use this to change the background color of the "Cancel"-button. The default color is #aaa
confirmButtonAriaLabel
''	Use this to change the aria-label for the "Confirm"-button.
denyButtonAriaLabel
''	Use this to change the aria-label for the "Deny"-button.
cancelButtonAriaLabel
''	Use this to change the aria-label for the "Cancel"-button.
buttonsStyling
true	Apply default styling to buttons. If you want to use your own classes (e.g. Bootstrap classes) set this parameter to false.
reverseButtons
false	Set to true if you want to invert default buttons positions ("Confirm"-button on the right side).
focusConfirm
true	Set to false if you want to focus the first element in tab order instead of "Confirm"-button by default.
returnFocus
true	Set to false if you don't want to return the focus to the element that invoked the modal after the modal is closed.
focusDeny
false	Set to true if you want to focus the "Deny"-button by default.
focusCancel
false	Set to true if you want to focus the "Cancel"-button by default.
showCloseButton
false	Set to true to show close button in top right corner of the popup.
closeButtonHtml
'&times;'	Use this to change the content of the close button.
closeButtonAriaLabel
'Close this dialog'	Use this to change the aria-label for the close button.
loaderHtml
''	Use this to change the HTML content of the loader.
showLoaderOnConfirm
false	Set to true to disable buttons and show the loader instead of the Confirm button. Use it in combination with the preConfirm parameter.
showLoaderOnDeny
false	Set to true to disable buttons and show the loader instead of the Deny button. Use it in combination with the preDeny parameter.
scrollbarPadding
true	Set to false to disable body padding adjustment when the page scrollbar gets hidden while the popup is shown
preConfirm
undefined	Function to execute before confirming, may be async (Promise-returning) or sync.
Returned (or resolved) value can be:
false to prevent a popup from closing
anything else to pass that value as the result.value of Swal.fire()
undefined to keep the default result.value
See usage example.
preDeny
undefined	Function to execute before denying, may be async (Promise-returning) or sync.
Returned (or resolved) value can be:
false to prevent a popup from closing
anything else to pass that value as the result.value of Swal.fire()
undefined to keep the default result.value
returnInputValueOnDeny
false	If you want to return the input value as result.value when denying the popup, set to true. Otherwise, the denying will set result.value to false.
imageUrl
undefined	Add a customized icon for the popup. Should contain a string with the path or URL to the image.
imageWidth
undefined	If imageUrl is set, you can specify imageWidth to describes image width. Can be in any CSS unit (px, em/rem, %).
imageHeight
undefined	Custom image height. Can be in any CSS unit (px, em/rem, %).
imageAlt
''	An alternative text for the custom image icon.
inputLabel
''	Input field label.
inputPlaceholder
''	Input field placeholder.
inputValue
''	Input field initial value.

If the input type is select, inputValue will represent the selected <option> tag.

If the input type is checkbox, inputValue will represent the checked state.

If the input type is email, number, tel,text, email, number, telor textarea, a Promise can be accepted as inputValue.
inputOptions
If input parameter is set to "select" or "radio", you can provide options. Can be a Map or a plain object, with keys that represent option values and values that represent option text. You can also provide plain object or Map as values that will represented a group of options, being the label of this <optgroup> the key. Finally, you can also provide a Promise that resolves with one of those types.
inputAutoFocus
true	Automatically focus the input when popup is shown. Set this parameter to false to disable auto-focusing.
inputAutoTrim
true	Automatically remove whitespaces from both ends of a result string. Set this parameter to false to disable auto-trimming.
inputAttributes
HTML input attributes (e.g. min, max, autocomplete, accept), that are added to the input field. Object keys will represent attributes names, object values will represent attributes values.
inputValidator
undefined	Validator for input field, may be async (Promise-returning) or sync.
Returned (or resolved) value can be:
a falsy value (undefined, null,false) for indicating success
a string value (error message) for indicating failure
See usage example.
validationMessage
undefined	A custom validation message for default validators (email, url).
progressSteps
[]	Progress steps, useful for queues.
currentProgressStep
undefined	Current active progress step.
progressStepsDistance
undefined	Distance between progress steps. Can be in any CSS unit (px, em/rem, %).
willOpen
undefined	Popup lifecycle hook. Synchronously runs before the popup is shown on screen. Provides popup DOM element as the argument. In previous versions, this hook was named onBeforeOpen.
didOpen
undefined	Popup lifecycle hook. Asynchronously runs after the popup has been shown on screen. Provides popup DOM element as the argument. In previous versions, this hook was named onOpen.
didRender
undefined	Popup lifecycle hook. Synchronously runs after the popup DOM has been updated (ie. just before the popup is repainted on the screen).
Provides popup DOM element as the argument.
Typically, this will happen after Swal.fire() or Swal.update().
If you want to perform changes in the popup's DOM, that survive Swal.update(), preferdidRender over willOpen.
In previous versions, this hook was named onRender.
willClose
undefined	Popup lifecycle hook. Synchronously runs when the popup closes by user interaction (and not due to another popup being fired). Provides popup DOM element as the argument. In previous versions, this hook was named onClose.
didClose
undefined	Popup lifecycle hook. Asynchronously runs after the popup has been disposed by user interaction (and not due to another popup being fired). In previous versions, this hook was named onAfterClose.
didDestroy
undefined	Popup lifecycle hook. Synchronously runs after popup has been destroyed either by user interaction or by another popup.
If you have cleanup operations that you need to reliably execute each time a popup is closed, preferdidDestroy over didClose.
In previous versions, this hook was named onDestroy.*/
