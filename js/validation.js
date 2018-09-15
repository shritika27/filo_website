function delete_job_records(id){
	if(confirm("are you sure you want to delete record!!!")){
	document.job_view.act.value="delete_job_records";
	document.job_view.id.value=id;
	document.job_view.submit();
	}
}
function delete_address_records(id){
	if(confirm("are you sure you want to delete record!!!")){
	document.address_view.act.value="delete_address_records";
	document.address_view.id.value=id;
	document.address_view.submit();
	}
}