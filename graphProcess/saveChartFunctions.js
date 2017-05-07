/*function saveChartHTML(){
	html2canvas($('#graphcontainer'), {
		onrendered: function(canvas) {
			var img = canvas.toDataURL();
			var centerRBD = $("#dynamic_data").val();
			var centerDesc = $("#descGraph").text();
			//var url = 'graphProcess/exportImage.php';
			var url = actionURL;
        $.ajax({ 
            type: "POST", 
            url: url,
            dataType: 'text',
            data: {
                base64data : img,
            },
			success:location.href=actionPDF+"&id="+centerRBD,
        });  
			
			//window.open(img);
		}
	});
}*/

function saveChartHTML(){
	html2canvas($('#graphcontainer'), {
		onrendered: function(canvas) {
			var img = canvas.toDataURL();
			var centerRBD = $("#dynamic_data").val();
			var centerDesc = $("#descGraph").text();
			var columnA = $("#column1").text();
			var columnB = $("#column2").text();
			
			//var url = 'graphProcess/exportImage.php';
			var url = actionURL;
        $.ajax({ 
            type: "POST", 
            url: url,
            dataType: 'text',
            data: {
                base64data : img,
            },
			success:function (data) {
            
            $.ajax({
                type: "POST",
                url: actionText,
				dataType: 'text',
                data:{
					textDesc : centerDesc,
					col1: columnA,
					col2: columnB,
				}
				,
                success:location.href=actionPDF+"&id="+centerRBD,
            });
        },
        });  
			
			//window.open(img);
		}
	});
}

function setSelectOption(){
	var at = $('#dynamic_data option:selected').text();
	$("#titleLabel").text(at);
}

/*function saveChartHTML(){
	html2canvas($('#renderData'), {
		onrendered: function(canvas) {
			var img = canvas.toDataURL();
			
			//var url = 'graphProcess/exportImage.php';
			//var url = actionURL;
        var doc = new jsPDF('p', 'mm');
        doc.addImage(img, 'PNG', 10, 10);
        doc.save('sample-file.pdf');
			
			//window.open(img);
		}
	});
}*/