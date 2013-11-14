/**
 * Base interface for showing dialog.
 */
define(['jquery', 'bootstrap'], function($) {
  function _showDialog(title, html, backdrop) {
    var $modal, $modalBody, $title, modalText;
    $modal = $('.dialogModal');
    $modalbody = $modal.find('.modal-body');
    $title = $modal.find('.modal-title');
    modalText = '';

    $modal.off('click', '.js-modal-confirm');
    modalText += html ? html : '';
    
    if (backdrop) {
      $modal.attr('data-backdrop', 'static');
    }

    $title.text(title);
    $modalbody.html(modalText);
    $modal.modal('show');
  };
  
  return {
    showDialog: _showDialog
  };
});