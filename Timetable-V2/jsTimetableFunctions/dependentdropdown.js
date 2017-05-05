$(document).ready(function(){
		$("#txtSemester").change(function (){
			$("#txtSemester option:selected").each(function(){
				id_category = $(this).val();
				
				if(id_category == '0'){
					hideControl('lblSubject');
					hideControl('txtSubject');
					hideControl('btnChange');
				}
				
				$.post("Timetable-V2/subcategories.php", { id_category: id_category }, function(data){
					$("#txtSubject").html(data);
				});
			});
		})
	});