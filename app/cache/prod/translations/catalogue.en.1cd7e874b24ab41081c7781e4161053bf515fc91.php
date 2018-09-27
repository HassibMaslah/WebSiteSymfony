<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'messages' => 
  array (
    'translate.link1' => 'Home',
    'translate.link2' => 'Services',
    'translate.link3' => 'Activity',
    'translate.activity1' => 'Drive Test,Initial Tuning,Optimization 3G/4G & Coverage study',
    'translate.activity2' => 'PS LTE  designs',
    'translate.activity3' => '2G/3G Networks Audit',
    'translate.activity4' => '2G/3G/4G Networks Benchmark',
    'translate.activity5' => 'Architecture audit',
    'translate.activity6' => 'Study and analysis of the frequency band change',
    'translate.activity7' => 'Tax cash register',
    'translate.link4' => 'References',
    'translate.link5' => 'Training',
    'translate.link6' => 'Contact',
    'translate.link7' => 'Languages',
    'translate.aboutComp' => 'ABOUT OUR COMPANY',
    'translate.aboutCompText' => 'Telcotec is a company of over three years of experience in the technical and management of telecommunications',
    'translate.Quick' => 'Quick links',
    'translate.Quick1' => 'Optimization',
    'translate.Quick2' => 'Indoor Solution',
    'translate.Quick3' => 'Design of Networks',
    'translate.Quick4' => 'Benchmarking networks',
    'translate.Quick5' => 'End-to-end network audit',
    'translate.Quick6' => 'Operational strategy advising',
    'translate.contactUs' => 'Contact Us',
    'translate.contactUsText' => 'Have questions, comments or just want to say hello',
    'translate.twiter' => 'Twitter Feed',
    'translate.copyright' => 'Copyright 2018 All rights reserved',
    'translate.about' => 'About Us',
    'translate.aboutApp' => 'Our Approach',
    'translate.aboutAppText' => 'Our engineers & consultants managed and optimized several fixed and mobile networks with several million subscribers and conducted dozens of studies and infrastructure projects worth several million euros. They carried out numerous missions of audit, study, optimization, consulting and training in their fields of expertise.',
    'translate.aboutGoal' => 'Our Goal',
    'translate.aboutGoalText' => 'Our goal is to make ourselves useful to you by understanding your specificities and knowing your constraint.',
    'translate.aboutMis' => 'Our Mission',
    'translate.aboutMisText' => 'Our mission is to provide high quality professional services in engineering, consulting and training in the technical and telecommunications management fields to operators, regulators, telecommunications equipment manufacturers and large companies.',
    'translate.aboutOffer' => 'WHAT WE OFFER',
    'translate.aboutOfferText' => 'We work to provide high quality professional services in engineering, consulting and training in the technical and telecommunications management fields to operators, regulators, suppliers and large companies',
    'translate.aboutOfferPer' => 'Performance monitoring and optimization of radio networks',
    'translate.aboutOfferPerText' => 'Optimization of KPIs with commitment to the results,Resolving non quality issues.',
    'translate.aboutOfferIndoorText' => 'Study, planning and design of an Indoor solution,Implementation of an Indoor solution.',
    'translate.aboutOfferDesign' => 'Design and dimensioning of Networks',
    'translate.aboutOfferDesignText' => 'Network design and dimensioning (Radio, Core and Transport), Network planning and dimensioning (FTTx networks).',
    'translate.aboutSeeBtn' => 'See More',
    'translate.aboutAchiv' => 'Our Achievements',
    'translate.aboutAchivText' => 'Telecommunication, Strategic planning, Security and information system',
    'translate.aboutAchivProj' => 'PROJECT COMPLETED',
    'translate.aboutAchivTurn' => 'Turnover',
    'translate.aboutAchivEmpl' => 'WORKERS EMPLOYED',
    'translate.aboutAchivCountries' => 'COUNTRIES',
    'translate.aboutPart' => 'Our Partners',
    'translate.contactInfo' => 'Contact information',
    'translate.contactInfoText' => 'Telcotec team will go back to you shortly. Telcotec will keep your information confidential.',
    'translate.contactLoc' => 'Location',
    'translate.contactPhone' => 'Phone',
    'translate.contactMsg' => 'Send us a Message',
    'translate.contactSendMsg' => 'Send',
    'translate.contactPlcName' => 'your name',
    'translate.contactPlcEmail' => 'your email',
    'translate.contactPlcSubject' => 'subject',
    'translate.ServicesLink11' => 'Optimization',
    'translate.ServicesLink12' => 'Performance monitoring and optimization of radio networks',
    'translate.ServicesLink13' => 'Optimization of KPIs with commitment to the results,Resolving non quality issues.',
    'translate.ServicesLink21' => 'Indoor Solution',
    'translate.ServicesLink23' => 'Study, planning and design of an Indoor solution,Implementation of an Indoor solution.',
    'translate.ServicesLink31' => 'Design of Networks',
    'translate.ServicesLink32' => 'Design and dimensioning of Networks',
    'translate.ServicesLink33' => 'Network design and dimensioning (Radio, Core and Transport), Network planning and dimensioning (FTTx networks).',
    'translate.ServicesLink41' => 'Benchmarking networks',
    'translate.ServicesLink43' => 'Mission realization of technical and commercial benchmarking according to international standards, Customer assistance for the establishment of a benchmark mission.',
    'translate.ServicesLink51' => 'End-to-end network audit',
    'translate.ServicesLink53' => 'Audit and Diagnosis of Network Infrastructure and Architecture, Audit of traffic measurement and billing system, Audit of the information system.',
    'translate.ServicesLink61' => 'Operational strategy advising',
    'translate.ServicesLink63' => 'To provide our customers experienced consultants skills from the telecommunications and IT sectors in several modes. Helping our clients plan the deployment actions that will enable the company to achieve the goal with a coherent operational action plan.',
    'translate.ServicesLink71' => 'Training',
    'translate.ServicesLink73' => 'Offer specialized skills development courses,Transfer of technical know-how.',
    'translate.ServicesLink0' => 'Contact Now',
    'translate.referencesTitre1' => '2G / 3G / 4G Benchemark',
    'translate.referencesInfo1' => '2G/3G/4G Benchmark, RAN network architecture audit.',
    'translate.referencesTitre2' => 'LTE network',
    'translate.referencesInfo2' => 'Study of the radio coverage of an LTE network.',
    'translate.referencesTitre3' => 'Drive Test Project, Initial Tuning & 3G / 4G optimization',
    'translate.referencesInfo3' => 'ERICSSON main partner for radio services in Tunisia',
    'translate.referencesTitre4' => '2G / 3G Network Audit',
    'translate.referencesInfo4' => '2G/3G Network Audit, RAN & CORE Survey, Benchmark QoS.',
    'translate.referencesTitre5' => 'PS-LTE',
    'translate.referencesInfo5' => 'PS-LTE Public Safety project',
    'translate.referencesTitre6' => 'Architecture audit',
    'translate.referencesInfo6' => 'Architecture audit, functionalities and capacity of access and core networks.',
    'translate.referencesTitre7' => 'Study, analyse and technical assistance',
    'translate.referencesInfo7' => 'Study, analyse and technical assistance for « Office de la Marine Marchande et des Ports (OMMP) ».',
    'translate.referencesTitre8' => 'Technical assistance',
    'translate.referencesInfo8' => 'Technical assistance for the project  « Tax cash registers ».',
    'translate.activitesTT' => 'The Training Activity',
    'translate.activitesp1' => 'We bring you our experience of several years in training in mobile networks, IP networks, project management and operations management.',
    'translate.activitesp2' => 'We will provide your senior executives and managers with concise and effective presentations of new technologies and new approaches and architectures that shape trends in our field.',
    'translate.activitesp3' => 'For your engineers and executives we offer complete training sessions helping them to master their different professions Architecture, Engineering, Planning, Operations. In project management, we organize sessions of complete preparation to the PMP certification of the PMI in inter and in intra company.',
    'translate.activitespgm' => 'Training program',
    'translate.activitespgm1' => 'Fundamentals of IP networks',
    'translate.activitespgm2' => 'Fundamentals of mobile networks',
    'translate.activitespgm3' => '2G / 3G / 4G mobile network engineering',
    'translate.activitespgm4' => 'QoS and technical acceptance of networks',
    'translate.activitespgm5' => 'E2E network audit',
    'translate.activitespgm6' => 'Management, monitoring and measurement of the radio spectrum',
    'translate.activitespgm7' => 'Optimization of mobile networks',
    'translate.activitespgm8' => '2G Network Settings and Features',
    'translate.activitespgm9' => '3G Network Settings and Features',
    'translate.activitespgm10' => '4G Network Settings and Features',
    'translate.activitespgm11' => 'Signaling and advanced investigation of 3G problems',
    'translate.activitespgm12' => 'Signaling and advanced investigation of 4G problems',
    'translate.activitespgm13' => 'Engineering and planning of indoor solutions',
    'translate.activitespgm14' => 'Number portability',
    'translate.activitespgm15' => 'Fraud Management',
    'translate.activitestg' => 'Tag',
    'translate.activitestg2' => 'Indoor',
    'translate.activitestg3' => 'Benchmarking',
    'translate.activitestg4' => 'Network Audit',
    'translate.activitestg5' => 'Strategy',
    'translate.activitestg6' => 'Design',
    'translate.activityQL' => 'Quick Links',
    'translate.activityVP' => 'VIEW PROJECT',
    'translate.activityFW1' => 'Our Featured Works',
    'translate.activityFW2' => 'Telecom Engineering - Consulting - Strategic planning &amp; business development',
    'translate.activityExcavator1' => 'Drive Test',
    'translate.activityExcavator2' => 'Initial Tuning',
    'translate.activityExcavator3' => 'Optimization 3G/4G',
    'translate.activityExcavator4' => 'Coverage study',
    'translate.activity1p1' => 'Analysis of OSS Statistics and Drive Test Measures,Verification and optimization of the frequency plan and the neighborhood matrix,Optimization of admission control, load control and HO algorithms,Verification of the call services procedure (AMR / VP / PS) in connected mode.',
    'translate.activity1p2' => 'Balance the traffic between the layers,bands and technologies,Optimizing power configuration settings,Verification of physical problems,Coverage planning and capacity sizing.',
    'translate.activityExcavator21' => 'Radio',
    'translate.activityExcavator22' => 'Core Network',
    'translate.activityExcavator23' => 'Transmission',
    'translate.activityExcavator24' => 'Security',
    'translate.activity2p1' => 'Study and sizing of the solution,Preparation of technical specifications:Radio,Core Network,Transmission,Security.',
    'translate.activity2p2' => 'Study and Analysis of technical compliance of bids,Assistance and control,Acceptance',
    'translate.activityExcavator31' => 'Design Audit',
    'translate.activityExcavator32' => '2G / 3G Usage Strategy',
    'translate.activityExcavator33' => 'Audit of BSS settings',
    'translate.activityExcavator34' => 'Audit of the HO Matrix',
    'translate.activity3p1' => 'Functional audit of all the equipment making up the network,Design Audit and 2G / 3G Usage Strategy.',
    'translate.activity3p2' => 'Audit of the frequency plan and development of a new plan,Audit of BSS settings and capacity management,Audit of the HO Matrix.',
    'translate.activityExcavator41' => 'Analysis of measurement results',
    'translate.activityExcavator42' => 'Analysis of ranking of operators',
    'translate.activityExcavator43' => 'Voice for 2G / 3G',
    'translate.activityExcavator44' => 'Data for 3G / 4G',
    'translate.activity4p1' => 'DT Measures Cities &amp; main roads of different networks:Tunisia Telecom,Ooredoo,Orange.',
    'translate.activity4p2' => 'Analysis of measurement results and ranking of operators according to the services below Voice for 2G / 3G networks,Data for 3G / 4G networks.',
    'translate.activityExcavator51' => 'Study of compliance',
    'translate.activityExcavator52' => 'simulation tools',
    'translate.activityExcavator53' => 'Audit of the frequency plan',
    'translate.activityExcavator54' => 'Audit of BSS settings',
    'translate.activity5p1' => 'Study of compliance with standards and norms,Measurement of the impact of frequency changes using simulation tools.',
    'translate.activity5p2' => 'Audit of the frequency plan and development of a new one,Audit of BSS settings and capacity management.',
    'translate.activityExcavator61' => 'Study of compliance',
    'translate.activityExcavator62' => 'standards and norms',
    'translate.activityExcavator63' => 'Measurement of the impact',
    'translate.activityExcavator64' => 'simulation tools',
    'translate.activity6p1' => 'Study of compliance with standards and norms,Measurement of the impact of frequency changes using simulation tools.',
    'translate.activityExcavator71' => 'Tax cash registers',
    'translate.activityExcavator72' => 'Detailed document',
    'translate.activityExcavator73' => 'Optimization 3G/4G',
    'translate.activityExcavator74' => 'Specifications',
    'translate.activity7p1' => 'Technical and functional specification of the solution to be implemented Establishment of an action plan for implementation,Writing the various documents of -Technical specifications of tax cash registers, Detailed document of the procedures for the approval and accreditation of tax cash registers,Specifications for the acquisition of the central solution (equipment and software).',
    'translate.activity7p2' => 'Establishment, within the tax administration, of a unit for the approval of tax cash registers (training and supervision) Accompaniment in the implementation of the project.',
  ),
));


return $catalogue;
