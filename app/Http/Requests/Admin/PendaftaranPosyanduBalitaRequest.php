<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class PendaftaranPosyanduBalitaRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_anak' => 'required|max:255',
            'nama_ayah' => 'required|max:255',
            'nama_ibu' => 'required|max:255',
            'jenis_kelamin' => 'required|enum',
            'tanggal_lahir' => 'required|date',
            'tinggi_badan' => 'required|integer',
            'berat_badan' => 'required|integer'
        ];
    }
}
