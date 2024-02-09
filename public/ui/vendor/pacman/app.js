if (window.jQuery === undefined) jQuery = $ = {};

!function($, window, document)
{
	"use strict";
	
	$(document).ready(function () {
		if ($('[data-template="404').length) {
			app.post("pacman", []).done(function (response) {
				if (response.status === "ok") {
					var content = response.template;
					var iframe = document.getElementById("content");

					var frameDoc = iframe.document;
					if (iframe.contentWindow)
						frameDoc = iframe.contentWindow.document;

					frameDoc.open();
					frameDoc.writeln(content);
					frameDoc.close();
				}
			});
			
			$('iframe').on("load", function() {
				if(Storages.cookieStorage.get("night_mode")) {
				    $('iframe').contents().find('.loading-cover').css('background-color', '#30414a');
				}
				
				$('.app-theme-mode').on('click', function() {
			        if($('.app-theme-mode input').is(':checked')) {
						$('iframe').contents().find('.loading-cover').css('background-color', '#30414a');
					} else {
						$('iframe').contents().find('.loading-cover').css('background-color', '#ffdf00');
					}
				});
			});
		};
	});
}
(window.jQuery, window, document);