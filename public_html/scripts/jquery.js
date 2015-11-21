	    function stageContent(content) {
                $("#stage").html(content);
            };

            function pageContent(content)  {
                $("html").html(content);
            };

            function removeAllActiveExcluding(tab) {
                if(tab != 'home') {
                    $('#home').removeClass('active');
                }
                if(tab != 'about') {
                    $('#about').removeClass('active');
                }
                if(tab != 'contact') {
                    $('#contact').removeClass('active');
                }
                if(tab != 'angularjs') {
                    $('#angularjs').removeClass('active');
                }
            };
            function evaluatePath(path) {
                var request = path.split("/").pop();
                        if ( request=='about') {
                            $.get("content/about.html", stageContent);
                            $('title').html('About Page');
                            $('#about').addClass('active');
                            removeAllActiveExcluding(request);
                            $('#stage').css("display","block");
                            $('#angular').css("display","none");
                        }
                        else if (request == "contact") {
                            $('#stage').css("display","block");
                            $('#angular').css("display","none");
                            $.get("content/contact.html", stageContent);
                            $('title').html('Contact Page');
                            $('#contact').addClass('active');
                            removeAllActiveExcluding(request);
                        }
                        else if (request == "home" || request == "")  {
                            $('#stage').css("display","block");
                            $('#angular').css("display","none");
                            $.get("content/home.html", stageContent);
                            $('title').html('Home Page');
                            $('#home').addClass('active');
                            removeAllActiveExcluding(request);
                        }
                        else if (request == "angularjs")  {
                           //$.get("content/angularContent.html", stageContent);
                            $('#stage').css("display","none");
                            $('#angular').css("display","block");
                            $('title').html('Angular JS Example');
                            $('#angularjs').addClass('active');
                            removeAllActiveExcluding(request);
                        }
                        else {
$.get("Errors/new404Error.html", pageContent);
                        }
            }

        $(function(){
                // Evaluate path to start
                evaluatePath(location.pathname);

                // When a link is clicked...
                $("nav[role=navigation] a").click(function(e) {
                    // Don't follow its href
                    e.preventDefault();

                    // Instead remember its href
                    var request = $(this).attr("href");

                    // And add it to the browser's history
                    history.pushState(null, null, request);

                    // Then evaluate it
                    evaluatePath(request);

                });


                // If the back button is pressed...
                $(window).on("popstate", function() {
                    evaluatePath(location.pathname);
                });


            });
