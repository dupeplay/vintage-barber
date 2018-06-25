(function($) {
  'use strict';
  $('#company-info').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var comname = button.data('company')
    var comstreet = button.data('street')
    var building = button.data('buildingaddress')
    var unit = button.data('unit')
    var country = button.data('country')
    var postal = button.data('postalcode')
    var compemail = button.data('compemail')
    var website = button.data('website')
    //Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('#companyname').val(comname)
    modal.find('#streetaddress').val(comstreet)
    modal.find('#buildingaddress').val(building)
    modal.find('#unit').val(unit)
    modal.find('#country').val(country)
    modal.find('#postalcode').val(postal)
    modal.find('#companyemail').val(compemail)
    modal.find('#website').val(website)
  })
  
  $('#general-info').on('show.bs.modal', function(event){
      
    var button = $(event.relatedTarget)
    var apptitle = button.data('apptitle')
    var receipt_start = button.data('receipt_start')
    var currency_symbol = button.data('currency_symbol')
    var town = button.data('town')
    var street = button.data('street')
    var buildingaddress = button.data('buildingaddress')
    var unit = button.data('unit')
    var country = button.data('country')
    var postalcode = button.data('postalcode')
    var header_message = button.data('header_message')
    var footer_message = button.data('footer_message')
      
    var modal = $(this)
    modal.find('#apptitle').val(apptitle)
    modal.find('#receipt_start').val(receipt_start)
    modal.find('#currency_symbol').val(currency_symbol)
    modal.find('#town').val(town)
    modal.find('#streetaddress').val(street)
    modal.find('#buildingaddress').val(buildingaddress)
    modal.find('#unit').val(unit)
    modal.find('#country').val(country)
    modal.find('#postalcode').val(postalcode)
    modal.find('#header_message').val(header_message)
    modal.find('#footer_message').val(footer_message)
      
  })
  
  $('#qms-info').on('show.bs.modal', function(event){
      
    var button = $(event.relatedTarget)
    var missed_timeout = button.data('missed_timeout')
    var overtime_timeout = button.data('overtime_timeout')
    var appointment_timeout = button.data('appointment_timeout')
   
    var modal = $(this)
    modal.find('#missed_timeout').val(missed_timeout)
    modal.find('#overtime_timeout').val(overtime_timeout)
    modal.find('#appointment_timeout').val(appointment_timeout)
  
  })
})(jQuery);