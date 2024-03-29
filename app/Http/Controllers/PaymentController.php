<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Decimal;

class PaymentController extends Controller
{
    public function editPaymentForMonth(Request $request, $id, $month)
    {
        $paymentColumn = 'payment_'.$month.'_month';
        $update = Payment::find($id)->update([
            $paymentColumn => $request->$paymentColumn
        ]);
        //$payment = Payment::findOrFail($id);

        // Validate the request data if necessary
        // $request->validate([
        //     'payment_for_month' => 'required|numeric',
        // ]);

        // Update the payment for the specified month
        //$paymentColumn = 'payment_'.$month.'_month';
        //$payment->$paymentColumn = Decimal($request->input('payment_for_month'), 2);
        //$payment->save();

        // Redirect back to the previous page or to a specific route
        return redirect()->back()->with('success', 'Payment for '.$month.' updated successfully!');
    }
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
