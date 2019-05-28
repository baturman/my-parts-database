<?php

use App\Part;
use Illuminate\Database\Seeder;

class PartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $part = new Part();
        $part->name = "Arduino Uno R3";
        $part->description = "Genuine Arduino Uno R3";
        $part->stock = 1;
        $part->url = "https://store.arduino.cc/usa/arduino-uno-rev3";
        $part->price = 85.12;
        $part->location_id = 14;
        $part->subcategory_id = 1;
        $part->save();

        $part->addMedia(storage_path('demo/parts/arduino-uno-original.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['Genuine', 'Working', 'Arduino']);


        $part = new Part();
        $part->name = "Pre-Amplifier Board";
        $part->description = "Passive Tone Board";
        $part->stock = 1;
        $part->url = "https://www.aliexpress.com/item/HIFI-Amplifier-Pre-amplifier-Passive-Tone-Board-Bass-Treble-Volume-Control-Preamp-Board-E3-001/32952646353.html";
        $part->price = 34.84;
        $part->location_id = 12;
        $part->subcategory_id = 15;
        $part->save();

        $part->addMedia(storage_path('demo/parts/BLH-84898.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['Not Tested', 'New', 'Lusya']);


        $part = new Part();
        $part->name = "Bluetooth Audio Receiver & MP3 Module";
        $part->description = "3W Output, MicroSD Card Reader and Playback Control";
        $part->stock = 1;
        $part->url = "https://www.aliexpress.com/item/HIFI-Amplifier-Pre-amplifier-Passive-Tone-Board-Bass-Treble-Volume-Control-Preamp-Board-E3-001/32952646353.html";
        $part->price = 34.84;
        $part->location_id = 12;
        $part->subcategory_id = 15;
        $part->save();

        $part->addMedia(storage_path('demo/parts/bluetooth-mp3-player.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->addMedia(storage_path('demo/parts/Archive-01.zip'))->preservingOriginal()->toMediaCollection('attachments');
        $part->addMedia(storage_path('demo/parts/Archive-02.zip'))->preservingOriginal()->toMediaCollection('attachments');

        $part->tag(['Sanwu', 'Working']);

        $part = new Part();
        $part->name = "4S Battery Management System (CF-4S-30A-A)";
        $part->description = "4S 40A with Balanced Charging";
        $part->stock = 1;
        $part->url = "https://urun.n11.com/diger/4-s-30a-148-v-li-ion-18650-bms-pcm-pil-koruma-148v-P299560289";
        $part->price = 49.84;
        $part->location_id = 4;
        $part->subcategory_id = 11;
        $part->save();

        $part->addMedia(storage_path('demo/parts/CF-4S-30A-A.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['China', 'Not Tested', 'New']);

        $part = new Part();
        $part->name = "Ultrasonic Sensor (HCR-SR04)";
        $part->description = "Ultrasonic Distance Sensor";
        $part->stock = 4;
        $part->url = "https://urun.n11.com/diger/4-s-30a-148-v-li-ion-18650-bms-pcm-pil-koruma-148v-P299560289";
        $part->price = 9.84;
        $part->location_id = 5;
        $part->subcategory_id = 23;
        $part->save();

        $part->addMedia(storage_path('demo/parts/HCR-SR04.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['China', 'Not Tested', 'New']);


        $part = new Part();
        $part->name = "Adjustable Buck Converter with Voltmeter (LM-2596S)";
        $part->description = "In: 4V~40V - Out: 1.25V~37V - 2A";
        $part->stock = 1;
        $part->url = "https://urun.n11.com/diger/4-s-30a-148-v-li-ion-18650-bms-pcm-pil-koruma-148v-P299560289";
        $part->price = 28.12;
        $part->location_id = 9;
        $part->subcategory_id = 4;
        $part->save();

        $part->addMedia(storage_path('demo/parts/LM2596S-voltmeter.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['China', 'Working']);


        $part = new Part();
        $part->name = "LPG Gas Sensor (MQ-6)";
        $part->description = "LPG, Isobutane and Propane Detector";
        $part->stock = 1;
        $part->url = "https://urun.n11.com/diger/4-s-30a-148-v-li-ion-18650-bms-pcm-pil-koruma-148v-P299560289";
        $part->price = 28.12;
        $part->location_id = 9;
        $part->subcategory_id = 4;
        $part->save();

        $part->addMedia(storage_path('demo/parts/MQ-6.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['Pololu', 'Not Tested', 'New']);


        $part = new Part();
        $part->name = "Redboard (FT-232)";
        $part->description = "Arduino Redboard produced by SparkFun.";
        $part->stock = 1;
        $part->url = "https://www.sparkfun.com/products/13975";
        $part->price = 75.12;
        $part->location_id = 3;
        $part->subcategory_id = 1;
        $part->save();

        $part->addMedia(storage_path('demo/parts/redboard.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['SparkFun', 'Genuine', 'Working']);


        $part = new Part();
        $part->name = "Arduino Uno R3 Wifi (CH-340G)";
        $part->description = "Arduino Uno Wifi produced by RobotDyn.";
        $part->stock = 1;
        $part->url = "https://robotdyn.com/uno-wifi-r3-atmega328p-esp8266-32mb-flash-usb-ttl-ch340g-micro-usb.html";
        $part->price = 54.89;
        $part->location_id = 8;
        $part->subcategory_id = 1;
        $part->save();

        $part->addMedia(storage_path('demo/parts/robotdyn-uno-wifi.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['RobotDyn', 'Genuine', 'Not Tested', 'New']);


        $part = new Part();
        $part->name = "Water Flow Sensor";
        $part->description = "1-30L per minute";
        $part->stock = 1;
        $part->url = "https://robotdyn.com/uno-wifi-r3-atmega328p-esp8266-32mb-flash-usb-ttl-ch340g-micro-usb.html";
        $part->price = 54.89;
        $part->location_id = 18;
        $part->subcategory_id = 89;
        $part->save();

        $part->addMedia(storage_path('demo/parts/YF-S201.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['RobotDyn', 'Genuine', 'Not Tested', 'New']);

        $part = new Part();
        $part->name = "Arduino Uno R3 Wifi (CH-340G)";
        $part->description = "Arduino Uno Wifi produced by RobotDyn.";
        $part->stock = 1;
        $part->url = "https://robotdyn.com/uno-wifi-r3-atmega328p-esp8266-32mb-flash-usb-ttl-ch340g-micro-usb.html";
        $part->price = 54.89;
        $part->location_id = 8;
        $part->subcategory_id = 1;
        $part->save();

        $part->addMedia(storage_path('demo/parts/robotdyn-uno-wifi.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['RobotDyn', 'Genuine', 'Not Tested', 'New']);


        $part = new Part();
        $part->name = "Water Flow Sensor";
        $part->description = "1-30L per minute";
        $part->stock = 1;
        $part->url = "https://robotdyn.com/uno-wifi-r3-atmega328p-esp8266-32mb-flash-usb-ttl-ch340g-micro-usb.html";
        $part->price = 54.89;
        $part->location_id = 18;
        $part->subcategory_id = 89;
        $part->save();

        $part->addMedia(storage_path('demo/parts/YF-S201.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['RobotDyn', 'Genuine', 'Not Tested', 'New', 'Abc', 'Nikola Tesla', 'Armut Sport']);

        $part = new Part();
        $part->name = "Water Flow Sensor";
        $part->description = "1-30L per minute";
        $part->stock = 1;
        $part->url = "https://robotdyn.com/uno-wifi-r3-atmega328p-esp8266-32mb-flash-usb-ttl-ch340g-micro-usb.html";
        $part->price = 54.89;
        $part->location_id = 18;
        $part->subcategory_id = 89;
        $part->save();

        $part->addMedia(storage_path('demo/parts/YF-S201.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['RobotDyn', 'Genuine', 'Not Tested', 'New']);

        $part = new Part();
        $part->name = "Arduino Uno R3 Wifi (CH-340G)";
        $part->description = "Arduino Uno Wifi produced by RobotDyn.";
        $part->stock = 1;
        $part->url = "https://robotdyn.com/uno-wifi-r3-atmega328p-esp8266-32mb-flash-usb-ttl-ch340g-micro-usb.html";
        $part->price = 54.89;
        $part->location_id = 8;
        $part->subcategory_id = 1;
        $part->save();

        $part->addMedia(storage_path('demo/parts/robotdyn-uno-wifi.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['RobotDyn', 'Genuine', 'Not Tested', 'New']);


        $part = new Part();
        $part->name = "Water Flow Sensor";
        $part->description = "1-30L per minute";
        $part->stock = 1;
        $part->url = "https://robotdyn.com/uno-wifi-r3-atmega328p-esp8266-32mb-flash-usb-ttl-ch340g-micro-usb.html";
        $part->price = 54.89;
        $part->location_id = 18;
        $part->subcategory_id = 89;
        $part->save();

        $part->addMedia(storage_path('demo/parts/YF-S201.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['RobotDyn', 'Genuine', 'Not Tested', 'New']);

        $part = new Part();
        $part->name = "Arduino Uno R3 Wifi (CH-340G)";
        $part->description = "Arduino Uno Wifi produced by RobotDyn.";
        $part->stock = 1;
        $part->url = "https://robotdyn.com/uno-wifi-r3-atmega328p-esp8266-32mb-flash-usb-ttl-ch340g-micro-usb.html";
        $part->price = 54.89;
        $part->location_id = 8;
        $part->subcategory_id = 1;
        $part->save();

        $part->addMedia(storage_path('demo/parts/robotdyn-uno-wifi.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['RobotDyn', 'Genuine', 'Not Tested', 'New']);


        $part = new Part();
        $part->name = "Water Flow Sensor";
        $part->description = "1-30L per minute";
        $part->stock = 1;
        $part->url = "https://robotdyn.com/uno-wifi-r3-atmega328p-esp8266-32mb-flash-usb-ttl-ch340g-micro-usb.html";
        $part->price = 54.89;
        $part->location_id = 18;
        $part->subcategory_id = 89;
        $part->save();

        $part->addMedia(storage_path('demo/parts/YF-S201.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['RobotDyn', 'Genuine', 'Not Tested', 'New']);

        $part = new Part();
        $part->name = "Arduino Uno R3 Wifi (CH-340G)";
        $part->description = "Arduino Uno Wifi produced by RobotDyn.";
        $part->stock = 1;
        $part->url = "https://robotdyn.com/uno-wifi-r3-atmega328p-esp8266-32mb-flash-usb-ttl-ch340g-micro-usb.html";
        $part->price = 54.89;
        $part->location_id = 8;
        $part->subcategory_id = 1;
        $part->save();

        $part->addMedia(storage_path('demo/parts/robotdyn-uno-wifi.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['RobotDyn', 'Genuine', 'Not Tested', 'New']);

        $part = new Part();
        $part->name = "Ultrasonic Sensor (HCR-SR04)";
        $part->description = "Ultrasonic Distance Sensor";
        $part->stock = 4;
        $part->url = "https://urun.n11.com/diger/4-s-30a-148-v-li-ion-18650-bms-pcm-pil-koruma-148v-P299560289";
        $part->price = 9.84;
        $part->location_id = 5;
        $part->subcategory_id = 23;
        $part->save();

        $part->addMedia(storage_path('demo/parts/HCR-SR04.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['China', 'Not Tested', 'New']);


        $part = new Part();
        $part->name = "Adjustable Buck Converter with Voltmeter (LM-2596S)";
        $part->description = "In: 4V~40V - Out: 1.25V~37V - 2A";
        $part->stock = 1;
        $part->url = "https://urun.n11.com/diger/4-s-30a-148-v-li-ion-18650-bms-pcm-pil-koruma-148v-P299560289";
        $part->price = 28.12;
        $part->location_id = 9;
        $part->subcategory_id = 4;
        $part->save();

        $part->addMedia(storage_path('demo/parts/LM2596S-voltmeter.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['China', 'Working']);

        $part = new Part();
        $part->name = "Ultrasonic Sensor (HCR-SR04)";
        $part->description = "Ultrasonic Distance Sensor";
        $part->stock = 4;
        $part->url = "https://urun.n11.com/diger/4-s-30a-148-v-li-ion-18650-bms-pcm-pil-koruma-148v-P299560289";
        $part->price = 9.84;
        $part->location_id = 5;
        $part->subcategory_id = 23;
        $part->save();

        $part->addMedia(storage_path('demo/parts/HCR-SR04.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['China', 'Not Tested', 'New']);


        $part = new Part();
        $part->name = "Adjustable Buck Converter with Voltmeter (LM-2596S)";
        $part->description = "In: 4V~40V - Out: 1.25V~37V - 2A";
        $part->stock = 1;
        $part->url = "https://urun.n11.com/diger/4-s-30a-148-v-li-ion-18650-bms-pcm-pil-koruma-148v-P299560289";
        $part->price = 28.12;
        $part->location_id = 9;
        $part->subcategory_id = 4;
        $part->save();

        $part->addMedia(storage_path('demo/parts/LM2596S-voltmeter.jpg'))->preservingOriginal()->toMediaCollection('images');
        $part->tag(['China', 'Working']);
    }
}
