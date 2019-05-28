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
        $subcategory->name = "Shields";
        $subcategory->category_id = 1;
        $subcategory->description = "Arduino shields are modular circuit boards that piggyback onto your Arduino to instill it with extra functionality. ... Many Arduino shields are stackable. You can connect many shields together to create a \"Big Mac\" of Arduino modules.";
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
        $subcategory->name = "Relay Boards";
        $subcategory->category_id = 2;
        $subcategory->description = "The relay module is a separate hardware device used for remote device switching. With it you can remotely control devices over a network or the Internet. Devices can be remotely powered on or off with commands coming from ClockWatch Enterprise delivered over a local or wide area network.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Logic Level Converters";
        $subcategory->category_id = 2;
        $subcategory->description = "If you've ever tried to connect a 3.3V device to a 5V system, you know what a challenge it can be. The SparkFun bi-directional logic level converter is a small device that safely steps down 5V signals to 3.3V AND steps up 3.3V to 5V at the same time. This level converter also works with 2.8V and 1.8V devices. What really separates this Logic level converter from our previous versions is that you can successfully set your high and low voltages and step up and down between them safely on the same channel. Each level converter has the capability of converting 4 pins on the high side to 4 pins on the low side with two inputs and two outputs provided for each side.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Serial Converters";
        $subcategory->category_id = 2;
        $subcategory->description = "It is allow you to connect your computer through USB port and use it as a regular serial communication. All USB protocol is handled within the module.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Battery Management Systems (BMS)";
        $subcategory->category_id = 2;
        $subcategory->description = "A battery management system is any electronic system that manages a rechargeable battery, such as by protecting the battery from operating outside its safe operating area, monitoring its state, calculating secondary data, reporting that data, controlling its environment, authenticating it and / or balancing it.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Real Time Clock (RTC)";
        $subcategory->category_id = 2;
        $subcategory->description="Real Time Clock (RTC) Module. This handy module keeps accurate time for years using a tiny coin-cell, and is very simple to connect to your Arduino project. A driver library allows your program to easily set or read the time and date.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Ethernet";
        $subcategory->category_id = 2;
        $subcategory->description="ENC28J60 Ethernet Module utilizes the new Microchip ENC28J60 Stand-Alone Ethernet Controller IC featuring a host of features to handle most of the network protocol requirements. This Ethernet LAN module connects directly to most microcontrollers.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Keypads";
        $subcategory->category_id = 2;
        $subcategory->description="A keypad is a set of buttons or keys bearing digits, symbols and/or alphabetical letters placed in order on a pad, which can be used as an efficient input device. A keypad may be purely numeric, as that found on a calculator or a digital door lock, or alphanumeric as those used on cellular phones.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Audio Amplifier";
        $subcategory->category_id = 2;
        $subcategory->description="An audio power amplifier is an electronic amplifier that amplifies low-power electronic audio signals such as the signal from radio receiver or electric guitar pickup to a level that is high enough for driving loudspeakers or headphones";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Audio Player";
        $subcategory->category_id = 2;
        $subcategory->description="Audio player module is a an easy to use music player device whose design is based on a high-quality audio chip ATS2301. ... You can easily control the audio module by sending uart commands, such as switch songs, change the volume, play mode and so on.";
        $subcategory->save();

        // Wireless Communication
        $subcategory = new subcategory();
        $subcategory->name = "XBee";
        $subcategory->category_id = 3;
        $subcategory->description="XBee is a module produced by Digi International mainly use as a radio communication transceiver and receiver. It is mesh communication protocols that sits on top of IEEE 802.15.4 ZigBee standard. Most of the XBee modules in the market are utilised the 2.4 GHz bandwidth with various type of antennas.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Bluetooth";
        $subcategory->category_id = 3;
        $subcategory->description="Bluetooth is a standardized protocol for sending and receiving data via a 2.4GHz wireless link. It's a secure protocol, and it's perfect for short-range, low-power, low-cost, wireless transmissions between electronic devices. ... Or, with the right module, it can be used to build a homebrew, wireless MP3-playing speaker.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Radio Frequency Modules";
        $subcategory->category_id = 3;
        $subcategory->description="An RF module (radio frequency module) is a (usually) small electronic device used to transmit and/or receive radio signals between two devices.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Infrared";
        $subcategory->category_id = 3;
        $subcategory->description="Infrared Modules. Infrared radiation transfers heat directly and at high efficiency. ... Heraeus infrared modules comprise one or more infrared lamps mounted in a suitable housing and usually wired into a terminal box mounted on the back of the unit.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "GPS Modules";
        $subcategory->category_id = 3;
        $subcategory->description="t is a GPS navigation GPS receiver module piece of hardware that you add to other piece of hardware (e.g. car head unit, Raspberry PI, Arduino even your computer) to give it the possibility to receive information from GPS satellites.";
        $subcategory->save();

        // Sensors
        $subcategory = new subcategory();
        $subcategory->name = "Temperature & Humidity";
        $subcategory->category_id = 4;
        $subcategory->description="Temperature Humidity Sensors. Temperature sensors measure air temperature, while humidity sensors measure air humidity. Both sensors are often applied in combination to reduce cost. ... Temperature sensors should always be mounted at a height of at least 10m to ensure sufficient distance from heat radiating from the earth.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Line & Proximity Sensors";
        $subcategory->category_id = 4;
        $subcategory->description="\"Proximity Sensor\" includes all sensors that perform non-contact detection in comparison to sensors, such as limit switches, that detect objects by physically contacting them. Proximity Sensors convert information on the movement or presence of an object into an electrical signal.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Gas, Air & Fire Sensors";
        $subcategory->category_id = 4;
        $subcategory->description="A gas detector is a device that detects the presence of gases in an area, often as part of a safety system. This type of equipment is used to detect a gas leak or other emissions and can interface with a control system so a process can be automatically shut down.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Voltage & Current Sensors";
        $subcategory->category_id = 4;
        $subcategory->description="A current sensor is a device that detects electric current in a wire, and generates a signal proportional to that current. The generated signal could be analog voltage or current or even a digital output.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Touch Sensors";
        $subcategory->category_id = 4;
        $subcategory->description="A touch sensor is a type of equipment that captures and records physical touch or embrace on a device and/or object. It enables a device or object to detech touch, typically by a human user or operator. A touch sensor may also be called a touch detector.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Water Flow & Rain Sensors";
        $subcategory->category_id = 4;
        $subcategory->description="Water flow sensor consists of a plastic valve body, a water rotor, and a hall-effect sensor. When water flows through the rotor, rotor rolls. Its speed changes with different rate of flow. The hall-effect sensor outputs the corresponding pulse Signal.";
        $subcategory->save();

        // Components
        $subcategory = new subcategory();
        $subcategory->name = "Resistors";
        $subcategory->category_id = 5;
        $subcategory->description="A resistor is a passive two-terminal electrical component that implements electrical resistance as a circuit element. In electronic circuits, resistors are used to reduce current flow, adjust signal levels, to divide voltages, bias active elements, and terminate transmission lines, among other uses.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Power Resistors";
        $subcategory->category_id = 5;
        $subcategory->description="A power resistor is a resistor designed and manufactured to dissipate large amounts of power in a compact physical package. ... An example use for power resistors are load banks used to dissipate power generated during engine braking in vehicles using electrical motors, such as locomotives or trams.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Inductors";
        $subcategory->category_id = 5;
        $subcategory->description="An inductor, also called a coil, choke, or reactor, is a passive two-terminal electrical component that stores energy in a magnetic field when electric current flows through it. An inductor typically consists of an insulated wire wound into a coil around a core.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Thermistors";
        $subcategory->category_id = 5;
        $subcategory->description="A thermistor is a type of resistor whose resistance is dependent on temperature, more so than in standard resistors. The word is a portmanteau of thermal and resistor. ... With NTC thermistors, resistance decreases as temperature rises.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Oscillator";
        $subcategory->category_id = 5;
        $subcategory->description="An oscillator is a mechanical or electronic device that works on the principles of oscillation: a periodic fluctuation between two things based on changes in energy. Computers, clocks, watches, radios, and metal detectors are among the many devices that use oscillators.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Potentiometer";
        $subcategory->category_id = 5;
        $subcategory->description="A potentiometer is a three-terminal resistor with a sliding or rotating contact that forms an adjustable voltage divider. If only two terminals are used, one end and the wiper, it acts as a variable resistor or rheostat.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Rotary Encoder";
        $subcategory->category_id = 5;
        $subcategory->description="A potentiometer is a three-terminal resistor with a sliding or rotating contact that forms an adjustable voltage divider. If only two terminals are used, one end and the wiper, it acts as a variable resistor or rheostat.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Trimpot";
        $subcategory->category_id = 5;
        $subcategory->description="A trimpot or trimmer potentiometer is a small potentiometer which is used for adjustment, tuning and calibration in circuits. When they are used as a variable resistance (wired as a rheostat) they are called preset resistors";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Joystick";
        $subcategory->category_id = 5;
        $subcategory->description="A joystick is an input device consisting of a stick that pivots on a base and reports its angle or direction to the device it is controlling. A joystick, also known as the control column, is the principal control device in the cockpit of many civilian and military aircraft, either as a center stick or side-stick.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "LED";
        $subcategory->category_id = 5;
        $subcategory->description="A light-emitting diode is a semiconductor light source that emits light when current flows through it. Electrons in the semiconductor recombine with electron holes, releasing energy in the form of photons. This effect is called electroluminescence.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Diodes";
        $subcategory->category_id = 5;
        $subcategory->description="A diode is a two-terminal electronic component that conducts current primarily in one direction; it has low resistance in one direction, and high resistance in the other";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Laser Diodes";
        $subcategory->category_id = 5;
        $subcategory->description="A laser diode, injection laser diode, or diode laser is a semiconductor device similar to a light-emitting diode in which the laser beam is created at the diode's junction. Laser diodes can directly convert electrical energy into light.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Capacitors";
        $subcategory->category_id = 5;
        $subcategory->description="A capacitor is a passive two-terminal electronic component that stores electrical energy in an electric field. The effect of a capacitor is known as capacitance.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Fuse";
        $subcategory->category_id = 5;
        $subcategory->description="In electronics and electrical engineering, a fuse is an electrical safety device that operates to provide over-current protection of an electrical circuit. Its essential component is a metal wire or strip that melts when too much current flows through it, thereby interrupting the current.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Speakers";
        $subcategory->category_id = 5;
        $subcategory->description="A loudspeaker is an electroacoustic transducer; a device which converts an electrical audio signal into a corresponding sound. The most widely used type of speaker in the 2010s is the dynamic speaker, invented in 1925 by Edward W. Kellogg and Chester W. Rice.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Relays";
        $subcategory->category_id = 5;
        $subcategory->description="A relay is an electrically operated switch. Many relays use an electromagnet to mechanically operate a switch, but other operating principles are also used, such as solid-state relays.";
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
        $subcategory->description="Omega2 is a personal single-board computer created by a Toronto-based startup company called Onion, released on Kickstarter. It is advertised as \"the world's smallest Linux Server\".";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Asus Tinkerboard";
        $subcategory->category_id = 6;
        $subcategory->description="The ASUS Tinker Board is a single board computer launched by ASUS in early 2017. Its physical size and GPIO pinout are designed to be compatible with the second-generation and later Raspberry Pi models.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "SBC Accessories";
        $subcategory->category_id = 6;
        $subcategory->description="Single Board Computer accessories such as adapters, covers etc.";
        $subcategory->save();

        // Integrated Circuits
        $subcategory = new subcategory();
        $subcategory->name = "Voltage Regulators";
        $subcategory->category_id = 7;
        $subcategory->description="A voltage regulator is a system designed to automatically maintain a constant voltage level. A voltage regulator may use a simple feed-forward design or may include negative feedback. It may use an electromechanical mechanism, or electronic components.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Transistors";
        $subcategory->category_id = 7;
        $subcategory->description="A transistor is a semiconductor device used to amplify or switch electronic signals and electrical power. It is composed of semiconductor material usually with at least three terminals for connection to an external circuit";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Mosfets";
        $subcategory->category_id = 7;
        $subcategory->description="The MOSFET (Metal Oxide Semiconductor Field Effect Transistor) transistor is a semiconductor device which is widely used for switching and amplifying electronic signals in the electronic devices. ... The MOSFET is a four terminal device with source(S), gate (G), drain (D) and body (B) terminals.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Drivers";
        $subcategory->category_id = 7;
        $subcategory->description="IC that is capable of driving leds, motors, let matrices etc.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Optocoupler";
        $subcategory->category_id = 7;
        $subcategory->description="An opto-isolator is an electronic component that transfers electrical signals between two isolated circuits by using light. Opto-isolators prevent high voltages from affecting the system receiving the signal.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Comparators";
        $subcategory->category_id = 7;
        $subcategory->description="In electronics, a comparator is a device that compares two voltages or currents and outputs a digital signal indicating which is larger. It has two analog input terminals and and one binary digital output. The output is ideally A comparator consists of a specialized high-gain differential amplifier.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Op-Amp";
        $subcategory->category_id = 7;
        $subcategory->description="An operational amplifier is a DC-coupled high-gain electronic voltage amplifier with a differential input and, usually, a single-ended output. In this configuration, an op-amp produces an output potential that is typically hundreds of thousands of times larger than the potential difference between its input terminals";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Microcontroller";
        $subcategory->category_id = 7;
        $subcategory->description="A microcontroller is a small computer on a single integrated circuit. In modern terminology, it is similar to, but less sophisticated than, a system on a chip; an SoC may include a microcontroller as one of its components";
        $subcategory->save();

        // Motors
        $subcategory = new subcategory();
        $subcategory->name = "Brushless Motors";
        $subcategory->category_id = 8;
        $subcategory->description="A brushless DC electric motor, also known as electronically commutated motor and synchronous DC motors, are synchronous motors powered by DC electricity via an inverter or switching power supply which produces an AC electric current to drive each phase of the motor via a closed loop controller.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Brushed Motors";
        $subcategory->category_id = 8;
        $subcategory->description="A brushed DC electric motor is an internally commutated electric motor designed to be run from a direct current power source. ... Since the brushes wear down and require replacement, brushless DC motors using power electronic devices have displaced brushed motors from many applications.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Servo Motors";
        $subcategory->category_id = 8;
        $subcategory->description="A servomotor is a rotary actuator or linear actuator that allows for precise control of angular or linear position, velocity and acceleration. It consists of a suitable motor coupled to a sensor for position feedback.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Step Motors";
        $subcategory->category_id = 8;
        $subcategory->description="A stepper motor, also known as step motor or stepping motor, is a brushless DC electric motor that divides a full rotation into a number of equal steps";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Motor Accessories";
        $subcategory->category_id = 8;
        $subcategory->description="Propellers, Servo Horns, Motor Holders etc.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Fans";
        $subcategory->category_id = 8;
        $subcategory->description="A fan is a powered machine used to create flow within a fluid, typically a gas such as air. A fan consists of a rotating arrangement of vanes or blades which act on the air. The rotating assembly of blades and hub is known as an impeller, a rotor, or a runner.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Motor Drivers";
        $subcategory->category_id = 2;
        $subcategory->description="A motor driver is a small Current Amplifier whose function is to take a low-current control signal and then turn it into a higher-current signal that can drive a motor. The L293D is a typical Motor Driver which can drive 2 DC motors simultaneously. Motor Driver ICs are primarily used in autonomous robotics only.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Electronic Speed Control (ESC)";
        $subcategory->category_id = 2;
        $subcategory->description="An electronic speed control or ESC is an electronic circuit that controls and regulates the speed of an electric motor. It may also provide reversing of the motor and dynamic braking. Miniature electronic speed controls are used in electrically powered radio controlled models.";
        $subcategory->save();

        // Cables
        $subcategory = new subcategory();
        $subcategory->name = "Ethernet Cables";
        $subcategory->category_id = 9;
        $subcategory->description="Networking cables are networking hardware used to connect one network device to other network devices or to connect two or more computers to share printers, scanners etc";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Jumper Cables";
        $subcategory->category_id = 9;
        $subcategory->description="A jump wire (also known as jumper wire, or jumper) is an electrical wire, or group of them in a cable, with a connector or pin at each end (or sometimes without them – simply \"tinned\"), which is normally used to interconnect the components of a breadboard or other prototype or test circuit, internally or with other equipment or components, without soldering.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "RCA Cables";
        $subcategory->category_id = 9;
        $subcategory->description="An RCA connector, sometimes called a phono connector or Cinch connector, is a type of electrical connector commonly used to carry audio and video signals.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "HDMI Cables";
        $subcategory->category_id = 9;
        $subcategory->description="HDMI is a proprietary audio/video interface for transmitting uncompressed video data and compressed or uncompressed digital audio data from an HDMI-compliant source device, such as a display controller, to a compatible computer monitor, video projector, digital television, or digital audio device";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "USB Cables";
        $subcategory->category_id = 9;
        $subcategory->description="The term USB stands for \"Universal Serial Bus\". USB cable assemblies are some of the most popular cable types available, used mostly to connect computers to peripheral devices such as cameras, camcorders, printers, scanners, and more.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Hook-up Wires";
        $subcategory->category_id = 9;
        $subcategory->description="Hook-up wire is in the family of lead wire that may be used for low-voltage, low current applications and is a single insulated conductor. Hook-up wire is frequently used in control panels, automotives, meters, ovens, as internal wiring of computers, electronic equipment, business machines and appliances.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Other Cables";
        $subcategory->category_id = 9;
        $subcategory->description="The term USB stands for \"Universal Serial Bus\". USB cable assemblies are some of the most popular cable types available, used mostly to connect computers to peripheral devices such as cameras, camcorders, printers, scanners, and more.";
        $subcategory->save();

        // Switches & Buttons
        $subcategory = new subcategory();
        $subcategory->name = "Push Buttons";
        $subcategory->category_id = 10;
        $subcategory->description="A push-button or simply button is a simple switch mechanism for controlling some aspect of a machine or a process. Buttons are typically made out of hard material, usually plastic or metal. The surface is usually flat or shaped to accommodate the human finger or hand, so as to be easily depressed or pushed.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Toggle Switches";
        $subcategory->category_id = 10;
        $subcategory->description="A toggle switch is a switch that has just two positions. For example, light switches that turn a light on or off are toggle switches. On computer keyboards, the Caps Lock key is a toggle switch because pressing it can have two meanings depending on what the current setting is.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Momentary Switches";
        $subcategory->category_id = 10;
        $subcategory->description="A type of switch usually in the form of a push button that is only engaged while it is being depressed, as opposed to a typical “on/off” switch, which latches in its set position. Momentary switches may be normally open or normally closed. A normally open switch doesn't make contact until and unless it is held down.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Reed Switches";
        $subcategory->category_id = 10;
        $subcategory->description="The reed switch is an electrical switch operated by an applied magnetic field. It was invented at Bell Telephone Laboratories in 1936 by Walter B. Ellwood. In its simplest and most common form, it consists of a pair of ferromagnetic flexible metal reeds contacts in a hermetically sealed glass envelope.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Rotary Switches";
        $subcategory->category_id = 10;
        $subcategory->description="A rotary switch is a switch operated by rotation. These are often chosen when more than 2 positions are needed, such as a three-speed fan or a CB radio with multiple frequencies of reception or \"channels\".";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Button Caps";
        $subcategory->category_id = 10;
        $subcategory->description="Push button caps are a type of push button that is used as switch mechanism for controlling an aspect of a machine or a process.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Potentiometer Knobs";
        $subcategory->category_id = 10;
        $subcategory->description="A control knob is a rotary control used to provide input to a device when grasped by an operator and turned, so that the degree of rotation corresponds to the desired input. Such knobs are one of the most common components in control systems and are found on all sorts of devices.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Selenoid";
        $subcategory->category_id = 10;
        $subcategory->description="A solenoid is a coil wound into a tightly packed helix. The term was invented in 1823 by André-Marie Ampère to designate a helical coil. As a technical term in the study of electromagnetism, a solenoid is a coil that is \"pipe-like\" in the sense that its length is substantially greater than its diameter.";
        $subcategory->save();

        // Battery & Accessories
        $subcategory = new subcategory();
        $subcategory->name = "Li-ion Battery";
        $subcategory->category_id = 11;
        $subcategory->description="A lithium-ion battery or Li-ion battery is a type of rechargeable battery, first proposed by chemist M Stanley Whittingham at Exxon in the 1970s. Lithium-ion batteries are commonly used for portable electronics and electric vehicles and are growing in popularity for military and aerospace applications.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Li-Po Battery";
        $subcategory->category_id = 11;
        $subcategory->description="A lithium polymer battery, or more correctly lithium-ion polymer battery, is a rechargeable battery of lithium-ion technology using a polymer electrolyte instead of a liquid electrolyte. High conductivity semisolid polymers form this electrolyte.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Ni-MH Battery";
        $subcategory->category_id = 11;
        $subcategory->description="A nickel metal hydride battery, abbreviated NiMH or Ni–MH, is a type of rechargeable battery. The chemical reaction at the positive electrode is similar to that of the nickel–cadmium cell, with both using nickel oxide hydroxide. However, the negative electrodes use a hydrogen-absorbing alloy instead of cadmium.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Lead Acid Battery";
        $subcategory->category_id = 11;
        $subcategory->description="A lead acid battery is a secondary cell, meaning that it is rechargeable. It is very common in cars and trucks. It contains plates of lead and lead(IV) oxide in a sulfuric acid solution. The lead(IV) oxide oxidizes the lead plate, making an electrical current.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Battery Clips";
        $subcategory->category_id = 11;
        $subcategory->description="A battery holder is one or more compartments or chambers for holding a battery. For dry cells, the holder must also make electrical contact with the battery terminals. For wet cells, cables are often connected to the battery terminals, as is found in automobiles or emergency lighting equipment";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Battery Holders";
        $subcategory->category_id = 11;
        $subcategory->description="A battery holder is one or more compartments or chambers for holding a battery. For dry cells, the holder must also make electrical contact with the battery terminals. For wet cells, cables are often connected to the battery terminals, as is found in automobiles or emergency lighting equipment";
        $subcategory->save();

        // Sockets & Connectors
        $subcategory = new subcategory();
        $subcategory->name = "RJ Connectors";
        $subcategory->category_id = 12;
        $subcategory->description="A registered jack (RJ) is a standardized telecommunication network interface for connecting voice and data equipment to a service provided by a local exchange carrier or long distance carrier. Registration interfaces were first defined in the Universal Service Ordering Code (USOC) system of the Bell System in the United States for complying with the registration program for customer-supplied telephone equipment mandated by the Federal Communications Commission (FCC) in the 1970s.[1] They were subsequently codified in title 47 of the Code of Federal Regulations Part 68.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "USB Connectors";
        $subcategory->category_id = 12;
        $subcategory->description="A universal serial bus (USB) connector is a connector between a computer and a peripheral device such as a printer, monitor, scanner, mouse or keyboard. ... The USB connector was developed to simplify the connection between computers and peripheral devices.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Car Lighter Connectors";
        $subcategory->category_id = 12;
        $subcategory->description="The cigarette lighter receptacle in an automobile was initially designed to power an electrically heated cigarette lighter, but became a de facto standard DC connector to supply electrical power for portable accessories used in or near an automobile.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Power Sockets & Connectors";
        $subcategory->category_id = 12;
        $subcategory->description="An electrical connector is an electro-mechanical device used to join electrical terminations and create an electrical circuit. Electrical connectors consist of plugs and jacks";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Barrel Sockets & Connectors";
        $subcategory->category_id = 12;
        $subcategory->description="A coaxial power connector is an electrical power connector used for attaching extra-low voltage devices such as consumer electronics to external electricity. Also known as barrel connectors, concentric barrel connectors or tip connectors, these small cylindrical connectors come in an enormous variety of sizes.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "RCA Sockets & Connectors";
        $subcategory->category_id = 12;
        $subcategory->description="An RCA connector, sometimes called a phono connector or Cinch connector, is a type of electrical connector commonly used to carry audio and video signals";
        $subcategory->save();

        // PCB Materials
        $subcategory = new subcategory();
        $subcategory->name = "Prototyping Boards";
        $subcategory->category_id = 13;
        $subcategory->description="Stripboard is the generic name for a widely used type of electronics prototyping board characterized by a 0.1 inches (2.54 mm) regular (rectangular) grid of holes, with wide parallel strips of copper cladding running in one direction all the way across one side of the board.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Fuse Holder & Sockets";
        $subcategory->category_id = 13;
        $subcategory->description="Fuse holders are devices for containing, protecting and mounting fuses. ... Open fuse holder types are fuse clips, fuse blocks, socket and plug-on cap varieties. The fully enclosed variety may use a fuse carrier that is inserted into a holder or have other means to fully enclose the fuse";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "PCB Terminals";
        $subcategory->category_id = 13;
        $subcategory->description="PCB terminal blocks are modular, insulated devices that mount on printed circuit boards (PCBs) and secure two or more wires together. Terminal blocks are used to secure and/or terminate wires and, in their simplest form, consist of several individual terminals arranged in a long strip.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Female Headers";
        $subcategory->category_id = 13;
        $subcategory->description="PCB headers are a type of electrical connector. Typically, one side of the header is comprised of a series of pins that are soldered to the printed circuit board (PCB) surface.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Male Headers";
        $subcategory->category_id = 13;
        $subcategory->description="PCB headers are a type of electrical connector. Typically, one side of the header is comprised of a series of pins that are soldered to the printed circuit board (PCB) surface.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Dip Sockets";
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
        $subcategory->description = "HMI's & Operator Displays. HMI is the acronym for Human Machine Interface which, simply put, is an interface between a user and a machine. HMI is a term specific to manufacturing and process control systems. An HMI provides a visual representation of the status of a control system with real-time data acquisition.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "LCD/OLED Displays";
        $subcategory->category_id = 14;
        $subcategory->description = "A liquid-crystal display is a flat-panel display or other electronically modulated optical device that uses the light-modulating properties of liquid crystals. Liquid crystals do not emit light directly, instead using a backlight or reflector to produce images in colour or monochrome.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Led Matrix";
        $subcategory->category_id = 14;
        $subcategory->description = "Led matrix is a dot matrix of large display, low resolution value and is useful for both industrial or commercial displays as well as for hobbyist human interface machines. ... In this LED matrix each can be control individually by controlling the electricity through each pair of columns or rows diodes.";
        $subcategory->save();

        // Miscellaneous
        $subcategory = new subcategory();
        $subcategory->name = "Heat Sinks";
        $subcategory->category_id = 15;
        $subcategory->description = "A heat sink is a passive heat exchanger that transfers the heat generated by an electronic or a mechanical device to a fluid medium, often air or a liquid coolant, where it is dissipated away from the device, thereby allowing regulation of the device's temperature at optimal levels.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Thermal Isolator";
        $subcategory->category_id = 15;
        $subcategory->description = "Thermal insulation is the reduction of heat transfer between objects in thermal contact or in range of radiative influence. Thermal insulation can be achieved with specially engineered methods or processes, as well as with suitable object shapes and materials";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Project Boxes";
        $subcategory->category_id = 15;
        $subcategory->description = "Plastic, ABS Boxes of different sizes.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "LED Bezels";
        $subcategory->category_id = 15;
        $subcategory->description = "LED bezels are different types of housing used to mount and secure LEDs (light emitting diodes). They are a cost-effective way of creating a professional install and improving the appearance of LED output. Each LED is inserted into the back of a bezel and placed into a drilled hole for a clean look.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Development Kits";
        $subcategory->category_id = 15;
        $subcategory->description = "A set of components specifically designed for a platform ";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Breadboards";
        $subcategory->category_id = 15;
        $subcategory->description="A breadboard is a construction base for prototyping of electronics. Originally the word referred to a literal bread board, a polished piece of wood used for slicing bread. In the 1970s the solderless breadboard became available and nowadays the term \"breadboard\" is commonly used to refer to these.";
        $subcategory->save();

        $subcategory = new subcategory();
        $subcategory->name = "Power Supply Units";
        $subcategory->category_id = 15;
        $subcategory->description="A state-owned enterprise in India is called a public sector undertaking or a public sector enterprise. These companies are owned by the union government of India, or one of the many state or territorial governments, or both. The company stock needs to be majority-owned by the government to be a PSU.";
        $subcategory->save();


    }
}
