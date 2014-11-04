(function($) {
  var hideAll = function() {
    $('#school').hide();
    $('#college').hide();
    $('#career').hide();
    $('#organization').hide();
  };
  var showStu = function() {
    hideAll();
    $('#school').show();
  };
  var showUni = function() {
    hideAll();
    $('#college, #career').show();
  };
  var showPro = function() {
    hideAll();
    $('#college, #career, #organization').show();
  };
  $(document).ready(function(){
    $('#college, #career, #organization').hide();
    $('[name=ocupation]').on('change', function(){
      switch(this.value) {
        case 'stu': showStu(); break;
        case 'uni': showUni(); break;
        case 'pro': showPro(); break;
      }
    });
  });
}).call(document, jQuery);
