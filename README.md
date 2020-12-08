# Dream Home (Mini project using LAMP Stack)
<h2 id="overview">Overview</h2>

The dissertation's major motivation was to create a precise and accurate indoor navigation system by manipulating an impulsive received signal strength indicator (RSSI)
in a very challenging underground car park environment. To achieve our goals a testbed architecture and fingerprint database were created by recording and pre-processing sensor data by using a combination of solar-powered blue tooth sensors and the BLE-USB bridge receiver. A qualitative analysis was then conducted to evaluate its efficiency. This fingerprint database was further used with prominent machine learning techniques, pathfinding algorithms, floor maps, and an audio module to create a navigation application. Various machine learning algorithms like affinity propagation, k-nearest neighbours, k-means, support-vector machine, and logistic regression were studied in different environments, and affinity propagation was finally used due to its reliability and robust nature, to successfully navigate around the testbed. The entire process is divided into 2 phases: Online Phase and Offline Phase. 



<h2 id="test_bed_architecture">1.1 Testbed And Architecture (Online Phase)</h2>
Our testbed has been set up inside an underground basement car park. The car park consisted of 46 parking slots, out of which 2 are disabled parking spaces. It consists of a single entrance and exit gate and has two building entrances. The entire parking area can be subdivided into 17 alphabetic blocks. Apart from blocks F, G, J, and Q, all other 13 blocks contain three parking slots each. F and J consist of 2 slots, whereas G and Q contain 1. G1 and K1 are reserved disabled parking slots. The block and slot naming are created such that users can locate and perform seamless navigation inside the testbed. The Following captures the 3D view of the carpark chosen as the Testbed.

![Image of Testbed](https://github.com/bejoyjose1993/DreamHome_PHP/blob/master/PHP/Dreamhome_Delete_1.jpg)
