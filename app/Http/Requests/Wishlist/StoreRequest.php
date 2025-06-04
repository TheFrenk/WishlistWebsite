<?php

namespace App\Http\Requests\Wishlist;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'wishlist.title' => 'required|string',
            'wishlist.name' => 'required|string',
            'wishlist.description' => 'string',
            'items' => 'array|required',
            'items.*.name' => 'string|required',
            'items.*.description' => 'string|required',
            'items.*.price' => 'integer|required',
            'items.*.image_url' => 'string',
            'items.*.product_url' => 'string|required',
        ];
    }

    public function validated($key = null, $default = null): array
    {
        $validated = parent::validated();

        return [
            'wishlist' => $validated['wishlist'],
            'items' => $validated['items'],
        ];
    }
}
