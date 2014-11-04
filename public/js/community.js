(function($) {
  var loadQuestions = function() {
    var communityId = $('#communityId').val();
    $.get('/community/'+communityId+'/questions')
    .done(function(res) {
      console.log(JSON.stringify(res));
    });
  };
  $(document).ready(function(){
    loadQuestions();

    $('#follow').on('click', function() {
      var communityId = $('#communityId').val();
      $.post('/community/'+communityId+'/follow')
      .done(function(res) {
        $('#follow').hide();
      })
      .fail(function(err) {
        alert(err);
      });
    });
  });
}).call(document, jQuery);
