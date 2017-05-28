 $(document).ready(function() {
                $(window).scroll(function() {
                    if ($('body').height() <= ($(window).height() + $(window).scrollTop())) {
                        alert('Bottom reached!');
                    }
                });
            });    