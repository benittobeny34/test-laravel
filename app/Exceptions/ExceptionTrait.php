<?php 
namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

trait ExceptionTrait 
{

	public function apiException($request,$exception)
	{
		if($exception instanceof ModelNotFoundException) {
                return response()->json(['errors'=>'No record for this Id'],Response::HTTP_NOT_FOUND);
            }

            if($exception instanceof NotFoundHttpException) {
                return response()->json(['errors'=>'This is not valid URL'],Response::HTTP_NOT_FOUND);
            }
       return parent::render($request, $exception);
	}
}

