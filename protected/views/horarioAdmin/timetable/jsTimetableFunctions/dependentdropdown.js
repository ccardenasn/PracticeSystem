$(document).ready(function(){
		$("#txtSemester").change(function (){
			$("#txtSemester option:selected").each(function(){
				id_category = $(this).val();
				$.post("timetable/subcategories.php", { id_category: id_category }, function(data){
					$("#txtSubject").html(data);
				});
			});
		})
	});