(function($){
  $(function(){
  $("a[data-method]").restfulizer();
  $('.button-collapse').sideNav();
  $('.collapsible').collapsible();
  $('.parallax').parallax();
  $(".dropdown-button").dropdown();
  $('select').material_select();
  var picker = $('.datepicker').pickadate({
      selectMonths: true,
      selectYears: 20,
      min:  new Date(2000, 1, 1),
      max:  new Date(2020, 12, 31),
      monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],
      monthsShort: [ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic' ],
      weekdaysFull: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado' ],
      weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb' ],
      today: 'hoy',
      clear: 'borrar',
      close: 'cerrar',
      firstDay: 1,
      format: 'dddd d !de mmmm !de yyyy',
      formatSubmit: 'yyyy-mm-dd'
    });
  var intialDate = $('#initialize-picker').val();
  picker.pickadate('picker').set('select', intialDate, {format: 'yyyy-mm-dd'});
  }); // end of document ready
})(jQuery); // end of jQuery name space
