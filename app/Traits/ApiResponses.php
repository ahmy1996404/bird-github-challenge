<?php

namespace App\Traits;

use Illuminate\Pagination\LengthAwarePaginator;

trait ApiResponses
{
    protected function success($data = null, $paginator = null, $message = null, $status = 200): \Illuminate\Http\JsonResponse
    {
        $object = [
            'data' => $data,
            'status' => true,
        ];
        if (!is_null($message)) $object['message'] = $message;

        if (!is_null($paginator)) $object['paginator'] = $this->paginate($paginator);

        return response()->json($object, $status);
    }

    protected function failure($message, $status = 422): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => $message,
            'status' => false,
        ], $status);
    }

    protected function exception($message, $status = 500): \Illuminate\Http\JsonResponse
    {
        return $this->failure(message: $message->getMessage(), status: $status);
    }

    protected function paginate(LengthAwarePaginator $paginator)
    {
        return [
            'total' => $paginator->total(), // total item return
            'count' => $paginator->count(), // Get the number of items for the current page.
            'currentPage' => $paginator->currentPage(), // Get the current page number.
            'lastPage' => $paginator->lastPage(),
            'hasMorePages' => $paginator->hasMorePages(), // Determine if there is more items in the data store.
            'nextPageUrl' => $paginator->nextPageUrl(), // Get the URL for the next page.
            'previousPageUrl' => $paginator->previousPageUrl()
        ];
    }
}
