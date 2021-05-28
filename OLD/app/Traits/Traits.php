<?php
namespace Edaacil\Traits;

use Illuminate\Http\Request;

trait Traits {

    /**
     * Does very basic image validity checking and stores it. Redirects back if somethings wrong.
     * @Notice: This is not an alternative to the model validation for this field.
     * @param Request $request
     * @param string $fieldName
     * @return $this|false|string
     */
    public function verifyAndStoreImage(Request $request, $fieldName = 'profile_image')
    {
        if ($request->hasFile($fieldName)) {
            if (!$request->file($fieldName)->isValid()) {

                session()->flash('Invalid Image!')->error()->important();
                return redirect()->back()->withInput();
            }

            return $request->file($fieldName)->store('image/', 'public');

        }

        return null;

    }

}
