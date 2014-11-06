(function($) {
  var questionTemplate, memberTemplate;

  var loadQuestions = function() {
    var communityId = $('#communityId').val();
    $.get('/community/'+communityId+'/questions')
    .done(function(res) {
      var tpl = "";
      for(var i = 0; i < res.length; ++i) {
        var icon;
        var ocupation = res[i].user.ocupation;
        if (ocupation === 'stu') {
          icon = "fa-book";
        } else if (ocupation === 'uni') {
          icon = "fa-graduation-cap";
        } else if (ocupation === 'pro') {
          icon = "fa-briefcase";
        }
        var templateData = {
          icon: icon,
          questionId: res[i].id,
          questionTitle: res[i].title,
          questionDescription: res[i].description,
          authorId: res[i].user.id,
          authorName: res[i].user.name,
          questionDate: res[i].created_at,
          votes: res[i].up_votes - res[i].down_votes
        };
        tpl += questionTemplate(templateData);
      }
      $('#question-container').append(tpl);
    });
  };

  var loadMembers = function(id) {
    $.get('/community/'+id+'/members').done(function(res) {
      $('#member-list').html('');
      var tpl = "";
      for(var i = 0; i < res.length; ++i) {
        var tplData = {followerId: res[i].id, followerName: res[i].name, pictureUrl: res[i].picture_url};
        tpl += memberTemplate(tplData);
      }
      $('#member-list').html(tpl);
    });
  };


  $(document).ready(function(){
    var communityId = $('#communityId').val();
    questionTemplate = _.template($('#question-tpl').html());
    memberTemplate = _.template($('#member-tpl').html());
    loadQuestions();

    $('#unfollow').on('mouseover', function() {
      this.innerHTML = "Dejar de seguir";
    });
    $('#unfollow').on('mouseout', function() {
      this.innerHTML = "Siguiendo";
    });

    $('#unfollow').on('click', function() {
      var that = $(this);
      $.post('/community/'+communityId+'/unfollow').done(function(res) {
        that.hide();
        $('#follow').show();
        $('#members').html('Miembros (' + res.members +')');
        loadMembers(communityId);
      }).fail(function(err){});
    });

    $('#follow').on('click', function() {
      $.post('/community/'+communityId+'/follow')
      .done(function(res) {
        loadMembers(communityId);
        $('#members').html('Miembros (' + res.members +')');
        $('#follow').hide();
        $('#unfollow').show();
      })
      .fail(function(err) {
        alert(err);
      });
    });
  });
}).call(document, jQuery);
