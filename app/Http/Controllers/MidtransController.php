<?php

namespace App\Http\Controllers;

use App\Mail\TransactionSuccess;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Midtrans\Notification;
use Midtrans\Config;

class MidtransController extends Controller
{
    public function notificationHandler(Request $request)
    {
        // set configurasi midtrans

        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        // Buat instance midtrans notification

        $notification = new Notification();

        // Pecah order id agar bisa diterima oleh databse
        $order = explode('-', $notification->order_id);

        // Assign ke variable untuk memudahkan coding

        $status = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status;
        $order_id = $order[1];

        // Cari transaksi berdasarkan ID

        $transaction = Transaction::findOrFail($order_id);

        // Handle notification status midtrans

        if ($status == 'capture') {
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    $transaction->transaction_status = 'CHALLENGE';
                } else {
                    $transaction->transaction_status = 'SUCCESS';
                }
            }
        } else if ($status == 'settlement') {
            $transaction->transaction_status = 'SUCCESS';
        } else if ($status == 'pending') {
            $transaction->transaction_status = 'PENDING';
        } else if ($status == 'deny') {
            $transaction->transaction_status = 'FAILED';
        } else if ($status == 'expire') {
            $transaction->transaction_status = 'EXPIRED';
        } else if ($status == 'cancel') {
            $transaction->transaction_status = 'FAILED';
        }

        // Simpan transaksi

        $transaction->save();

        // kirimakn email

        if ($transaction) {
            if ($status == 'capture' && $fraud == 'acept') {
                Mail::to($transaction->user)->send(new TransactionSuccess($transaction));
                // 
            } else if ($status == 'settlement') {
                Mail::to($transaction->user)->send(new TransactionSuccess($transaction));
                // 
            } else if ($status == 'success') {
                Mail::to($transaction->user)->send(new TransactionSuccess($transaction));
                // 
            } else if ($status == 'capture' && $fraud == 'challenge') {

                return response()->json([
                    'meta' => [
                        'code' => 200,
                        'message' => 'Midtrans payment challenge'
                    ]
                ]);
            } else {
                return response()->json([
                    'meta' => [
                        'code' => 200,
                        'message' => 'Midtrans payment not sttlement'
                    ]
                ]);
            }
            return response()->json([
                'meta' => [
                    'code' => 200,
                    'message' => 'Midtrans notification success'
                ]
            ]);
        }
    }

    public function finishRedirect(Request $request)
    {
        return view('pages.succses');
    }

    public function unfinishRedirect(Request $request)
    {
        return view('pages.unfinish');
    }

    public function errorRedirect(Request $request)
    {
        return view('pages.failed');
    }
}
