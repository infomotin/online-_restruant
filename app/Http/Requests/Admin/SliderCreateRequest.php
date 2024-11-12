<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SliderCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // $table->text('image');
        //     $table->string('offer');
        //     $table->string('title');
        //     $table->string('sub_title');
        //     $table->string('short_description')->nullable();
        //     $table->string('long_description')->nullable();
        //     $table->string('button_link')->nullable();
        //     $table->string('button_text')->nullable();
        //     $table->string('aria_label')->nullable();
        //     $table->string('alt_text')->nullable();
        //     $table->dateTime('start_date')->nullable();
        //     $table->dateTime('end_date')->nullable();
        //     $table->boolean('status')->default(0);
        return [
            'image' => ['required', 'image'],
            'offer' => ['required', 'string'],
            'title' => ['required', 'string'],
            'sub_title' => ['required', 'string'],
            // 'short_description' => ['required', 'string'],
            // 'long_description' => ['required', 'string'],
            // 'button_link' => ['required', 'string'],
            // 'button_text' => ['required', 'string'],
            // 'aria_label' => ['required', 'string'],
            // 'alt_text' => ['required', 'string'],
            // 'start_date' => ['required', 'date'],
            // 'end_date' => ['required', 'date'],
        ];
    }
}
