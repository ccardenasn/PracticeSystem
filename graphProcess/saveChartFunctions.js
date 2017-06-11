function saveChartHTML(){
    html2canvas($('#graphcontainer'), {
        onrendered: function(canvas) {
            
            var img = canvas.toDataURL();
			var centerRBD = $("#dynamic_data").val();
			var centerDesc = $("#descGraph").text();
			var columnA = $("#column1").text();
			var columnB = $("#column2").text();
			var graphTitle = $("#graphTitleLabel").text();
			var url = actionURL;
            
            $.ajax({ 
                type: "POST",
                url: url,
                dataType: 'text',
                data: {
                    base64data : img,
                },
                success:function(data) {
                    $.ajax({
                        type: "POST",
                        url: actionText,
                        dataType: 'text',
                        data:{
                            textDesc : centerDesc,
                            col1: columnA,
                            col2: columnB,
                            title: graphTitle,
                        },
                        success:location.href=actionPDF+"&id="+centerRBD,
                    });
                },
            });
        }
    });
}

function setSelectOption(){
	var at = $('#dynamic_data option:selected').text();
	$("#titleLabel").text(at);
}