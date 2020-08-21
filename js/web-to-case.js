jQuery(document).ready(function () {
        var $content = jQuery('#case-information')
        
        jQuery('.submit-a-case').on('click', function(e){
            e.preventDefault();
            modal.open({content: $content, width:500, height: 675});
        });
    }());
    
    var modal = (function(){
        var $window =jQuery(window);
        var $submitForm = jQuery('#case-information > form')
        var $modalOverlay = jQuery('.modal-overlay');
        var $caseContainer = jQuery('#case-information');
        var $modal = jQuery('<div class="submit-case-modal"/>');
        var $content = jQuery('<div class="submit-case-modal-content"/>');
        var $close = jQuery('<img id="modal-close-btn" alt="Close Button" src="http://joltconsultinggroup.com/wp-content/themes/vf/images/close_x.png">');
        

        $close.css({
            cursor: 'pointer',
            position: 'absolute',
            top: '10px',
            right: '10px',
            height: '15px',
            width: '15px'
        })
    
    
        $modal.append($content, $close);
        
        $close.on('click', function(e) {
            e.preventDefault();
            modal.close();
        });
    
        return {
            center: function () {
                var top = Math.max($window.height() - $modal.outerHeight(), 0) / 2;
                var left = Math.max($window.width() -  $modal.outerWidth(), 0) / 2;
                $modal.css({
                    top: top + $window.scrollTop(),
                    left: left + $window.scrollLeft()
                });
            },
            open: function(settings){
                $content.empty().append(settings.content);
                
                $modalOverlay.css("display", "block");
                $caseContainer.css("display", "block");
                
                $modal.css({
                    width: settings.width || 'auto',
                    height: settings.height || 'auto'
                }).appendTo($modalOverlay);
                
               
                $submitForm.on('submit', function(e){                    
                    var r = document.getElementById("g-recaptcha-response"); 
                    if (r == null || r.value.trim() == ""){
                        e.preventDefault();
                        alert("Please check the reCaptcha box!")
                    };
                })
                
                modal.center();
                $window.on('resize', modal.center);

            },
            close: function() {
                $content.empty();
                $modal.detach();
                $modalOverlay.css("display", "none");
                $caseContainer.css("display", "none");
                $window.off('resize', modal.center);
            }
        };
    }());