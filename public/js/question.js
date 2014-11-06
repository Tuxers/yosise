(function($) {
  var answerTemplate, questionId;
  $(document).ready(function() {
    answerTemplate = _.template($('#answer-tpl').html());
    questionId = $('#questionId').val();

    $('#answer').on('click', function(e) {
      var data = {
        content: $('#content').val()
      };
      $.post('/question/'+questionId+'/answer', data).done(function(res){
        $('#content').val('');
        var ocupation = res.user.ocupation, icon;
        if (ocupation === 'stu') {
          icon = "fa-book";
        } else if (ocupation === 'uni') {
          icon = "fa-graduation-cap";
        } else if (ocupation === 'pro') {
          icon = "fa-briefcase";
        }
        var ocupationIcon = 1;
        var tplData = {
          userId: res.user.id,
          userName: res.user.name,
          ocupationIcon: icon,
          userBio: res.user.bio,
          answerContent: res.content,
          votes: res.up_votes - res.down_votes
        };
        var tpl = answerTemplate(tplData);
        $('#answers-container').append(tpl);


        // alert(JSON.stringify(res));  //answers-container
      }).fail(function(err){
        console.log(err);
      });
    });
  });
}).call(document, jQuery);
