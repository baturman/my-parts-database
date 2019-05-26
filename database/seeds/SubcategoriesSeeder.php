<?php

use App\Subcategory;
use Illuminate\Database\Seeder;

class SubcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Microcontrollers
        $subcategory = new subcategory();
        $subcategory->name = "Arduino";
        $subcategory->category_id = 1;
        $subcategory->description = "Arduino is an open-source electronics platform based on easy-to-use hardware and software. Arduino boards are able to read inputs - light on a sensor, a finger on a button, or a Twitter message - and turn it into an output - activating a motor, turning on an LED, publishing something online.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Arduino Shields";
        $subcategory->category_id = 1;
        $subcategory->description = "Arduino is an open-source electronics platform based on easy-to-use hardware and software. Arduino boards are able to read inputs - light on a sensor, a finger on a button, or a Twitter message - and turn it into an output - activating a motor, turning on an LED, publishing something online.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "NodeMCU";
        $subcategory->category_id = 1;
        $subcategory->save();
        $subcategory->description = "NodeMCU is an open source IoT platform. It includes firmware which runs on the ESP8266 Wi-Fi SoC from Espressif Systems, and hardware which is based on the ESP-12 module. It is based on the eLua project, and built on the Espressif Non-OS SDK for ESP8266. It uses many open source projects, such as lua-cjson and SPIFFS.";

        // Breakout Boards
        $subcategory = new subcategory();
        $subcategory->name = "DC-DC Converters";
        $subcategory->category_id = 2;
        $subcategory->description = "A DC-to-DC converter is an electronic circuit or electromechanical device that converts a source of direct current from one voltage level to another. It is a type of electric power converter. Power levels range from very low to very high.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "LCD/OLED Displays";
        $subcategory->category_id = 2;
        $subcategory->description = "A liquid-crystal display is a flat-panel display or other electronically modulated optical device that uses the light-modulating properties of liquid crystals. Liquid crystals do not emit light directly, instead using a backlight or reflector to produce images in colour or monochrome.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Led Matrix Displays";
        $subcategory->category_id = 2;
        $subcategory->description = "";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Relay Boards";
        $subcategory->category_id = 2;
        $subcategory->description = "The relay module is a separate hardware device used for remote device switching. With it you can remotely control devices over a network or the Internet. Devices can be remotely powered on or off with commands coming from ClockWatch Enterprise delivered over a local or wide area network.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Motor Drivers";
        $subcategory->category_id = 2;
        $subcategory->description="A motor driver is a small Current Amplifier whose function is to take a low-current control signal and then turn it into a higher-current signal that can drive a motor. The L293D is a typical Motor Driver which can drive 2 DC motors simultaneously. Motor Driver ICs are primarily used in autonomous robotics only.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Logic Level Converters";
        $subcategory->category_id = 2;
        $subcategory->description = "";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "USB UART Converters";
        $subcategory->category_id = 2;
        $subcategory->description = "";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Battery Management Systems";
        $subcategory->category_id = 2;
        $subcategory->description = "";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "RTC";
        $subcategory->category_id = 2;
        $subcategory->description="Real Time Clock (RTC) Module. This handy module keeps accurate time for years using a tiny coin-cell, and is very simple to connect to your Arduino project. A driver library allows your program to easily set or read the time and date.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Ethernet";
        $subcategory->category_id = 2;
        $subcategory->description="ENC28J60 Ethernet Module utilizes the new Microchip ENC28J60 Stand-Alone Ethernet Controller IC featuring a host of features to handle most of the network protocol requirements. This Ethernet LAN module connects directly to most microcontrollers.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Keypad";
        $subcategory->category_id = 2;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Audio Amplifier";
        $subcategory->category_id = 2;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Audio Player";
        $subcategory->category_id = 2;
        $subcategory->description="";
        $subcategory->save();

        // Wireless Communication
        $subcategory = new subcategory();
        $subcategory->name = "XBee";
        $subcategory->category_id = 3;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Bluetooth";
        $subcategory->category_id = 3;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Radio Frequency";
        $subcategory->category_id = 3;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Infrared";
        $subcategory->category_id = 3;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "GPS";
        $subcategory->category_id = 3;
        $subcategory->description="";
        $subcategory->save();

        // Sensors
        $subcategory = new subcategory();
        $subcategory->name = "Temperature & Humidity";
        $subcategory->category_id = 4;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Line & Proximity Sensors";
        $subcategory->category_id = 4;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Gas, Air & Fire Sensors";
        $subcategory->category_id = 4;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Voltage & Current Sensors";
        $subcategory->category_id = 4;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Touch Sensors";
        $subcategory->category_id = 4;
        $subcategory->description="";
        $subcategory->save();

        // Components
        $subcategory = new subcategory();
        $subcategory->name = "Resistors";
        $subcategory->category_id = 5;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Inductors";
        $subcategory->category_id = 5;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Thermistors";
        $subcategory->category_id = 5;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Oscillator";
        $subcategory->category_id = 5;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Potentiometer";
        $subcategory->category_id = 5;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Trimmers";
        $subcategory->category_id = 5;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Joystick";
        $subcategory->category_id = 5;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "LED";
        $subcategory->category_id = 5;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Diodes";
        $subcategory->category_id = 5;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Capacitors";
        $subcategory->category_id = 5;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Fuse";
        $subcategory->category_id = 5;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Speakers";
        $subcategory->category_id = 5;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Relays";
        $subcategory->category_id = 5;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Encoders";
        $subcategory->category_id = 5;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Lasers";
        $subcategory->category_id = 5;
        $subcategory->description="";
        $subcategory->save();

        // SBC
        $subcategory = new subcategory();
        $subcategory->name = "Raspberry Pi";
        $subcategory->category_id = 6;
        $subcategory->description = "The Raspberry Pi is a low cost, credit-card sized computer that plugs into a computer monitor or TV, and uses a standard keyboard and mouse. It is a capable little device that enables people of all ages to explore computing, and to learn how to program in languages like Scratch and Python.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Onion Omega";
        $subcategory->category_id = 6;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Asus Tinkerboard";
        $subcategory->category_id = 6;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "SBC Accessories";
        $subcategory->category_id = 6;
        $subcategory->description="";
        $subcategory->save();

        // Integrated Circuits
        $subcategory = new subcategory();
        $subcategory->name = "Voltage Regulators";
        $subcategory->category_id = 7;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Transistors";
        $subcategory->category_id = 7;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Mosfets";
        $subcategory->category_id = 7;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Drivers";
        $subcategory->category_id = 7;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Optocoupler";
        $subcategory->category_id = 7;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Comparators";
        $subcategory->category_id = 7;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Op-Amp";
        $subcategory->category_id = 7;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Microcontroller";
        $subcategory->category_id = 7;
        $subcategory->description="";
        $subcategory->save();

        // Motors
        $subcategory = new subcategory();
        $subcategory->name = "Brushless Motors";
        $subcategory->category_id = 8;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Brushed Motors";
        $subcategory->category_id = 8;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Servo Motors";
        $subcategory->category_id = 8;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Fans";
        $subcategory->category_id = 8;
        $subcategory->description="";
        $subcategory->save();

        // Cables
        $subcategory = new subcategory();
        $subcategory->name = "Ethernet Cable";
        $subcategory->category_id = 9;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Jumper Cable";
        $subcategory->category_id = 9;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "RCA Cable";
        $subcategory->category_id = 9;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Crocodile Cable";
        $subcategory->category_id = 9;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Banana Cable";
        $subcategory->category_id = 9;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "HDMI Cable";
        $subcategory->category_id = 9;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Barrel Cable";
        $subcategory->category_id = 9;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "USB Cable";
        $subcategory->category_id = 9;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Hook-up Wire";
        $subcategory->category_id = 9;
        $subcategory->description="";
        $subcategory->save();

        // Switch
        $subcategory = new subcategory();
        $subcategory->name = "Push Buttons";
        $subcategory->category_id = 10;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Rocker Switches";
        $subcategory->category_id = 10;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Tactile Buttons";
        $subcategory->category_id = 10;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Toggle Switches";
        $subcategory->category_id = 10;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Reed Switches";
        $subcategory->category_id = 10;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Rotary Switches";
        $subcategory->category_id = 10;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Button Caps";
        $subcategory->category_id = 10;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Potentiometer Knobs";
        $subcategory->category_id = 10;
        $subcategory->description="";
        $subcategory->save();

        // Power
        $subcategory = new subcategory();
        $subcategory->name = "Li-ion Battery";
        $subcategory->category_id = 11;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Li-Po Battery";
        $subcategory->category_id = 11;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Rechargeable Battery";
        $subcategory->category_id = 11;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Lead Acid Battery";
        $subcategory->category_id = 11;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Switch Mode Power Supplies";
        $subcategory->category_id = 11;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Wall Adapters";
        $subcategory->category_id = 11;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Battery Holders";
        $subcategory->category_id = 11;
        $subcategory->description="";
        $subcategory->save();

        // Sockets / Jacks / Connectors
        $subcategory = new subcategory();
        $subcategory->name = "RJ Jacks";
        $subcategory->category_id = 12;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "USB Connectors";
        $subcategory->category_id = 12;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Car Lighter Connectors";
        $subcategory->category_id = 12;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Power Connectors";
        $subcategory->category_id = 12;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Barrel Connectors";
        $subcategory->category_id = 12;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "T Plug";
        $subcategory->category_id = 12;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "RCA Connectors";
        $subcategory->category_id = 12;
        $subcategory->description="";
        $subcategory->save();

        // PCB Materials
        $subcategory = new subcategory();
        $subcategory->name = "Prototyping Boards";
        $subcategory->category_id = 13;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Fuse Holder";
        $subcategory->category_id = 13;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Terminals";
        $subcategory->category_id = 13;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Soldering Materials";
        $subcategory->category_id = 13;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Headers";
        $subcategory->category_id = 13;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Breadboards";
        $subcategory->category_id = 13;
        $subcategory->description="";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Dip Socket";
        $subcategory->category_id = 5;
        $subcategory->description="";
        $subcategory->save();

        // Displays
        $subcategory = new subcategory();
        $subcategory->name = "LCD/TFT Touch Screens";
        $subcategory->category_id = 14;
        $subcategory->description = "A liquid-crystal display is a flat-panel display or other electronically modulated optical device that uses the light-modulating properties of liquid crystals. Liquid crystals do not emit light directly, instead using a backlight or reflector to produce images in colour or monochrome.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "HMI Displays";
        $subcategory->category_id = 14;
        $subcategory->description = "";
        $subcategory->save();

        // Miscellaneous
        $subcategory = new subcategory();
        $subcategory->name = "Heat Sinks";
        $subcategory->category_id = 15;
        $subcategory->description = "";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Thermal Isolator";
        $subcategory->category_id = 15;
        $subcategory->description = "";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Project Boxes";
        $subcategory->category_id = 15;
        $subcategory->description = "";
        $subcategory->save();




    }
}
