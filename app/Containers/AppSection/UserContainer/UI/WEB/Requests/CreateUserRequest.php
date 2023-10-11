<?php

namespace App\Containers\AppSection\UserContainer\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class CreateUserRequest extends ParentRequest
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     */
    protected array $access = [
//        'permissions' => '',
//        'roles' => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     */
    protected array $decode = [
        // 'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     */
    protected array $urlParameters = [
        // 'id',
    ];


    public function rules(): array
    {
        return [
            '_token'        => 'required',
//            'university_id' => 'nullable|integer',
//            'name'          => 'nullable|string',
//            'family'        => 'nullable|string',
//            'grade'         => 'nullable|string',
//            'branch'        => 'nullable|string',
//            'semester'      => 'nullable|string',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            '_token'        => $this->post('_token'),
            'university_id' => $this->post('university_id'),
            'name'          => $this->post('name'),
            'family'        => $this->post('family'),
            'grade'         => $this->post('grade'),
            'branch'        => $this->post('branch'),
            'semester'      => $this->post('semester'),
        ]);
    }

}
