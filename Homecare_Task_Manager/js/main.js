/*  
	Homecare Task Manager
	Author: Juanita Hales
*/

(function($){

	/*===============================================ToolTips========================================*/
	// $('.masterTooltip').hover(function(){
	// 		var title = $(this).attr('title');
	// 		$(this).data('tiptext', title).removeAttr('title');
	// 		$('<p class="tooltip"></p>')
	// 		.text(title)
	// 		.appendTo('body')
	// 		.fadeIn('slow');
	// }, 	
 //      function(){
	// 		$(this).attr('title', $(this).data('tiptext'));
	// 		$('.tooltip').remove();
	// })  .mousemove(function(e){
	// 		var mousex = e.pageX +20;
	// 		var mousey = e.pageY +10;
	// 		$('.tooltip')
	// 		.css({top: mousey, left: mousex});
	// });
	
	/*===============================================ToolTips Jquery UI========================================*/
	$( document ).tooltip();

	
		
		
	/*
	===============================================
	========================= APPLICATION FUNCTIONS	
	*/
	
	
	var checkLoginState = function(){
		$.ajax({
			url: 'xhr/check_login.php',
			type: 'get',
			dataType: 'json',
			success: function(response){
				// if user, loadApp()
				// if error, loadLanding()
			}
		});
	};
	
	

	//============================================
	//	SETUP FOR INIT
		
	var init = function(){
	
		checkLoginState();
	};
	
	
	init();
	/*===============================================Add accordion ========================================*/
	// on select the tab displays the corresponding information by setting class to active
	$('ul.tabs').each(function(){
		var $active, $content, $links = $(this).find('a');
		$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
		$active.addClass('active');
		$content = $($active[0].hash);
		$links.not($active).each(function() {
			$(this.hash).hide();
	});
		$(this).on('click', 'a', function(e){
			$active.removeClass('active');
			$content.hide();
			$active = $(this);
			$content = $(this.hash);
			$active.addClass('active');
			$content.show();
			e.preventDefault();

		});
	});



	/*===============================================Add Modal========================================*/
     // displays overlay and modal on click
	$('.modalClick').on('click', function(event){
		event.preventDefault();
			$('#overlay')
			.fadeIn()
			.find('#modal')
			.fadeIn();
	});
	// close function
	$('.close').on('click', function(event){
		event.preventDefault();
			$('#overlay')
			.fadeOut()
			.find('#modal')
			.fadeOut();

	});

/*==================================================datepicker==========================================*/
	$(function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
/*==================================================dialog box==========================================*/
	window.alert = function(message){
    $(document.createElement('div'))
        .attr({title: 'Alert', 'class': 'alert'})
        .html(message)
        .dialog({
            buttons: {OK: function(){$(this).dialog('close');}},
            close: function(){$(this).remove();},
            draggable: true,
            modal: true,
            resizable: false,
            width: 'auto'
        });
};

	/*===============================================Add Status========================================*/
	// mouseover and mouseout to dim the icon

	$('.mystatus').mouseover(function(){
		$(this).fadeTo(100, 0.3);
	});	

	$('.mystatus').mouseout(function(){
		$(this).fadeTo(100, 1);

	});

	
	/*===============================================Login========================================*/
	$('#signinButton').click(function(){
		var user = $('#user').val();
		var pass = $('#pass').val();
		console.log("password works");

		$.ajax({
			url:'xhr/login.php',
			type:'post',
			dataType:'json',
			data:{
				username: user,
				password: pass
			},
				success:function(response){
					console.log("test user");
					if(response.error){
						alert(response.error)
					}else{
							window.location.assign('dashboard.html');
						  }
				}
				

		});

	});

	/*===============================================Display Username========================================*/
	$.getJSON("xhr/check_login.php", function(data){
		console.log(data);
		$.each(data, function(key,val){
			console.log(val.first_name);
			$(".userid").html("Welcome User: " + val.first_name);
		})

	});
	

	/*===============================================Logout========================================*/
	$('#logOut').click(function(e){
		e.preventDefault;
		$.get('xhr/logout.php',function(){
			window.location.assign('index.html');

		});

	});



	/*===============================================register========================================*/

	$('#register').on('click',function(){
		var firstname = $('#firstname').val();
			lastname = $('#lastname').val();
			email = $('#email').val();
			username = $('#user').val();
			password = $('#pass').val();
			console.log(firstname+''+lastname+'' +username+''+email+''+password);

			$.ajax({
				url:'xhr/register.php',
				type:'post',
				dataType:'json',
				data: {
					firstname: firstname,
					lastname: lastname,
					username: username,
					email: email,
					password: password
				},

				success: function(response){
					if(response.error){
						alert(response.error);;

					}else{
						window.location.assign('dashboard.html');
					}
				}

			});

	});

	/*===============================================Navigate projects page========================================*/
	$('.projectsbtn').on('click', function(e){
		e.preventDefault();
		window.location.assign('project.html');
	});
	/*===============================================return to dashboard========================================*/
	
	//dashboard link
	$('#dashboard_button').on('click', function(e){
		e.preventDefault();
		window.location.assign('dashboard.html');

	});
	/*===============================================add projects========================================*/
	$('#submit').on('click', function(e){
		e.preventDefault();
		var projName = $('#projectName').val(),
		projDesc = $('#projectDescription').val(),
		projDue = $('#datepicker').val(),
		status = $('input[name="status"]:checked').prop("id");

			$.ajax({
				url:"xhr/new_project.php",
				type:'post',
				dataType:'json',
				data:{
					projectName: projName,
					projectDescription: projDesc,
					dueDate: projDue,
					status: status
				},

					success: function(response){
						console.log('Testing for success');

						if(response.error){
							alert(response.error);
						} else {
							window.location.assign('project.html');
						}
				
					}
			});


	});	


	/*===============================================display projects and delete key========================================*/
	var projects = function(){
		$.ajax({
			url: 'xhr/get_projects.php',
			type: 'get',
			dataType: 'json',
			success: function(response){
				console.log("testing for success");
				if(response.error){
					console.log(response.error);;

				}else{
					for(var i=0, j=response.projects.length; i<j; i++){
					var result = response.projects[i];
						$(".projects").append(
						'<li id="draggable" class="ui-state-default">'+
						"<input class ='projectid' type='hidden' value='" + result.id + "'>" +
						"Project ID:" + result.id + "<br>" + 
						"Project Name: "  + result.projectName + "<br>" + 
						"Project Description: " + result.projectDescription + "<br>" +			                        
						"Project Status: " + result.status + "<br>" +
						"Project Due: " + result.dueDate + "<br>" + 
						'<button class= "deletebtn" >Delete</button>' +
						'</li>');//close append
					}
				$(".deletebtn").on('click', function(e){
					var pid = $(this).parent().find(".projectid").val();
					console.log('test delete');
						$.ajax({
							url: 'xhr/delete_project.php',
							data:{
									projectID: pid
								},
							type:'post',
							dataType:'json',
							success: function(response){
								console.log('testing');
								if(response.error){
									alert(response.error);
;
								}else{
									window.location.assign("project.html");
									};
                              }
                         });
                    }); 

                                }
        }
    })
}

	/*===============================================draggable and sortable projects========================================*/
		$( "#sortable" ).sortable({
					revert: true
				});
				$( "#draggable" ).draggable({
					connectToSortable: "#sortable",
					helper: "clone",
					revert: "invalid"
				});
				$( "ul, li" ).disableSelection();

projects();

		


																		
					
				
			
						
						

					

	


})(jQuery); // end private scope

