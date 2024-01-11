<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class ListingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    // 'required|max:255|unique:listings,slug,'.$id
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'photo' => Rule::requiredIf($this->id == NULL),
            'name'=> 'required',
            'slug'=> 'max:255|unique:listings,slug,'.$this->id,
            'location_id'=> 'required',
            'category_id'=> 'required',
            'description'=> 'required',
            'saturday_opening'=>'required',
            'saturday_closing'=>'required',
            'sunday_opening'=> 'required',
            'sunday_closing'=> 'required',
            'monday_opening'=> 'required',
            'monday_closing'=> 'required',
            'tuesday_opening'=> 'required',
            'tuesday_closing'=> 'required',
            'wednesday_opening'=> 'required',
            'wednesday_closing'=> 'required',
            'thursday_opening'=> 'required',
            'thursday_closing'=> 'required',
            'friday_opening'=> 'required',
            'friday_closing'=> 'required',
            'menu_title.*'=> Rule::requiredIf($request->menu_title),
            'menu_price.*'=> Rule::requiredIf($request->menu_price),
            'menu_photo.*'=> Rule::requiredIf($request->menu_photo),
            'room_name.*' => Rule::requiredIf($request->room_name),
            'room_price.*'=> Rule::requiredIf($request->room_price),
            'room_photo.*'=> Rule::requiredIf($request->room_photo),
            'room_photo.*'=> Rule::requiredIf($request->room_photo),
            'room_amenities.*'=> Rule::requiredIf($request->room_amenities),
            'service_name.*'=> Rule::requiredIf($request->service_name),
            'service_price.*'=> Rule::requiredIf($request->service_price),
            'service_photo.*'=> Rule::requiredIf($request->service_photo),
            'service_from.*'=> Rule::requiredIf($request->service_from),
            'service_to.*'=> Rule::requiredIf($request->service_from),
            'service_duration.*'=> Rule::requiredIf($request->service_duration),
            'faq_name.*'=> Rule::requiredIf($request->faq_name),
            'faq_details.*'=> Rule::requiredIf($request->faq_details),
            'car_price'=> Rule::requiredIf($request->has('car_price')),
            'car_fuel_type'=> Rule::requiredIf($request->has('car_fuel_type')),
            'car_manufacture_year'=> Rule::requiredIf($request->has('car_manufacture_year')),
            'car_engine_capacity'=> Rule::requiredIf($request->has('car_engine_capacity')),
            'car_mileage'=> Rule::requiredIf($request->has('car_mileage')),
        ];
    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $response = response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        throw new ValidationException($validator, $response);
    }

}
