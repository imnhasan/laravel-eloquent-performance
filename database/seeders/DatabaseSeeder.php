<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Device;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $devices = collect([
            ['name' => 'Apple Watch Edition Series 5', 'brand' => 'Apple', 'resolution' => '448 x 368 pixels (~326 ppi density)'],
            ['name' => 'Apple Watch Series 5', 'brand' => 'Apple', 'resolution' => '448 x 368 pixels (~326 ppi density)'],
            ['name' => 'Apple Watch Series 5 Aluminum', 'brand' => 'Apple', 'resolution' => '448 x 368 pixels (~326 ppi density)'],
            ['name' => 'Apple iPad 10.2', 'brand' => 'Apple', 'resolution' => '1620 x 2160 pixels, 4:3 ratio (~264 ppi density)'],
            ['name' => 'Apple iPhone 11', 'brand' => 'Apple', 'resolution' => '828 x 1792 pixels, 19.5:9 ratio (~326 ppi density)'],
            ['name' => 'Apple iPhone 11 Pro', 'brand' => 'Apple', 'resolution' => '1125 x 2436 pixels, 19.5:9 ratio (~458 ppi density)'],
            ['name' => 'Apple iPhone 11 Pro Max', 'brand' => 'Apple', 'resolution' => '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)'],
            ['name' => 'Apple iPad Air (2019)', 'brand' => 'Apple', 'resolution' => '1668 x 2224 pixels, 4:3 ratio (~265 ppi density)'],
            ['name' => 'Apple iPad mini (2019)', 'brand' => 'Apple', 'resolution' => '1536 x 2048 pixels, 4:3 ratio (~324 ppi density)'],
            ['name' => 'Apple iPad Pro 12.9 (2018)', 'brand' => 'Apple', 'resolution' => '2048 x 2732 pixels, 4:3 ratio (~265 ppi density)'],
            ['name' => 'Apple iPad Pro 11', 'brand' => 'Apple', 'resolution' => '1668 x 2388 pixels (~265 ppi density)'],
            ['name' => 'Apple Watch Series 4 Aluminum', 'brand' => 'Apple', 'resolution' => '448 x 368 pixels (~326 ppi density)'],
            ['name' => 'Apple Watch Series 4', 'brand' => 'Apple', 'resolution' => '448 x 368 pixels (~326 ppi density)'],
            ['name' => 'Apple iPhone XR', 'brand' => 'Apple', 'resolution' => '828 x 1792 pixels, 19.5:9 ratio (~326 ppi density)'],
            ['name' => 'Apple iPad 9.7 (2018)', 'brand' => 'Apple', 'resolution' => '1536 x 2048 pixels, 4:3 ratio (~264 ppi density)'],
            ['name' => 'Apple Watch Edition Series 3', 'brand' => 'Apple', 'resolution' => '390 x 312 pixels (~303 ppi density)'],
            ['name' => 'Apple Watch Series 3', 'brand' => 'Apple', 'resolution' => '390 x 312 pixels (~303 ppi density)'],
            ['name' => 'Apple Watch Series 3 Aluminum', 'brand' => 'Apple', 'resolution' => '390 x 312 pixels (~303 ppi density)'],
            ['name' => 'Apple iPhone X', 'brand' => 'Apple', 'resolution' => '1125 x 2436 pixels, 19.5:9 ratio (~458 ppi density)'],
            ['name' => 'Apple iPad Pro 12.9 (2017)', 'brand' => 'Apple', 'resolution' => '2732 x 2048 pixels, 4:3 ratio (~265 ppi density)'],
            ['name' => 'Apple iPad Pro 10.5 (2017)', 'brand' => 'Apple', 'resolution' => '1668 x 2224 pixels, 4:3 ratio (~265 ppi density)'],
            ['name' => 'Apple iPad 9.7 (2017)', 'brand' => 'Apple', 'resolution' => '1536 x 2048 pixels, 4:3 ratio (~264 ppi density)'],
            ['name' => 'Apple iPhone 8', 'brand' => 'Apple', 'resolution' => '750 x 1334 pixels, 16:9 ratio (~326 ppi density)'],
            ['name' => 'Apple Watch Series 1 Sport 42mm', 'brand' => 'Apple', 'resolution' => '390 x 312 pixels (~303 ppi pixel density)'],
            ['name' => 'Apple Watch Series 1 Sport 38mm', 'brand' => 'Apple', 'resolution' => '340 x 272 pixels (~290 ppi pixel density)'],
            ['name' => 'Apple Watch Edition Series 2 38mm', 'brand' => 'Apple', 'resolution' => '340 x 272 pixels (~290 ppi pixel density)'],
            ['name' => 'Apple Watch Edition Series 2 42mm', 'brand' => 'Apple', 'resolution' => '390 x 312 pixels (~303 ppi pixel density)'],
            ['name' => 'Apple Watch Series 2 38mm', 'brand' => 'Apple', 'resolution' => '340 x 272 pixels (~290 ppi pixel density)'],
            ['name' => 'Apple Watch Series 2 42mm', 'brand' => 'Apple', 'resolution' => '390 x 312 pixels (~303 ppi pixel density)'],
            ['name' => 'Apple Watch Series 2 Sport 42mm', 'brand' => 'Apple', 'resolution' => '390 x 312 pixels (~303 ppi pixel density)'],
            ['name' => 'Apple Watch Series 2 Sport 38mm', 'brand' => 'Apple', 'resolution' => '340 x 272 pixels (~290 ppi pixel density)'],
            ['name' => 'Apple iPhone 8 Plus', 'brand' => 'Apple', 'resolution' => '1080 x 1920 pixels (~380 ppi pixel density)'],
            ['name' => 'Apple iPhone 7 Plus', 'brand' => 'Apple', 'resolution' => '1080 x 1920 pixels (~401 ppi pixel density)'],
            ['name' => 'Apple iPhone 7', 'brand' => 'Apple', 'resolution' => '750 x 1334 pixels (~326 ppi pixel density)'],
            ['name' => 'Apple iPad Pro 9.7', 'brand' => 'Apple', 'resolution' => '1536 x 2048 pixels (~264 ppi pixel density)'],
            ['name' => 'Apple iPhone SE', 'brand' => 'Apple', 'resolution' => '640 x 1136 pixels (~326 ppi pixel density)'],
            ['name' => 'Apple Watch Edition 42mm', 'brand' => 'Apple', 'resolution' => '390 x 312 pixels (~303 ppi pixel density)'],
            ['name' => 'Apple Watch Edition 38mm', 'brand' => 'Apple', 'resolution' => '340 x 272 pixels (~290 ppi pixel density)'],
            ['name' => 'Apple Watch 42mm', 'brand' => 'Apple', 'resolution' => '390 x 312 pixels (~303 ppi pixel density)'],
            ['name' => 'Apple Watch 38mm', 'brand' => 'Apple', 'resolution' => '340 x 272 pixels (~290 ppi pixel density)'],
            ['name' => 'Apple Watch Sport 42mm', 'brand' => 'Apple', 'resolution' => '390 x 312 pixels (~302 ppi pixel density)'],
            ['name' => 'Apple Watch Sport 38mm', 'brand' => 'Apple', 'resolution' => '340 x 272 pixels (~290 ppi pixel density)'],
            ['name' => 'Apple iPad Pro', 'brand' => 'Apple', 'resolution' => '2048 x 2732 pixels (~264 ppi pixel density)'],
            ['name' => 'Apple iPad mini 4', 'brand' => 'Apple', 'resolution' => '1536 x 2048 pixels (~324 ppi pixel density)'],
            ['name' => 'Apple iPhone 6s Plus', 'brand' => 'Apple', 'resolution' => '1080 x 1920 pixels (~401 ppi pixel density)'],
            ['name' => 'Apple iPhone 6s', 'brand' => 'Apple', 'resolution' => '750 x 1334 pixels (~326 ppi pixel density)'],
            ['name' => 'Apple iPad Air 2', 'brand' => 'Apple', 'resolution' => '1536 x 2048 pixels (~264 ppi pixel density)'],
            ['name' => 'Apple iPad mini 3', 'brand' => 'Apple', 'resolution' => '1536 x 2048 pixels (~324 ppi pixel density)'],
            ['name' => 'Apple iPhone 6 Plus', 'brand' => 'Apple', 'resolution' => '1080 x 1920 pixels (~401 ppi pixel density)'],
            ['name' => 'Apple iPhone 6', 'brand' => 'Apple', 'resolution' => '750 x 1334 pixels (~326 ppi pixel density)'],
            ['name' => 'Apple iPad Air', 'brand' => 'Apple', 'resolution' => '1536 x 2048 pixels (~264 ppi pixel density)'],
            ['name' => 'Apple iPad mini 2', 'brand' => 'Apple', 'resolution' => '1536 x 2048 pixels (~324 ppi pixel density)'],
            ['name' => 'Apple iPhone 5c', 'brand' => 'Apple', 'resolution' => '640 x 1136 pixels (~326 ppi pixel density)'],
            ['name' => 'Apple iPhone 5s', 'brand' => 'Apple', 'resolution' => '640 x 1136 pixels (~326 ppi pixel density)'],
            ['name' => 'Apple iPad 4 Wi-Fi', 'brand' => 'Apple', 'resolution' => '1536 x 2048 pixels (~264 ppi pixel density)'],
            ['name' => 'Apple iPad 4 Wi-Fi + Cellular', 'brand' => 'Apple', 'resolution' => '1536 x 2048 pixels (~264 ppi pixel density)'],
            ['name' => 'Apple iPad mini Wi-Fi', 'brand' => 'Apple', 'resolution' => '768 x 1024 pixels (~162 ppi pixel density)'],
            ['name' => 'Apple iPad mini Wi-Fi + Cellular', 'brand' => 'Apple', 'resolution' => '768 x 1024 pixels (~162 ppi pixel density)'],
            ['name' => 'Apple iPhone 5', 'brand' => 'Apple', 'resolution' => '640 x 1136 pixels (~326 ppi pixel density)'],
            ['name' => 'Apple iPad 3 Wi-Fi', 'brand' => 'Apple', 'resolution' => '1536 x 2048 pixels (~264 ppi pixel density)'],
            ['name' => 'Apple iPad 3 Wi-Fi + Cellular', 'brand' => 'Apple', 'resolution' => '1536 x 2048 pixels (~264 ppi pixel density)'],
            ['name' => 'Apple iPhone 4s', 'brand' => 'Apple', 'resolution' => '640 x 960 pixels (~330 ppi pixel density)'],
            ['name' => 'Apple iPad 2 CDMA', 'brand' => 'Apple', 'resolution' => '768 x 1024 pixels (~132 ppi pixel density)'],
            ['name' => 'Apple iPad 2 Wi-Fi + 3G', 'brand' => 'Apple', 'resolution' => '768 x 1024 pixels (~132 ppi pixel density)'],
            ['name' => 'Apple iPad 2 Wi-Fi', 'brand' => 'Apple', 'resolution' => '768 x 1024 pixels (~132 ppi pixel density)'],
            ['name' => 'Apple iPad Wi-Fi', 'brand' => 'Apple', 'resolution' => '768 x 1024 pixels (~132 ppi pixel density)'],
            ['name' => 'Apple iPad Wi-Fi + 3G', 'brand' => 'Apple', 'resolution' => '768 x 1024 pixels (~132 ppi pixel density)'],
            ['name' => 'Apple iPhone 4 CDMA', 'brand' => 'Apple', 'resolution' => '640 x 960 pixels (~330 ppi pixel density)'],
            ['name' => 'Apple iPhone 4', 'brand' => 'Apple', 'resolution' => '640 x 960 pixels (~330 ppi pixel density)'],
            ['name' => 'Apple iPhone 3GS', 'brand' => 'Apple', 'resolution' => '320 x 480 pixels (~165 ppi pixel density)'],
            ['name' => 'Apple iPhone 3G', 'brand' => 'Apple', 'resolution' => '320 x 480 pixels (~165 ppi pixel density)'],
            ['name' => 'Apple iPhone', 'brand' => 'Apple', 'resolution' => '320 x 480 pixels (~165 ppi pixel density)'],
        ]);

        $devices->each(fn ($device) => Device::create($device));
    }
}
