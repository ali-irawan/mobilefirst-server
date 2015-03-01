<?php

class ApiController extends BaseController {
	
	public function getList(){
		$contacts = Contact::orderBy('name','asc')->get();

		return Response::json([
				"status" => "OK",
				"payload" => [
					"items" => $contacts
				]
			]);
	}

	public function show($id){
		$data = Contact::find($id);
		return Response::json([
				"status" => "OK",
				"payload" => $data
			]);
	}
}