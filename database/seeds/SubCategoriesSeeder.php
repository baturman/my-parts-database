<?php

use App\SubCategory;
use Illuminate\Database\Seeder;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Microcontrollers
        $subCategory = new SubCategory();
        $subCategory->name = "Arduino";
        $subCategory->category_id = 1;
        $subCategory->description = "Arduino is an open-source electronics platform based on easy-to-use hardware and software. Arduino boards are able to read inputs - light on a sensor, a finger on a button, or a Twitter message - and turn it into an output - activating a motor, turning on an LED, publishing something online.";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Arduino Shields";
        $subCategory->category_id = 1;
        $subCategory->description = "Arduino is an open-source electronics platform based on easy-to-use hardware and software. Arduino boards are able to read inputs - light on a sensor, a finger on a button, or a Twitter message - and turn it into an output - activating a motor, turning on an LED, publishing something online.";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "NodeMCU";
        $subCategory->category_id = 1;
        $subCategory->save();
        $subCategory->description = "NodeMCU is an open source IoT platform. It includes firmware which runs on the ESP8266 Wi-Fi SoC from Espressif Systems, and hardware which is based on the ESP-12 module. It is based on the eLua project, and built on the Espressif Non-OS SDK for ESP8266. It uses many open source projects, such as lua-cjson and SPIFFS.";

        // Breakout Boards
        $subCategory = new SubCategory();
        $subCategory->name = "DC-DC Converters";
        $subCategory->category_id = 2;
        $subCategory->description = "A DC-to-DC converter is an electronic circuit or electromechanical device that converts a source of direct current from one voltage level to another. It is a type of electric power converter. Power levels range from very low to very high.";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "LCD/OLED Displays";
        $subCategory->category_id = 2;
        $subCategory->description = "A liquid-crystal display is a flat-panel display or other electronically modulated optical device that uses the light-modulating properties of liquid crystals. Liquid crystals do not emit light directly, instead using a backlight or reflector to produce images in colour or monochrome.";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Led Matrix Displays";
        $subCategory->category_id = 2;
        $subCategory->description = "";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Relay Boards";
        $subCategory->category_id = 2;
        $subCategory->description = "The relay module is a separate hardware device used for remote device switching. With it you can remotely control devices over a network or the Internet. Devices can be remotely powered on or off with commands coming from ClockWatch Enterprise delivered over a local or wide area network.";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Motor Drivers";
        $subCategory->category_id = 2;
        $subCategory->description="A motor driver is a small Current Amplifier whose function is to take a low-current control signal and then turn it into a higher-current signal that can drive a motor. The L293D is a typical Motor Driver which can drive 2 DC motors simultaneously. Motor Driver ICs are primarily used in autonomous robotics only.";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Logic Level Converters";
        $subCategory->category_id = 2;
        $subCategory->description = "";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "USB UART Converters";
        $subCategory->category_id = 2;
        $subCategory->description = "";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Battery Management Systems";
        $subCategory->category_id = 2;
        $subCategory->description = "";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "RTC";
        $subCategory->category_id = 2;
        $subCategory->description="Real Time Clock (RTC) Module. This handy module keeps accurate time for years using a tiny coin-cell, and is very simple to connect to your Arduino project. A driver library allows your program to easily set or read the time and date.";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Ethernet";
        $subCategory->category_id = 2;
        $subCategory->description="ENC28J60 Ethernet Module utilizes the new Microchip ENC28J60 Stand-Alone Ethernet Controller IC featuring a host of features to handle most of the network protocol requirements. This Ethernet LAN module connects directly to most microcontrollers.";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Keypad";
        $subCategory->category_id = 2;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Audio Amplifier";
        $subCategory->category_id = 2;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Audio Player";
        $subCategory->category_id = 2;
        $subCategory->description="";
        $subCategory->save();

        // Wireless Communication
        $subCategory = new SubCategory();
        $subCategory->name = "XBee";
        $subCategory->category_id = 3;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Bluetooth";
        $subCategory->category_id = 3;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Radio Frequency";
        $subCategory->category_id = 3;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Infrared";
        $subCategory->category_id = 3;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "GPS";
        $subCategory->category_id = 3;
        $subCategory->description="";
        $subCategory->save();

        // Sensors
        $subCategory = new SubCategory();
        $subCategory->name = "Temperature & Humidity";
        $subCategory->category_id = 4;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Line & Proximity Sensors";
        $subCategory->category_id = 4;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Gas, Air & Fire Sensors";
        $subCategory->category_id = 4;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Voltage & Current Sensors";
        $subCategory->category_id = 4;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Touch Sensors";
        $subCategory->category_id = 4;
        $subCategory->description="";
        $subCategory->save();

        // Components
        $subCategory = new SubCategory();
        $subCategory->name = "Resistors";
        $subCategory->category_id = 5;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Inductors";
        $subCategory->category_id = 5;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Thermistors";
        $subCategory->category_id = 5;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Oscillator";
        $subCategory->category_id = 5;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Potentiometer";
        $subCategory->category_id = 5;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Trimmers";
        $subCategory->category_id = 5;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Joystick";
        $subCategory->category_id = 5;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "LED";
        $subCategory->category_id = 5;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Diodes";
        $subCategory->category_id = 5;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Capacitors";
        $subCategory->category_id = 5;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Fuse";
        $subCategory->category_id = 5;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Speakers";
        $subCategory->category_id = 5;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Relays";
        $subCategory->category_id = 5;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Encoders";
        $subCategory->category_id = 5;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Lasers";
        $subCategory->category_id = 5;
        $subCategory->description="";
        $subCategory->save();

        // SBC
        $subCategory = new SubCategory();
        $subCategory->name = "Raspberry Pi";
        $subCategory->category_id = 6;
        $subCategory->description = "The Raspberry Pi is a low cost, credit-card sized computer that plugs into a computer monitor or TV, and uses a standard keyboard and mouse. It is a capable little device that enables people of all ages to explore computing, and to learn how to program in languages like Scratch and Python.";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Onion Omega";
        $subCategory->category_id = 6;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Asus Tinkerboard";
        $subCategory->category_id = 6;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "SBC Accessories";
        $subCategory->category_id = 6;
        $subCategory->description="";
        $subCategory->save();

        // Integrated Circuits
        $subCategory = new SubCategory();
        $subCategory->name = "Voltage Regulators";
        $subCategory->category_id = 7;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Transistors";
        $subCategory->category_id = 7;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Mosfets";
        $subCategory->category_id = 7;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Drivers";
        $subCategory->category_id = 7;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Optocoupler";
        $subCategory->category_id = 7;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Comparators";
        $subCategory->category_id = 7;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Op-Amp";
        $subCategory->category_id = 7;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Microcontroller";
        $subCategory->category_id = 7;
        $subCategory->description="";
        $subCategory->save();

        // Motors
        $subCategory = new SubCategory();
        $subCategory->name = "Brushless Motors";
        $subCategory->category_id = 8;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Brushed Motors";
        $subCategory->category_id = 8;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Servo Motors";
        $subCategory->category_id = 8;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Fans";
        $subCategory->category_id = 8;
        $subCategory->description="";
        $subCategory->save();

        // Cables
        $subCategory = new SubCategory();
        $subCategory->name = "Ethernet Cable";
        $subCategory->category_id = 9;
        $subCategory->description="";
        $subCategory->save();        
    
        $subCategory = new SubCategory();
        $subCategory->name = "Jumper Cable";
        $subCategory->category_id = 9;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "RCA Cable";
        $subCategory->category_id = 9;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Crocodile Cable";
        $subCategory->category_id = 9;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Banana Cable";
        $subCategory->category_id = 9;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "HDMI Cable";
        $subCategory->category_id = 9;
        $subCategory->description="";
        $subCategory->save(); 

        $subCategory = new SubCategory();
        $subCategory->name = "Barrel Cable";
        $subCategory->category_id = 9;
        $subCategory->description="";
        $subCategory->save();  

        $subCategory = new SubCategory();
        $subCategory->name = "USB Cable";
        $subCategory->category_id = 9;
        $subCategory->description="";
        $subCategory->save(); 

        $subCategory = new SubCategory();
        $subCategory->name = "Hook-up Wire";
        $subCategory->category_id = 9;
        $subCategory->description="";
        $subCategory->save(); 

        // Switch
        $subCategory = new SubCategory();
        $subCategory->name = "Push Buttons";
        $subCategory->category_id = 10;
        $subCategory->description="";
        $subCategory->save(); 

        $subCategory = new SubCategory();
        $subCategory->name = "Rocker Switches";
        $subCategory->category_id = 10;
        $subCategory->description="";
        $subCategory->save(); 

        $subCategory = new SubCategory();
        $subCategory->name = "Tactile Buttons";
        $subCategory->category_id = 10;
        $subCategory->description="";
        $subCategory->save(); 

        $subCategory = new SubCategory();
        $subCategory->name = "Toggle Switches";
        $subCategory->category_id = 10;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Reed Switches";
        $subCategory->category_id = 10;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Rotary Switches";
        $subCategory->category_id = 10;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Button Caps";
        $subCategory->category_id = 10;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Potentiometer Knobs";
        $subCategory->category_id = 10;
        $subCategory->description="";
        $subCategory->save();

        // Power
        $subCategory = new SubCategory();
        $subCategory->name = "Li-ion Battery";
        $subCategory->category_id = 11;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Li-Po Battery";
        $subCategory->category_id = 11;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Rechargeable Battery";
        $subCategory->category_id = 11;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Lead Acid Battery";
        $subCategory->category_id = 11;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Switch Mode Power Supplies";
        $subCategory->category_id = 11;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Wall Adapters";
        $subCategory->category_id = 11;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Battery Holders";
        $subCategory->category_id = 11;
        $subCategory->description="";
        $subCategory->save();

        // Sockets / Jacks / Connectors
        $subCategory = new SubCategory();
        $subCategory->name = "RJ Jacks";
        $subCategory->category_id = 12;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "USB Connectors";
        $subCategory->category_id = 12;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Car Lighter Connectors";
        $subCategory->category_id = 12;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Power Connectors";
        $subCategory->category_id = 12;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Barrel Connectors";
        $subCategory->category_id = 12;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "T Plug";
        $subCategory->category_id = 12;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "RCA Connectors";
        $subCategory->category_id = 12;
        $subCategory->description="";
        $subCategory->save();

        // PCB Materials
        $subCategory = new SubCategory();
        $subCategory->name = "Prototyping Boards";
        $subCategory->category_id = 13;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Fuse Holder";
        $subCategory->category_id = 13;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Terminals";
        $subCategory->category_id = 13;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Soldering Materials";
        $subCategory->category_id = 13;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Headers";
        $subCategory->category_id = 13;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Breadboards";
        $subCategory->category_id = 13;
        $subCategory->description="";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Dip Socket";
        $subCategory->category_id = 5;
        $subCategory->description="";
        $subCategory->save();

        // Displays
        $subCategory = new SubCategory();
        $subCategory->name = "LCD/TFT Touch Screens";
        $subCategory->category_id = 14;
        $subCategory->description = "A liquid-crystal display is a flat-panel display or other electronically modulated optical device that uses the light-modulating properties of liquid crystals. Liquid crystals do not emit light directly, instead using a backlight or reflector to produce images in colour or monochrome.";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "HMI Displays";
        $subCategory->category_id = 14;
        $subCategory->description = "";
        $subCategory->save();

        // Miscellaneous
        $subCategory = new SubCategory();
        $subCategory->name = "Heat Sinks";
        $subCategory->category_id = 15;
        $subCategory->description = "";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Thermal Isolator";
        $subCategory->category_id = 15;
        $subCategory->description = "";
        $subCategory->save();

        $subCategory = new SubCategory();
        $subCategory->name = "Project Boxes";
        $subCategory->category_id = 15;
        $subCategory->description = "";
        $subCategory->save();
    }

}
