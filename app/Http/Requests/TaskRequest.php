<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == "tasks") {
            return true;
        }
        else {
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
        return [
            'task_name' => 'required',
            'year' => 'required',
            'month' => 'numeric|between:1,12',
            'day' => 'required|between:1,31',
            'memo' => 'required',
        ];
    }
    public function messages() {
        return [
            'task_name.required' => 'タスクを入力してください',
            'year.required' => '年は必須項目です',
            'month.numeric' => '月は数字で入力してください',
            'month.between' => '月は1~12で入力してください',
            'day.numeric' => '日は数字で入力してください',
            'day.between' => '日は1~12で入力してください',
            'memo.required' => 'メモは必須項目です',
        ];
    }
}
