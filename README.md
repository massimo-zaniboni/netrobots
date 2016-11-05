NETROBOT - Realtime
===================

IMPORTANT: this is a version of the game-server based on ZeroMQ libraries. 
It is not any more supported/current.
The development switched to a normal HHTP based version, using Tornado http server
for answering to clients only when it is their turn.

An experimental fork of [https://github.com/gbinside/netrobots], using ZMQ and Protobuffer.

Liberamente basato su P-ROBOTS [http://corewar.co.uk/probots/p-robo4.txt]

NOTE: Tests are not yet converted.

Getting Started
===============

Package Requirements
--------------------

On Debian/Ubuntu

  sudo aptitude install python-flask protbuf-compiler python-protobuf libzmq3 libzmq3-dev python-zmq

Starting
--------

On main directory

  python run.py [ip-address] [web-port] [zmq-port] [simulation-passes-by-second] [network-commands-by-second]

Suggest default configurations are:

  python run.py 0.0.0.0 8098 1234 4 2

With these settings:
* all the IP ports of the host can be used for starting web and ZMQ connessions
* http connesion start on port 8098
* zmq connessions start on port 1234
* every second of simulated time, there can be until 4 commands issued from any robot. So a robot can perform an action every 1/4 of simulated second
* every second of real time, the commands from clients are checked 2 times. Every command is related to 1/4 of simulated time, so the ratio between real time and simulated time is 1/2 in this case
* the ratio is used for allowing robots on small network to issue commands, slowing down the simulated world

Open the browser at

  http://[ip-address]:[web-port]/

Launch some demo robot, specifying the connection params:

  cd example/python
  python rabbit.py [ip-address] [zmq-port]i
  python sniper.py [ip-address] [zmq-port]

For example if they are on the same server

  python rabbit.py 127.0.0.1 1234
  python sniper.py 127.0.0.1 1234

You can launch a demo robot more than one time, if you want populate the board.

NOTE:
* the browser must be launched, otherwise the game threads do not start
* the browser after first launch can also be closed
* the majority of resources are used from the JavaScript code running on clients and showing the board, so a pure server with many boards should do not display the board

Robots Coding Instructions
==========================

Programming Language
--------------------

Robots can be written using any programming language, because they communicate with the server using:
* Proto Buffers serialization library
* ZeroMQ message API

API
---

Study:
* "client/netrobots.proto" for a description of the RobotStatus
* "client/connect.py" for the API class
* "example/python" for some example of Robot

BOARD
=====
* L'arena è di 1000x1000 basata in 0,0 in basso a sinistra
* gli angoli si misurano in gradi

              135    90   45
                  \  |  /
                   \ | /
             180 --- x --- 0
                   / | \
                  /  |  \
              225   270   315

* il robot occupa le sue coordinate, con una raggio di 1 (usato per il calcolo delle collisioni)

ROBOT
======

~~I robot sono tutti uguali. Le costanti fisiche sono hardcodate per ora.~~

CANNONATE
=========

I proiettili si intendono in tiro balistico, quindi non vengono considerate le eventuali collisioni inaspettate con robot di passaggio,
 perché non vi sono, inquanto i colpi viaggiano più in alto.
I proiettili sparati fuori dall'arena esplodono fuori, non collidono coi bordi per lo stesso motivo di cui sopra.

TODO
=====

* ~~I robot hanno tutti le stesse costanti di base, implementare un sistema a punti per personalizzarsi il robot.~~
* Raffinare la logica di sterzo sopra la velocità massima di sterzo (`_max_sterling_speed`), magari con aggiunta di danno autoinflitto
* L'urto con qualcosa infligge 2 punti di danno a prescindere dalla velocità al momento dell'impatto. Farlo dipendere dalla velocità?
* Muri; ora l'arena è vuota, si potrebbere prevedere muri casuali, ma questo imporrebbe modifiche anche allo scanner.
