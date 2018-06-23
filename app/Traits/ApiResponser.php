<?php


namespace App\Traits;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;


trait ApiResponser
{

	private function successResponse($data, $code)
	{
		return response()->json($data, $code);
	}

	protected function errorResponse($message, $code)
	{
		return response()->json(['status' => 'failed','error' => $message, 'code' => $code], $code);
	}

	protected function showAll(Collection $collection, $code = 200)
	{
		return $this->successResponse(['status' => 'success','data' => $collection], $code);

	}

	protected function showOne(Model $model, $code = 200)
	{

		return $this->successResponse(['status' => 'success','data' => $model], $code);
	}
}