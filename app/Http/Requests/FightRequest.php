<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FightRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->user()) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
//        dd($this->all());
        $rules = [
            'fight_type' => ['required', 'integer', 'exists:App\Models\FightType,id'],
            'attack_power' => ['nullable', 'integer', 'between:1,600000'],
            'protected_power' => ['nullable', 'integer', 'between:1,600000'],
            'comment' => ['nullable', 'string', 'max:2000'],
            'attack-1' => ['required', 'integer', 'exists:App\Models\Hero,id'],
            'attack-2' => ['required', 'integer', 'exists:App\Models\Hero,id'],
            'attack-3' => ['required', 'integer', 'exists:App\Models\Hero,id'],
            'attack-4' => ['required', 'integer', 'exists:App\Models\Hero,id'],
            'attack-5' => ['required', 'integer', 'exists:App\Models\Hero,id'],
            'protected-1' => ['required', 'integer', 'exists:App\Models\Hero,id'],
            'protected-2' => ['required', 'integer', 'exists:App\Models\Hero,id'],
            'protected-3' => ['required', 'integer', 'exists:App\Models\Hero,id'],
            'protected-4' => ['required', 'integer', 'exists:App\Models\Hero,id'],
            'protected-5' => ['required', 'integer', 'exists:App\Models\Hero,id'],
            'attack-power-1' => ['nullable', 'integer', 'between:1,150000'],
            'attack-power-2' => ['nullable', 'integer', 'between:1,150000'],
            'attack-power-3' => ['nullable', 'integer', 'between:1,150000'],
            'attack-power-4' => ['nullable', 'integer', 'between:1,150000'],
            'attack-power-5' => ['nullable', 'integer', 'between:1,150000'],
            'protected-power-1' => ['nullable', 'integer', 'between:1,150000'],
            'protected-power-2' => ['nullable', 'integer', 'between:1,150000'],
            'protected-power-3' => ['nullable', 'integer', 'between:1,150000'],
            'protected-power-4' => ['nullable', 'integer', 'between:1,150000'],
            'protected-power-5' => ['nullable', 'integer', 'between:1,150000'],
        ];
        return $rules;
    }
}
