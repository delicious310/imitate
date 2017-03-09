;(function($){
    $.fn.extend({
        lightbox: function(){
            this.on('click',function(){
                //$img = $('<img class="lightbox-img"/>');
                //$img.attr('src',$(this).data('src'));
                //$img.on('load',function(){
                //    alert(this.width);
                //};
                var iWidth =this.getAttribute('data-width')>=600?600:this.getAttribute('data-width');
                $div = $('<div class = "lightbox-img"><div class="loading">loading</div></div>').css({
                    width:iWidth,
                    height:this.getAttribute('data-height'),
                    left:($(window).width() - iWidth)/2,
                    top:($(window).height() - this.getAttribute('data-height'))/2
                }).appendTo(document.body);
                var oImg = new Image();
                //oImg.className = 'lightbox-img';
                oImg.onload = function() {
                //    if(this.width>600){
                //        this.width = 600;
                //    }
                //    this.style.left = ($(window).width() - this.width)/2 + 'px';
                //    this.style.top = ($(window).height() - this.height)/2 + 'px';
                    $div.children('.loading').hide();
                    this.width = iWidth;
                    $div.append(oImg);
                };
                oImg.src = this.getAttribute('data-src');
                //oImg.src = this.getAttribute('data-src');
                //document.body.appendChild(oImg);
            });
        }
    });
})(jQuery);
