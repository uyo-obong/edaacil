<?php
namespace Edaacil\Traits;

use Illuminate\Http\Request;

trait StoreImageTrait {

    /**
     * Does very basic image validity checking and stores it. Redirects back if somethings wrong.
     * @Notice: This is not an alternative to the model validation for this field.
     *
     * @param Request $request
     * @return $this|false|string
     */
    public function verifyAndStoreImage(Request $request, $fieldname = 'profile_image')
    {
        if ($request->hasFile($fieldname)) {
            if (!$request->file($fieldname)->isValid()) {

                session()->flash('Invalid Image!')->error()->important();
                return redirect()->back()->withInput();
            }

            return $request->file($fieldname)->store('image/', 'public');

        }

        return null;

    }

}
