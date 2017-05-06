function saveChartHTML(){
	html2canvas($('#graphcontainer'), {
		onrendered: function(canvas) {
			var img = canvas.toDataURL();
			var centerRBD = $("#dynamic_data").val();
			//var url = 'graphProcess/exportImage.php';
			var url = actionURL;
        $.ajax({ 
            type: "POST", 
            url: url,
            dataType: 'text',
            data: {
                base64data : img
            },
			success:location.href=actionPDF+"&id="+centerRBD,
        });  
			
			//window.open(img);
		}
	});
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