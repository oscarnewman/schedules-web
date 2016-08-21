<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Device;
use Push;

class SendPush extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $devices = Device::all()->toArray();
        $pushDevices = array_map(function($device) {
            return Push::Device($device['token']);
        }, $devices);

        // dd($pushDevices);
        // map each eloquent device into a device collection usable by the library
        $devices = Push::DeviceCollection($pushDevices);

        $message = Push::Message($this->message, [
            'badge' => 1,
            'sound' => 'default'
        ]);

        $push = Push::app('schedules-ios')
                ->to($devices)
                ->send($message);


    }
}
