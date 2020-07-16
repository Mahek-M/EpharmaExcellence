<script type = "sort/javascript">
$('.link-sort-list').click(function(e) {
    var $sort = this;
    var $list = $('#sort-list');
    var $listLi = $('li',$list);
    $listLi.sort(function(a, b){
        var keyA = $(a).text();
        var keyB = $(b).text();
        if($($sort).hasClass('asc')){
            return (keyA &gt; keyB) ? 1 : 0;
        } else {
            return (keyA &lt; keyB) ? 1 : 0;
        }
    });
    $.each($listLi, function(index, row){
        $list.append(row);
    });
    e.preventDefault();
});
</script>