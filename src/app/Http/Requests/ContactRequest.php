<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
                'category_id' => 'required|exists:categories,id',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'gender' => 'required',
                'email' => 'required|email|max:255|',
                'tel' => 'required|numeric',
                'address' => 'required|string|max:255',
                'building' => 'nullable',
                'detail' => 'required|max:120',
        ];
    }
    public function messages()
    {
        return [
            'category_id.required' => 'お問い合わせの種類を選択して下さい',
            'category_id.exists' => '選択されたカテゴリーは存在しません。',
            'first_name.required' => '名前を入力して下さい',
            'first_name.string' => '文字列で入力して下さい',
            'first_name.max' => '255文字以内で入力して下さい',
            'last_name.required' => '姓を入力してください',
            'last_name.string' => '文字列で入力して下さい',
            'last_name.max:255' => '255文字以内で入力して下さい',
            'gender.required' => '性別を選択して下さい',
            'email.required' => 'メールアドレスを入力して下さい',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'tel.required' => '電話番号を入力して下さい',
            'tel.numeric' => '電話番号を数値で入力して下さい',
            'address.required' => '住所を入力して下さい',
            'address.string' => '住所を文字列で入力して下さい',
            'address.max' => '住所を文字列で入力して下さい',
            'detail.required' => 'お問い合わせ内容を入力して下さい',
            'detail.max' => 'お問い合わせ内容を120文字以下で入力して下さい'
        ];
    }
}
