<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AssistantSuperintendent;
use App\Models\Cid;
use App\Models\Finance;
use App\Models\Ict;
use App\Models\Legal;
use App\Models\School;
use App\Models\Sgod;
use App\Models\Superintendent;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class TransactionController extends Controller
{
    public function store(Request $request)
    {

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'target_table' => 'required|string',
            'office_sds' => 'nullable|string',
            'service_sds' => 'nullable|array',
            'office_asds' => 'nullable|string',
            'service_asds' => 'nullable|array',
            'office_admin' => 'nullable|string',
            'service_admin' => 'nullable|array',
            'office_cid' => 'nullable|string',
            'service_cid' => 'nullable|array',
            'office_finance' => 'nullable|string',
            'service_finance' => 'nullable|array',
            'office_ict' => 'nullable|string',
            'service_ict' => 'nullable|array',
            'office_legal' => 'nullable|string',
            'service_legal' => 'nullable|array',
            'office_sgod' => 'nullable|string',
            'service_sgod' => 'nullable|array',
            'office_school' => 'nullable|string',
            'service_school' => 'nullable|array',
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $targetTable = $request->input('target_table');
        $queue_number = '';
        $office = '';
        $services = '';

        if ($targetTable === 'superintendents') {
            // Get the next queue number for superintendents
            $prefix = 'SDS';
            $lastEntry = Superintendent::orderBy('queue_number', 'desc')->first();
            // Extract the numeric part of the last queue number and increment it
            if ($lastEntry) {
                preg_match('/\d+/', $lastEntry->queue_number, $matches);
                $lastNumber = (int)$matches[0];
                $nextQueueNumber = $lastNumber + 1;
            } else {
                $nextQueueNumber = 1;
            }
            $nextQueueNumberFormatted = str_pad($nextQueueNumber, 3, '0', STR_PAD_LEFT);
            $finalQueueNumber = $prefix . $nextQueueNumberFormatted;

            // Store the data in the superintendents table
            $superintendent = new Superintendent();
            $superintendent->queue_number = $finalQueueNumber;
            $superintendent->office = $request->input('office_sds');
            $superintendent->services = implode(', ', $request->input('service_sds'));
            $superintendent->save();

            $queue_number = $superintendent->queue_number;
            $office = $superintendent->office;
            $services = $superintendent->services;

        } elseif ($targetTable === 'assistant_superintendents') {
            // Get the next queue number for assistant_superintendents
            $prefix = 'ASDS';
            $lastEntry = AssistantSuperintendent::orderBy('queue_number', 'desc')->first();
            // Extract the numeric part of the last queue number and increment it
            if ($lastEntry) {
                preg_match('/\d+/', $lastEntry->queue_number, $matches);
                $lastNumber = (int)$matches[0];
                $nextQueueNumber = $lastNumber + 1;
            } else {
                $nextQueueNumber = 1;
            }
            $nextQueueNumberFormatted = str_pad($nextQueueNumber, 3, '0', STR_PAD_LEFT);
            $finalQueueNumber = $prefix . $nextQueueNumberFormatted;

            // Store the data in the assistant_superintendents table
            $assistantSuperintendent = new AssistantSuperintendent();
            $assistantSuperintendent ->queue_number = $finalQueueNumber;
            $assistantSuperintendent ->office = $request->input('office_asds');
            $assistantSuperintendent ->services = implode(', ', $request->input('service_asds'));
            $assistantSuperintendent ->save();

            $queue_number = $assistantSuperintendent->queue_number;
            $office = $assistantSuperintendent->office;
            $services = $assistantSuperintendent->services;

        } elseif ($targetTable === 'admin') {
            // Get the next queue number for Administration Office
            $prefix = 'ADMIN';
            $lastEntry = Admin::orderBy('queue_number', 'desc')->first();
            // Extract the numeric part of the last queue number and increment it
            if ($lastEntry) {
                preg_match('/\d+/', $lastEntry->queue_number, $matches);
                $lastNumber = (int)$matches[0];
                $nextQueueNumber = $lastNumber + 1;
            } else {
                $nextQueueNumber = 1;
            }
            $nextQueueNumberFormatted = str_pad($nextQueueNumber, 3, '0', STR_PAD_LEFT);
            $finalQueueNumber = $prefix . $nextQueueNumberFormatted;

            // Store the data in the admin table
            $admin = new Admin();
            $admin ->queue_number = $finalQueueNumber;
            $admin ->office = $request->input('office_admin');
            $admin ->services = implode(', ', $request->input('service_admin'));
            $admin ->save();

            $queue_number = $admin->queue_number;
            $office = $admin->office;
            $services = $admin->services;

        }elseif ($targetTable === 'cid') {
            // Get the next queue number for CID Office
            $prefix = 'CID';
            $lastEntry = Cid::orderBy('queue_number', 'desc')->first();
            // Extract the numeric part of the last queue number and increment it
            if ($lastEntry) {
                preg_match('/\d+/', $lastEntry->queue_number, $matches);
                $lastNumber = (int)$matches[0];
                $nextQueueNumber = $lastNumber + 1;
            } else {
                $nextQueueNumber = 1;
            }
            $nextQueueNumberFormatted = str_pad($nextQueueNumber, 3, '0', STR_PAD_LEFT);
            $finalQueueNumber = $prefix . $nextQueueNumberFormatted;

            // Store the data in the cid table
            $cid = new Cid();
            $cid ->queue_number = $finalQueueNumber;
            $cid ->office = $request->input('office_cid');
            $cid ->services = implode(', ', $request->input('service_cid'));
            $cid ->save();

            $queue_number = $cid->queue_number;
            $office = $cid->office;
            $services = $cid->services;

        }elseif ($targetTable === 'finance') {
            // Get the next queue number for finance Office
            $prefix = 'ACC';
            $lastEntry = finance::orderBy('queue_number', 'desc')->first();
            // Extract the numeric part of the last queue number and increment it
            if ($lastEntry) {
                preg_match('/\d+/', $lastEntry->queue_number, $matches);
                $lastNumber = (int)$matches[0];
                $nextQueueNumber = $lastNumber + 1;
            } else {
                $nextQueueNumber = 1;
            }
            $nextQueueNumberFormatted = str_pad($nextQueueNumber, 3, '0', STR_PAD_LEFT);
            $finalQueueNumber = $prefix . $nextQueueNumberFormatted;

            // Store the data in the cid table
            $finance = new Finance();
            $finance ->queue_number = $finalQueueNumber;
            $finance ->office = $request->input('office_finance');
            $finance ->services = implode(', ', $request->input('service_finance'));
            $finance ->save();

            $queue_number = $finance->queue_number;
            $office = $finance->office;
            $services = $finance->services;

        }elseif ($targetTable === 'ict') {
            // Get the next queue number for ICT Office
            $prefix = 'ICT';
            $lastEntry = Ict::orderBy('queue_number', 'desc')->first();
            // Extract the numeric part of the last queue number and increment it
            if ($lastEntry) {
                preg_match('/\d+/', $lastEntry->queue_number, $matches);
                $lastNumber = (int)$matches[0];
                $nextQueueNumber = $lastNumber + 1;
            } else {
                $nextQueueNumber = 1;
            }
            $nextQueueNumberFormatted = str_pad($nextQueueNumber, 3, '0', STR_PAD_LEFT);
            $finalQueueNumber = $prefix . $nextQueueNumberFormatted;

            // Store the data in the ict table
            $ict = new Ict();
            $ict ->queue_number = $finalQueueNumber;
            $ict ->office = $request->input('office_ict');
            $ict ->services = implode(', ', $request->input('service_ict'));
            $ict ->save();

            $queue_number = $ict->queue_number;
            $office = $ict->office;
            $services = $ict->services;

        }elseif ($targetTable === 'legal') {
            // Get the next queue number for Legal Office
            $prefix = 'LEG';
            $lastEntry = Legal::orderBy('queue_number', 'desc')->first();
            // Extract the numeric part of the last queue number and increment it
            if ($lastEntry) {
                preg_match('/\d+/', $lastEntry->queue_number, $matches);
                $lastNumber = (int)$matches[0];
                $nextQueueNumber = $lastNumber + 1;
            } else {
                $nextQueueNumber = 1;
            }
            $nextQueueNumberFormatted = str_pad($nextQueueNumber, 3, '0', STR_PAD_LEFT);
            $finalQueueNumber = $prefix . $nextQueueNumberFormatted;

            // Store the data in the legal table
            $legal = new Legal();
            $legal ->queue_number = $finalQueueNumber;
            $legal ->office = $request->input('office_legal');
            $legal ->services = implode(', ', $request->input('service_legal'));
            $legal ->save();

            $queue_number = $legal->queue_number;
            $office = $legal->office;
            $services = $legal->services;

        }elseif ($targetTable === 'sgod') {
            // Get the next queue number for SGOD Office
            $prefix = 'SGOD';
            $lastEntry = Sgod::orderBy('queue_number', 'desc')->first();
            // Extract the numeric part of the last queue number and increment it
            if ($lastEntry) {
                preg_match('/\d+/', $lastEntry->queue_number, $matches);
                $lastNumber = (int)$matches[0];
                $nextQueueNumber = $lastNumber + 1;
            } else {
                $nextQueueNumber = 1;
            }
            $nextQueueNumberFormatted = str_pad($nextQueueNumber, 3, '0', STR_PAD_LEFT);
            $finalQueueNumber = $prefix . $nextQueueNumberFormatted;

            // Store the data in the sgod table
            $sgod = new Sgod();
            $sgod ->queue_number = $finalQueueNumber;
            $sgod ->office = $request->input('office_sgod');
            $sgod ->services = implode(', ', $request->input('service_sgod'));
            $sgod ->save();

            $queue_number = $sgod->queue_number;
            $office = $sgod->office;
            $services = $sgod->services;

        }elseif ($targetTable === 'school') {
            // Get the next queue number for School
            $prefix = 'SCH';
            $lastEntry = School::orderBy('queue_number', 'desc')->first();
            // Extract the numeric part of the last queue number and increment it
            if ($lastEntry) {
                preg_match('/\d+/', $lastEntry->queue_number, $matches);
                $lastNumber = (int)$matches[0];
                $nextQueueNumber = $lastNumber + 1;
            } else {
                $nextQueueNumber = 1;
            }
            $nextQueueNumberFormatted = str_pad($nextQueueNumber, 3, '0', STR_PAD_LEFT);
            $finalQueueNumber = $prefix . $nextQueueNumberFormatted;

            // Store the data in the school table
            $school = new School();
            $school ->queue_number = $finalQueueNumber;
            $school ->office = $request->input('office_school');
            $school ->services = implode(', ', $request->input('service_school'));
            $school ->save();

            $queue_number = $school->queue_number;
            $office = $school->office;
            $services = $school->services;
        }


        // Redirect or return response
        return redirect()->route('print', [
            'target_table' => $targetTable,
            'queue_number' => $queue_number,
            'office' => $office,
            'services' => $services,
        ]);

    }

        public function print(Request $request)
    {
        $targetTable = $request->input('target_table');
        $queue_number = $request->input('queue_number');
        $office = $request->input('office');
        $services = $request->input('services');


        return view('print', compact('targetTable', 'queue_number', 'office', 'services'));
    }
    
}
