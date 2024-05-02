<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Room;

class ImportRooms extends Command
{
    protected $signature = 'rooms:import';
    protected $description = 'Import rooms from a text file';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $path = base_path('rooms.txt');
        $file_handle = fopen($path, "r");

        while (!feof($file_handle)) {
            $line = fgets($file_handle);
            if (!empty($line)) {
                $data = explode(',', $line);
                Room::create([
                    'room_number' => trim($data[0]),
                    'type' => trim($data[1]),
                    'capacity' => trim($data[2]),
                    'rate' => trim($data[3])
                ]);
            }
        }

        fclose($file_handle);
        $this->info('Rooms imported successfully!');
    }
}

