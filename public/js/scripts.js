$( document ).ready(function() { 

    // declaration of values for
    // page size, current page, pages length, nav and total pages 
    pageSize = 3;
    pagesCount = $(".card").length;
    var currentPage = 1;

    var nav = '';
    var totalPages = Math.ceil(pagesCount / pageSize);
    
    for (var s=0; s<totalPages; s++){
        nav += '<li class="page-item" id="itemNav"><a class="page-link" href="#">'+(s+1)+'</a></li>';
    }
    $("#pag_prev").after(nav);
    $("#itemNav").first().addClass("active");

    showPage = function() {
        $(".card").hide().each(function(n) {
            if (n >= pageSize * (currentPage - 1) && n < pageSize * currentPage)
                $(this).show();
        });
    }
    showPage();

    // remove and add 'active' class for list
    $(".pagination li#itemNav").click(function() {
        $(".pagination li").removeClass("active");
        $(this).addClass("active");
        currentPage = parseInt($(this).text());
        showPage();
    });

    // activate prev buttom if page != page 1
    // deactivate next button if page == page final
    $(".pagination li#itemNav").click(function() {
        $("#pag_prev").removeClass("disabled");
        if (currentPage == 1)
            $("#pag_prev").addClass("disabled");
        if (currentPage == totalPages)
            $("#pag_next").addClass("disabled");
        else
            $("#pag_next").removeClass("disabled");
    });
 
    $(".pagination li#pag_next").click(function() {
        $("#pag_prev").removeClass("disabled");
        if (currentPage == totalPages - 1)
            $("#pag_next").addClass("disabled");
    });    

    $(".pagination li#pag_prev").click(function() {
        if($(this).next().is('.active')) return;
        $('#itemNav.active').removeClass('active').prev().addClass('active');
        currentPage = currentPage > 1 ? (currentPage-1) : 1;
        showPage();
        if (currentPage == 1)
            $("#pag_prev").addClass("disabled");

        // activate next buttom if page != page final
        if (currentPage != totalPages)
            $("#pag_next").removeClass("disabled");
    });

    $(".pagination li#pag_next").click(function() {
        if($(this).prev().is('.active')) return;
        $('#itemNav.active').removeClass('active').next().addClass('active');
        currentPage = currentPage < totalPages ? (currentPage+1) : totalPages;
        showPage();
    });
});