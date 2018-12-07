$("nav .nav-list li a").each(function(){
    $this = $(this);
    if($this[0].href==String(window.location)){
        console.log($this[0].href);
        console.log(String(window.location));
        // console.log(window.location);

        $("nav .nav-list li a").removeClass("active");
        $this.addClass("active");
        //alert($this);
    }
});

